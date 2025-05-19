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
    <div class="md:h-[765px] flex-col items-center text-start mx-2 md:mx-10 justify-center p-5 md:p-20">
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
          <ul class="flex flex-wrap justify-center -mb-px text-[24px] leading-[39px]" id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-white border-b-2" role="tablist">
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="suit-tab" data-tabs-target="#suit" type="button" role="tab" aria-controls="suit" aria-selected="false">Suit</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="blouse-tab" data-tabs-target="#blouse" type="button" role="tab" aria-controls="blouse" aria-selected="false">Blouse</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="jacket-tab" data-tabs-target="#jacket" type="button" role="tab" aria-controls="jacket" aria-selected="false">Jacket</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="pant-tab" data-tabs-target="#pant" type="button" role="tab" aria-controls="pant" aria-selected="false">Pant & Skirt</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                  <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dress-tab" data-tabs-target="#dress" type="button" role="tab" aria-controls="dress" aria-selected="false">Dress</a>
              </li>
              <li class="mx-2 md:mx-12" data-aos="zoom-in">
                <a href="#" class="inline-block p-4  rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="coat-tab" data-tabs-target="#coat" type="button" role="tab" aria-controls="coat" aria-selected="false">OverCoat</a>
              </li>
          </ul>
        </div>
        <div id="default-tab-content">
          <div class="hidden" id="suit" role="tabpanel" aria-labelledby="suit-tab">
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
          <div class="hidden" id="blouse" role="tabpanel" aria-labelledby="blouse-tab">
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
                    <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
                </div>
              </div>
          </div>
          <div class="hidden" id="jacket" role="tabpanel" aria-labelledby="jacket-tab">
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
                    <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
                </div>
              </div>
          </div>
          <div class="hidden" id="pant" role="tabpanel" aria-labelledby="pant-tab">
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
                    <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
                </div>
              </div>
          </div>
          <div class="hidden" id="dress" role="tabpanel" aria-labelledby="dress-tab">
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
                    <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
                </div>
              </div>
          </div>
          <div class="hidden" id="coat" role="tabpanel" aria-labelledby="coat-tab">
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
                    <img src="{{Vite::asset('resources/images/womenwear/signature-12.png')}}" class="object-cover w-auto h-auto" alt="">
                </div>
              </div>
          </div>
        </div>
     </div>
</section>

 @include('partials.fabrics')

  @include('partials.appointment')

@endsection
