<header class="fixed top-0 left-0 w-full bg-[#DDEBFE] shadow-md z-50">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global" x-data="{ isOpen: false }">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">iPublish</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      {{-- Mobile Menu button --}}
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900">Registrasi</a>
      </div>
    
    </nav>
    
  </header>