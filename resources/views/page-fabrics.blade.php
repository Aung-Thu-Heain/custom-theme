@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/fabrics/banner.png')}}')">
    <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Fabrics</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">Crafted from The Finest <br>Threads.</h1>
      </div>
  </div>
</section>

<section class="bg-[#010024] text-white font-sans">
  <div class="flex min-h-screen">
    <aside class="w-1/3 bg-black p-[100px]">
      <h2 class="text-lg font-bold mb-[50px]">Fabric Categories</h2>
      <ul class="space-y-4 leading-10">
        <li class="text-gray-400 hover:text-white cursor-pointer">Wool & Cashmere</li>
        <li class="text-white underline cursor-pointer">Silk & Satin</li>
        <li class="text-gray-400 hover:text-white cursor-pointer">Linen & Cotton</li>
        <li class="text-gray-400 hover:text-white cursor-pointer">Heritage Tweeds & Flannels</li>
        <li class="text-gray-400 hover:text-white cursor-pointer">OverCoat</li>
      </ul>
    </aside>

    <div class="flex-1 pt-[100px] pb-[20px] px-[50px]">
      <div class="grid grid-cols-6 gap-4">
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-1.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-2.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-4.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-5.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-6.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-1.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-2.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-4.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-5.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-6.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-1.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-2.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-4.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-5.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-6.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-1.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-2.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-3.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-4.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-5.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
        <div class="relative">
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/fabrics/fabrics-6.png')}}" alt="">
          <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">#elegante3</div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.appointment')
@endsection
