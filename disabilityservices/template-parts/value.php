<style>
  .belief-badge {
    display: inline-block;
    background: linear-gradient(90deg, #31B744, #2a9d8f); 
    color: #fff;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 6px 18px;
    border-radius: 9999px;
    letter-spacing: 1px;
    text-transform: uppercase;
    box-shadow: 0 4px 12px rgba(49, 183, 68, 0.3);
  }

  /* Decorative circles */
  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.08); 
    z-index: 0;
  }
  .circle.small { width: 80px; height: 80px; }
  .circle.medium { width: 150px; height: 150px; }
  .circle.large { width: 220px; height: 220px; }

  /* Card hover effect */
  .value-card {
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    background: #fff; 
  }
  .value-card::before {
    content: "";
    position: absolute;
    top: -100%;
    left: -100%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(49,183,68,0.15) 0%, transparent 70%);
    transition: all 0.5s ease;
    opacity: 0;
  }
  .value-card:hover::before {
    top: 0;
    left: 0;
    opacity: 1;
  }
  .value-card:hover {
    transform: translateY(-10px) scale(1.05);
    box-shadow: 0 12px 30px rgba(0, 101, 172, 0.25);
  }

  .values-section {
    background-color: #0065AC;
    position: relative;
    padding-top: 5rem;
    padding-bottom: 8rem; /* increased bottom padding for space */
    overflow: hidden;
    background-image:
      linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px),
      linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
  }
</style>

<section class="values-section relative overflow-hidden">
  <!-- Decorative circles -->
  <div class="circle small" style="top:40px; left:30px;"></div>
  <div class="circle medium" style="top:200px; right:80px;"></div>
  <div class="circle large" style="bottom:-60px; left:50%; transform:translateX(-50%);"></div>
  <div class="circle small" style="bottom:100px; left:10%;"></div>
  <div class="circle medium" style="top:100px; right:20%;"></div>

  <div class="relative max-w-7xl mx-auto px-6 text-center z-10">
    <span class="belief-badge">WHAT WE BELIEVE</span>
    <h2 class="mt-6 text-2xl md:text-4xl font-bold leading-tight text-white">
      Our values reflect our commitment to make a<br />
      positive difference in people’s lives and communities they live in.
    </h2>

    <!-- Cards -->
    <div id="cards-container" class="mt-14 grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Card 1 -->
      <div class="value-card p-10 rounded-2xl shadow-lg hover:shadow-2xl">
        <div class="text-5xl mb-4">😊</div>
        <h3 class="text-xl font-bold">Adaptability & Collaboration</h3>
        <p class="mt-3 text-base text-black leading-relaxed">
          We work closely with you and your families to provide services best suited for you. 
          Building strong relationships ensures the most out of your services.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="value-card p-10 rounded-2xl shadow-lg hover:shadow-2xl">
        <div class="text-5xl mb-4 ">🍃</div>
        <h3 class="text-xl font-bold ">Integrity & Respect</h3>
        <p class="mt-3 text-base text-black leading-relaxed">
          We nurture meaningful connections with integrity and respect. 
          Inclusiveness is at the heart of everything we do.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="value-card p-10 rounded-2xl shadow-lg hover:shadow-2xl">
        <div class="text-5xl mb-4 ">☮️</div>
        <h3 class="text-xl font-bold ">Excellence</h3>
        <p class="mt-3 text-base text-black leading-relaxed">
          We strive for continuous improvement and innovation, 
          ensuring you receive the highest quality of services.
        </p>
      </div>
    </div>
  </div>
</section>
