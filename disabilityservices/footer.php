<style>
  .footer-bg {
    background-color: #0065AC; /* custom hex code */
  }
</style>

<footer class="relative footer-bg text-white pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-6 sm:px-12">
    <!-- Top Info -->
    <p class="text-sm text-gray-300 mb-8">
      Trusted by many people/organization in Adelaide, Australia.
    </p>
    <hr class="border-gray-600 mb-12" />

    <!-- Top Text and Button -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
      <p class="text-center md:text-left text-lg text-white">
        You can contact us if you have any queries about our services. We’d love to hear from you!
      </p>
      <a href="<?php echo site_url('/contact'); ?>" class="inline-block px-6 py-3 bg-white text-black font-semibold rounded-lg transition hover:bg-gray-100">
        Get in Touch
      </a>
    </div>

    <!-- Links & Contact Info -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
      <!-- Navigation Links -->
      <div class="space-y-2">
        <a href="<?php echo site_url('/'); ?>" class="block hover:underline">Home</a>
        <a href="<?php echo site_url('/about-us'); ?>" class="block hover:underline">About Us</a>
        <a href="<?php echo site_url('/service'); ?>" class="block hover:underline">Services</a>
        <a href="<?php echo site_url('/contact'); ?>" class="block hover:underline">Contact Us</a>
       
      </div>

      <!-- Empty column -->
      <div></div>

      <!-- Contact Info -->
      <div class="space-y-6">
        <div class="flex items-center gap-3">
          <i class="fas fa-phone-alt text-xl"></i>
          <div>
            <p class="text-sm text-gray-300">Talk to an expert</p>
            <p class="font-semibold text-white">08 8266 4868</p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <i class="fas fa-paper-plane text-xl"></i>
          <div>
            <p class="text-sm text-gray-300">Have any Questions?</p>
            <p class="font-semibold">
              <a href="mailto:info@disabilityservicesadelaide.com.au" class="hover:underline text-white">
                info@disabilityservicesadelaide.com.au
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Social Media Icons -->
    <div class="flex justify-center md:justify-start gap-6 mb-8">
      <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f text-lg"></i></a>
      <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter text-lg"></i></a>
      <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram text-lg"></i></a>
    </div>

    <!-- Copyright -->
    <p class="text-center md:text-left text-sm text-gray-400">
      Copyright © <?php echo date('Y'); ?> Disability Service Adelaide. 
      Designed and Developed by <span class="font-semibold">Disability Service Adelaide</span>
    </p>

    <!-- Back to top button -->
    <a href="#" class="absolute right-6 bottom-6 w-12 h-12 flex items-center justify-center bg-white text-[#0b1a4a] rounded-full shadow-lg hover:bg-gray-200 transition">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 4l-8 8h5v8h6v-8h5z"/>
      </svg>
    </a>
  </div>
</footer>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
