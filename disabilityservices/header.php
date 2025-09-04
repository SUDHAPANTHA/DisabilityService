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

        /* Dropdown Styling */
        .menu-item-has-children {
            position: relative;
        }
        .menu-item-has-children > ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #ffffff;
            min-width: 180px;
            border: 1px solid #e5e7eb;
            border-radius: 0.5rem;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            z-index: 50;
        }
        .menu-item-has-children:hover > ul {
            display: block;
        }
        .menu-item-has-children > ul li a {
            display: block;
            padding: 10px 14px;
            color: #374151;
            transition: all 0.2s;
        }
        .menu-item-has-children > ul li a:hover {
            background: #f3f4f6;
            color: #2563eb;
        }
    </style>
</head>
<body <?php body_class(); ?>>
 <!-- Navigation Bar -->
    <div class="pattern-bg pt-8 relative z-20">
        <nav class="bg-white backdrop-blur-md shadow-lg px-8 py-4 flex items-center justify-between w-full max-w-6xl mx-auto rounded-lg border border-gray-200 relative">
            
            <!-- Logo -->
            <a href="<?php echo home_url(); ?>" class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri(); ?>/images/disability-services_logo.png" alt="Logo" class="h-14">
            </a>

            <!-- Hamburger (Mobile) -->
            <button id="mobile-menu-toggle" class="md:hidden text-gray-700 focus:outline-none z-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <!-- Menu -->
            <div id="menu-container" 
                 class="hidden md:flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0 
                        absolute md:static top-20 left-0 w-full bg-white md:bg-transparent 
                        md:w-auto shadow-lg md:shadow-none p-6 md:p-0 z-40">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col md:flex-row md:space-x-8 space-y-4 md:space-y-0',
                    'fallback_cb'    => false
                ]);
                ?>
            </div>

            <!-- Contact Button (Desktop) -->
            <a href="<?php echo site_url('/contact'); ?>" 
               class="bg-blue-500 text-white px-5 py-2 rounded-full font-medium hover:bg-green-600 hover:text-white transition duration-300 hidden md:inline-block">
               Need Help?
            </a>
        </nav>

        <!-- Mobile Contact Button (Always visible below navbar) -->
        <div id="mobile-contact" class="md:hidden px-8 py-3">
            <a href="<?php echo site_url('/contact'); ?>" 
               class="w-full block text-center bg-blue-500 text-white px-5 py-2 rounded-full font-medium hover:bg-green-600 hover:text-white transition duration-300">
               Need Help?
            </a>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("mobile-menu-toggle");
            const menu = document.getElementById("menu-container");

            toggleBtn.addEventListener("click", function() {
                menu.classList.toggle("hidden");
            });
        });
    </script>

<?php wp_footer(); ?>
</body>
</html>
