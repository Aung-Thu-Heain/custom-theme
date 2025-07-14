@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/lookbook/banner.png')}}')">
    <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[16px] md:text-[24px] " data-aos="fade-left">Lookbook</p>
          <h1 class="font-bold mb-6 text-[16px] md:text-[48px]  md:leading-[78px] "  data-aos="fade-right">Explore our curated collection of <br> bespoke creations, where <br> elegance meets individuality.</h1>
      </div>
  </div>
</section>

<section class="main">
  <div class="bg-black text-white min-h-screen py-12 px-6 lg:px-24">
    <div class="flex items-center">
      <h2 class="text-gray-300 text-2xl font-serif mr-4 whitespace-nowrap">Seasonal Collection</h2>
      <div class="flex-grow border-t  ms-5"></div>
    </div>

    <div class="border-l p-5 md:p-20 mt-10">
          <!-- Summer -->
        <div class="grid lg:grid-cols-2 items-center gap-12 mb-24">
          <img src="{{Vite::asset('resources/images/lookbook/collection-1.png')}}" alt="Summer Collection" class="rounded-md w-full max-w-md mx-auto lg:mx-0">
          <div class="text-center lg:text-center">
            <h3 class="text-[48px] font-bold mb-2">SUMMER</h3>
            <p class="bg-white text-[16px] md:text-[30px] text-black inline-block  px-10 py-2 mb-4">Light fabrics, vibrant tone.</p>
            <div class="flex justify-center lg:justify-center gap-5">
              <span class="w-5 h-5 rounded-full bg-blue-200"></span>
              <span class="w-5 h-5 rounded-full bg-green-200"></span>
              <span class="w-5 h-5 rounded-full bg-yellow-200"></span>
              <span class="w-5 h-5 rounded-full bg-pink-300"></span>
              <span class="w-5 h-5 rounded-full bg-purple-300"></span>
              <span class="w-5 h-5 rounded-full bg-orange-300"></span>
            </div>
          </div>
        </div>
        <!-- Autumn -->
        <div class="grid lg:grid-cols-2 items-center gap-12 mb-24">
          <div class="text-center lg:text-center order-2 lg:order-1">
            <h3 class="text-2xl font-bold mb-2">AUTUMN</h3>
            <p class="bg-white text-black text-[16px] md:text-[30px] inline-block px-4 py-1 mb-4">Rich textures, warm palettes.</p>
            <div class="flex justify-center lg:justify-center gap-5">
              <span class="w-5 h-5 rounded-full bg-red-700"></span>
              <span class="w-5 h-5 rounded-full bg-orange-600"></span>
              <span class="w-5 h-5 rounded-full bg-yellow-600"></span>
              <span class="w-5 h-5 rounded-full bg-gray-600"></span>
              <span class="w-5 h-5 rounded-full bg-green-700"></span>
              <span class="w-5 h-5 rounded-full bg-gray-500"></span>
            </div>
          </div>
          <img src="{{Vite::asset('resources/images/lookbook/collection-2.png')}}" alt="Autumn Collection" class="rounded-md w-full max-w-md mx-auto lg:mx-0 order-1 lg:order-2">
        </div>

        <!-- Formal Wear -->
        <div class="grid lg:grid-cols-2 items-center gap-12">
          <img src="{{Vite::asset('resources/images/lookbook/collection-3.png')}}" alt="Formal Wear Collection" class="rounded-md w-full max-w-md mx-auto lg:mx-0">
          <div class="text-center lg:text-center">
            <h3 class="text-2xl font-bold mb-2">FORMAL WEAR</h3>
            <p class="bg-white text-[16px] md:text-[30px] text-black inline-block px-4 py-1 mb-4">Evening elegance and wedding attire.</p>
            <div class="flex justify-center lg:justify-center gap-5">
              <span class="w-5 h-5 rounded-full bg-gray-600"></span>
              <span class="w-5 h-5 rounded-full bg-white border"></span>
              <span class="w-5 h-5 rounded-full bg-yellow-200"></span>
              <span class="w-5 h-5 rounded-full bg-red-800"></span>
              <span class="w-5 h-5 rounded-full bg-green-700"></span>
            </div>
          </div>
        </div>

            <!-- Autumn -->
        <div class="grid lg:grid-cols-2 items-center gap-12 mb-24">
          <div class="text-center lg:text-center order-2 lg:order-1">
            <h3 class="text-2xl font-bold mb-2">CASUAL CHIC</h3>
            <p class="bg-white text-[16px] md:text-[30px] text-black inline-block px-4 py-1 mb-4">Everyday sophistication.</p>
            <div class="flex justify-center lg:justify-center gap-5">
              <span class="w-5 h-5 rounded-full bg-red-700"></span>
              <span class="w-5 h-5 rounded-full bg-orange-600"></span>
              <span class="w-5 h-5 rounded-full bg-yellow-600"></span>
              <span class="w-5 h-5 rounded-full bg-gray-600"></span>
              <span class="w-5 h-5 rounded-full bg-green-700"></span>
              <span class="w-5 h-5 rounded-full bg-gray-500"></span>
            </div>
          </div>
          <img src="{{Vite::asset('resources/images/lookbook/collection-4.png')}}" alt="Autumn Collection" class="rounded-md w-full max-w-md mx-auto lg:mx-0 order-1 lg:order-2">
        </div>
    </div>
  </div>
</section>

<section class="max-w-7xl mx-auto px-4 py-12">
  <div class="text-center mb-12">
    <h2 class="text-3xl font-bold mb-4">Testimonials from Our Valued Clients</h2>
    <p class="text-gray-600 max-w-2xl mx-auto">
      Discover what our clients say about the craftsmanship, precision, and personalized excellence that define Icon Tailor House.
    </p>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Testimonial Card -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-1.png')}}" alt="Client 1" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">The suit fits perfectly and feels incredibly comfortable. The attention to detail was impressive, and the fabric quality is outstanding. I’ve never felt more confident wearing a suit.</p>
        <p class="font-semibold">— James Carter, New York, USA</p>
      </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-2.png')}}" alt="Client 2" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">The whole experience was enjoyable and stress-free. The final suit looks sharp and feels great to wear. I couldn’t be happier with how it turned out.</p>
        <p class="font-semibold">— David Thompson, London, UK</p>
      </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-3.png')}}" alt="Client 3" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">From the first fitting to the final result, the process was smooth and professional. The craftsmanship is top-notch, and the suit feels like it was made just for me. I’ve received so many compliments.</p>
        <p class="font-semibold">— Liam Jeremiah, Sydney, Australia</p>
      </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-4.png')}}" alt="Client 4" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">" I was amazed by how well the suit turned out. Every detail was carefully considered, and the fit is perfect. It’s easily the best suit I’ve ever owned. "</p>
        <p class="font-semibold">— Arjun Mehta, Mumbai, India</p>
      </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-5.png')}}" alt="Client 5" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">The suit fits perfectly and feels incredibly comfortable. The attention to detail was impressive, and the fabric quality is outstanding. I’ve never felt more confident wearing a suit.</p>
        <p class="font-semibold">— James Carter, New York, USA</p>
      </div>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <img src="{{Vite::asset('resources/images/lookbook/customer-6.png')}}" alt="Client 6" class="w-full h-56 object-cover">
      <div class="p-6">
        <p class="text-sm mb-4">The suit fits perfectly and feels incredibly comfortable. The attention to detail was impressive, and the fabric quality is outstanding. I’ve never felt more confident wearing a suit.</p>
        <p class="font-semibold">— James Carter, New York, USA</p>
      </div>
    </div>
  </div>
</section>


@endsection
