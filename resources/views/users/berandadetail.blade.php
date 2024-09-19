<x-user-layout>
    <x-slot name="header">
        {{ __('Detail Pengumuman') }}
    </x-slot>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">
        <div class="p-4 bg-white rounded-lg shadow-md">

            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <!-- Judul Post -->
                <div class="flex items-center justify-start pt-2 pb-2 px-4 text-xs font-medium bg-gray-100 text-gray-800 -mt-px rounded-none text-left w-full">
                    <h2 class="text-lg font-bold text-gray-800">{{ $post->title }}</h2>
                </div>

                <!-- Deskripsi Post -->
                <div class="sm:col-span-12">
                    <p class="my-4 text-sm font-medium-light text-gray-500">
                        {{ $post->body }}
                    </p>
                </div>

                <!-- Preview dan Download File -->
                <!-- Preview dan Download File -->
                @if ($post->file)
                    <div class="mb-4">
                        @php
                            $fileExtension = pathinfo($post->file, PATHINFO_EXTENSION);
                        @endphp
                
                        @if (Str::endsWith($post->file, ['.jpg', '.jpeg', '.png', '.gif']))
                            <!-- Preview Image -->
                            <img src="{{ asset('storage/documents/' . $post->file) }}" alt="Preview Image"
                                class="w-full h-64 object-cover rounded-lg">
                        @elseif (Str::endsWith($post->file, ['.pdf']))
                            <!-- Preview PDF -->
                            <iframe src="{{ asset('storage/documents/' . $post->file) }}" width="100%" height="600px"></iframe>
                        @else
                            <!-- Fallback for other file types -->
                            <div class="mt-4 flex items-center justify-start px-4 text-xs font-medium bg-gray-100 text-gray-800 rounded-none text-left w-full">
                                <div class="my-3 text-sm font-medium-light text-gray-400 flex items-center">
                                    @php
                                        $fileExtension = pathinfo($post->file, PATHINFO_EXTENSION);
                                    @endphp
                                    @if ($fileExtension == 'pdf')
                                        <i class="fas fa-file-pdf text-red-600 mr-2"></i>
                                    @elseif ($fileExtension == 'docx')
                                        <i class="fas fa-file-word text-blue-600 mr-2"></i>
                                    @elseif ($fileExtension == 'ppt' || $fileExtension == 'pptx')
                                        <i class="fas fa-file-powerpoint text-orange-600 mr-2"></i>
                                    @elseif ($fileExtension == 'xlsx' || $fileExtension == 'xls')
                                        <i class="fas fa-file-excel text-green-600 mr-2"></i>
                                    @elseif ($fileExtension == 'txt')
                                        <i class="fas fa-file-alt text-gray-600 mr-2"></i>
                                    @elseif ($fileExtension == 'csv')
                                        <i class="fas fa-file-csv text-purple-600 mr-2"></i>
                                    @else
                                        <i class="fas fa-file text-gray-600 mr-2"></i>
                                    @endif
                                    <a href="{{ asset('storage/documents/' . $post->file) }}" class="text-blue-500 hover:underline">
                                        {{ $post->file }}
                                    </a>                                
                                </div>                                
                            </div>
                        @endif
                    </div>
                @endif
                

                <div class="mb-4">
                    <a href="{{ route('users.beranda') }}"
                        class="text-sm font-medium text-blue-500 hover:underline">&laquo; Kembali ke beranda</a>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
