<?php
/* Template Name: Our Services */
get_header();
?>
<section style="position:relative; background-color:#0065AC; padding:120px 20px; overflow:hidden;">
  
  <!-- Grid Background -->
  <div style="
    position:absolute; 
    top:0; left:0; right:0; bottom:0; 
    background-image:linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px), 
                      linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size:60px 60px;
    z-index:0;">
  </div>

  <!-- Content -->
  <div style="position:relative; max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between; z-index:1;">
    
    <!-- Left Text -->
    <div style="flex:1 1 500px; padding:0 20px 40px 0; color:#fff; min-width:300px;">
      <h2 style="font-size:46px; font-weight:800; line-height:1.2; margin-bottom:20px;">
        Passionately driven team providing a wide range of services.
      </h2>
      <p style="font-size:18px; opacity:0.9; margin-bottom:30px;">
        We provide world-class support for you and your loved ones.
      </p>
      <a href="#services-section" style="display:inline-block; background:#ffffff; color:#0065AC; padding:12px 30px; border-radius:8px; font-size:16px; text-decoration:none; transition:0.3s;">
        Explore Our Services
      </a>
    </div>

    <!-- Right Image -->
    <div style="flex:1 1 400px; padding:0 20px; text-align:center; min-width:300px;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/dis.jpg" alt="About Us" style="max-width:80%; height:auto;">
    </div>

  </div>

  <!-- Bottom Wave Curve (Exact Style) -->
   <div style="position:absolute; bottom:-1px; left:0; width:100%; overflow:hidden; line-height:0;">
    <svg viewBox="0 0 1000 120" preserveAspectRatio="none" style="position:relative; display:block; width:calc(130% + 1.3px); height:120px;">
      <path d="M321.39,56.44c58-10.79,114.25-30.13,172-41.86C638.68,3.77,694.77-3.19,750,1.52c63.42,5.26,124.82,27.36,186,42.71,66.86,16.88,132.31,19.44,199,9.72V120H0V16.48C84.09,43.23,161.94,67.23,246,77.84,288.46,83.07,321.39,56.44,321.39,56.44Z" style="fill:#ffffff;"></path>
    </svg>
  </div>

</section>


<section id="services-section" style="position:relative; padding:100px 20px; overflow:hidden; background:#ffffff;">
  <h2 style="font-size:40px; font-weight:bold; text-align:center; color:#004080; margin-bottom:60px;">
    Our Services
  </h2>

  <!-- Services Cards Container -->
  <div style="display:flex; gap:35px; flex-wrap:wrap; justify-content:center; position:relative; z-index:1;">
    <!-- Domestic Cleaning -->
    <div class="service-card" style="width:330px; text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/girlss.png" alt="Domestic Cleaning" style="width:100%; margin:0 auto 20px; border-radius:16px;">
      <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Domestic Cleaning And Household Task</h3>
      <p style="font-size:16px; color:#333;">Household cleaning and maintenance tasks handled with care.</p>
      <a href="<?php echo site_url('/domestic-cleaning'); ?>" class="learn-btn">Learn More</a>
    </div>

    <!-- Gardening & Maintenance -->
    <div class="service-card" style="width:330px; text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/garden.jpg" alt="Gardening & Maintenance" style="width:100%; margin:0 auto 20px; border-radius:16px;">
      <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Gardening & Home Maintenance</h3>
      <p style="font-size:16px; color:#333;">Keep your home garden fresh, beautiful, and well-maintained.</p>
      <a href="<?php echo site_url('/gardening-maintenance'); ?>" class="learn-btn">Learn More</a>
    </div>

    <!-- Daily Life Assistance -->
    <div class="service-card" style="width:330px; text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/daily.jpg" alt="Daily Life Assistance" style="width:100%; margin:0 auto 20px; border-radius:16px;">
      <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Daily Life Assistance</h3>
      <p style="font-size:16px; color:#333;">Helping with everyday needs and personal assistance.</p>
      <a href="<?php echo site_url('/daily-life-assistance'); ?>" class="learn-btn">Learn More</a>
    </div>

    <!-- Transport Support -->
    <div class="service-card" style="width:330px; text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/transport.jpg" alt="Transport Support" style="width:100%; margin:0 auto 20px; border-radius:16px;">
      <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Transport Support</h3>
      <p style="font-size:16px; color:#333;">Safe and reliable transport services for all your needs.</p>
      <a href="<?php echo site_url('/transport-support'); ?>" class="learn-btn">Learn More</a>
    </div>

    <!-- Social & Respite Care -->
    <div class="service-card" style="width:330px; text-align:center;">
      <img src="<?php echo get_template_directory_uri(); ?>/images/social.jpg" alt="Social & Respite Care" style="width:100%; margin:0 auto 20px; border-radius:16px;">
      <h3 style="font-size:24px; font-weight:700; color:#0065AC; margin-bottom:12px;">Social Support & In-house Respite Care</h3>
      <p style="font-size:16px; color:#333;">Supportive care and companionship, including in-house respite care.</p>
      <a href="<?php echo site_url('/social-respite-care'); ?>" class="learn-btn">Learn More</a>
    </div>
  </div>

  <!-- Floating Circles Background -->
  <div class="circle-bg">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Curvy Bottom Wave -->
  <svg style="position:absolute; bottom:0; left:0; width:100%; height:120px;" viewBox="0 0 1440 120" xmlns="http://www.w3.org/2000/svg">
    <path fill="#ffffff" d="M0,0 C360,120 1080,0 1440,120 L1440,120 L0,120 Z"></path>
  </svg>

  <!-- Styles -->
  <style>
    /* Service Cards */
    .service-card {
      background-color: #ffffff;
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 12px 28px rgba(0,0,0,0.14);
      transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
      cursor: pointer;
      z-index: 1;
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

    /* Floating Circles */
    .circle-bg {
      position:absolute;
      top:0; left:0; width:100%; height:100%; pointer-events:none; overflow:hidden; z-index:0;
    }
    .circle-bg div {
      position:absolute;
      border-radius:50%;
      background:rgba(0,100,172,0.05);
      animation:float 20s linear infinite;
    }
    .circle-bg div:nth-child(1) { width:100px; height:100px; top:10%; left:5%; animation-duration:25s; }
    .circle-bg div:nth-child(2) { width:60px; height:60px; top:20%; right:10%; animation-duration:18s; }
    .circle-bg div:nth-child(3) { width:80px; height:80px; bottom:15%; left:15%; animation-duration:22s; }
    .circle-bg div:nth-child(4) { width:120px; height:120px; bottom:10%; right:5%; animation-duration:30s; }
    .circle-bg div:nth-child(5) { width:50px; height:50px; top:50%; left:50%; animation-duration:28s; }

    @keyframes float {
      0% { transform: translateY(0) translateX(0); }
      50% { transform: translateY(20px) translateX(20px); }
      100% { transform: translateY(0) translateX(0); }
    }
  </style>
</section>
<!-- Services Section -->
<section class="relative py-20 text-center patterns-bg">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Heading -->
    <div class="mb-16">
      <span class="inline-block px-4 py-1 text-sm font-semibold text-white bg-accent rounded">
        OUR SERVICES
      </span>
      <h2 class="mt-6 text-3xl md:text-4xl font-bold text-dark">
        We provide range of services for the people living <br />
        with disability or elderly people in their own environment.
      </h2>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-3 gap-12">
      <!-- Service 1 -->
      <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
        <div class="text-5xl mb-4 text-accent">💡</div>
        <p class="text-dark">
          We can provide private tailored service to meet your needs.
        </p>
      </div>

      <!-- Service 2 -->
      <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
        <div class="text-5xl mb-4 text-accent">⚙️</div>
        <p class="text-dark">
          We provide control, choice and flexibility on our personalized service under the NDIS plan.
        </p>
      </div>

      <!-- Service 3 -->
      <div class="p-6 bg-white rounded-2xl shadow-md hover:shadow-lg transition">
        <div class="text-5xl mb-4 text-accent">🏠</div>
        <p class="text-dark">
          We can provide aged care services in your own home through a brokerage agreement or private agreement.
        </p>
      </div>
    </div>
  </div>
</section>

<style>
  .patterns-bg {
    background-color: #e0f2ff; /* light blue */
    background-image:
      linear-gradient(90deg, rgba(0,100,172,0.1) 1px, transparent 1px),
      linear-gradient(rgba(0,100,172,0.1) 1px, transparent 1px);
    background-size: cover;
    background-repeat: no-repeat;
  }

  .text-dark {
    color: #1e2a38;
  }

  .bg-accent {
    background-color: #22c55e;
  }

  .text-accent {
    color: #ff4500;
  }
</style>











<?php get_footer(); ?>
