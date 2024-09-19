<?php
namespace App\Exports;

use App\Models\PengajuanPublikasi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;

class ExportPublikasi extends \PhpOffice\PhpSpreadsheet\Cell\StringValueBinder implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return PengajuanPublikasi::join('mahasiswa', 'pengajuan_publikasi.nim_mhs', '=', 'mahasiswa.nim_mhs')
            ->select('pengajuan_publikasi.*', 'mahasiswa.nama_mhs', 'mahasiswa.dosen_pa', 'mahasiswa.dosen_p1', 'mahasiswa.dosen_p2') // Pastikan kelompok ada di sini
            ->get();
    }
    

    public function map($pengajuan): array
    {
        return [
            $pengajuan->nama_mhs,
            $pengajuan->nim_mhs,
            $pengajuan->dosen_pa,
            $pengajuan->dosen_p1,
            $pengajuan->dosen_p2,
            $this->mapStatus($pengajuan->status), 
            $pengajuan->komentar,
            $pengajuan->tanggal_pengajuan,
            $this->getFileLink($pengajuan->sertifikat_snatia,'Sertifikat SNATIA'),
            $pengajuan->judul_makalah_snatia,
            $this->getFileLink($pengajuan->turnitin_snatia,'Turnitin SNATIA'),
            $this->getFileLink($pengajuan->loa_snatia,'LOA SNATIA'),
            $pengajuan->judul_makalah_pkl,
            $this->getFileLink($pengajuan->turnitin_pkl,'Turnitin PKL'),
            $this->getFileLink($pengajuan->loa_pkl, 'LOA PKL'),
            $pengajuan->judul_hki_pkl,
            $pengajuan->tanggal_terbit_hki_pkl,
            $this->getFileLink($pengajuan->manual_book_hki_pkl, 'Manual Book HKI PKL'),
            $this->getFileLink($pengajuan->form_pendaftaran_hki_pkl, 'Form Pendaftaran HKI PKL'),
            $this->getFileLink($pengajuan->sertifikat_hki_pkl,'Sertifikat HKI PKL'),
            $pengajuan->judul_tugas_akhir,
            $this->getFileLink($pengajuan->laporan_tugas_akhir,'Laporan TA'),
            $this->getFileLink($pengajuan->berita_acara_ujian_ta,'Berita Acara Ujian TA'),
            $this->getFileLink($pengajuan->lembar_pengesahan_ta,'Lembar Pengesahan TA'),
            $this->getFileLink($pengajuan->file_program_ta,'File Program TA'),
            $pengajuan->judul_jurnal_ta,
            $this->getFileLink($pengajuan->upload_draft_jurnal_ta,'Upload Draft Jurnal TA'),
            $this->getFileLink($pengajuan->file_turnitin_draft_jurnal_ta,'File Turnitin Draft Jurnal TA'),
            $this->getFileLink($pengajuan->loa_publikasi_makalah_ta,'LOA Publikasi Makalah TA'),
            $pengajuan->judul_manual_book_ta,
            $this->getFileLink($pengajuan->upload_file_manual_book_ta,'Upload File Manual Book TA'),
            $this->getFileLink($pengajuan->upload_file_pendaftaran_hki_ta,'Upload File Pendaftaran HKI TA'),
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

    protected function getFileLink($file, $text)
    {
        if ($file) {
            // Jika file ada di storage, gunakan storage path, misalnya:
            // return '=HYPERLINK("' . url("storage/".$file) . '", "' . $text . '")';
            return url("storage/" . $file);
        } else {
            return '';
        }
    }

    public function headings(): array
    {
        return [
            'Nama Mahasiswa',
            'NIM',
            'Dosen Pembimbing Akademik',
            'Dosen Penguji 1',
            'Dosen Penguji 2',
            'Status',
            'Komentar',
            'Tgl Pengajuan',
            'Sertifikat SNATIA',
            'Judul Makalah SNATIA',
            'Turnitin SNATIA',
            'LOA SNATIA',
            'Judul Makalah PKL',
            'Turnitin PKL',
            'LOA PKL',
            'Judul HKI PKL',
            'Tgl Terbit HKI PKL',
            'Manual Book HKI PKL',
            'Form Pendaftaran HKI PKL',
            'Sertifikat HKI PKL',
            'Judul TA',
            'Laporan TA',
            'BA Ujian TA',
            'Lembar Pengesahan TA',
            'File Program TA',
            'Judul Jurnal TA',
            'Upload Draft Jurnal TA',
            'File Turnitin Draft Jurnal TA',
            'LOA Publikasi Makalah TA',
            'Judul Manual Book TA',
            'Upload File Manual Book TA',
            'Upload File Pendaftaran HKI TA',
        ];
    }
    
}
