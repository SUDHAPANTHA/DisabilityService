<section  id="services-section" style="background-color:#f9fbff; padding:80px 0; overflow:hidden;">
  <div style="max-width:1200px; margin:0 auto; text-align:center;">
    <h2 style="font-size:40px; font-weight:bold; color:#004080; margin-bottom:50px;">
      Our Services
    </h2>
    
    <!-- Scrolling container -->
    <div style="display:flex; gap:35px; animation:scroll-left 35s linear infinite; width:max-content;">
      <!-- Domestic Cleaning -->
      <div class="service-card" style="width:330px; flex-shrink:0; text-align:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/girlss.png" alt="Domestic Cleaning" style="width:400px; margin:0 auto 20px; border-radius:16px;">
        <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Domestic Cleaning And Household Task</h3>
        <p style="font-size:16px; color:#333;">Household cleaning and maintenance tasks handled with care.</p>
        <a href="<?php echo site_url('/domestic-cleaning'); ?>" class="learn-btn">Learn More</a>
      </div>

      <!-- Gardening & Maintenance -->
      <div class="service-card" style="width:330px; flex-shrink:0; text-align:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/garden.jpg" alt="Gardening & Maintenance" style="width:400px; margin:0 auto 20px; border-radius:16px;">
        <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Gardening & Home Maintenance</h3>
        <p style="font-size:16px; color:#333;">Keep your home garden fresh, beautiful, and well-maintained.</p>
        <a href="<?php echo site_url('/gardening-maintenance'); ?>" class="learn-btn">Learn More</a>
      </div>

      <!-- Daily Life Assistance -->
      <div class="service-card" style="width:330px; flex-shrink:0; text-align:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/daily.jpg" alt="Daily Life Assistance" style="width:400px; margin:0 auto 20px; border-radius:16px;">
        <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Daily Life Assistance</h3>
        <p style="font-size:16px; color:#333;">Helping with everyday needs and personal assistance.</p>
        <a href="<?php echo site_url('/daily-life-assistance'); ?>" class="learn-btn">Learn More</a>
      </div>

      <!-- Transport Support -->
      <div class="service-card" style="width:330px; flex-shrink:0; text-align:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/transport.jpg" alt="Transport Support" style="width:400px; margin:0 auto 20px; border-radius:16px;">
        <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Transport Support</h3>
        <p style="font-size:16px; color:#333;">Safe and reliable transport services for all your needs.</p>
        <a href="<?php echo site_url('/transport-support'); ?>" class="learn-btn">Learn More</a>
      </div>

      <!-- Social & Respite Care -->
      <div class="service-card" style="width:330px; flex-shrink:0; text-align:center;">
        <img src="<?php echo get_template_directory_uri(); ?>/images/social.jpg" alt="Social & Respite Care" style="width:400px; margin:0 auto 20px; border-radius:16px;">
        <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Social Support & In-house Respite Care</h3>
        <p style="font-size:16px; color:#333;">Supportive care and companionship, including in-house respite care.</p>
        <a href="<?php echo site_url('/social-respite-care'); ?>" class="learn-btn">Learn More</a>
      </div>

    </div>
  </div>

  <!-- Extra Styles -->
  <style>
    @keyframes scroll-left {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    .service-card {
      background-color: #ffffff;
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 12px 28px rgba(0,0,0,0.14);
      transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
      cursor: pointer;
    }
    .service-card:hover {
      transform: translateY(-15px) scale(1.05) rotateX(2deg);
      box-shadow: 0 25px 60px rgba(0,0,0,0.25);
      background: linear-gradient(135deg, #e0f0ff, #ffffff);
    }
    .service-card img {
      transition: transform 0.4s ease, filter 0.4s ease;
    }
    .service-card:hover img {
      transform: scale(1.05) rotate(-1deg);
      filter: brightness(1.1);
    }
    .learn-btn {
      display:inline-block;
      margin-top:15px;
      padding:10px 20px;
      background:#0065AC;
      color:#fff;
      border-radius:8px;
      text-decoration:none;
      transition:0.3s;
    }
    .learn-btn:hover {
      background:#004080;
    }
  </style>
</section>
