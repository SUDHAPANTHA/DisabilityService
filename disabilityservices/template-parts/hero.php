


<style>
    body {
        font-family: 'Inter', sans-serif;
    }

    /* Blue grid pattern background */
    .pattern-bg {
        background-color: #0065AC;
        background-image:
            linear-gradient(90deg, rgba(255, 255, 255, 0.05) 1px, transparent 1px),
            linear-gradient(rgba(255, 255, 255, 0.05) 1px, transparent 1px);
        background-size: 60px 60px;
    }
</style>

<section class="relative pattern-bg text-white pb-32 overflow-hidden">
    
    <!-- Hero Content -->
    <div class="max-w-6xl mx-auto px-8 mt-16 flex flex-col lg:flex-row items-center gap-12 relative z-10">
        
        <!-- Left: Text -->
        <div class="lg:w-1/2">
            <h1 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                <span class="text-white">Disability Service</span><br>
                <span class="text-white py-4">Adelaide</span>
            </h1>

            <p class="mt-6 text-white max-w-md text-justify">
                Our well-trained professionals are dedicated to providing the best care and support 
                for individuals with disabilities. We focus on enhancing quality of life through 
                personalized services, community engagement, and a commitment to excellence.
            </p>

            <!-- CTA Button -->
            <div class="mt-8 flex items-center gap-4 flex-wrap">
             <a href="#book" 
                  class="bg-green-700 px-6 py-3 rounded-lg font-semibold hover:bg-blue-400 transition duration-300">
                  Explore Our Services
             </a>
           </div>

        </div>

        <!-- Right: Image -->
        <div class="lg:w-1/2 flex justify-center">
            <div class="bg-gray-100 p-4 rounded-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/dis.jpg" 
                     alt="Disability Support Team" 
                     class="rounded-2xl shadow-lg max-w-md w-full">
            </div>
        </div>
    </div>

    <!-- Social Media Links -->
    <div class="max-w-6xl mx-auto px-8 mt-12 flex flex-wrap items-center justify-center gap-8 opacity-80 relative z-10">
        
        <!-- Facebook -->
        <a href="https://www.facebook.com/DisabilityServicesAdelaide" 
           target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" 
                 alt="Facebook" 
                 class="h-10 hover:opacity-100 transition-opacity duration-300">
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/disability_services_adelaide/" 
           target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" 
                 alt="Instagram" 
                 class="h-10 hover:opacity-100 transition-opacity duration-300">
        </a>
    </div>

    <!-- Wavy SVG Bottom -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" 
             viewBox="0 0 1440 320" 
             preserveAspectRatio="none" 
             class="relative block w-full h-40">
            <path fill="#f9fbff" fill-opacity="1" 
                  d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z">
            </path>
        </svg>
    </div>

</section>
