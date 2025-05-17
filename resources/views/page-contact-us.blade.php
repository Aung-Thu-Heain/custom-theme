@extends('layouts.app')
@section('content')

<section class="hero">
  <div id="manswear-hero-section" class="w-auto relative  bg-cover bg-no-repeat" style="height: 601px;background-image: url('{{Vite::asset('resources/images/contact/banner.png')}}')">
    <div class="absolute inset-0 bg-black/70"></div>
      <div class="absolute inset-0 flex flex-col items-start text-white text-start p-20">
          <p class=" mb-2 font-normal text-[24px] " data-aos="fade-left">Contact Us</p>
          <h1 class="text-4xl font-bold mb-6 text-[48px] leading-[78px] "  data-aos="fade-right">We look forward to assisting you <br>with tailored craftsmanship.</h1>
      </div>
  </div>
</section>

<section class="main">
  <div class="bg-black text-white min-h-screen flex flex-col md:flex-row p-5 md:p-[50px] pb-20">
    <!-- Left Section -->
    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10 space-y-6 bg-secondary p-[50px]">
      <div class="space-y-4">
        <h2 class="text-[20px] font-semibold">Information</h2>
        <div class="space-y-2 text-sm leading[29px]">
          <p class="flex text-[18px] items-center gap-2"><span><img src="{{Vite::asset('resources/images/icons/phone.png')}}" alt="phone" class="w-6"></span> 0897875470</p>
          <p class="flex  text-[18px] items-center gap-2"><span><img src="{{Vite::asset('resources/images/icons/email.png')}}" alt="email" class="w-6"></span> icontailorhouse@gmail.com</p>
          <p class="flex text-[18px] items-center gap-2"><span><img src="{{Vite::asset('resources/images/icons/clock.png')}}" alt="clock" class="w-6"></span> Everyday 9:15 AM - 9:30 PM</p>
          <p class="flex text-[18px] items-center gap-2"><span><img src="{{Vite::asset('resources/images/icons/wallet.png')}}" alt="wallet" class="w-6"></span> Accept Visa, Master, Paypal, Crypto</p>
        </div>
      </div>
      <hr class="border-gray-500">
      <div>
        <h3 class="text-[20px] mb-2">Connect with us</h3>
        <div class="flex   gap-4 mt-4">
          <a href="#"><img src="{{Vite::asset('resources/images/icons/whatsapp.png')}}" alt="WhatsApp" class="w-6"></a>
          <a href="#"><img src="{{Vite::asset('resources/images/icons/facebook.png')}}" alt="Facebook" class="w-6"></a>
          <a href="#"><img src="{{Vite::asset('resources/images/icons/instergam.png')}}" alt="Instagram" class="w-6"></a>
          <a href="#"><img src="{{Vite::asset('resources/images/icons/tiktot.png')}}" alt="TikTok" class="w-6"></a>
      </div>
      </div>
    </div>

    <!-- Right Section -->
    <div class="md:w-1/2 bg-primary md:p-[50px] p-5" >
      <h2 class="text-[20px] text-center font-semibold mb-6">Book an Appointment</h2>
      <form class="space-y-4 px-5 md:px-20">
        <div>
          <label class="text-[16px]">Full Name</label>
          <input type="text" placeholder="eg: John Doe" class="w-full h-[50px] bg-[#02021E] border border-gray-500 rounded px-3 py-2 mt-1 text-sm focus:outline-none">
        </div>
        <div>
          <label class="text-[16px]">Email</label>
          <input type="email" placeholder="eg: john214@gmail.com" class="w-full h-[50px] bg-[#02021E]  border border-gray-500 rounded px-3 py-2 mt-1 text-sm focus:outline-none">
        </div>
        <div>
          <label class="text-[16px]">Phone Number</label>
          <div class="flex">
            <select class="bg-transparent h-[50px] bg-[#02021E] border border-gray-500 rounded-l px-3 py-2 text-sm">
              <option>+95</option>
            </select>
            <input type="text" placeholder="543210987" class="w-full h-[50px] bg-[#02021E] border border-l-0 border-gray-500 rounded-r px-3 py-2 text-sm focus:outline-none">
          </div>
        </div>
        <div>
          <label class="text-[16px]">Service Preferences</label>
          <select class="w-full h-[50px] bg-[#02021E] border border-gray-500 rounded px-3 py-2 mt-1 text-sm focus:outline-none">
            <option>Select</option>
          </select>
        </div>
        <div>
          <label class="text-[16px]">Appointment Date</label>
          <input type="date" class="w-full h-[50px] bg-[#02021E] border border-gray-500 rounded px-3 py-2 mt-1 text-sm focus:outline-none">
        </div>
        <div>
          <label class="text-[16px] block mb-1">Location</label>
          <div class="flex gap-6 text-sm">
            <label class="inline-flex items-center">
              <input type="radio" name="location" class=" text-[16px]  form-radio  mr-2"> In-store
            </label>
            <label class="inline-flex items-center">
              <input type="radio" name="location" class="form-radio text-[16px]  mr-2"> Virtual
            </label>
          </div>
        </div>
        <p class="text-xs text-gray-400">By submitting the form you are agreed to our terms and privacy policy.</p>
        <button type="submit" class="bg-white text-black px-6 py-2 rounded font-medium">Book An Appointment</button>
      </form>
    </div>
  </div>
</section>

<section class="map">
  <div class="bg-[#02021E] min-h-screen flex items-center justify-center p-2">
    <div class="w-full max-w-7xl rounded overflow-hidden">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7183820702785!2d100.52007317533244!3d13.735492386654707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f24afac7879%3A0x83211fc6c6d74a3f!2sICON%20TAILOR%20HOUSE!5e0!3m2!1sen!2smm!4v1747498563058!5m2!1sen!2smm" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
@endsection
