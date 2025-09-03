<?php
/* Template Name: About Us */
get_header();
?>

<style>
  /* Custom Hex Colors */
  .bg-primary { background-color: #0065AC; }
  .text-primary { color: #0065AC; }
  .text-accent { color: #31B744; }
  .bg-accent { background-color: #31B744; }
  .bg-accent-dark { background-color: #2A9D8F; }
  .btn-primary { background-color: #0065AC; color: #fff; }
  .btn-primary:hover { background-color: #004080; }

  /* Grid Background */
  .bg-grid {
    background-image:
      linear-gradient(90deg, rgba(255,255,255,0.08) 1px, transparent 1px),
      linear-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
    background-size: 60px 60px;
  }
</style>

<section class="relative overflow-hidden py-20 bg-primary bg-grid">
  <!-- Decorative Circles -->
  <div class="absolute -top-10 -left-10 w-40 h-40 bg-accent rounded-full opacity-20 blur-2xl"></div>
  <div class="absolute bottom-0 right-0 w-56 h-56 bg-accent-dark rounded-full opacity-20 blur-3xl"></div>

  <div class="max-w-7xl mx-auto px-6 sm:px-12 flex flex-col lg:flex-row items-center lg:items-start gap-12">
    
    <!-- Left Image -->
    <div class="flex-1 relative rounded-3xl overflow-hidden shadow-2xl">
      <img src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" 
           alt="Disability Support Services" 
           class="w-full h-auto object-cover transform transition duration-500 hover:scale-105" />
    </div>

    <!-- Right Text Content -->
    <div class="flex-1 text-white">
      <span class="inline-block bg-gradient-to-r from-accent to-accent-dark text-xs font-semibold px-4 py-1 rounded-full mb-4 shadow-sm uppercase tracking-wider">
        About Us
      </span>
      <h2 class="text-4xl font-extrabold mb-6 leading-snug">
        Empowering Lives, <span class="text-accent">Building Inclusion</span>
      </h2>
      <p class="text-lg leading-relaxed mb-4">
        At <span class="font-semibold">Inclusive Support Services</span>, we are dedicated to supporting individuals
        with disabilities to live independent, fulfilling, and dignified lives. Every person deserves access to
        opportunities, respect, and community connection.
      </p>
      <p class="text-lg leading-relaxed">
        From personal care and daily living support to skill development, advocacy, and community engagement,
        our caring team works alongside families to remove barriers and create pathways to a more inclusive future.
      </p>
    </div>

  </div>

  <!-- Stats -->

<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8 text-center max-w-7xl mx-auto px-6 sm:px-12 mt-20">
  <div class="border-r border-white pr-4">
    <h3 class="text-4xl font-bold text-white">120+</h3>
    <p class="text-base font-medium text-white">Satisfied aged care and NDIS clients</p>
  </div>
  <div class="border-r border-white px-4">
    <h3 class="text-4xl font-bold text-white">🤝</h3>
    <p class="text-base font-medium text-white">
      Brokerage agreements with companies like LHI, MCS, and living choice
    </p>
  </div>
  <div class="border-r border-white px-4">
    <h3 class="text-4xl font-bold text-white">5,000+</h3>
    <p class="text-base font-medium text-white">Care house provided</p>
  </div>
  <div class="px-4">
    <h3 class="text-4xl font-bold text-white">10+</h3>
    <p class="text-base font-medium text-white">Years of Service</p>
  </div>
</div>


  <!-- Curvy Bottom SVG -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
      <path fill="#ffffff" fill-opacity="1" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
    </svg>
  </div>
</section>

<!-- Extra Content Section -->
<section class="py-20 bg-white text-center">
  <div class="max-w-4xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-primary mb-4">Our Story</h2>
    <p class="text-gray-700 text-lg mb-6 text-justify">
          We enable and assist you to give an empowered life. Your independence and quality of life is what we strive for.
          Disability service is a South Australian owned private aged care and disability services provider. We are dedicated to providing in-home care and support that are personalized. We provide safe environment where you can do more and live fulfilling life.
          We work closely with you, your families and support network to tailor your care plan to promote independence and choice. We are passionate about working with you and being there for you.
    </p>
    <a href="<?php echo site_url('/contact'); ?>" class="inline-block px-6 py-3 btn-primary rounded-lg font-semibold transition">
      Get Your Free Consultation
    </a>
  </div>
</section>

<?php get_footer(); ?>
