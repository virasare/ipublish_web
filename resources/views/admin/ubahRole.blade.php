<x-app-layout>
    <x-slot name="header">
        {{ __('Role') }}
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
        <div class="p-4 bg-white rounded-lg shadow-md">
            <div class="p-4 bg-gray-50 flex flex-col border border-dashed border-gray-200 rounded-xl overflow-auto">
                <!-- Header -->
            <div class="flex justify-between items-center w-full mb-4">
                <form class="flex-grow mr-2">
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search" name="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari user..." required autocomple="off"/>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </div>
                </form>
            </div>

                <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-4 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200">
                    <div class="sm:col-span-12 flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-800">Role User</h2>
                            <p class="text-sm text-gray-600">Edit Role User</p>
                        </div>
                    </div>
                </div>
                <!-- End Header -->
                <div class="py-3 border-t border-gray-200"></div>

                <!-- Formulir untuk mengupdate role -->
                <form action="{{ route('admin.role') }}" method="POST">
                    @csrf
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-100 shadow">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Email</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Nama</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Role</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="flex items-center gap-x-2">
                                        <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">Edit role</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($user as $row)
                            <tr>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500">{{ $row->email }}</span>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500">{{ $row->name }}</span>
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <span class="block text-sm text-gray-500">
                                            {{ $row->roles == 1 ? 'Admin' : 'User'}}
                                        </span>
                                        
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <select name="roles[{{ $row->id }}]"
                                                class="sm:col-span-9 block w-full py-3 px-4 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                                            <option value="1" {{ $row->roles == 1 ? 'selected' : '' }}>Admin</option>
                                            <option value="2" {{ $row->roles == 2 ? 'selected' : '' }}>User</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                    <div class="space-y-6 border-t">
                        <div class="mt-5 flex justify-end">
                            <button type="submit"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
                
            <div class="pt-4">
                {{ $user->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-app-layout>
