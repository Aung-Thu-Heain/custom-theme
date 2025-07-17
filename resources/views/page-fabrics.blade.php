@extends('layouts.app')
@section('content')

@php

$suitingGoodImages=[];
$shirtingGoodImages=[];
$blazerGoodImages=[];
$overcoatGoodImages=[];
$liningGoodImages = [];
$suitingPremiumImages=[];
$shirtingPremiumImages=[];
$blazerPremiumImages=[];
$overcoatPremiumImages=[];
$liningPremiumImages = [];
for ($i = 1; $i <= 71; $i++) {
    $suitingGoodImages[] = [
        'src' => Vite::asset("resources/images/fabrics/best/suiting/suiting{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 188; $i++) {
    $shirtingGoodImages[] = [
        'src' => Vite::asset("resources/images/fabrics/best/shirting/shirting{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 16; $i++) {
    $blazerGoodImages[] = [
        'src' => Vite::asset("resources/images/fabrics/best/blazer/blazer{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 17; $i++) {
    $overcoatGoodImages[] = [
        'src' => Vite::asset("resources/images/fabrics/best/overcoat/overcoat{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 58; $i++) {
    $liningGoodImages[] = [
        'src' => Vite::asset("resources/images/fabrics/best/lining/lining{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 38; $i++) {
    $suitingPremiumImages[] = [
        'src' => Vite::asset("resources/images/fabrics/premium/suiting/suiting{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 328; $i++) {
    $shirtingPremiumImages[] = [
        'src' => Vite::asset("resources/images/fabrics/premium/shirting/shirting{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 14; $i++) {
    $blazerPremiumImages[] = [
        'src' => Vite::asset("resources/images/fabrics/premium/blazer/blazer{$i}.jpg"),
        'caption' => ''
    ];
}


for ($i = 1; $i <= 31; $i++) {
    $overcoatPremiumImages[] = [
        'src' => Vite::asset("resources/images/fabrics/premium/overcoat/overcoat{$i}.jpg"),
        'caption' => ''
    ];
}

for ($i = 1; $i <= 0; $i++) {
    $liningPremiumImages[] = [
        'src' => Vite::asset("resources/images/fabrics/premium/lining/lining{$i}.jpg"),
        'caption' => ''
    ];
}

$goodImages = [
  'suiting' => $suitingGoodImages,
  'shirting' => $shirtingGoodImages,
  'blazer' => $blazerGoodImages,
  'overcoat' => $overcoatGoodImages,
  'lining' => $liningGoodImages,
];

$premiumImages = [
  'suiting-premium' => $suitingPremiumImages,
  'shirting-premium' => $shirtingPremiumImages,
  'blazer-premium' => $blazerPremiumImages,
  'overcoat-premium' => $overcoatPremiumImages,
  // 'lining-premium' => $liningPremiumImages,
];

$bothImages = array_merge($goodImages, $premiumImages);

@endphp

<section class="hero">
  <div class="relative w-full ">
    <img
      src="{{ Vite::asset('resources/images/shuting/banner.svg') }}"
      alt="Manswear Hero"
      class="w-full h-auto  md:object-cover"
    />
    <div class="absolute inset-0 bg-black/60"></div>
    <div class="absolute inset-0 flex flex-col items-start text-white text-start p-4 md:p-20">
      <p class="mb-2 font-normal text-[16px] md:text-[24px]" data-aos="fade-left">
        Fabrics
      </p>
      <h1 class="font-bold mb-4 text-[22px] md:text-[48px] leading-tight md:leading-[78px]" data-aos="fade-right">
        Crafted from The Finest <br>Threads.
      </h1>
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
        @foreach($goodImages as $key => $imageGroup)
          <div class="flex items-center gap-2 justify-between">
            <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="{{$key}}-tab" data-tabs-target="#{{$key}}" type="button" role="tab" aria-controls="{{$key}}" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>{{ucfirst($key)}}</li>
            <span class="w-[25px] h-[25px] text-xs bg-[#C5B359] rounded-full text-black text-center leading-6">{{count($goodImages[$key])}}</span>
          </div>
        @endforeach

      <h2 class="text-lg font-bold mb-2  text-white mt-10">Premium Quality</h2>
      <hr class="border-gray-500 my-3">
        @foreach($premiumImages as $key => $imageGroup)
          <div class="flex items-center gap-2 justify-between">
            <li class=" hover:text-yellow-200 text-white mr-10 cursor-pointer " id="{{$key}}-tab" data-tabs-target="#{{$key}}" type="button" role="tab" aria-controls="{{$key}}" aria-selected="false"><span class="text-xl pr-2 group-hover:text-yellow-200">&#8250;</span>{{ucfirst(str_replace('-premium', '', $key))}}</li>
            <span class="w-[25px] h-[25px] bg-[#C5B359] text-xs rounded-full text-black text-center leading-6">{{count($premiumImages[$key])}}</span>
          </div>
        @endforeach

      </ul>



    </div>
  </aside>

  <div class="flex-1 px-6 pt-10 pb-5 md:px-[50px] md:pt-[100px] md:pb-[20px]" id="default-tab-content">
       @foreach($goodImages as $key => $imageGroup)
          <div class="hidden" id="{{$key}}" role="tabpanel" aria-labelledby="wool-tab">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="images-container-{{$key}}">
                @foreach ($goodImages[$key] as $index => $image)
                    <div class="relative holographic-card group image-item" data-aos="zoom-in" data-page="{{ floor($index / 16) + 1 }}">
                      <img class="h-[200px]  w-full object-cover rounded-lg cursor-pointer" onclick="openModal({{ $index }}, '{{ $key }}')" src="{{$image['src']}}" alt="">
                      <div class="absolute bottom-0 left-0 right-0 text-white p-1 text-center caption-text opacity-0 group-hover:opacity-100 transition-opacity duration-1000"
                          style="background-color: rgba(0, 0, 0, 0.6);">
                          {{ucfirst(str_replace('-premium', '', $key))}}
                      </div>
                    </div>
                @endforeach
              </div>

              <!-- Pagination for good images -->
              <div class="flex justify-center items-center space-x-2 mt-8" id="pagination-{{$key}}">
                @php
                  $totalPages = ceil(count($goodImages[$key]) / 32);
                @endphp
                @for($page = 1; $page <= $totalPages; $page++)
                  <button
                    class="px-2 py-2 text-sm md:px-3 md:py-2 md:text-lg rounded {{ $page === 1 ? 'bg-[#C5B359] text-black' : 'bg-gray-600 text-white' }} hover:bg-[#C5B359] hover:text-black transition-colors pagination-btn"
                    data-tab="{{$key}}"
                    data-page="{{$page}}"
                    onclick="changePage('{{$key}}', {{$page}})"
                  >
                    {{$page}}
                  </button>
                @endfor
              </div>
          </div>
       @endforeach

       @foreach($premiumImages as $key => $imageGroup)
          <div class="hidden" id="{{$key}}" role="tabpanel" aria-labelledby="wool-tab">
              <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="images-container-{{$key}}">
                @foreach ($premiumImages[$key] as $index => $image)
                    <div class="relative holographic-card group image-item" data-aos="zoom-in" data-page="{{ floor($index / 16) + 1 }}">
                      <img class="h-[200px]  w-full object-cover rounded-lg cursor-pointer" onclick="openModal({{ $index }}, '{{ $key }}')" src="{{$image['src']}}" alt="">
                      <div class="absolute bottom-0 left-0 right-0 text-white p-1 text-center caption-text opacity-0 group-hover:opacity-100 transition-opacity duration-1000"
                          style="background-color: rgba(0, 0, 0, 0.6);">
                          {{ucfirst(str_replace('-premium', '', $key))}}
                      </div>
                    </div>
                @endforeach
              </div>

              <!-- Pagination for premium images -->
              <div class="flex justify-center items-center space-x-2 mt-8" id="pagination-{{$key}}">
                @php
                  $totalPages = ceil(count($premiumImages[$key]) / 32);
                @endphp
                @for($page = 1; $page <= $totalPages; $page++)
                  <button
                    class="px-2 py-2 text-sm md:px-3 md:py-2 md:text-lg rounded {{ $page === 1 ? 'bg-[#C5B359] text-black' : 'bg-gray-600 text-white' }} hover:bg-[#C5B359] hover:text-black transition-colors pagination-btn"
                    data-tab="{{$key}}"
                    data-page="{{$page}}"
                    onclick="changePage('{{$key}}', {{$page}})"
                  >
                    {{$page}}
                  </button>
                @endfor
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
  let images = @json($bothImages);
  let currentTabImages = [];
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

  // Pagination function
  function changePage(tabId, page) {
    // Hide all images first
    const container = document.getElementById(`images-container-${tabId}`);
    const imageItems = container.querySelectorAll('.image-item');

    imageItems.forEach(item => {
      item.style.display = 'none';
    });

    // Show only images for the selected page
    imageItems.forEach(item => {
      if (parseInt(item.getAttribute('data-page')) === page) {
        item.style.display = 'block';
      }
    });

    // Update pagination button styles
    const paginationContainer = document.getElementById(`pagination-${tabId}`);
    const paginationButtons = paginationContainer.querySelectorAll('.pagination-btn');

    paginationButtons.forEach(btn => {
      if (parseInt(btn.getAttribute('data-page')) === page) {
        btn.classList.remove('bg-gray-600', 'text-white');
        btn.classList.add('bg-[#C5B359]', 'text-black');
      } else {
        btn.classList.remove('bg-[#C5B359]', 'text-black');
        btn.classList.add('bg-gray-600', 'text-white');
      }
    });
  }

  // Initialize pagination for all tabs
  function initializePagination() {
    const allTabs = Object.keys(images);
    allTabs.forEach(tabId => {
      changePage(tabId, 1); // Show first page by default
    });
  }

//for tan animaiton
document.addEventListener("DOMContentLoaded", function () {
    const tabLinks = document.querySelectorAll('[data-tabs-target]');
    const tabContents = document.querySelectorAll('#default-tab-content > div');

    // Initialize pagination
    initializePagination();

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

                // Reset to first page when switching tabs
                changePage(targetId.substring(1), 1);

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

