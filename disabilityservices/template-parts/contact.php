

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
   Disability Support Services Australia (DSSA) is here to help you navigate the complexities of the F-1 visa process with ease and confidence.
  </div>
</section>

<!-- Contact Info Section -->
<section style="background:#f9fbff; padding:60px 0;">
  <div style="max-width:1200px; margin:0 auto; padding:0 1.5rem;">
    <h2 style="font-size:1.75rem; font-weight:700; margin-bottom:2rem; color:#111;">We’re here for you.</h2>
    
    <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:1.5rem;">
      <div style="background:#fff; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:1.5rem;">
        <p style="font-weight:600; margin-bottom:.5rem;">Location</p>
        <p style="color:#4B5563;">55 Rellum Road Greenacres SA</p>
      </div>
      <div style="background:#fff; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:1.5rem;">
        <p style="font-weight:600; margin-bottom:.5rem;">Office Hours</p>
        <p style="color:#4B5563;">Monday - Friday: 9am - 5pm</p>
      </div>
      <div style="background:#fff; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:1.5rem;">
        <p style="font-weight:600; margin-bottom:.5rem;">Email</p>
        <p style="color:#4B5563;">info@disabbilityservicesadelaoide.com.au</p>
      </div>
      <div style="background:#fff; border-radius:8px; box-shadow:0 4px 8px rgba(0,0,0,0.1); padding:1.5rem;">
        <p style="font-weight:600; margin-bottom:.5rem;">Simple & easy form</p>
        <p style="color:#4B5563;">Live Chat</p>
      </div>
    </div>
  </div>
</section>


