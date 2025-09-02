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
      <button 
        aria-label="Play Video" 
        class="absolute inset-0 flex items-center justify-center text-white bg-black/30 hover:bg-black/50 transition rounded-3xl backdrop-blur-sm"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
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
  <div class="mt-20 max-w-7xl mx-auto px-6 sm:px-12 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">
      <h3 class="text-3xl font-bold text-gray-900">500+</h3>
      <p class="text-sm font-medium text-gray-700">Participants Supported</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">
      <h3 class="text-3xl font-bold text-gray-900">98%</h3>
      <p class="text-sm font-medium text-gray-700">Client Satisfaction</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">
      <h3 class="text-3xl font-bold text-gray-900">100%</h3>
      <p class="text-sm font-medium text-gray-700">Person-Centred Care</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow-lg hover:scale-105 transition">
      <h3 class="text-3xl font-bold text-gray-900">10+</h3>
      <p class="text-sm font-medium text-gray-700">Years of Experience</p>
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
    <h2 class="text-3xl font-bold text-primary mb-4">Our Mission</h2>
    <p class="text-gray-700 text-lg mb-6">
      We strive to create a world where every individual with disabilities has access to support, opportunities, and dignity.
      Our programs are tailored to empower participants and foster inclusive communities.
    </p>
    <a href="<?php echo site_url('/contact'); ?>" class="inline-block px-6 py-3 btn-primary rounded-lg font-semibold transition">
      Contact Us
    </a>
  </div>
</section>

<?php get_footer(); ?>
