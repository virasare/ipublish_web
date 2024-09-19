<x-user-layout>
    <x-slot name="header">
        {{ __('Pengajuan') }}
    </x-slot>

    <!-- Background -->
    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    <!-- Content Size -->
    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">
        <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <!-- Section -->
                <article class="grid sm:grid-cols-12 gap-2 sm:gap-2 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <div class="flex items-center justify-start pt-2 pb-2 px-4 text-xs font-medium bg-gray-100 text-gray-800 -mt-px rounded-none text-left w-full">
                            <h2 class="text-lg font-bold text-gray-800">{{ $post->title }}</h2>
                        </div>
                        <a href="#" class="text-xs text-gray-400">Diunggah pada {{ $post->created_at->locale('id')->diffForHumans() }}</a>
                    </div>

                    <div class="sm:col-span-12">
                        <p class="my-4 text-sm font-medium-light text-gray-500">
                            {{ $post->body }}
                        </p>
                        <a href="/users/beranda" class="text-sm font-medium text-blue-500 hover:underline">&laquo; Kembali ke beranda</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- End Stepper -->
</x-user-layout>
