<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
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
 <!-- Navigation Bar -->
    <div class=" pattern-bg pt-12 relative z-20">
       <nav class="bg-white backdrop-blur-md shadow-lg px-8 py-4 flex items-center justify-between w-full max-w-6xl mx-auto rounded-l-xl rounded-r-xl border border-gray-200">
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/disability-services_logo.png" alt="Qlinest Logo" class="h-14">
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




<?php wp_footer(); ?>
</body>
</html>
