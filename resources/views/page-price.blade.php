@extends('layouts.app')
@section('content')

<section class="hero">
  <div class="relative w-full">
    <img
      src="{{ Vite::asset('resources/images/price/banner.svg') }}"
      alt="Banner"
      class="w-full h-auto"
    />
    <div class="absolute inset-0 flex flex-col items-start text-white text-start p-4 md:p-20">
      <p class="mb-2 font-normal text-[16px] md:text-[24px]" data-aos="fade-left">
        Price List
      </p>
      <h1 class="font-bold mb-4 text-[22px] md:text-[48px] leading-tight md:leading-[78px]" data-aos="fade-right">
        Affordable Tailoring, Transparent<br>Pricing.
      </h1>
    </div>
  </div>
</section>

<section class="bg-[#02021E] text-white py-16 px-4">
  <div class="max-w-7xl mx-auto text-start mb-12">
    <h2 class="text-3xl md:text-4xl font-bold mb-2">Price List 2025</h2>
    <p class="text-sm md:text-base text-gray-300">
      Note: The prices below may be different depending on the fabric (leather, embroidery, beads, sequins, etc) or other original details.
    </p>
  </div>

  {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between" data-aos="zoom-in">

      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">BEST QUALITY</h3>
        <p class="text-gray-300">Package</p>
      </div>


      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-gray-400 py-10 text-lg">
          <sup class="relative -top-5">From</sup> <span class="text-[#C5B359] text-3xl font-bold">35,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-gray-300 mb-8 list-none">
          <li class="flex items-center">
            <span class="flex-shrink-0">• 3 Jackets</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 3 Pants or Skirts</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 6 Shirts or Blouses</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 1 Winter Coat</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
        </ul>
        <div class=" p-4 text-center rounded-b-2xl">
          <a href="/contact-us" class="w-full block py-2 bg-[#171730] text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</a>
        </div>
      </div>
    </div>


    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between" data-aos="zoom-in">

      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">PREMIUM QUALITY</h3>
        <p class="text-gray-300">Package</p>
      </div>


      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-gray-400 py-10 text-lg">
          <sup class="relative -top-5">From</sup> <span class="text-[#C5B359] text-3xl font-bold">45,000</span><span class="text-sm"> / THB</span>
        </p>

        <ul class="text-lg space-y-2 ps-10 text-left text-gray-300 mb-8 list-none">
          <li class="flex items-center">
            <span class="flex-shrink-0">• 3 Jackets</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 3 Pants or Skirts</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 6 Shirts or Blouses</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 1 Winter Coat</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
        </ul>
        <div class=" p-4 text-center rounded-b-2xl">
          <a href="/contact-us" class="w-full block py-2 bg-[#171730] text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</a>
        </div>
      </div>
    </div>


    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between" data-aos="zoom-in">

      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">LUXURY QUALITY</h3>
        <p class="text-gray-300">Package</p>
      </div>


      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-gray-400 py-10 text-lg">
          <sup class="relative -top-5">From</sup> <span class="text-[#C5B359] text-3xl font-bold">100,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-gray-300 mb-8 list-none">
          <li class="flex items-center">
            <span class="flex-shrink-0">• 6 Jackets</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 6 Pants or Skirts</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 3 Vests</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 14 Shirts or Blouses</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 1 Winter Coat</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
          <li class="flex items-center">
            <span class="flex-shrink-0">• 1 Sports Jacket</span>
            <div class="flex-grow border-t border-dotted border-gray-500 ml-2"></div>
          </li>
        </ul>
        <div class=" p-4 text-center rounded-b-2xl">
          <a href="/contact-us" class="block w-full bg-[#171730] py-2 text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</a>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
    <!-- BEST QUALITY -->
    <div class="bg-gradient-to-br from-[#111827] via-[#1f2937] to-[#0f172a] text-white rounded-2xl shadow-lg overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#1e293b] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-yellow-400">BEST QUALITY</h3>
        <p class="text-gray-300">Package</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-gray-200 py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-yellow-400 text-3xl font-bold">35,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-gray-200 mb-8 list-none">
          <li class="flex items-center">• 3 Jackets</li>
          <li class="flex items-center">• 3 Pants or Skirts</li>
          <li class="flex items-center">• 6 Shirts or Blouses</li>
          <li class="flex items-center">• 1 Winter Coat</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-yellow-400 text-black text-lg font-semibold rounded-lg hover:bg-yellow-300 transition">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PREMIUM QUALITY -->
    <div class="bg-gradient-to-br from-[#160ac8] via-[#230394] to-[#10013b] text-white rounded-2xl shadow-xl scale-105 ring-4 ring-purple-400 overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#2a0e6a] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-white">PREMIUM QUALITY</h3>
        <p class="text-purple-100">Most Popular</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-white py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-white text-3xl font-bold">45,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-white mb-8 list-none">
          <li class="flex items-center">• 3 Jackets</li>
          <li class="flex items-center">• 3 Pants or Skirts</li>
          <li class="flex items-center">• 6 Shirts or Blouses</li>
          <li class="flex items-center">• 1 Winter Coat</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-white text-purple-700 text-lg font-semibold rounded-lg hover:bg-purple-100 transition">Book Now</a>
        </div>
      </div>
    </div>

    <!-- LUXURY QUALITY -->
    <div class="bg-gradient-to-br from-[#1e3a8a] via-[#1e40af] to-[#1d4ed8] text-white rounded-2xl shadow-lg overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#1e40af] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-white">LUXURY QUALITY</h3>
        <p class="text-blue-100">Package</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-white py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-white text-3xl font-bold">100,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-white mb-8 list-none">
          <li class="flex items-center">• 6 Jackets</li>
          <li class="flex items-center">• 6 Pants or Skirts</li>
          <li class="flex items-center">• 3 Vests</li>
          <li class="flex items-center">• 14 Shirts or Blouses</li>
          <li class="flex items-center">• 1 Winter Coat</li>
          <li class="flex items-center">• 1 Sports Jacket</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-white text-blue-700 text-lg font-semibold rounded-lg hover:bg-blue-100 transition">Book Now</a>
        </div>
      </div>
    </div>
  </div> --}}

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
    <!-- BEST QUALITY -->
    <div class="bg-gradient-to-br from-[#0f172a] via-[#1e293b] to-[#0f172a] text-white rounded-2xl shadow-lg overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#1e293b] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-yellow-400">BEST QUALITY</h3>
        <p class="text-gray-300">Package</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-gray-200 py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-yellow-400 text-3xl font-bold">35,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-gray-200 mb-8 list-none">
          <li>• 3 Jackets</li>
          <li>• 3 Pants or Skirts</li>
          <li>• 6 Shirts or Blouses</li>
          <li>• 1 Winter Coat</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-yellow-400 text-black text-lg font-semibold rounded-lg hover:bg-yellow-300 transition">Book Now</a>
        </div>
      </div>
    </div>

    <!-- PREMIUM QUALITY -->
    <div class="bg-gradient-to-br from-[#1e3a8a] via-[#1e40af] to-[#1d4ed8] text-white rounded-2xl shadow-xl scale-105 ring-4 ring-blue-300 overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#1e40af] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-yellow-300">PREMIUM QUALITY</h3>
        <p class="text-blue-100">Most Popular</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-white py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-yellow-300 text-3xl font-bold">45,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-white mb-8 list-none">
          <li>• 3 Jackets</li>
          <li>• 3 Pants or Skirts</li>
          <li>• 6 Shirts or Blouses</li>
          <li>• 1 Winter Coat</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-yellow-300 text-blue-900 text-lg font-semibold rounded-lg hover:bg-yellow-200 transition">Book Now</a>
        </div>
      </div>
    </div>

    <!-- LUXURY QUALITY -->
    <div class="bg-gradient-to-br from-[#0ea5e9] via-[#0284c7] to-[#0369a1] text-white rounded-2xl shadow-lg overflow-hidden flex flex-col justify-between" data-aos="zoom-in">
      <div class="bg-[#0284c7] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold text-white">LUXURY QUALITY</h3>
        <p class="text-blue-100">Package</p>
      </div>
      <div class="p-6 flex flex-col justify-between flex-grow">
        <p class="text-center text-white py-10 text-lg">
          <sup class="relative -top-5">From</sup>
          <span class="text-white text-3xl font-bold">100,000</span><span class="text-sm"> / THB</span>
        </p>
        <ul class="text-lg space-y-2 ps-10 text-left text-white mb-8 list-none">
          <li>• 6 Jackets</li>
          <li>• 6 Pants or Skirts</li>
          <li>• 3 Vests</li>
          <li>• 14 Shirts or Blouses</li>
          <li>• 1 Winter Coat</li>
          <li>• 1 Sports Jacket</li>
        </ul>
        <div class="p-4 text-center">
          <a href="/contact-us" class="w-full block py-2 bg-white text-blue-700 text-lg font-semibold rounded-lg hover:bg-blue-100 transition">Book Now</a>
        </div>
      </div>
    </div>
  </div>

</section>

@include('partials.appointment')
@endsection

