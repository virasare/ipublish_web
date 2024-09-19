<x-app-layout>
    <x-slot name="header">
        {{ __('Pengajuan') }}
    </x-slot>

    {{--  bayground  --}}
    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

    <div class="p-4 bg-white rounded-lg shadow-md">
        <div class="py-3 flex justify-end">
            <a href="{{ route('export.hki') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
                Pelaporan
            </a>
        </div>
        
        <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
            <!-- Header -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                <div class="sm:col-span-12 flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">
                            HKI
                        </h2>
                        <p class="text-sm text-gray-600">
                            Daftar pengajuan mahasiswa
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- End Header -->

            <div class="py-3 border-t border-gray-200"></div>
                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100 shadow">
                            <tr>
                                </th>
                                <th scope="col" class="ps-6 lg:ps-3 xl:ps-2 pe-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            No
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Nama
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            NIM
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Kelompok
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Pembimbing akademik
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Status
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                                            Detail
                                        </span>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200">
                            @if($mahasiswa->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    <span class="text-sm text-gray-500">Tidak ada data hki yang tersedia.</span>
                                </td>
                            </tr>
                            @else
                            @foreach($mahasiswa as $row)
                            <tr>
                                <td class="size-px whitespace-nowrap">
                                    <div class="ps-6 lg:ps-3 xl:ps-2 pe-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <div class="grow">
                                                <span class="block text-sm text-gray-500">
                                                    {{ ($mahasiswa->currentPage() - 1) * $mahasiswa->perPage() + $loop->iteration }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500">{{ $row->nama_mhs }}</span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <div class="grow">
                                                <span class="block text-sm text-gray-500">{{ $row->nim_mhs }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <div class="grow">
                                                @if($row->kelompok === '1')
                                                <span class="block text-sm text-gray-500">Ganjil</span>
                                                @else
                                                <span class="block text-sm text-gray-500">Genap</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                        <div class="flex items-center gap-x-3">
                                            <div class="grow">
                                                <span class="block text-sm text-gray-500">{{ $row->dosen_pa }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-3">
                                    @if($row->status === 'diajukan')
                                        <span
                                            class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-teal-800 rounded-full">                                                 
                                            Menungu
                                        </span>
                                    @elseif($row->status === 'diterima')
                                        <span
                                            class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-green-100 text-teal-800 rounded-full">                                                 
                                            Disetujui
                                        </span>
                                    @else
                                        <span
                                            class="py-1 px-3 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-teal-800 rounded-full">                                                 
                                            Ditolak
                                        </span>
                                    @endif
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="px-6 py-1.5">
                                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                                            href="{{ route('admin.hki.detail', $row->nim_mhs) }}">
                                            Lihat
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
                <div class="pt-4">
                    {{ $mahasiswa->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>

