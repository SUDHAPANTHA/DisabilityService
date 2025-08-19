
<style>
  .template-section {
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
</style>
<section class="template-section relative text-white">
    <div class="bg-[rgba(0,0,50,0.7)] py-20">
        <div class="max-w-6xl mx-auto text-center px-4">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold">We are passionate</h1>
            <p class="mt-4 text-sm md:text-base opacity-80">about working with you and being there for you.</p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 mt-8 flex-wrap">
                <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded font-bold">Get to Know us Better</a>
                <a href="tel:0882664868" class="bg-white text-black hover:bg-gray-200 px-6 py-3 rounded font-bold">Call Us : 08 8266 4868</a>
            </div>

            <!-- Stats -->
            <div class="mt-16 flex flex-col md:flex-row justify-around items-center gap-10">
                <!-- Stat 1 -->
                <div class="text-center">
                    <p class="text-sm opacity-80">Satisfied Aged care<br>and NDIS clients</p>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2">120+</h2>
                </div>

                <!-- Stat 2 -->
                <div class="text-center">
                    <p class="text-sm opacity-80">Brokerage agreements with companies like<br>LHI, MCS, and living choice</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/handshake-icon.png" alt="Handshake" class="w-12 mx-auto mt-2">
                </div>

                <!-- Stat 3 -->
                <div class="text-center">
                    <p class="text-sm opacity-80">Care Hours provided</p>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2">5,000+</h2>
                </div>
            </div>
        </div>
         <!-- Curvy Bottom SVG -->
  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
      <path fill="#ffffff" fill-opacity="1" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
    </svg>
  </div>
    </div>
</section>
