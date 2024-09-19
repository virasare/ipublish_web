<x-app-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <style>
        body {
            background-color: #F9FAFB;
        }
    </style>

    @include('components.toast')

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showToast("{{ session('success') }}", 'success');
        });
    </script>
@elseif(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showToast("{{ session('error') }}", 'error');
        });
    </script>
@endif


    <div class="w-full pt-4 px-2 sm:px-4 md:px-10 lg:ps-80 mx-auto">

        <div class="p-2 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">

                <!-- Header -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800">
                            Kelola Profile
                        </h2>
                        <p class="text-sm text-gray-600">
                            Edit dan simpan profile
                        </p>
                    </div>
                </div>
                <!-- End Header -->

                <div class="py-3 border-t border-gray-200"></div>
                
                <!-- Form Section -->
                <form method="POST" action="{{ route("profile.update") }}">
                    @csrf
                    @method('PUT')
                    
                    <div class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="nip" class="block text-sm font-medium mb-2">NIP</label>
                                <input type="text" id="nip" name="nip" value="{{ $dosen->NIP ?? '' }}" class="py-3 mt-4 block w-full bg-gray-100 text-gray-400 border-gray-100 shadow-sm rounded-lg text-sm" disabled>
                            </div>
                            
                            <div>
                                <label for="nidn" class="block text-sm font-medium mb-2">NIDN</label>
                                <input type="text" id="nidn" name="nidn" value="{{ $dosen->NIDN ?? '' }}" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan NIDN..." disabled>
                            </div>
                            
                            <div>
                                <label for="nama" class="block text-sm font-medium mb-2">Nama Dosen</label>
                                <input type="text" id="nama" name="nama" value="{{ $dosen->nama_dosen ?? '' }}" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan nama dosen..." disabled>
                            </div>
                            
                            <div>
                                <label for="telp" class="block text-sm font-medium mb-2">No. Telp</label>
                                <input type="text" id="telp" name="telp" value="{{ $dosen->no_telp ?? '' }}" class="py-3 mt-4 block w-full text-gray-400 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan no.telp..." disabled>
                            </div>
                            
                        </div>
                        <div class="py-3 mt-10 border-t border-gray-200"></div>
                
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="password" class="block text-sm font-medium mb-2">Ubah kata sandi</label>
                                <input type="password" id="password" name="password" class="py-3 mt-4 block w-full text-gray-700 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Masukkan kata sandi baru...">
                                @error('password')
                                    <!-- Pesan error akan ditangani oleh toast -->
                                @enderror
                            </div>
                        
                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium mb-2">Konfirmasi kata sandi</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="py-3 mt-4 block w-full text-gray-700 bg-gray-100 border-gray-100 shadow-sm rounded-lg text-sm" placeholder="Konfirmasi kata sandi baru...">
                                @error('password_confirmation')
                                    <!-- Pesan error akan ditangani oleh toast -->
                                @enderror
                            </div>
                            <input type="hidden" name="email" value="{{$dosen->email}}">
                        </div>
                    </div>
            </div>
            <div class="flex justify-between items-center py-3 px-4">
                <button type="button" onclick="window.location.href = '/admin/dosen'"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50">
                    Kembali
                </button>
                <button type="submit"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan toast notification jika ada pesan kesalahan
            @if ($errors->any())
                showToast("Terjadi kesalahan saat menyimpan data.", 'error');
            @endif
    
            // Menampilkan toast notification jika ada pesan sukses
            @if (session('success'))
                showToast("{{ session('success') }}", 'success');
            @endif
        });
    </script>
</x-app-layout>
