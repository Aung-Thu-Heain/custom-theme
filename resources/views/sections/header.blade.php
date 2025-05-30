<section class="navbar ">
 <nav class="bg-primary text-white fixed w-full z-20 top-0 start-0">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2 px-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{Vite::asset('resources/images/header/logo.png')}}" class="h-[73px]" alt="IconTailorHouse" />
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

