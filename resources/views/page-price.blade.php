@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/fabrics/banner.png')}}')">
    {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Price List</p>
          <h1 class=" font-bold mb-6 text-[34px] md:text-[48px] leading-[78px] "  data-aos="fade-right">Affordable Tailoring, Transparent<br>Pricing.</h1>
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

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
    <!-- Card -->
    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between">
      <!-- Header -->
      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">Best</h3>
        <p class="text-gray-300">Package</p>
      </div>

      <!-- Body -->
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
          <button class="w-full py-2 bg-[#171730] text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</button>
        </div>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between">
      <!-- Header -->
      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">PREMIUM</h3>
        <p class="text-gray-300">Package</p>
      </div>

      <!-- Body -->
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
          <button class="w-full py-2 bg-[#171730] text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</button>
        </div>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-[#0D0D27] rounded-2xl overflow-hidden shadow-md flex flex-col justify-between">
      <!-- Header -->
      <div class="bg-[#171730] p-6 text-center">
        <h3 class="text-4xl mb-2 font-bold">LUXURY COMBO</h3>
        <p class="text-gray-300">Package</p>
      </div>

      <!-- Body -->
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
          <button class="w-full bg-[#171730] py-2 text-lg text-white rounded-lg hover:bg-gray-700 transition">Book Now</button>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.appointment')
@endsection

