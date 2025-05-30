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
          <p class="flex text-[18px] items-center gap-2">
            <span><img src="{{Vite::asset('resources/images/icons/phone.png')}}" alt="phone" class="w-6"></span>
            <a href="tel:0897875470">0897875470</a>,
            <a href="tel:+66945695499">+66945695499</a>,
            <a href="tel:+66838345118">+66838345118</a>
          </p>

          <p class="flex  text-[18px] items-center gap-2"><span><img src="{{Vite::asset('resources/images/icons/email.png')}}" alt="email" class="w-6"></span><a href="mailto:icontailorhouse@gmail.com">icontailorhouse@gmail.com</a></p>
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
      <?php echo do_shortcode('[contact-form-7 id="e9d0f9f" title="Contact form 1"]') ?>
    </div>
  </div>
</section>

<section class="map">
  <div class="bg-[#02021E] min-h-screen flex items-center justify-center p-2">
    <div class="w-full max-w-7xl rounded overflow-hidden">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7171243801004!2d100.51771918126263!3d13.73556845224441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29929e787c989%3A0x9a705a9b22caa3f2!2s859%20Rama%20IV%20Rd%2C%20Khwaeng%20Wang%20Mai%2C%20Pathum%20Wan%2C%20Krung%20Thep%20Maha%20Nakhon%2010330%2C%20Thailand!5e0!3m2!1sen!2smm!4v1748525733309!5m2!1sen!2smm" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var checkboxes = document.querySelectorAll('.wpcf7 input[type="radio"]');
  checkboxes.forEach(function (checkbox) {
    checkbox.addEventListener('change', function (e) {
      e.stopPropagation();
    });
  });

  var selectboxes = document.querySelectorAll('select[name="select-898"]');
  selectboxes.forEach(function (selectbox) {
    selectbox.addEventListener('change', function (e) {
      e.stopPropagation();
    });
  });
});
</script>
@endsection





