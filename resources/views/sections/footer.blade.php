<footer class="content-info">
  {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
  <section class="footer">
    <footer class="bg-primary text-white p-10">
      <div class="max-w-6xl mx-auto" >
          <footer class=" grid md:grid-cols-4 gap-8   py-10  ">

              <div class="text-center" >
                  <img src="{{Vite::asset('resources/images/header/logo.png')}}" alt="Logo" class="mx-auto mb-4 h-[73px]">
                  <div class="flex  justify-center  gap-4 mt-20">
                      <a target="_blank" href="https://wa.me/66838345118"><img src="{{Vite::asset('resources/images/icons/whatsapp.png')}}" alt="WhatsApp" class="w-6"></a>
                      <a target="_blank" href="https://www.facebook.com/share/173H9Nn7i6/?mibextid=wwXIfr"><img src="{{Vite::asset('resources/images/icons/facebook.png')}}" alt="Facebook" class="w-6"></a>
                      <a target="_blank" href="https://www.instagram.com/icontailoehouse?igsh=MXNhb3RlamV6enBidA=="><img src="{{Vite::asset('resources/images/icons/instergam.png')}}" alt="Instagram" class="w-6"></a>
                      <a target="_blank" href="https://www.tiktok.com/@icon_tailor_house?_t=ZS-8yEPyitMNSm&_r=1"><img src="{{Vite::asset('resources/images/icons/tiktot.png')}}" alt="TikTok" class="w-6"></a>
                      <a target="_blank" href="https://x.com/house_icon37471?s=21">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-[#9B9BB7]">
                          <path d="M18.254 3h2.792l-6.103 6.965 7.207 10.035h-5.673l-4.402-6.29-5.042 6.29H4.241l6.43-7.922L3.667 3h5.884l3.82 5.426L18.254 3zm-.987 16.218h1.54l-9.872-14h-1.64l9.972 14z"/>
                        </svg>
                      </a>
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
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-phone-line.png')}}" class="w-5">
                        <span>
                           <a href="tel:0897875470">0897875470</a>,
                           <a href="tel:+66945695499">+66945695499</a>,
                           <a href="tel:+66838345118">+66838345118</a>
                         </span>
                      </li>
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-mail-line.png')}}" class="w-5"><a href="mailto:icontailorhouse@gmail.com">icontailorhouse@gmail.com</a></li>
                      <li class="flex items-center gap-2"><img src="{{Vite::asset('resources/images/icons/ri-location.png')}}" class="w-5">859-861 Rama 4 Road,Wang Mai, Pathumwan Wan,Bangkok 10330</li>
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

document.addEventListener('wpcf7mailsent', function(event) {
  // Only trigger for specific form (optional: get ID in CF7 shortcode like [contact-form-7 id="123" ...])
  if (event.detail.contactFormId = "e9d0f9f") {
    const inputs = event.target;

    const name = inputs.querySelector('[name="text-875"]')?.value;
    const email = inputs.querySelector('[name="email-285"]')?.value;
    const phone = inputs.querySelector('[name="phonetext-149"]')?.value;
    const service_preferences = inputs.querySelector('[name="select-898"]')?.value;
    const appointment_date = inputs.querySelector('[name="datepicker-822"]')?.value;
    const location = inputs.querySelector('[name="radio-19"]')?.value;
    console.log(name,email,phone,service_preferences,appointment_date,location);


    const fullMessage = `Hello, I would like to make an appointment.
      # Name: ${name}
      # Email: ${email}
      # Phone: ${phone}
      # Service Preferences:${service_preferences}
      # Appointment Date: ${appointment_date}
      # Location: ${location}
      Thank you!`;
    const whatsappUrl = "https://wa.me/66838345118?text=" + encodeURIComponent(fullMessage);

    // Redirect to WhatsApp chat
    window.location.href = whatsappUrl;

  }
}, false);

  </script>
</footer>
