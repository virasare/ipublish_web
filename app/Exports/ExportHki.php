<?php

namespace App\Exports;

use App\Models\PengajuanHKI;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;


class ExportHki extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return PengajuanHKI::join('mahasiswa', 'pengajuan_hki.nim_mhs', '=', 'mahasiswa.nim_mhs')
        ->select('pengajuan_hki.*', 'mahasiswa.nama_mhs', 'mahasiswa.dosen_pa', 'mahasiswa.dosen_p1', 'mahasiswa.kelompok') // Pastikan kelompok ada di sini
        ->get();
    
    }

    public function map($pengajuan): array
    {
        return [
            $pengajuan->nama_mhs,
            $pengajuan->nim_mhs,
            $pengajuan->kelompok == '1' ? 'Ganjil' : 'Genap',
            $pengajuan->dosen_pa,
            $pengajuan->dosen_p1,
            $this->mapStatus($pengajuan->status), 
            $pengajuan->komentar,
            $this->getFileLink($pengajuan->manual_book, 'Manual Book'),
            $this->getFileLink($pengajuan->fomulir_dokumen, 'Formulir Dokumen'),
            $this->getFileLink($pengajuan->sertifikat_hki, 'Sertifikat HKI'),
        ];
    }
        protected function mapStatus($status): string
    {
        switch ($status) {
            case 'diajukan':
                return 'Menunggu';
            case 'diterima':
                return 'Disetujui';
            case 'ditolak':
                return 'Ditolak';
            default:
                return 'Tidak Dikenal'; // Default value if status is not recognized
        }
    }

    // protected function getFileLink($file, $text)
    // {
    //     if ($file) {
    //         // Cek apakah file ada di Google Drive
    //         if (Storage::disk('google')->exists($file)) {
    //             // Mengambil URL file dari Google Drive
    //             $url = Storage::disk('google')->url($file);

    //             // Mendapatkan ID file dari URL
    //             $fileId = basename($url); // Misalnya: jika URL adalah /file/d/1ABC23D456, kita ambil '1ABC23D456'
                
    //             // Membuat tautan tampilan Google Drive
    //             return "https://drive.google.com/file/d/{$fileId}/view";
    //         } else {
    //             return ''; // Kembalikan string kosong jika file tidak ada
    //         }
    //     } else {
    //         return ''; // Kembalikan string kosong jika file tidak ada
    //     }
    // }



    protected function getFileLink($file, $text)
    {
        if ($file) {
            // Cek apakah file ada di Google Drive
            if (Storage::disk('google')->exists($file)) {
                // Mengambil URL file dari Google Drive
                return Storage::disk('google')->url($file);
            } else {
                return ''; 
            }
        } else {
            return '';
        }
    }

    public function headings(): array
    {
        return [
            'Nama Mahasiswa',
            'NIM',
            'Kelompok',
            'Dosen Pembimbing Akademik',
            'Dosen Penguji 1',
            'Status',
            'Komentar',
            'Manual Book',
            'Formulir Dokumen',
            'Sertifikat HKI',
        ];
    }

    
}
