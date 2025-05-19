@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/fabrics/banner.png')}}')">
    {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Fabrics</p>
          <h1 class=" font-bold mb-6 text-[34px] md:text-[48px] leading-[78px] "  data-aos="fade-right">Crafted from The Finest <br>Threads.</h1>
      </div>
  </div>
</section>


<section class="bg-[#010024] text-white font-sans">

  <div class="flex flex-col md:flex-row min-h-screen">
  <aside class="w-full md:w-3/10 bg-black px-6 py-10 md:px-[100px] md:py-[100px]">
    <h2 class="text-lg font-bold mb-10 md:mb-[50px] text-white">Fabric Categories</h2>
    <ul class="space-y-4 leading-10 " id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="border-b-2 text-white" role="tablist">
      <li class="text-gray-400 hover:text-white cursor-pointer" id="wool-tab" data-tabs-target="#wool" type="button" role="tab" aria-controls="wool" aria-selected="false">Wool & Cashmere</li>
      <li class="text-gray-400 hover:text-white cursor-pointer " id="silk-tab" data-tabs-target="#silk" type="button" role="tab" aria-controls="silk" aria-selected="false">Silk & Satin</li>
      <li class="text-gray-400 hover:text-white cursor-pointer" id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false">Linen & Cotton</li>
      <li class="text-gray-400 hover:text-white cursor-pointer" id="heritage-tab" data-tabs-target="#heritage" type="button" role="tab" aria-controls="heritage" aria-selected="false">Heritage Tweeds & Flannels</li>
      <li class="text-gray-400 hover:text-white cursor-pointer" id="coat-tab" data-tabs-target="#coat" type="button" role="tab" aria-controls="coat" aria-selected="false">OverCoat</li>
    </ul>
  </aside>

  <div class="flex-1 px-6 pt-10 pb-5 md:px-[50px] md:pt-[100px] md:pb-[20px]" id="default-tab-content">
       <div class="hidden" id="wool" role="tabpanel" aria-labelledby="wool-tab">
         <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
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
       <div class="hidden" id="silk" role="tabpanel" aria-labelledby="silk-tab">
         <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
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
          </div>
       </div>
        <div class="hidden" id="linen" role="tabpanel" aria-labelledby="silk-tab">
          <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
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
          </div>
       </div>
        <div class="hidden" id="heritage" role="tabpanel" aria-labelledby="silk-tab">
          <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
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
          </div>
       </div>
        <div class="hidden" id="coat" role="tabpanel" aria-labelledby="silk-tab">
          <div class="grid grid-cols-2 md:grid-cols-6 gap-4">
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
          </div>
       </div>
  </div>
</div>

</section>

@include('partials.appointment')
@endsection

