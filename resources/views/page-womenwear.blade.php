@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/womenwear/banner.png')}}')">
      <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Womenwear</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">Empowering Elegance, Tailored  <br>for Her.</h1>
      </div>
  </div>
</section>

<section class="mans-content">
  <div class="grid grid-cols-1 md:grid-cols-2">
    <div class="md:h-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/womenwear/one.png')}}" alt="">
    </div>
    <div class="md:h-[765px] flex-col items-center text-start mx-2 md:mx-10 justify-center p-20">
      <h2 class="text-[36px] leading-[56px] font-bold mb-4" data-aos="fade-right">A Garment as Strong, Graceful, and Unique as She Is</h2>
      <p class="text-[24px]  leading-[39px]" data-aos="fade-left">
        Our bespoke womenswear is crafted with meticulous attention to detail, blending luxurious fabrics with flawless tailoring to create pieces that move effortlessly with you. From power suits to evening wear, discover elegance designed exclusively for you.
      </p>
    </div>
    <div class="md:h-[765px] flex items-center text-center justify-center md:p-20" data-aos="fade-right">
      <h2 class="text-[36px] leading-[58px] font-bold mb-4">Elegant,<br>
        Confident and <br>
        Unstoppable<br>
    </div>
    <div class="md:-[765px]" data-aos="zoom-in">
      <img src="{{Vite::asset('resources/images/womenwear/second.png')}}" alt="">
    </div>
  </div>
</section>

<section class="signature-style bg-secondary  text-white">
     <div class="max-w-7xl py-30 text-center mx-auto">
        <h1 class="pb-20 text-[36px]" data-aos="zoom-in">Signature Styles</h1>

        <div class=" text-center  border-b border-gray-20 text-gray-400 border-gray-700">
          <ul class="flex flex-wrap justify-center -mb-px text-[24px] leading-[39px]">
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Suit</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4 text-white border-b-2 border-white rounded-t-lg active " aria-current="page">Blouse</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Jacket</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Pant & Skirt</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Dress</a>
            </li>
            <li class="mx-2 md:mx-12" data-aos="zoom-in">
              <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">OverCoat</a>
          </li>
          </ul>
        </div>
        <div class="max-w-6xl grid  mt-5 grid-cols-2  md:grid-cols-4 mx-auto gap-4">
            <div class="" data-aos="zoom-in">
              <img src="{{Vite::asset('resources/images/womenwear/signature-1.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-2.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                  <img src="{{Vite::asset('resources/images/womenwear/signature-3.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-4.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-5.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-6.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-7.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-8.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-9.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-10.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
                <img src="{{Vite::asset('resources/images/womenwear/signature-11.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="" data-aos="zoom-in">
              <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
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
