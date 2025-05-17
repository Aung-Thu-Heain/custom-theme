<section class="navbar">
 <nav class="bg-primary text-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 px-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{Vite::asset('resources/images/header/logo.png')}}" class="h-[73px] p-2" alt="IconTailorHouse" />
      </a>
       <!-- Mobile menu toggle -->
    <button data-collapse-toggle="navbar-dropdown" type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
      aria-controls="navbar-dropdown" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>

    <!-- Navigation menu -->
    <div class="hidden w-full md:h-auto h-screen md:block md:w-auto" id="navbar-dropdown">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container' => false,
          'menu_class' => 'flex flex-col font-medium p-4 md:p-0 mt-4  rounded-lg md:space-x-5 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700',
          'walker' => new \App\NavWalkers\CustomNavwalker(),
          'fallback_cb' => false,
        ]);
      ?>
    </div>
    </div>
  </nav>
</section>



{{-- <nav class="bg-primary text-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{Vite::asset('resources/images/header/logo.png')}}" class="h-[73px] w-auto" alt="IconTailorHouse" />
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0   dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 hover:text-yellow-400 mr-6 text-white  rounded-sm md:bg-transparent  md:p-0  " aria-current="page">Home</a>
          </li>
          <li>
            <a href="/about-us" class="block py-2 hover:text-yellow-400  mr-6 px-3 me-4 text-white  rounded-sm md:bg-transparent  md:p-0  " aria-current="page">About Us</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarone" class="flex items-center justify-between w-full py-2 px-3  rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-yellow-400 dark:focus:text-white dark:border-gray-700 mr-6 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Be Spoke
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
             </button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbarone" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="/fabrics" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Fabrics</a>
                    </li>
                    <li>
                      <a href="/lookbook" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lookbook</a>
                    </li>
              </div>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3  rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 md:w-auto dark:text-white md:dark:hover:text-yellow-400 dark:focus:text-white dark:border-gray-700 mr-6 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Explore
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="/manswear" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Manswear</a>
                    </li>
                    <li>
                      <a href="/womenwear" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Womenwear</a>
                    </li>
                    <li>
                      <a href="/wedding" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Wedding</a>
                    </li>
                    <li>
                      <a href="/lgbt" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">LGBTQ</a>
                    </li>
              </div>
          </li>
          <li>
            <a href="/contact-us" class="block py-2 px-3  rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-yellow-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent mr-6">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
