<?php
/* Template Name: Daily Life Assistance
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
        font-size: 4rem;
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

        <!-- Left Content -->
        <div class="lg:w-1/2">
            <h1 class="mt-6 text-4xl lg:text-5xl font-extrabold leading-tight">
                <span class="text-[#31B744]">Daily Life</span><br>
                <span class="text-white">Assistance</span>
            </h1>
            <p class="mt-6 text-white/80 max-w-md text-justify">
                At Disability Service Adelaide, we aim to help you live the life you want. We understand everyone has different abilities and needs, so we offer a wide range of customized services to help you reach your goals.
            </p>
            <a href="<?php echo site_url('/service'); ?>" 
               class="inline-block bg-green-700 text-white px-6 py-3 mt-8 rounded-lg font-semibold hover:bg-yellow-500 transition">
                Back to Services
            </a>
        </div>

        <!-- Right Image -->
        <div class="lg:w-1/2 flex justify-center">
            <div class="bg-white p-6 rounded-3xl shadow-xl hover:shadow-2xl transition duration-300">
                <img src="<?php echo get_template_directory_uri(); ?>/images/daily.jpg" 
                     alt="Daily Life Assistance" 
                     class="rounded-2xl shadow-lg w-full max-w-lg h-[400px] object-cover">
            </div>
        </div>
    </div>

    <!-- Curvy Bottom Shape -->
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
            <div style="position:relative; z-index:10; text-align:center;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/clean_team.png" 
                     alt="Daily Assistance"
                     style="width:100%; max-width:1500px; height:auto; transition:all 0.5s ease; display:inline-block;"
                     onmouseover="this.style.transform='scale(1.05)';"
                     onmouseout="this.style.transform='scale(1)';">
            </div>
        </div>

        <!-- Right Content -->
        <div class="text-black">
            <span class="uppercase text-sm font-semibold tracking-wide px-3 py-1 text-black rounded">
                Daily Life Assistance
            </span>
            <h2 class="text-3xl md:text-4xl font-bold mt-6 leading-snug">
                Helping you strengthen your ability and live the life you want.
            </h2>
            <p class="mt-4 text-lg leading-relaxed">
                Whether it’s assistance at home or in the community, we provide professional and compassionate support for your day-to-day activities. From personal chores to social participation, our team ensures active and empowering support.
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
                Daily Life Assistance Services
            </h2>
            <p class="mt-4 text-lg text-dark">
                We assist you with essential personal tasks and community participation, making everyday living easier, safer, and more independent.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-3 gap-12">
            <div class="service-card animate-fade-up">
                <div class="service-image">🚿</div>
                <div class="service-text">
                    <h3>Showering & Dressing</h3>
                    <p>Support with bathing, grooming, and getting dressed to maintain comfort and dignity every day.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-100">
                <div class="service-image">🛏️</div>
                <div class="service-text">
                    <h3>Getting In & Out of Bed</h3>
                    <p>Assistance with safe transfers to and from bed, reducing risks and improving mobility.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-200">
                <div class="service-image">🚶</div>
                <div class="service-text">
                    <h3>Mobilizing Around the House</h3>
                    <p>Helping you move safely within your home to increase independence and reduce falls.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-300">
                <div class="service-image">🧴</div>
                <div class="service-text">
                    <h3>Personal Hygiene & Grooming</h3>
                    <p>From brushing teeth to shaving, we ensure you look and feel your best every day.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-400">
                <div class="service-image">🤝</div>
                <div class="service-text">
                    <h3>Community Participation</h3>
                    <p>Support in getting out, attending events, and interacting with others to stay socially engaged.</p>
                </div>
            </div>

            <div class="service-card animate-fade-up delay-500">
                <div class="service-image">🍲</div>
                <div class="service-text">
                    <h3>Food & Meal Preparation</h3>
                    <p>Helping plan, prepare, and cook healthy meals to ensure your dietary needs are met daily.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
