@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/manswear/manswear-hero.png')}}')">
      <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Manswear</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">Timeless Elegance, Tailored for <br>You.</h1>
      </div>
  </div>
</section>

<section class="mans-content">
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="md:h-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/manswear/Rectangle-1.png')}}" alt="">
    </div>
    <div class="md:h-[765px] flex-col items-center text-start mx-2 md:mx-10 justify-center p-20">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4" data-aos="fade-right">Every Man Deserves<br>
        A Suit That Tells His Story</h2>
      <p class="text-[24px]  leading-[39px]" data-aos="fade-left">
        Our bespoke menswear is crafted with precision and passion, blending time-honored tailoring techniques with the finest materials to create garments that fit not just your body, but your life.
      </p>
    </div>
    <div class="md:h-[765px] flex items-center text-center justify-center md:p-20" data-aos="fade-right">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Refined,<br>
        Confident and <br>
        Timeless<br>
    </div>
    <div class="md:-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/manswear/Rectangle-2.png')}}" alt="">
    </div>
  </div>
</section>

<section class="signature-style bg-secondary  text-white">
     <div class="max-w-7xl py-30 text-center mx-auto">
        <h1 class="pb-20 text-[36px]" >Signature Styles</h1>

        <div class=" text-center  border-b border-gray-20 text-gray-400 border-gray-700">
          <ul class="flex flex-wrap justify-center -mb-px text-[24px] leading-[39px]" id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-white border-b-2" role="tablist">
              <li class="mx-2 md:mx-12" >
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="suit-tab" data-tabs-target="#suit" type="button" role="tab" aria-controls="suit" aria-selected="false">Suit</a>
              </li>
              <li class="mx-2 md:mx-12" >
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="shirt-tab" data-tabs-target="#shirt" type="button" role="tab" aria-controls="shirt" aria-selected="false">Shirt</a>
              </li>
              <li class="mx-2 md:mx-12" >
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="jacket-tab" data-tabs-target="#jacket" type="button" role="tab" aria-controls="jacket" aria-selected="false">Jacket</a>
              </li>
              <li class="mx-2 md:mx-12" >
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="pant-tab" data-tabs-target="#pant" type="button" role="tab" aria-controls="pant" aria-selected="false">Pant</a>
              </li>
              <li class="mx-2 md:mx-12" >
                <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="vest-tab" data-tabs-target="#vest" type="button" role="tab" aria-controls="vest" aria-selected="false">Vest</a>
             </li>
            <li class="mx-2 md:mx-12" >
              <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="overcoat-tab" data-tabs-target="#overcoat" type="button" role="tab" aria-controls="overcoat" aria-selected="false" >OverCoat</a>
            </li>
          </ul>
        </div>
        <div  id="default-tab-content">
            <div class="hidden" id="suit" role="tabpanel" aria-labelledby="suit-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-111.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-112.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-113.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-114.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-115.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-116.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-117.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-118.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                </div>
            </div>
            <div class="hidden" id="shirt" role="tabpanel" aria-labelledby="shirt-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>

                </div>
            </div>
            <div class="hidden" id="jacket" role="tabpanel" aria-labelledby="jacket-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>

                </div>
            </div>
            <div class="hidden" id="pant" role="tabpanel" aria-labelledby="pant-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>

                </div>
            </div>
            <div class="hidden" id="vest" role="tabpanel" aria-labelledby="vest-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>

                </div>
            </div>
            <div class="hidden" id="overcoat" role="tabpanel" aria-labelledby="overcoat-tab">
                <div class=" max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4" >
                    <div class="" data-aos="zoom-in">
                      <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                          <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>
                    <div class="" data-aos="zoom-in">
                        <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
                    </div>

                </div>
            </div>
        </div>
     </div>
</section>

 @include('partials.fabrics')

  @include('partials.appointment')

@endsection
