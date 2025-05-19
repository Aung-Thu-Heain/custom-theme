@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/lgbt/banner.png')}}')">
      {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">LGBT</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">Pride in Every Stitch.</h1>
      </div>
  </div>
</section>

<section class="mans-content">
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="md:h-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/lgbt/lgbt-1.png')}}" alt="">
    </div>
    <div class="md:h-[765px] flex-col items-center text-start mx-2 md:mx-10 justify-center p-5 md:p-20">
      <h2 class="text-[33px] leading-[58px] font-bold mb-4" data-aos="fade-right">Your style is as unique as your <br>journey</h2>
      <p class="text-[24px]  leading-[39px]" data-aos="fade-left">
        Our bespoke tailoring celebrates individuality, diversity, and self-expression — crafting garments that reflect who you are, with confidence and pride. From bold statements to timeless classics, we create looks tailored to fit you, not the other way around.
      </p>
    </div>
    <div class="md:h-[765px] flex items-center text-center justify-center md:p-20" data-aos="fade-right">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Authentic,<br>
        Bold and<br>
        Proud<br>
    </div>
    <div class="md:-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/lgbt/lgbt-2.png')}}" alt="">
    </div>
  </div>
</section>

<section class="createion">
  <div class="bg-wedding py-12 text-center">
    <h1 class="text-[30px] font-bold py-5 text-white" data-aos="fade-zoom-im">Authenticity in Every Thread</h1>
    <h1 class="text-[20px] text-white pb-12">Explore our gallery to see how style becomes a statement of pride.</h1>

  <div class="max-w-6xl grid md:grid-cols-3 grid-cols-1  mx-auto px-4 gap-1">
    <div class=" min-h-[481px] row-span-2"  data-aos="fade-right">
      <img src="{{Vite::asset('resources/images/lgbt/grid-1.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h[249px] col-span-2" data-aos="fade-down">
      <img src="{{Vite::asset('resources/images/lgbt/grid-2.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h[481px] row-span-2 col-span-2" data-aos="fade-right">
      <img src="{{Vite::asset('resources/images/lgbt/grid-4.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class="col-span-1 row-span-1">
     <div class="grid grid-cols-2 gap-1">
      <img src="{{Vite::asset('resources/images/lgbt/grid-3.png')}}" data-aos="fade-left" class="object-cover h-full w-full" alt="">
      <img src="{{Vite::asset('resources/images/lgbt/grid-3-1.png')}}" data-aos="fade-right" class="object-cover h-full w-full" alt="">
     </div>
    </div>
    <div class=" min-h-[249px]  col-span-2 " data-aos="fade-left">
      <img src="{{Vite::asset('resources/images/lgbt/grid-5.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h-[481px]  row-span-2" data-aos="fade-right">
      <img src="{{Vite::asset('resources/images/lgbt/grid-6.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" min-h-[545px]  col-span-2 row-span-2" data-aos="fade-left">
      <img src="{{Vite::asset('resources/images/lgbt/grid-7.png')}}" class="object-cover h-full w-full" alt="">
    </div>
    <div class=" col-span-1 row-span-1">
      <div class="grid grid-cols-2 gap-1">
        <img src="{{Vite::asset('resources/images/lgbt/grid-8.png')}}" data-aos="fade-right" class="object-cover h-full w-full" alt="">
        <img src="{{Vite::asset('resources/images/lgbt/grid-8-1.png')}}" data-aos="fade-left" class="object-cover h-full w-full" alt="">
       </div>
    </div>

  </div>
  </div>
</section>

 @include('partials.fabrics')

  @include('partials.appointment')

@endsection
