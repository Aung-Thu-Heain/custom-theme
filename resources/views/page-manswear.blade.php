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

<section class="signature-style bg-secondary  text-white">
     <div class="max-w-7xl py-30 text-center mx-auto">
        <h1 class="pb-20 text-[36px]">Signature Styles</h1>

        <div class=" text-center  border-b border-gray-20 text-gray-400 border-gray-700">
          <ul class="flex flex-wrap justify-center -mb-px text-[24px] leading-[39px]">
              <li class="mx-12">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Suit</a>
              </li>
              <li class="mx-12">
                  <a href="#" class="inline-block p-4 text-white border-b-2 border-white rounded-t-lg active " aria-current="page">Shirt</a>
              </li>
              <li class="mx-12">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Jacket</a>
              </li>
              <li class="mx-12">
                  <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Pant</a>
              </li>
              <li class="mx-12">
                <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">Vest</a>
            </li>
            <li class="mx-12">
              <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 ">OverCoat</a>
          </li>
          </ul>
        </div>
        <div class="max-w-6xl grid  mt-5  md:grid-cols-4 mx-auto gap-4">
            <div class="">
              <img src="{{Vite::asset('resources/images/manswear/Rectangle-107.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-108.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                  <img src="{{Vite::asset('resources/images/manswear/Rectangle-109.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-110.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-111.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-112.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-113.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-114.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-115.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-116.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
                <img src="{{Vite::asset('resources/images/manswear/Rectangle-117.png')}}" class="object-cover w-auto h-auto" alt="">
            </div>
            <div class="">
              <img src="{{Vite::asset('resources/images/manswear/Rectangle-118.png')}}" class="object-cover w-auto h-auto" alt="">
          </div>
        </div>
     </div>
</section>

<section class="bg-primary fabric-selection">
    <div class="max-w-7xl text-white mx-auto px-10 py-20">
      <h1 class="text-[35px]">Fabric Selection</h1>
      <span class="text-[24px]">Handpicked Luxury, Woven to Perfection.</span>
      <div class="grid grid-cols-2 md:grid-cols-7 gap-1 mt-20">
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-1.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#aqua5</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-2.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#Elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#Elegante41</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-4.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#Lining2</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-5.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#Lumino2</div>
        </div>
        <div class="relative">
            <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-6.png')}}" alt="">
            <div class="absolute bottom-0 left-0 right-0 text-white p-2 ">#Lining34</div>
        </div>
        <div class="relative">
          <div class="absolute inset-0 bg-black/90"></div>
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-7.png')}}" alt="">
          <div class="absolute inset-0 flex  items-center justify-between text-white text-center px-6">
            <p class=" mb-2 font-normal  " data-aos="fade-left">50+<br>Handpicked<br>Fabrics</p>
            <img src="{{Vite::asset('resources/images/icons/ri-arrow-right-line.png')}}" alt="">
        </div>
        </div>
      </div>

    </div>
<section>

  @include('partials.appointment')

@endsection
