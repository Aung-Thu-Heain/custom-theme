<section class="bg-primary fabric-selection">
    <div class="max-w-7xl text-white mx-auto px-10 py-50">
      <h1 class="text-[35px]" data-aos="fade-down">Fabric Selection</h1>
      <span class="text-[24px]" data-aos="fade-down">Handpicked Luxury, Woven to Perfection.</span>
      <div class="grid grid-cols-2 md:grid-cols-7 gap-1 mt-20">
        @php
           $images = [
              ['src' => Vite::asset('resources/images/manswear/fabric-1.png'),'caption' => '#aqua5'],
              ['src' => Vite::asset('resources/images/manswear/fabric-2.png'),'caption' => '#elegante3'],
              ['src' => Vite::asset('resources/images/manswear/fabric-3.png'),'caption' => '#Elegante41'],
              ['src' => Vite::asset('resources/images/manswear/fabric-4.png'),'caption' => '#Lining2'],
              ['src' => Vite::asset('resources/images/manswear/fabric-5.png'),'caption' => '#Lumino2'],
              ['src' => Vite::asset('resources/images/manswear/fabric-6.png'),'caption' => '#Lining34'],
      ];
        @endphp
        @foreach($images as $image)
            <div class="relative">
              <img class="h-[145px] w-full object-cover rounded-lg cursor-pointer" onclick="openModal({{$loop->index}})" src="{{$image['src']}}" alt="">
              <div class="absolute bottom-0 left-0 right-0 text-white p-2 " data-aos="zoom-out">{{$image['caption']}}</div>
          </div>
        @endforeach
        <div class="relative">
          <div class="absolute inset-0 bg-black/90"></div>
          <img class="h-[145px] w-full object-cover rounded-lg" src="{{Vite::asset('resources/images/manswear/fabric-7.png')}}" alt="">
          <a href="/fabrics" class="absolute inset-0 flex  items-center justify-between text-white text-center px-6" data-aos="zoom-out">
            <p class=" mb-2 font-normal  ">50+<br>Handpicked<br>Fabrics</p>
            <img src="{{Vite::asset('resources/images/icons/ri-arrow-right-line.png')}}" alt="">
          </a>
        </div>
      </div>
    </div>
<section>

  <!-- Modal backdrop -->
<div id="imageModal" class="fixed inset-0  bg-opacity-50 flex items-center justify-center z-50 hidden">
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
    <div id="sliderCaption" class="text-center py-4 text-gray-700 font-medium"></div>
  </div>
</div>
  <script>
  let currentIndex = 0;
  let images = @json($images);
  console.log(images);
  function openModal(index = 0) {
    currentIndex = index;
    currentTabImages = images[currentIndex]
    console.log('currentTabImages', currentTabImages);
    updateSlider();
    document.getElementById('imageModal').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
  }

  function updateSlider() {
    let image = images[currentIndex];
    document.getElementById('sliderImage').src = image.src;
    document.getElementById('sliderCaption').textContent = image.caption;
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlider();
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateSlider();
  }
</script>
