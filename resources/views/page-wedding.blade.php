@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/wedding/banner.png')}}')">
      {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Wedding</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">A Love Tailored to Perfection.</h1>
      </div>
  </div>
</section>

<section class="mans-content">
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="md:h-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/wedding/wedding-1.png')}}" alt="">
    </div>
    <div class="md:h-[765px] flex-col items-center text-start mx-2 md:mx-10 justify-center p-20">
      <h2 class="md:text-[33px]  leading-[58px] font-bold mb-4" data-aos="fade-right">Every Detail Should Reflect Your <br>Unique Love Story</h2>
      <p class="text-[24px]  leading-[39px]" data-aos="fade-left">
        On your most memorable day, our bespoke wedding attire is crafted with precision and care, ensuring you walk down the aisle with confidence, elegance, and timeless style. From classic sophistication to modern romance, let us create a look as unforgettable as your journey together.
      </p>
    </div>
    <div class="md:h-[765px] flex items-center text-center justify-center md:p-20" data-aos="fade-right">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Love,<br>
       Grace and<br>
       Forever<br>
    </div>
    <div class="md:-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/wedding/wedding-2.png')}}" alt="">
    </div>
  </div>
</section>

<section class="createion">
  <div class="bg-wedding py-12 text-center">
    <h1 class="text-[30px] font-bold py-5 text-white" data-aos="fade-zoom-im">Moments Woven in Time</h1>
    <h1 class="text-[20px] text-white pb-12">Explore our gallery and see how timeless style meets heartfelt memories.</h1>

  <div class="max-w-6xl grid md:grid-cols-3 grid-cols-1  mx-auto px-4 gap-1">
    <div class=" min-h-[481px] row-span-2">
      <img src="{{Vite::asset('resources/images/wedding/grid-1.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h[249px] col-span-2">
      <img src="{{Vite::asset('resources/images/wedding/grid-2.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h[481px] row-span-2 col-span-2">
      <img src="{{Vite::asset('resources/images/wedding/grid-4.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class="col-span-1 row-span-1">
     <div class="grid grid-cols-2 gap-1">
      <img src="{{Vite::asset('resources/images/wedding/grid-3.png')}}" class="object-cover h-full w-full" alt="">
      <img src="{{Vite::asset('resources/images/wedding/grid-3-1.png')}}" class="object-cover h-full w-full" alt="">
     </div>
    </div>
    <div class=" min-h-[249px]  col-span-2 ">
      <img src="{{Vite::asset('resources/images/wedding/grid-5.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h-[481px]  row-span-2">
      <img src="{{Vite::asset('resources/images/wedding/grid-6.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h-[545px]  col-span-2 row-span-2">
      <img src="{{Vite::asset('resources/images/wedding/grid-7.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" col-span-1 row-span-1">
      <div class="grid grid-cols-2 gap-1">
        <img src="{{Vite::asset('resources/images/wedding/grid-8.png')}}" class="object-cover h-full w-full" alt="">
        <img src="{{Vite::asset('resources/images/wedding/grid-8-1.png')}}" class="object-cover h-full w-full" alt="">
       </div>
    </div>

  </div>
  </div>
</section>

<section class="bg-primary fabric-selection">
    <div class="max-w-7xl text-white mx-auto px-10 py-20">
      <h1 class="text-[35px]" data-aos="fade-down">Fabric Selection</h1>
      <span class="text-[24px]" data-aos="fade-down">Handpicked Luxury, Woven to Perfection.</span>
      <div class="grid grid-cols-2 md:grid-cols-7 gap-1 mt-20">
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-1.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#aqua5</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-2.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#Elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#Elegante41</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-4.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#Lining2</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-5.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#Lumino2</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-6.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#Lining34</div>
        </div>
        <div class="relative">
          <div class="absolute inset-0 bg-black/90"></div>
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-7.png')}}" alt="">
          <div class="absolute inset-0 flex  items-center justify-between text-white text-center px-6" data-aos="zoom-out">
            <p class=" mb-2 font-normal  ">50+<br>Handpicked<br>Fabrics</p>
            <img src="{{Vite::asset('resources/images/icons/ri-arrow-right-line.png')}}" alt="">
        </div>
        </div>
      </div>

    </div>
<section>

  @include('partials.appointment')

@endsection
