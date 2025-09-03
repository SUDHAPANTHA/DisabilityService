<?php
/* Template Name: Domestic Cleaning
    Template Post Type: page
*/
get_header();
?>

<style>
    body {
        font-family: 'Inter', sans-serif;
    }

    /* Pattern Background */
    .pattern-bg {
        background-color: #0065AC;
        background-image:
            linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px),
            linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
        background-size: 60px 60px;
    }

    /* Button Style */
    .btn-custom {
        background-color: #0065AC;
        color: #fff;
        padding: 0.75rem 1.5rem;
        border-radius: 0.75rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .btn-custom:hover {
        background-color: #31B744;
    }

    /* Accent Colors */
    .bg-accent { background-color: #5ef0b6ff; }
    .text-accent { color: #31B744; }

    /* Services Section */
    .patterns-bg {
        background-color: #e0f2ff;
        position: relative;
    }
    .text-dark { color: #1e2a38; }

    /* Card Styling */
    .service-card {
        background: #fff;
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        transition: all 0.4s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        height: 100%;
    }
    .service-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }
    .service-image {
        font-size: 5rem;
        margin: 1.5rem 0 1rem 0;
    }
    .service-text {
        padding: 1.5rem;
        flex: 1;
    }
    .service-text h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }
    .service-text p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.6;
    }

    /* Animations */
    @keyframes fadeUp {
        0% { opacity: 0; transform: translateY(20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-fade-up {
        animation: fadeUp 0.8s ease forwards;
    }
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }
</style>

<!-- Hero Section -->
<section class="relative pattern-bg text-white pb-32 overflow-hidden">
    <div class="max-w-6xl mx-auto px-8 mt-16 flex flex-col lg:flex-row items-center gap-12 relative z-10">
        <!-- Text -->
        <div class="lg:w-1/2">
            <h1 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                <span class="text-white">Domestic Cleaning</span><br>
                <span class="text-white py-4">and Household Tasks</span>
            </h1>
            <p class="mt-6 text-white/80 max-w-md text-justify">
                Our team ensures your home is clean, safe, and comfortable. From daily household cleaning to specialized maintenance, we provide support tailored to your needs.
            </p>
             <a href="<?php echo site_url('/service'); ?>" 
               class="inline-block bg-green-700 text-white px-6 py-3 mt-8 rounded-lg font-semibold hover:bg-yellow-500 transition">
                Back to Services
            </a>
        </div>

        <!-- Image -->
        <div class="lg:w-1/2 flex justify-center">
            <div class="bg-gray-100 p-4 rounded-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/girlss.png" 
                     alt="Domestic Cleaning" 
                     class="rounded-2xl shadow-lg max-w-md w-full">
            </div>
        </div>
    </div>

    <!-- Wavy Bottom -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
            <path fill="#ffffff" fill-opacity="1" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
        </svg>
    </div>
</section>

<!-- Info Section -->
<section class="services-info py-16 px-6">
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Left Image -->
        <div style="display:flex; justify-content:center; align-items:center; padding:3rem 0; background:#fff; position:relative; overflow:hidden;">
            <!-- Brush Stroke Background -->
            <div style="
                position:absolute; top:70%; left:60%; 
                transform:translate(-50%,-50%) rotate(-3deg);
                width:80%; max-width:1600px; height:70%; 
                background:#3B82F6; opacity:0.9; filter:blur(4px); 
                clip-path:polygon(
                  10% 15%, 30% 5%, 70% 10%, 90% 25%, 
                  95% 50%, 80% 75%, 60% 90%, 30% 85%, 
                  15% 70%, 5% 40%
                );
                animation:pulse 3s infinite; border-radius:20px;">
            </div>
            <!-- Foreground Image -->
            <div style="position:relative; z-index:10; text-align:center;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/clean_team.png" 
                     alt="Domestic Cleaning"
                     style="width:100%; max-width:1500px; height:auto; transition:all 0.5s ease; display:inline-block;"
                     onmouseover="this.style.transform='scale(1.05)';"
                     onmouseout="this.style.transform='scale(1)';">
            </div>
        </div>

        <!-- Right Content -->
        <div class="text-black">
            <span class="uppercase text-sm font-semibold tracking-wide px-3 py-1 text-black rounded">
                Domestic Cleaning and Household Task
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-6 leading-snug">
                We have dedicated staff who serve people living with disabilities and the elderly.
            </h2>
            <p class="mt-4 text-lg leading-relaxed">
                We provide friendly and comforting domestic assistance with excellent in-home care precisely tailored to your preferences and needs.
                Whether it’s long-term care or short-term support, we ensure your loved ones are well taken care of.
            </p>
            <p class="mt-4 text-lg leading-relaxed">
                Our staff also handles daily household tasks like regular cleaning and other chores so you can focus on more important things in life.
            </p>
            <a href="#consultation" class="btn-custom mt-6">
                Get Your Free Consultation
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="relative py-20 text-center overflow-hidden patterns-bg">
    <!-- Background Circles -->
    <div class="absolute left-0 top-1/4 w-32 h-32 bg-accent opacity-20 rounded-full blur-2xl -z-10"></div>
    <div class="absolute right-0 bottom-1/4 w-40 h-40 bg-accent opacity-20 rounded-full blur-2xl -z-10"></div>

    <div class="max-w-6xl mx-auto px-6">
        <!-- Heading -->
        <div class="mb-16">
            <span class="inline-block px-4 py-1 text-sm font-semibold text-white bg-accent rounded">
                OUR SERVICES
            </span>
            <h2 class="mt-6 text-3xl md:text-4xl font-bold text-dark">
                Domestic Cleaning & Household Tasks
            </h2>
            <p class="mt-4 text-lg text-dark">
                Comprehensive cleaning and household support services to help you maintain a clean, safe, and comfortable living environment.
            </p>
        </div>

        <!-- Services Grid with Bigger Image Area -->
        <div class="grid md:grid-cols-3 gap-12">
            <div class="service-card animate-fade-up">
                <div class="service-image">🧹</div>
                <div class="service-text">
                    <h3>General Cleaning</h3>
                    <p>Dusting, vacuuming, mopping, and surface cleaning to keep your home spotless.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-100">
                <div class="service-image">🧼</div>
                <div class="service-text">
                    <h3>Kitchen & Bathroom Cleaning</h3>
                    <p>Thorough cleaning of kitchen and bathroom surfaces, including sinks and taps.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-200">
                <div class="service-image">🧺</div>
                <div class="service-text">
                    <h3>Laundry Assistance</h3>
                    <p>Washing, drying, ironing, and folding clothes and linen for your convenience.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-300">
                <div class="service-image">🍳</div>
                <div class="service-text">
                    <h3>Cleaning the Kitchen</h3>
                    <p>We clean countertops, appliances, and ensure your kitchen is hygienic and fresh.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-400">
                <div class="service-image">🍽️</div>
                <div class="service-text">
                    <h3>Washing the Dishes</h3>
                    <p>We take care of your dishes and utensils, keeping your sink and surfaces spotless.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-500">
                <div class="service-image">🛏️</div>
                <div class="service-text">
                    <h3>Making Beds</h3>
                    <p>We tidy up and make beds to give every room a clean and welcoming feel.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
