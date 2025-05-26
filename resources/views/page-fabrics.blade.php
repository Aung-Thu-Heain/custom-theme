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
       @php
          $images = [
            'wool' => [
              ['src' => Vite::asset('resources/images/fabrics/fabrics-1.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/fabrics/fabrics-2.png'),'caption' => '#elegante3'],
            ],
            'silk' => [
              ['src' => Vite::asset('resources/images/fabrics/fabrics-3.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/fabrics/fabrics-4.png'),'caption' => '#elegante3'],
            ],
            'linen' => [
              ['src' => Vite::asset('resources/images/fabrics/fabrics-5.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/fabrics/fabrics-6.png'),'caption' => '#elegante3'],
            ],
            'heritage' => [
              ['src' => Vite::asset('resources/images/fabrics/fabrics-1.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/fabrics/fabrics-2.png'),'caption' => '#elegante3'],
            ],
            'coat' => [
              ['src' => Vite::asset('resources/images/fabrics/fabrics-3.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/fabrics/fabrics-4.png'),'caption' => '#elegante3'],
            ],
          ];
       @endphp

       @foreach($images as $key => $imageGroup)
          <div class="hidden" id="{{$key}}" role="tabpanel" aria-labelledby="wool-tab">
              <div class="grid grid-cols-2 md:grid-cols-6 gap-4 ">
                @foreach ($images[$key] as $image)
                    <div class="relative">
                      <img class="h-[145px] w-full object-cover rounded-lg" onclick="openModal({{ $loop->index }}, '{{ $key }}')" src="{{$image['src']}}" alt="">
                      <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">{{$image['caption']}}</div>
                    </div>
                @endforeach
              </div>
          </div>
       @endforeach
  </div>
</div>
</section>

<!-- Modal backdrop -->
<div id="imageModal" class="fixed inset-0  bg-opacity-20 flex items-center justify-center z-50 hidden">
  <div class="relative w-full max-w-4xl mx-auto bg-white rounded-lg overflow-hidden">

    <button onclick="closeModal()" class="absolute bg-primary px-2 rounded-4xl top-2 right-2 text-white hover:text-red-600 text-2xl z-100 font-bold">&times;</button>

    <div class="relative">
      <img id="sliderImage" src="" alt="Image Preview" class="w-full h-[300px] md:h-[500px] object-cover rounded-t-lg transition duration-500 ease-in-out">

      <button onclick="prevImage()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded hover:bg-opacity-75">
        &#10094;
      </button>

      <button onclick="nextImage()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded hover:bg-opacity-75">
        &#10095;
      </button>
    </div>
    <div id="sliderCaption" class="text-center py-1 text-gray-700 font-medium"></div>
  </div>
</div>

<script>
  let currentIndex = 0;
  let images = @json($images);
  console.log(images);
  function openModal(index = 0,position) {
    currentIndex = index;
    currentTabImages = images[position];
    console.log('position',position);
    console.log('current img',currentTabImages);
    updateSlider();
    document.getElementById('imageModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
  }

  function updateSlider() {
    const image = currentTabImages[currentIndex];
    document.getElementById('sliderImage').src = image.src;
    document.getElementById('sliderCaption').textContent = image.caption;
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % currentTabImages.length;
    updateSlider();
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + currentTabImages.length) % currentTabImages.length;
    updateSlider();
  }
</script>

@include('partials.appointment')
@endsection

