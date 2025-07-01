@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/shuting/banner.svg')}}')">
    {{-- <div class="absolute inset-0 bg-black/70"></div> --}}
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20 mt-[100px]">
          <p class=" mb-2 font-normal text-[#C5B359] text-[24px] " data-aos="fade-left">Best Quality</p>
          <h1 class=" font-bold mb-2 text-[34px] md:text-[48px] leading-[78px] "  data-aos="fade-right">SUITING</h1>
          <p class="  font-normal text-[#C5B359] text-[24px] " data-aos="fade-left">Fabrics</p>
      </div>
  </div>
</section>


<section class="bg-[#010024] text-white font-sans">

  <div class="flex flex-col  md:flex-row min-h-screen">
  <aside class="  md:w-3/10  ">
    <div class="bg-[#0D0D27]  px-6 py-10 md:px-[20px] md:ms-auto md:py-[40px] md:w-[80%] h-fit mt-[100px]">
      <h2 class="text-lg font-bold mb-2  text-white">Best Quality</h2>
      <hr class="border-gray-500 my-3">

      <ul class="space-y-4 leading-10 " id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-yellow-200" role="tablist">
        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="wool-tab" data-tabs-target="#wool" type="button" role="tab" aria-controls="wool" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Suiting</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>


        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="silk-tab" data-tabs-target="#silk" type="button" role="tab" aria-controls="silk" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Shirting</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Blazer</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Overcoat</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Lining</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>
      </ul>

      <h2 class="text-lg font-bold mb-2  text-white mt-10">Premium Quality</h2>
      <hr class="border-gray-500 my-3">
      <ul class="space-y-4 leading-10 " id="default-tab" data-tabs-toggle="#default-tab-content" data-tabs-active-classes="text-yellow-200" role="tablist">
        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="wool-tab" data-tabs-target="#wool" type="button" role="tab" aria-controls="wool" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Suiting</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="silk-tab" data-tabs-target="#silk" type="button" role="tab" aria-controls="silk" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Shirting</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Blazer</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Overcoat</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>

        <div class="flex items-center gap-2 justify-between">
          <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="linen-tab" data-tabs-target="#linen" type="button" role="tab" aria-controls="linen" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>Lining</li>
          <span class="w-[25px] h-[25px] bg-[#C5B359] rounded-full text-black text-center leading-6">10</span>
        </div>
      </ul>


    </div>
  </aside>

  <div class="flex-1 px-6 pt-10 pb-5 md:px-[50px] md:pt-[100px] md:pb-[20px]" id="default-tab-content">
       @php
          $images = [
            'wool' => [
              ['src' => Vite::asset('resources/images/fabrics/good1.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good2.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good3.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good4.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good5.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good6.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good7.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good8.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good9.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good10.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good11.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good12.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good13.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good14.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good15.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good16.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good17.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good18.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good19.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good20.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good21.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good22.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good23.jpg'),'caption' => ''],              ['src' => Vite::asset('resources/images/fabrics/good24.jpg'),'caption' => ''],
            ],
            'silk' => [
              ['src' => Vite::asset('resources/images/fabrics/premium1.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium2.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium3.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium4.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium5.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium6.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium7.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium8.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium9.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium10.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium11.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium12.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium13.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium14.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium15.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium16.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium17.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium18.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium19.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium20.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium21.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium22.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium23.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/premium24.jpg'),'caption' => ''],
            ],
            'linen' => [
              ['src' => Vite::asset('resources/images/fabrics/luxury1.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury2.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury3.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury4.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury5.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury6.png'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury7.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury8.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury9.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury10.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury11.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury12.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury13.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury14.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury15.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury16.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury17.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury18.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury19.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury20.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury21.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury22.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury23.jpg'),'caption' => ''],
              ['src' => Vite::asset('resources/images/fabrics/luxury24.jpg'),'caption' => ''],
            ],
          ];
       @endphp
       @foreach($images as $key => $imageGroup)
          <div class="hidden" id="{{$key}}" role="tabpanel" aria-labelledby="wool-tab">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4 ">
                @foreach ($images[$key] as $image)
                    <div class="relative holographic-card" data-aos="zoom-in">
                      <img class="h-[200px] w-full object-cover rounded-lg cursor-pointer" onclick="openModal({{ $loop->index }}, '{{ $key }}')" src="{{$image['src']}}" alt="">
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
    {{-- <div id="sliderCaption" class="text-center py-1 text-gray-700 font-medium"></div> --}}
  </div>
</div>

<script>
  //form model slider
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
   // document.getElementById('sliderCaption').textContent = image.caption;
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % currentTabImages.length;
    updateSlider();
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + currentTabImages.length) % currentTabImages.length;
    updateSlider();
  }


//for tan animaiton
document.addEventListener("DOMContentLoaded", function () {
    const tabLinks = document.querySelectorAll('[data-tabs-target]');
    const tabContents = document.querySelectorAll('#default-tab-content > div');
    tabLinks.forEach(link => {
        link.addEventListener("click", function (e) {

            e.preventDefault();

            // Remove active class from all contents
            tabContents.forEach(content => {
                content.classList.add("hidden");
                content.classList.remove("tab-active");
            });

            const targetId = this.getAttribute("data-tabs-target");
            const target = document.querySelector(targetId);

            if (target) {
                target.classList.remove("hidden");

                // Trigger animation
                target.classList.add("tab-transition");

                // Force reflow to ensure animation is applied
                void target.offsetWidth;

                target.classList.add("tab-active");

                // Optionally remove animation class after done
                setTimeout(() => {
                    target.classList.remove("tab-transition");
                }, 5000);
            }
        });
    });
});

</script>
@include('partials.appointment')
@endsection

