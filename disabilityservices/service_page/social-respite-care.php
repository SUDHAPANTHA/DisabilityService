<?php
/* Template Name: Social Respite Care 
    Template Post Type: page */
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
<section class="relative pattern-bg text-white pb-32 overflow-hidden">
    <div class="max-w-6xl mx-auto px-8 mt-16 flex flex-col lg:flex-row items-center gap-12 relative z-10">

        <div class="lg:w-1/2">
            <h1 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                <span class="text-[#31B744]">Social Support</span><br>
                <span class="text-white">& In-house Respite Care</span>
            </h1>
            <p class="mt-6 text-white/80 max-w-md text-justify">
                We provide companionship, social interaction, and short-term in-house respite care for families who need reliable support.
            </p>
            <a href="<?php echo site_url('/service'); ?>" 
               class="inline-block bg-green-700 text-white px-6 py-3 mt-8 rounded-lg font-semibold hover:bg-yellow-500 transition">
                Back to Services
            </a>
        </div>

        <div class="lg:w-1/2 flex justify-center">
            <div class="bg-gray-100 p-4 rounded-2xl">
                <img src="<?php echo get_template_directory_uri(); ?>/images/social.jpg" alt="Social Support" class="rounded-2xl shadow-lg max-w-md w-full">
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="relative block w-full h-40">
            <path fill="#ffffff" d="M0,256 C360,160 1080,360 1440,224 L1440,320 L0,320 Z"></path>
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
               Respite Care
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-6 leading-snug">
                Rest to the Body, Solace to the Mind
            </h2>
            <p class="mt-4 text-lg leading-relaxed">
                We believe rest to the body and solace to the mind are essentials for anybody. For the times you need away from your responsibilities to restore your energy, we support you with respite care.
            </p>
            <p class="mt-4 text-lg leading-relaxed">
                We offer in-house respite care where our professional staff comes to your house and provides care services to your family and friends. Your breaks can be as long or short as you need them to be — a few hours, a day, a few days, or even weeks.
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

    <div class="max-w-7xl mx-auto px-6">
        <!-- Heading -->
        <div class="mb-16">
            <span class="inline-block px-4 py-1 text-sm font-semibold text-white bg-accent rounded">
                OUR IN-HOUSE RESPITE CARE
            </span>
            <h2 class="mt-6 text-3xl md:text-4xl font-bold text-dark">
                Services We Provide
            </h2>
            <p class="mt-4 text-lg text-dark">
                Tailored care designed to make your loved ones feel safe, comfortable, and valued.
            </p>
        </div>

        <!-- Services Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 justify-items-center">
            <!-- Card 1 -->
            <div class="service-card animate-fade-up">
                <div class="service-image text-5xl mb-4">🧑‍⚕️</div>
                <div class="service-text">
                    <h3 class="text-xl font-semibold">Providing Personal Care</h3>
                    <p class="mt-2 text-gray-600">Assistance with daily routines like grooming, bathing, and dressing.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="service-card animate-fade-up delay-100">
                <div class="service-image text-5xl mb-4">🚗</div>
                <div class="service-text">
                    <h3 class="text-xl font-semibold">Transportation Services</h3>
                    <p class="mt-2 text-gray-600">Safe and reliable transport for medical visits and community activities.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="service-card animate-fade-up delay-200">
                <div class="service-image text-5xl mb-4">👥</div>
                <div class="service-text">
                    <h3 class="text-xl font-semibold">Community Participation</h3>
                    <p class="mt-2 text-gray-600">Engagement in community programs and social interactions.</p>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 justify-center mt-10 max-w-4xl mx-auto">
            <!-- Card 4 -->
            <div class="service-card animate-fade-up delay-300">
                <div class="service-image text-5xl mb-4">🍲</div>
                <div class="service-text">
                    <h3 class="text-xl font-semibold">Meal Preparation</h3>
                    <p class="mt-2 text-gray-600">Nutritious meals prepared with care to meet dietary needs.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="service-card animate-fade-up delay-400">
                <div class="service-image text-5xl mb-4">💊</div>
                <div class="service-text">
                    <h3 class="text-xl font-semibold">Medication Assistance</h3>
                    <p class="mt-2 text-gray-600">Reminders and support with safe medication management.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
