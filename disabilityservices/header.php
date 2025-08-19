<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Blue grid pattern background */
        .pattern-bg {
            background-color: #0065AC;
            background-image:
                linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px),
                linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
            background-size: 60px 60px;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="relative pattern-bg text-white pb-32 overflow-hidden">

    <!-- Navigation Bar -->
    <div class="pt-6 relative z-20">
        <nav class="bg-white backdrop-blur-md shadow-lg px-8 py-4 flex items-center justify-between w-full max-w-6xl mx-auto rounded-full border border-gray-200">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/disability-services_logo.png" alt="Qlinest Logo" class="h-8">
            </a>

            <!-- Menu -->
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'hidden md:flex space-x-8 font-medium text-gray-700',
                'fallback_cb'    => false
            ]);
            ?>

            <!-- Contact Button -->
            <a href="#contact" class="bg-green-500 text-white px-5 py-2 rounded-full font-medium hover:bg-yellow-400 hover:text-green-500 transition">
             Contact Us
            </a>

        </nav>
    </div>

    <!-- Hero Content (aligned with navbar width) -->
    <div class="max-w-6xl mx-auto px-8 mt-16 flex flex-col lg:flex-row items-center gap-12 relative z-10">
        
        <!-- Text -->
        <div class="lg:w-1/2">
            <span class="bg-white/20 px-4 py-1 rounded-full text-sm">A Cleaner Home, A Happier You</span>
           <h1 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                  <span class="text-sky-300">Empowering Lives</span><br>
                  Start With <span class="text-white">Care & Support</span>
           </h1>
            <p class="mt-6 text-white/80 max-w-md">
             We provide compassionate, reliable, and personalized disability support services designed to enhance independence, well-being, and quality of life.
            </p>
            <div class="mt-8 flex items-center gap-4 flex-wrap">
               <a href="#book" 
                   class="bg-green-700 text-[#1E73BE] px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition">
                   Book Now
               </a>
              Explore Services
            </div>
        </div>

        <!-- Image -->
        
        
        <div class="lg:w-1/2 flex justify-center">
         <div class="bg-gray-100 p-4 rounded-2xl">
               <img src="<?php echo get_template_directory_uri(); ?>/images/dis.jpg" 
               alt="Cleaning Team" 
               class="rounded-2xl shadow-lg max-w-md w-full">
         </div>
        </div>

    </div>

    <!-- Logo Row (aligned with navbar) -->
    <div class="max-w-6xl mx-auto px-8 mt-12 flex flex-wrap items-center justify-center gap-8 opacity-80 relative z-10">
        <img src="<?php echo get_template_directory_uri(); ?>/images/fb.png" alt="logo" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/images/twitt.png" alt="logo" class="h-10">
        <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="logo" class="h-10">
    </div>

    <!-- Wavy SVG Bottom -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
            <path fill="#ffffff" fill-opacity="1" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
        </svg>
    </div>

</section>

<?php wp_footer(); ?>
</body>
</html>
