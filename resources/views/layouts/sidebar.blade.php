
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>
            <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            {{-- <x-application-logo class="ml-2 md:mr-24"/> --}}
            </div>
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    <button type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 theme-toggle me-5" aria-hidden="true">
                        <svg class="hidden w-5 h-5 theme-toggle-dark-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg class="hidden w-5 h-5 theme-toggle-light-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    <div>
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button type="button" class="flex text-sm bg-gray-50 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:bg-gray-800" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <div class="flex items-center pe-4">
                                    <img class="h-8 w-8 p-1 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    <span class="dark:text-white font-bold ms-2">{{ Auth::user()->name }}</span>
                                </div>
                            </button>
                        @else
                            <span class="inline-flex rounded-md">
                                <button type="button" class="flex text-sm bg-gray-200 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:bg-gray-800" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    {{ Auth::user()->name }}
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </span>
                        @endif
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            {{ Auth::user()->email }}
                        </p>
                        </div>
                        <ul class="py-1" role="none">
                        <li>
                            <a href="{{ route("dashboard") }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                        </li>
                        <li>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
    
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @include('layouts.sidebar-content')
        </ul>
        <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
            <div class="flex items-center mb-3">
               <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
               <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-dismiss-target="#dropdown-cta" aria-label="Close">
                     <span class="sr-only">Close</span>
                     <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
            </div>
            <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">
               Preview the new {{ env("APP_NAME") }} dashboard navigation! You can turn the new navigation off for a limited time in your profile.
            </p>
            <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a>
         </div>
    </div>
</aside>
  
  {{-- <div class="p-4 sm:ml-64">
     <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="grid grid-cols-3 gap-4 mb-4">
           <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center h-24 rounded bg-gray-50 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
           <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
           <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
              <p class="text-2xl text-gray-400 dark:text-gray-500">+</p>
           </div>
        </div>
     </div>
  </div> --}}
  