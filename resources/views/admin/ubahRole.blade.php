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
                                            {{ $row->roles == 1 ? 'Admin' : 'Non Admin'}}
                                        </span>
                                        
                                    </div>
                                </td>
                                <td class="h-px w-72 whitespace-nowrap py-3">
                                    <div class="px-6 py-3">
                                        <select name="roles[{{ $row->id }}]"
                                                class="sm:col-span-9 block w-full py-3 px-4 border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" required>
                                            <option value="1" {{ $row->roles == 1 ? 'selected' : '' }}>Admin</option>
                                            <option value="2" {{ $row->roles == 2 ? 'selected' : '' }}>Non Admin</option>
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
