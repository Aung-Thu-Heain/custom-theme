@extends('layouts.app')
@section('content')
<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat " style="height: 601px;">
      <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Manswear</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">Timeless Elegance, Tailored for <br>You.</h1>
      </div>
  </div>
</section>

<section class="mans-content">
  <div class="grid grid-cols-2">
    <div class="h-[765px]">
      <img src="{{Vite::asset('resources/images/manswear/Rectangle-1.png')}}" alt="">
    </div>
    <div class="h-[765px] flex-col items-center text-start mx-10 justify-center p-20">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Every Man Deserves<br>
        A Suit That Tells His Story</h2>
      <p class="text-[24px]  leading-[39px]">
        Our bespoke menswear is crafted with precision and passion, blending time-honored tailoring techniques with the finest materials to create garments that fit not just your body, but your life.
      </p>
    </div>
    <div class="h-[765px] flex items-center text-center justify-center p-20">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Refined,<br>
        Confident and <br>
        Timeless<br>
    </div>
    <div class="h-[765px]">
      <img src="{{Vite::asset('resources/images/manswear/Rectangle-2.png')}}" alt="">
    </div>
  </div>
</section>

<section class="signature-style bg-primary text-white">
     <div class="max-w-7xl text-center mx-auto">
      <h1 class="py-20 text-[36px]">Signature Styles</h1>
     </div>
</section>
@endsection
