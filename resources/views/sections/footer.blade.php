<footer class="content-info">
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
  <section class="footer">
    <footer class="bg-primary text-white p-10">
      <div class="max-w-6xl mx-auto" >
          <footer class=" grid md:grid-cols-4 gap-8   py-10  ">

              <div class="text-center" >
                  <img src="{{Vite::asset('resources/images/header/logo.png')}}" alt="Logo" class="mx-auto mb-4 h-[73px]">
                  <div class="flex  justify-center  gap-4 mt-20">
                      <a href="#"><img src="{{Vite::asset('resources/images/icons/whatsapp.png')}}" alt="WhatsApp" class="w-6"></a>
                      <a href="#"><img src="{{Vite::asset('resources/images/icons/facebook.png')}}" alt="Facebook" class="w-6"></a>
                      <a href="#"><img src="{{Vite::asset('resources/images/icons/instergam.png')}}" alt="Instagram" class="w-6"></a>
                      <a href="#"><img src="{{Vite::asset('resources/images/icons/tiktot.png')}}" alt="TikTok" class="w-6"></a>
                  </div>
              </div>

              <!-- Navigation -->
              <div class="md:ms-20" >
                  <h3 class="font-bold text-[18px] mb-4">Navigation</h3>
                  <ul class="space-y-2 text-[16px] font-normal">
                      <li><a href="/about-us" class="hover:text-yellow-400">About</a></li>
                      <li><a href="/contact-us" class="hover:text-yellow-400">Contact Us</a></li>
                  </ul>
              </div>

              <!-- Quick Links -->
              <div >
                  <h3 class="font-bold text-[18px] mb-4">Quick Links</h3>
                  <ul class="space-y-2 text-[16px] font-normal">
                      <li><a href="/fabrics" class="hover:text-yellow-400">Fabrics</a></li>
                      <li><a href="/lookbook" class="hover:text-yellow-400">Lookbook</a></li>
                      <li><a href="/manswear" class="hover:text-yellow-400">Manswear</a></li>
                      <li><a href="/womenwear" class="hover:text-yellow-400">Womenwear</a></li>
                      <li><a href="/wedding" class="hover:text-yellow-400">Wedding</a></li>
                      <li><a href="lgbt" class="hover:text-yellow-400">LGBTQ</a></li>
                  </ul>
              </div>

              <!-- Information -->
              <div >
                  <h3 class="font-bold text-[18px] mb-4">Information</h3>
                  <ul class="space-y-2 text-[16px] font-normal">
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-time-line.png')}}" class="w-5"> Everyday 9:15 AM - 9:30 PM</li>
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-phone-line.png')}}" class="w-5"> 0897875470</li>
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-mail-line.png')}}" class="w-5"> icontailorhouse@gmail.com</li>
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-location.png')}}" class="w-5"> Zone 1B No 087, The Palladium World Shopping, 555 Ratchaprarop Rd, Makkasan, Ratchathewi, Bangkok.</li>
                  </ul>
              </div>
          </footer>
          <p class="text-center text-gray-400 text-sm mt-6 text-[16px]" >&copy; <?php echo date('Y') ?> Icon Tailor House</p>
      </div>
    </footer>
   </section>

   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
    AOS.init({
      duration: 1000,
      once:false,
    });
  </script>
</footer>
