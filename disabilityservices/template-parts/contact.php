

<!-- Contact Hero Section (White background) -->
<section style="background:#fff; position:relative; padding:6rem 0 0 0; overflow:visible;">

  <div style="max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-between; gap:2rem; padding:0 1.5rem; position:relative;">

    <!-- Left Content -->
    <div style="flex:1 1 50%; padding-top:2rem; z-index:5; position:relative;">
      <h2 style="font-size:2rem; font-weight:700; color:#111; margin-bottom:1rem;">Drop us a line and  let's talk.</h2>
      <p style="font-size:1rem; color:#4b5563; line-height:1.6; max-width:400px;">
       Fill out This Form and Tell us a Little About You. We'll Get Back To You WithIn One Business Day
      </p>
    </div>

    <!-- Contact Form -->
    <div style="flex:1 1 45%; max-width:420px; background:#fff; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.12); padding:2rem; z-index:10; position:relative;">
      <h3 style="font-size:1.35rem; font-weight:700; color:#31B744; margin-bottom:1.5rem; text-align:center;">
        Need help?
      </h3>

      <!-- ✅ Success message -->
      <?php if(isset($_GET['success'])): ?>
        <div style="margin-bottom:1rem; padding:.75rem 1rem; border-radius:8px; background:#d1fae5; color:#065f46; font-weight:600; text-align:center;">
          Your message has been sent successfully!
        </div>
      <?php endif; ?>

      <!-- ✅ Fixed Form -->
      <form method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" style="display:grid; gap:1.2rem;">
        <input type="hidden" name="action" value="contact_form_submit">
        <?php wp_nonce_field('contact_form_nonce', 'contact_form_nonce_field'); ?>

        <!-- Name fields -->
        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:1rem;">
          <input type="text" name="first_name" placeholder="First Name"
            style="border:1px solid #e5e7eb; padding:.75rem 1rem; border-radius:8px; outline:none; transition:all .2s; font-size:.95rem; box-sizing:border-box; width:100%;"
            onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.2)';"
            onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';" required>

          <input type="text" name="last_name" placeholder="Last Name"
            style="border:1px solid #e5e7eb; padding:.75rem 1rem; border-radius:8px; outline:none; transition:all .2s; font-size:.95rem; box-sizing:border-box; width:100%;"
            onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.2)';"
            onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';" required>
        </div>

        <!-- Contact fields -->
        <div style="display:grid; grid-template-columns:repeat(2,1fr); gap:1rem;">
          <input type="email" name="email" placeholder="Email"
            style="border:1px solid #e5e7eb; padding:.75rem 1rem; border-radius:8px; outline:none; transition:all .2s; font-size:.95rem; box-sizing:border-box; width:100%;"
            onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.2)';"
            onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';" required>

          <input type="tel" name="phone" placeholder="Phone Number"
            style="border:1px solid #e5e7eb; padding:.75rem 1rem; border-radius:8px; outline:none; transition:all .2s; font-size:.95rem; box-sizing:border-box; width:100%;"
            onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.2)';"
            onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';">
        </div>

        <!-- Message -->
        <textarea name="message" placeholder="Message" rows="4"
          style="border:1px solid #e5e7eb; padding:.75rem 1rem; border-radius:8px; outline:none; transition:all .2s; font-size:.95rem; box-sizing:border-box; width:100%; resize:none;"
          onfocus="this.style.borderColor='#2563eb'; this.style.boxShadow='0 0 0 3px rgba(37,99,235,0.2)';"
          onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='none';" required></textarea>

        <!-- Button -->
        <button type="submit"
          style="padding:.85rem; background:linear-gradient(90deg,#2563eb,#1d4ed8); color:#fff; font-weight:600; border:none; border-radius:8px; cursor:pointer; font-size:1rem; transition:all .3s;">
          SUBMIT
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Blue Airplane Section -->
<section style="background:#0065AC; margin-top:-100px; padding:160px 0 100px 0; position:relative; z-index:1; overflow:hidden;">
  <!-- Decorations -->
  <div style="position:absolute; top:-40px; left:-40px; width:100px; height:100px; background:rgba(255,255,255,0.15); border-radius:50%;"></div>
  <div style="position:absolute; bottom:-80px; right:-80px; width:200px; height:200px; background:rgba(255,255,255,0.15); border-radius:50%;"></div>
  <div style="position:absolute; top:60px; left:100px; width:20px; height:20px; background:rgba(255,255,255,0.25); border-radius:50%;"></div>
  <div style="position:absolute; top:120px; left:180px; width:15px; height:15px; background:rgba(255,255,255,0.2); border-radius:50%;"></div>
  <div style="position:absolute; top:200px; left:60px; width:25px; height:25px; background:rgba(255,255,255,0.3); border-radius:50%;"></div>
  <div style="position:absolute; bottom:140px; right:200px; width:18px; height:18px; background:rgba(255,255,255,0.25); border-radius:50%;"></div>
  <div style="position:absolute; bottom:220px; right:150px; width:12px; height:12px; background:rgba(255,255,255,0.2); border-radius:50%;"></div>
  <div style="position:absolute; bottom:300px; right:250px; width:22px; height:22px; background:rgba(255,255,255,0.3); border-radius:50%;"></div>

  <!-- Content -->
  <div style="max-width:1200px; margin:0 auto; text-align:center; color:#fff; font-size:1.25rem; font-weight:600; position:relative; z-index:2;">
    Disability Support Services Adelaide (DSSA) is committed to providing high-quality care and assistance 
    tailored to your individual needs. If you or your loved one require support, guidance, or have any questions, 
    we are here to help. Please don’t hesitate to reach out to our friendly team for more information 
    about our services and how we can assist you.
  </div>
</section>

<!-- Contact Info Section -->
<section class="bg-[#f9fbff] py-16">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-900 mb-12">
      We’re here for you
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-gray-300 text-center">
      
      <!-- Location -->
      <div class="flex flex-col items-center p-6">
        <svg xmlns="http://www.w3.org/2000/svg" 
          class="h-10 w-10 text-[#0065AC] mb-4" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 22s8-4.5 8-10a8 8 0 10-16 0c0 5.5 8 10 8 10z" />
        </svg>
        <p class="font-semibold text-gray-900 mb-1">Location</p>
        <p class="text-gray-600">55 Rellum Road, Greenacres SA</p>
      </div>

      <!-- Office Hours -->
      <div class="flex flex-col items-center p-6">
        <svg xmlns="http://www.w3.org/2000/svg" 
          class="h-10 w-10 text-[#0065AC] mb-4" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <p class="font-semibold text-gray-900 mb-1">Office Hours</p>
        <p class="text-gray-600">Mon - Fri: 9am - 5pm</p>
      </div>

      <!-- Email -->
      <div class="flex flex-col items-center p-6">
        <svg xmlns="http://www.w3.org/2000/svg" 
          class="h-10 w-10  mb-4" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M16 12H8m8 0l-8-5m0 10l8-5M4 6h16v12H4z" />
        </svg>
        <p class="font-semibold text-gray-900 mb-1">Email</p>
        <p class="text-gray-600 break-all text-center">
          info@disabilityservicesadelaide.com.au
        </p>
      </div>

      <!-- Live Chat -->
      <div class="flex flex-col items-center p-6">
        <svg xmlns="http://www.w3.org/2000/svg" 
          class="h-10 w-10 text-[#0065AC] mb-4" fill="none" 
          viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 
            012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
        </svg>
        <p class="font-semibold text-gray-900 mb-1">Support</p>
        <p class="text-gray-600">Live Chat Available</p>
      </div>

    </div>
  </div>
</section>




