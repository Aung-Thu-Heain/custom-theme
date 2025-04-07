@extends('layouts.app')
@section('content')
<section class="hero">
      <div class="grid grid-cols-3">
        <div id="about-hero" class="col-span-2 p-10 relative bg-cover bg-no-repeat text-light bg-black h-[601px]">
          <div class="absolute inset-0 bg-black/70"></div>
          <div class="absolute inset-0 text-white mt-20 p-10">
            <p class="text-[24px]">About Us</p>
            <h1 class="text-[48px]">Luxury in Every Thread!</h1>
          </div>
        </div>
        <div class="bg-[#4F4823] h-[601px] text-justify  p-10 my-auto items-center justify-center text-light">
         <div class="mt-20 text-[20px] text-white">
          <p >True luxury is not just about the finest materials but about the care, craftsmanship, and attention to detail woven into every stitch.</p><br>
          <p>Our bespoke tailoring service is dedicated to creating timeless elegance, ensuring every garment reflects the individuality and sophistication of its wearer.</p>
         </div>
        </div>
      </div>
</section>

<section class="mastery">
  <div class="grid grid-cols-3 mt-5 p-20">
    <div class="col-span-2">
      <p class="text-[36px] font-bold">Mastery</p>
      <p class="text-[36px]">in Craftsmanship</p>
    </div>
    <div class="">
      <p class="text-[20px]">Our expertise is not just about creating clothing; it’s about crafting an experience that leaves you feeling confident, comfortable, and unique.</p>
    </div>
  </div>
  <div class="grid grid-cols-3 p-20 justify-items-stretch">
    <div class="col-span-2 p-5 space-y-10 my-auto">
      <div class="grid grid-cols-2 justify-items-center gap-4">
        <div class="text-center">
          <span class="text-xl font-bold">10+</span><br>
          Years of Expertise
        </div>
        <div class="text-center">
          <span class="text-xl font-bold">700+</span><br>
          Satisfied Clients
        </div>
      </div>
      <div class="grid grid-cols-2 justify-items-center gap-4">
        <div class="text-center">
          <span class="text-xl font-bold">98%</span><br>
          Client Satisfaction
        </div>
        <div class="text-center">
          <span class="text-xl font-bold">500+</span><br>
          Unique Served
        </div>
      </div>
    </div>
    <div id="mastery-image" class="col-span-1 bg-cover bg-no-repeat bg-center h-[455px]"></div>
  </div>
  </div>
</section>

<section class="our-team ">
  <div class="bg-primary text-white py-6 text-center">
    <div class="max-6xl  mx-auto text-center  px-4">
      <h1 class="font-semibold  text-[36px]" data-aos="zoom-in">Meet Our Team</h1>
        <p class="mt-4  max-w-5xl mx-auto font-normal text-[24px] text-center" data-aos="fade-up">
          With years of experience and a passion for perfection, our team of master tailors brings unparalleled expertise to every bespoke garment we create.
        </p>
    </div>
    <div class="max-w-5xl grid  mt-5  md:grid-cols-3 mx-auto gap-4">
          <div class=" ">
             <img src="{{Vite::asset('resources/images/about/our-team-1.png')}}" class="object-cover w-auto h-auto" alt="">
             <div class="text-start py-2">
                <p class="text-[20px] ">Mike Connon Broke</p>
                <p class="text-sm ">Master Tailor</p>
             </div>
          </div>
          <div class=" ">
            <img src="{{Vite::asset('resources/images/about/our-team-2.png')}}" class="object-cover w-auto h-auto" alt="">
            <div class="text-start py-2">
               <p class="text-[20px] ">Saint Louis Mathrew</p>
               <p class="text-sm ">Manager</p>
            </div>
         </div>
         <div class=" ">
            <img src="{{Vite::asset('resources/images/about/our-team-3.png')}}" class="object-cover w-auto h-auto" alt="">
            <div class="text-start py-2">
              <p class="text-[20px] ">Lilly Pathna</p>
              <p class="text-sm ">Designer</p>
            </div>
         </div>
         <div class=" ">
            <img src="{{Vite::asset('resources/images/about/our-team-4.png')}}" class="object-cover w-auto h-auto" alt="">
            <div class="text-start py-2">
              <p class="text-[20px] ">James Heiley Isi</p>
              <p class="text-sm ">Designer</p>
            </div>
        </div>
       <div class=" ">
          <img src="{{Vite::asset('resources/images/about/our-team-5.png')}}" class="object-cover w-auto h-auto" alt="">
          <div class="text-start py-2">
            <p class="text-[20px] ">Jenny Nath</p>
            <p class="text-sm ">Designer</p>
          </div>
      </div>
     <div class=" ">
          <img src="{{Vite::asset('resources/images/about/our-team-6.png')}}" class="object-cover w-auto h-auto" alt="">
          <div class="text-start py-2">
            <p class="text-[20px] ">Osw Aowknts</p>
            <p class="text-sm ">Quality Assurance</p>
          </div>
      </div>

    </div>
  </div>
</section>

<section class="Our-Commitments">
  <div class="grid grid-cols-1 lg:grid-cols-3 ">
    <div class="bg-black text-white flex flex-col justify-center p-10 lg:p-20 col-span-1">
      <h2 class="text-4xl font-bold mb-4">Our <br> Commitments</h2>
      <p class="text-lg leading-relaxed">
        Every suit we craft tells a story of dedication, precision, and an unwavering commitment to elegance.
      </p>
    </div>

    <div class="bg-secondary text-white p-10 lg:p-20 col-span-2 grid grid-cols-1 md:grid-cols-2 gap-10 items-start">

      <div class="flex flex-col gap-2">
        <img src="{{Vite::asset('resources/images/icons/Wreath.png')}}" alt="Unparalleled Quality" class="w-8 h-8">
        <h3 class="font-bold text-lg">Unparalleled Quality</h3>
        <p class="text-sm text-gray-300">
          Only the finest materials and craftsmanship, ensuring a garment of enduring beauty and durability.
        </p>
      </div>

      <div class="flex flex-col gap-2">

        <img src="{{Vite::asset('resources/images/icons/Ruler.png')}}" alt="Exclusivity & Personalization" class="w-8 h-8">
        <h3 class="font-bold text-lg">Exclusivity & Personalization</h3>
        <p class="text-sm text-gray-300">
          Every design detail, from silhouette to stitching, is made uniquely for each client.
        </p>
      </div>

      <div class="flex flex-col gap-2">
        <img src="{{Vite::asset('resources/images/icons/Success.png')}}" alt="A Seamless Experience" class="w-8 h-8">
        <h3 class="font-bold text-lg">A Seamless Experience</h3>
        <p class="text-sm text-gray-300">
          Our by-appointment service ensures a private, relaxed, and personalized tailoring journey.
        </p>
      </div>

      <div class="flex flex-col gap-2">
        <img src="{{Vite::asset('resources/images/icons/Suit.png')}}" alt="Sustainability with Style" class="w-8 h-8">
        <h3 class="font-bold text-lg">Sustainability with Style</h3>
        <p class="text-sm text-gray-300">
          Ethically sourced fabrics and sustainable craftsmanship ensure luxury with responsibility.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="working procress bg-gray-100">
  <div class="max-w-7xl  py-16 mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-12">Our Working Process</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 border-b-black border-b-3 text-start">
        <div class="text-[40px] font-bold my-3 ">1</div>
        <h3 class="text-lg font-semibold mb-2 text-[24px]">Sizing</h3>
        <p class="text-sm text-[16px] leading-[26px]">
          Get professionally measured in-store, at a trunk show, or remotely via web/Skype to ensure a precise fit.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 border-b-black border-b-3 text-start">
        <div class="text-[40px] font-bold my-3 ">2</div>
        <h3 class="text-lg font-semibold mb-2 text-[24px]">Fabric & Style Selection</h3>
        <p class="text-sm text-[16px] leading-[26px]">
          Work with our experts to choose premium fabrics and styles that best reflect your personality and preferences.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 border-b-black border-b-3 text-start">
        <div class="text-[40px] font-bold my-3 ">3</div>
        <h3 class="text-lg font-semibold mb-2 text-[24px]">Craftsmanship</h3>
        <p class="text-sm text-[16px] leading-[26px]">
          Your chosen fabrics are meticulously cut and expertly handcrafted into bespoke garments with exceptional attention to detail.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 border-b-black border-b-3 text-start">
        <div class="text-[40px] font-bold my-3 ">4</div>
        <h3 class="text-lg font-semibold mb-2 text-[24px]">Delivery</h3>
        <p class="text-sm text-[16px] leading-[26px]">
          Your tailored pieces will be delivered to your doorstep within 3 to 6 weeks, offering a perfect made-to-measure fit.
        </p>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg transition-all duration-300 border-b-black border-b-3 text-start">
        <div class="text-[40px] font-bold my-3 ">5</div>
        <h3 class="text-lg font-semibold mb-2 text-[24px]">Fit Guarantee</h3>
        <p class="text-sm text-[16px] leading-[26px]">
          Our worry-free guarantee ensures you are completely satisfied with the fit and quality of your bespoke garments.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="feedback bg-secondary">
  <div class=" max-w-7xl mx-auto px-6 py-16 text-center text-white">
    <h2 class="text-3xl md:text-4xl font-bold mb-12">Words From Our Clients</h2>
    <p class="mt-4  max-w-5xl mx-auto font-normal text-[24px] text-center" data-aos="fade-up">
      Our clients are at the heart of everything we do. Each testimonial is a reflection of our commitment to delivering not just impeccable suits but memorable experiences.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 mt-20 gap-8">

      <div class="  border-primary border-2 p-6 rounded-lg relative">
        <div class="absolute -top-6 left-6 bg-indigo-800 w-12 h-12 flex items-center justify-center rounded-full text-white text-2xl">“</div>
        <div class="flex justify-start mb-4">
          <div class="text-yellow-400 text-lg space-x-1">
            <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-400">★</span>
          </div>
        </div>
        <p class="text-white text-[20px] text-start mb-6">
          The craftsmanship and attention to detail are unmatched. My bespoke suit fits like a dream — truly exceptional service!
        </p>
        <hr class=" border-primary border"></hr>
        <div class="flex items-center gap-3 mt-4">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
          <div class="text-left">
            <p class="text-white font-semibold">James Willam</p>
          </div>
        </div>
      </div>

      <div class=" border-primary border-2 p-6 rounded-lg relative">
        <div class="absolute -top-6 left-6 bg-indigo-800 w-12 h-12 flex items-center justify-center rounded-full text-white text-2xl">“</div>
        <div class="flex justify-start mb-4">
          <div class="text-yellow-400 text-lg space-x-1">
            <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-400">★</span>
          </div>
        </div>
        <p class="text-white text-[20px] text-start mb-6">
          I felt so special throughout the entire process. From fabric selection to final fitting, every
          <span class="text-gray-400 cursor-pointer">Read More</span>
        </p>
        <hr class=" border-primary border"></hr>
        <div class="flex items-center gap-3 mt-4">
          <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
          <div class="text-left">
            <p class="text-white font-semibold">Olivia Mathrew</p>
          </div>
        </div>
      </div>

      <div class="border-primary border-2 p-6 rounded-lg relative">
        <div class="absolute -top-6 left-6 bg-indigo-800 w-12 h-12 flex items-center justify-center rounded-full text-white text-2xl">“</div>
        <div class="flex justify-start mb-4">
          <div class="text-yellow-400 text-lg space-x-1">
            <span>★</span><span>★</span><span>★</span><span>★</span><span class="text-gray-400">★</span>
          </div>
        </div>
        <p class="text-white text-[20px] text-start mb-6">
          The team went above and beyond to create a suit that reflects my style perfectly. I’ve never felt more confident.
        </p>
        <hr class=" border-primary border"></hr>
        <div class="flex items-center gap-3 mt-4">
          <img src="https://randomuser.me/api/portraits/men/43.jpg" alt="User" class="w-10 h-10 rounded-full object-cover">
          <div class="text-left">
            <p class="text-white font-semibold">Daniel Howard</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
