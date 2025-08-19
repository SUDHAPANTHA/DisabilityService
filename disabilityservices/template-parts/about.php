
<style>
  .about-section {
    background-color: #0065AC;
    position: relative;
    padding-top: 5rem;
    padding-bottom: 0;
    overflow: hidden;
    background-image:
      linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
  }
  .about-badge {
    display: inline-block;
    background: linear-gradient(90deg, #31B744, #2a9d8f); /* gradient green-teal */
    color: #fff;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 6px 18px;
    border-radius: 9999px; 
    letter-spacing: 1px;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(49, 183, 68, 0.3);
  }
</style>
<section class="about-section">
  <!-- Decorative circles -->
  <div class="absolute -top-10 -left-10 w-40 h-40 bg-green-300 rounded-full opacity-20 blur-2xl"></div>
  <div class="absolute bottom-0 right-0 w-56 h-56 bg-green-400 rounded-full opacity-20 blur-3xl"></div>
  
  <div class="max-w-7xl mx-auto px-6 sm:px-12 pb-28">
    <!-- Text Content -->
    <div class="max-w-3xl mx-auto text-center mb-12">
      <span class=" about-badge inline-block text-xs px-4 py-1 font-semibold mb-4 shadow-sm">
        ABOUT US
      </span>
      <h2 class="text-4xl font-extrabold text-white mb-6 leading-snug">
        Empowering Lives, <span class="text-green-300">Building Inclusion</span>
      </h2>
      <p class="text-white/90 leading-relaxed text-lg">
        At <span class="font-semibold">Inclusive Support Services</span>, we are dedicated to supporting individuals
        with disabilities to live independent, fulfilling, and dignified lives. We believe that every person
        deserves access to opportunities, respect, and community connection.
      </p>
      <p class="mt-4 text-white/90 leading-relaxed text-lg">
        From personal care and daily living support to skill development, advocacy, and community engagement,
        we tailor our services to each person’s unique needs. Our caring team works alongside families to remove
        barriers and create pathways to a more inclusive future.
      </p>
    </div>

    <!-- Image with play button -->
    <div class="relative rounded-3xl overflow-hidden shadow-2xl group max-w-5xl mx-auto">
      <img src="your-image.jpg" 
           alt="Disability Support Services" 
           class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-500" />
      <button 
        aria-label="Play Video" 
        class="absolute inset-0 flex items-center justify-center text-white bg-black/30 hover:bg-black/50 transition rounded-3xl backdrop-blur-sm"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 drop-shadow-lg" fill="currentColor" viewBox="0 0 24 24">
          <path d="M8 5v14l11-7z" />
        </svg>
      </button>
    </div>

    <!-- Stats -->
    <!-- Stats -->
<div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
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

  </div>

  <!-- Curvy Bottom SVG -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
      <path fill="#ffffff" fill-opacity="1" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
    </svg>
  </div>
</section>
