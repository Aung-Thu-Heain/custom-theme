@extends('layouts.app')

@section('content')
  {{-- @while(have_posts()) @php(the_post())
  @endwhile --}}
<section class="hero">
    <div id="hero-section" class="w-auto relative  bg-cover bg-no-repeat " style="height: 601px;">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6">
            <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">With Bangkok’s Finest Bespoke Tailoring,</p>
            <h1 class="text-4xl font-bold mb-6 text-[48px] "  data-aos="fade-right">Experience True Luxury.</h1>
            <a href="#"  data-aos="fade-up" class="bg-white text-black mt-6 px-10 py-4 rounded-lg font-normal text-[16px] hover:bg-gray-200 transition ">
              Explore Our Collection
            </a>
        </div>
    </div>
</section>

<section class="about-our-craft">
    <div class="bg-gray-100">
        <div class="max-w-6xl mx-auto text-center py-28  px-4">
            <div class="flex items-center justify-center bg-gray-100 py-4">
              <div class="border-t border-black w-1/10"></div>
              <span class="mx-6 text-black  text-[20px] " data-aos="zoom-in-down">The Art of Bespoke Tailoring</span>
              <div class="border-t border-black w-1/10"></div>
            </div>
            <h1 class="font-semibold mt-6 text-[36px]" data-aos="zoom-in">About Our Craft</h1>
            <p class="mt-4 text-gray-700 max-w-5xl mx-auto font-normal text-[24px] text-center" data-aos="fade-up">
                At Icon Tailor House, we blend traditional craftsmanship with modern elegance to create bespoke suits
                that define sophistication. Every stitch, every cut, and every detail is meticulously designed to ensure a
                flawless fit and timeless style.
            </p>
        </div>
        <div class=" max-w-6xl mx-auto px-4  pb-26 " data-aos="zoom-in-up">
            <div class="relative flex justify-center">
                <div class="absolute inset-0 bg-black/60"></div>
                <img src="{{Vite::asset('resources/images/home/about-craft.png')}}" alt="Tailoring Process" class="object-cover rounded w-full max-h-[543px] shadow-lg">
                <button class="absolute inset-0 flex items-center justify-center">
                    <div data-aos="fade-right" class="bg-black bg-opacity-70 rounded-full w-24 h-24 flex items-center justify-center">
                        <img src="{{Vite::asset('resources/images/home/play.png')}}" alt="">
                    </div>

                </button>
                <div data-aos="fade-left" class="absolute   bottom-0 text-white flex  p-4">
                  Discover Our Story <img src="{{Vite::asset('resources/images/home/arrow-right-line.png')}}" class="ml-2" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-bespoke">
  <div class="bg-primary text-white p-5">
    <div class="max-w-6xl mx-auto px-6 pt-20">
      <h2 class="text-3xl font-bold text-[40px]" data-aos="fade-right">Why Bespoke?</h2>
    </div>
    <div class="max-w-6xl  mx-auto px-6  py-14 grid grid-cols-1 md:grid-cols-2 gap-12 ">
        <div data-aos="fade-right">
            <h3 class="text-2xl font-semibold mt-4 text-[36px]">Tailoring Beyond Measure</h3>
            <p class="mt-4 font-normal text-gray-300 text-[20px] text-justify">
                A bespoke suit is more than just clothing—it's an extension of your personality. Unlike off-the-rack options, our custom-tailored suits are crafted to complement your unique physique, style, and preferences, ensuring the perfect fit for every occasion.
            </p>
        </div>

        <div class="relative" data-aos="fade-left">
            <img src="{{Vite::asset('resources/images/home/why-bespoke.png')}}" alt="Bespoke Suit" class="rounded-lg shadow-lg">
        </div>
    </div>
  </div>
</section>

<section class="our-signature">
   <div class="bg-primary ">
      <div class="w-full mx-auto grid grid-flow-row md:grid-cols-3   bg-secondary-color">
        <div class="flex items-center justify-center max-h-[343px] ">
          <h2 class="text-white text-[36px] my-24 font-bold leading-relaxed text-left" data-aos="zoom-out">
            Our<span class="hidden sm:inline"> <br> </span>
            Signature<span class="hidden sm:inline"> <br> </span>
            Services
          </h2>
        </div>
        <div class="md:row-span-2 max-h-[800px] " data-aos="fade-right">
          <img src="{{Vite::asset('resources/images/home/signature-two.png')}}" class="h-full object-cover" alt="">
        </div>
        <div class="md:row-span-2 max-h-[800px] " data-aos="fade-left">
          <img src="{{Vite::asset('resources/images/home/signature-three.png')}}" class="h-full object-cover" alt="">
        </div>
        <div class="md:row-span-2 max-h-[929px]" data-aos="fade-up">
          <img src="{{Vite::asset('resources/images/home/signature-one.png')}}" class="object-cover h-full w-full" alt="">
        </div>

        <div class="md:col-span-2 " data-aos="fade-left">
          <img src="{{Vite::asset('resources/images/home/signature-four.png')}}"  class="object-cover h-full"  alt="">
        </div>


      </div>
   </div>
</section>

<section class="createion">
  <div class="bg-white py-12 text-center">
    <h1 class="text-[30px] font-bold py-12" data-aos="fade-zoom-im">“Let our designs inspire your next bespoke creation.”</h1>
    <div class="max-w-6xl grid   md:grid-cols-2 md:grid-rows-2 mx-auto px-4 gap-1">
        <div data-aos="fade-up">
          <div class="grid grid-cols-3 gap-1">
             <img src="{{Vite::asset('resources/images/home/creation1.png')}}" class="object-cover h-full w-full" alt="">
             <img src="{{Vite::asset('resources/images/home/creation2.png')}}" class="object-cover h-full w-full" alt="">
             <img src="{{Vite::asset('resources/images/home/creation3.png')}}" class="object-cover h-full w-full" alt="">
          </div>
        </div>
        <div class="row-span-2  max-h-[390px]" data-aos="fade-down">
          <img src="{{Vite::asset('resources/images/home/creation4.png')}}" class="object-cover h-full w-full" alt="">
        </div>
        <div class="row-span-2 " data-aos="fade-right">
          <img src="{{Vite::asset('resources/images/home/creation5.png')}}" class="object-cover h-full w-full" alt="">
        </div>
        <div class="">
          <div class="grid grid-cols-2 gap-1" data-aos="fade-left">
            <img src="{{Vite::asset('resources/images/home/creation6.png')}}" class="object-cover h-full w-full" alt="">
            <img src="{{Vite::asset('resources/images/home/creation7.png')}}" class="object-cover h-full w-full" alt="">
         </div>
        </div>
    </div>
  </div>
</section>

<section class="what-they-say">
  <div class="bg-secondary py-24 text-center">
    <div class="flex justify-center items-center" data-aos="fade-right">
      <img src="{{Vite::asset('resources/images/home/message.png')}}" class="object-cover w-10 h-10 mr-2 " alt=""><h1 class="text-4xl font-bold text-white ">What They Say..</h1>
    </div>
    <div class="text-white text-[24px]" data-aos="fade-left">About Icon Tailor House</div>

    <div class=" text-white py-24">

          <div class="max-w-6xl mx-auto flex flex-col md:flex-row p-8 items-center gap-12" >
              <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="{{Vite::asset('resources/images/home/testimonial.png')}}" alt="Customer 1" class=" rounded-lg shadow-lg">
              </div>
              <div class="w-full md:w-1/2" data-aos="fade-left">
                  <p class="font-normal text-[20px] text-justify">"The suit fits perfectly and feels incredibly comfortable. The attention to detail was impressive, and the fabric quality is outstanding. I’ve never felt more confident wearing a suit."</p>
                  <p class="mt-4 font-bold">— James Carter, New York, USA</p>
              </div>
          </div>

          <div class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse p-8 items-center gap-12">
              <div class="w-full md:w-1/2" data-aos="fade-left">
                <img src="{{Vite::asset('resources/images/home/testimonial2.png')}}" alt="Customer 1" class=" rounded-lg shadow-lg">
              </div>
              <div class="w-full md:w-1/2" data-aos="fade-right">
                  <p class="font-normal text-[20px] text-justify">"The whole experience was enjoyable and stress-free. The final suit looks sharp and feels great to wear. I couldn’t be happier with how it turned out."</p>
                  <p class="mt-4 font-bold">— David Thompson, London, UK</p>
              </div>
          </div>


          <div class="max-w-6xl mx-auto flex flex-col md:flex-row p-8 items-center gap-12">
              <div class="w-full md:w-1/2" data-aos="fade-right">
                <img src="{{Vite::asset('resources/images/home/testimonial3.png')}}" alt="Customer 1" class=" rounded-lg shadow-lg">
              </div>
              <div class="w-full md:w-1/2" data-aos="fade-left">
                  <p class="font-normal text-[20px] text-justify">"From the first fitting to the final result, the process was smooth and professional. The craftsmanship is top-notch, and the suit feels like it was made just for me. I’ve received so many compliments."</p>
                  <p class="mt-4 font-bold">— Liam Jeremiah, Sydney, Australia</p>
              </div>
          </div>

          <div class="max-w-6xl mx-auto flex flex-col md:flex-row-reverse p-8 items-center gap-12">
              <div class="w-full md:w-1/2" data-aos="fade-left">
                <img src="{{Vite::asset('resources/images/home/testimonial4.png')}}" alt="Customer 1" class=" rounded-lg shadow-lg">
              </div>
              <div class="w-full md:w-1/2" data-aos="fade-right">
                  <p class="font-normal text-[20px] text-justify">"I was amazed by how well the suit turned out. Every detail was carefully considered, and the fit is perfect. It’s easily the best suit I’ve ever owned."</p>
                  <p class="mt-4 font-bold">— Arjun Mehta, Mumbai, India</p>
              </div>
          </div>

    </div>
  </div>
</section>

<section class="apppointment">
  <div id="appointment" class="w-auto relative  bg-cover bg-bottom bg-no-repeat" style="height: 500px;">
      <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-6">
          <p class="text-[36px] font-bold mb-2" data-aos="zoom-in">Your Perfect Suit Starts Here!</p>
          <h1 class="font-normal text-[18px] mb-2" data-aos="zoom-out"> Let us craft your signature style. Schedule your fitting today.</h1>
          <a href="#" class="bg-white text-black mt-6 px-6 py-3 rounded-lg font-normal text-[16px] hover:bg-gray-200 transition" data-aos="flip-left">
            Book An Appointment
          </a>
      </div>
  </div>
</section>

@endsection
