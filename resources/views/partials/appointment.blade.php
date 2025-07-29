<section class="hero">
  <div class="relative w-full h-[300px] md:h-[600px]">
    <img
      src="{{ Vite::asset('resources/images/home/appointment.jpg') }}"
      alt="Banner"
      class="w-full h-full object-cover object-top"
    />
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 sm:px-6">
      <p class="text-lg sm:text-2xl md:text-4xl font-bold mb-2" data-aos="zoom-in">
        Your Perfect Suit Starts Here!
      </p>
      <h1 class="font-normal text-sm sm:text-base md:text-lg mb-4" data-aos="zoom-out">
        Let us craft your signature style. Schedule your fitting today.
      </h1>
      <a
        href="/contact-us"
        class="bg-white text-black mt-6 sm:mt-10 px-6 sm:px-8 py-3 sm:py-4 rounded-lg font-medium text-sm sm:text-base hover:bg-gray-200 transition"
        data-aos="flip-left"
      >
        Book An Appointment
      </a>
    </div>
  </div>
</section>
