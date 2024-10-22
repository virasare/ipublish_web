<x-app-layout>
    <x-slot name="header">
        {{ __('Pengajuan') }}
    </x-slot>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    @include('components.toast')
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

        <div class="p-2 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">

                <!-- Header -->
                <div
                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Detail Publikasi
                        </h2>
                        <p class="text-sm text-gray-600">
                            Kelola data pengajuan
                        </p>
                    </div>
                </div>
                <!-- End Header -->

                <div class="py-3 border-t border-gray-200"></div>
                <!-- Card Section -->
                <div class="space-y-6">
                    <div class="sm:col-span-12 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-6">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Nama
                                    mahasiswa</label>
                                <div class="relative">
                                    <div
                                        class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium-light text-gray-400 flex items-center">
                                            {{ $mahasiswa->nama_mhs }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">NIM</label>
                                <div class="relative">
                                    <div
                                        class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium-light text-gray-400 flex items-center">
                                            {{ $mahasiswa->nim_mhs }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Dosen pembimbing
                                    akademik</label>
                                <div class="relative">
                                    <div
                                        class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium text-gray-400 flex items-center">
                                            {{ $mahasiswa->dosen_pa }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Dosen penguji
                                    1</label>
                                <div class="relative">
                                    <div
                                        class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium text-gray-400 flex items-center">
                                            {{ $mahasiswa->dosen_p1 }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Dosen penguji
                                    2</label>
                                <div class="relative">
                                    <div
                                        class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                        <div class="my-3 text-sm font-medium text-gray-400 flex items-center">
                                            {{ $mahasiswa->dosen_p2 }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" space-y-3">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Status</label>
                            <select id="status-pub"
                                class="py-3 px-4 block w-full bg-gray-100 border-gray-200  rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                <option value="diajukan" @if ($mahasiswa->status === 'diajukan') selected @endif>Menunggu
                                </option>
                                <option value="diterima" @if ($mahasiswa->status === 'diterima') selected @endif>Disetujui
                                </option>
                                <option value="ditolak" @if ($mahasiswa->status === 'ditolak') selected @endif>Ditolak
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">Komentar</label>
                            <textarea id="komentar-pub"
                                class="py-3 px-4 block w-full bg-gray-100 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                rows="3" placeholder="Masukan komentar...">{{ $mahasiswa->komentar }}</textarea>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File
                                SNATIA </label>
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Tanggal Pengajuan
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $mahasiswa->tanggal_pengajuan }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠Sertifikat Pemakalah SNATIA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->sertifikat_snatia }}
                                        </td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->sertifikat_snatia) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Judul Makalah SNATIA di JNATIA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_makalah_snatia }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠File Hasil Turnitin Publikasi Makalah SNATIA di JNATIA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->turnitin_snatia }}
                                        </td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->turnitin_snatia) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            LOA/Publikasi Makalah SNATIA di JNATIA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->loa_snatia }}
                                        </td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->loa_snatia) }}" target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File
                                PKL</label>
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Judul Makalah PKL di JUPITA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_makalah_pkl }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            File Hasil Turnitin Publikasi Makalah PKL di JUPITA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->turnitin_pkl }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->turnitin_pkl) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            LOA/Publikasi Makalah PKL di JUPITA </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->loa_pkl }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->loa_pkl) }}" target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Judul HKI PKL
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_hki_pkl }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Tanggal Terbit HKI PKL
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->tanggal_terbit_hki_pkl }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Manual Book HKI PKL</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->manual_book_hki_pkl }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->manual_book_hki_pkl) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Form Pendaftaran HKI PKL</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->form_pendaftaran_hki_pkl }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->form_pendaftaran_hki_pkl) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Sertifikat HKI PKL</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->sertifikat_hki_pkl }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->sertifikat_hki_pkl) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File
                                Tugas Akhir</label>
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Judul Tugas Akhir (TA)
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_tugas_akhir }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Laporan Tugas Akhir</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->laporan_tugas_akhir }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->laporan_tugas_akhir) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠Berita Acara Ujian TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->berita_acara_ujian_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->berita_acara_ujian_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Lembar Pengesahan TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->lembar_pengesahan_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->lembar_pengesahan_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠File Program Tugas Akhir</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->file_program_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->file_program_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="space-y-3 pt-6">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File Jurnal TA</label>
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Judul Jurnal TA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_jurnal_ta }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Upload Draft Jurnal TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->upload_draft_jurnal_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->upload_draft_jurnal_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            File Turnitin Draft Jurnal TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->file_turnitin_draft_jurnal_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->file_turnitin_draft_jurnal_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠LOA Publikasi Makalah TA di JELIKU/Surat Penyataan Submit dari Pembimbing
                                            TA </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->loa_publikasi_makalah_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->loa_publikasi_makalah_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="space-y-3 pt-6">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File Manual Book
                                TA</label>
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            ⁠Judul Manual Book TA
                                        </td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->judul_manual_book_ta }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <!-- Kolom kosong untuk menjaga konsistensi kolom -->
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-100">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Manual Book TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $mahasiswa->upload_file_manual_book_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->upload_file_manual_book_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="space-y-3 pt-6">
                        <div>
                            <label for="hs-leading-icon" class="block text-sm font-medium mb-2">File Pendaftaran HKI
                                TA</label>
                            <table class="min-w-full divide-y divide-gray-200 ">
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-100 ">
                                        <td
                                            class="w-2/5 px-6 py-4 whitespace-normal break-words text-sm font-medium text-gray-800">
                                            Form Pendaftaran HKI TA</td>
                                        <td class="w-2/5 px-6 py-4 whitespace-nowrap text-sm text-gray-800 ">
                                            {{ $mahasiswa->upload_file_pendaftaran_hki_ta }}</td>
                                        <td class="px py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <a href="{{ Storage::disk('google')->url($mahasiswa->upload_file_pendaftaran_hki_ta) }}"
                                                target="_blank"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-500 text-white hover:bg-green-600 focus:outline-none focus:bg-green-600 disabled:opacity-50 disabled:pointer-events-none">
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Grid -->
            <div class="flex justify-between items-center py-3 px-4">
                <button type="button" onclick="window.location.href = '/admin/publikasi'"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                    Kembali
                </button>
                <button type="button" id="save-btn"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Simpan
                </button>
            </div>

        </div>

        <!-- End Card -->
        </form>

        <!-- End Card Section -->
    </div>
    <!-- </div> -->
    <div id="confirmation-toast"
        class="fixed inset-0 flex items-center justify-center bg-opacity-50 bg-gray-800 hidden z-50" role="alert"
        tabindex="-1" aria-labelledby="hs-toast-with-icons-label">
        <div class="max-w-md bg-teal-50 border border-teal-200 rounded-xl shadow-lg">
            <div class="flex p-4">
                <div class="shrink-0">
                    <svg class="size-5 text-gray-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                    </svg>
                </div>
                <div class="ms-4">
                    <h3 id="hs-toast-with-icons-label" class="text-gray-800 font-semibold">
                        Konfirmasi perubahan
                    </h3>
                    <div class="mt-1 text-sm text-gray-600">
                        Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <button id="cancel-btn" type="button"
                                class="text-gray-500 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
                                Kembali
                            </button>
                            <button id="confirm-btn" type="button"
                                class="text-blue-600 decoration-2 hover:underline font-medium text-sm focus:outline-none focus:underline">
                                Konfirmasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const saveBtn = document.querySelector('#save-btn');


            saveBtn.addEventListener('click', function() {
                showToastConfirm(
                    'Apakah Anda yakin ingin mengirimkan formulir? Perubahan Anda akan disimpan.',
                    true);
            });

            function showToastConfirm(message, showConfirmation = false) {
                const toast = document.getElementById('confirmation-toast');
                const toastMessage = toast.querySelector('div.text-sm');

                toastMessage.textContent = message;
                toast.classList.remove('hidden');

                if (showConfirmation) {
                    document.getElementById('cancel-btn').addEventListener('click', function() {
                        toast.classList.add('hidden');
                    });

                    document.getElementById('confirm-btn').addEventListener('click', function() {
                        toast.classList.add('hidden');
                        handleFinish();
                    });
                } else {
                    toast.classList.add('hidden');
                }
            }

            function handleFinish() {
                const status = document.getElementById('status-pub').value;
                const komentar = document.getElementById('komentar-pub').value;
                const nim_mhs = '{{ $mahasiswa->nim_mhs }}';

                const formData = new FormData();
                formData.append('nim_mhs', nim_mhs);
                formData.append('status', status);
                formData.append('komentar', komentar);

                fetch('{{ route('edit.form.pub') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast('Data berhasil disimpan!', false);
                        } else {
                            showToast('Terjadi kesalahan saat menyimpan data.', false);
                        }
                    })
                    .catch(error => {
                        showToast('Terjadi kesalahan saat menyimpan data.', false);
                        console.error('Error:', error);
                    });
            }
        })
    </script>
</x-app-layout>
