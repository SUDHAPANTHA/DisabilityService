<style>
  .template-section {
    background-color: #e0f2ff; /* light blue */
    position: relative;
    padding-top: 5rem;
    padding-bottom: 0;
    overflow: hidden;
  }

  /* Only top-left and bottom-right big circles */
  .circle {
    position: absolute;
    border-radius: 50%;
    z-index: 0;
  }
  .circle-top-left {
    width: 300px;
    height: 300px;
    top: -150px;
    left: -150px;
    background: rgba(0, 133, 255, 0.2);
  }
  .circle-bottom-right {
    width: 350px;
    height: 350px;
    bottom: -175px;
    right: -175px;
    background: rgba(0, 133, 255, 0.2);
  }

  /* Text and buttons above circles */
  .content-wrapper { position: relative; z-index: 10; }

  .btn-primary {
    background-color: #0065AC;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: bold;
    transition: all 0.3s ease;
  }
  .btn-primary:hover { background-color: #004080; }

  .btn-secondary {
    background-color: white;
    color: #0065AC;
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    font-weight: bold;
    transition: all 0.3s ease;
  }
  .btn-secondary:hover { background-color: #f0f8ff; }

  h1 { color: #004080; }
  p { color: #003366; }
</style>

<section class="template-section relative">
    <!-- Top-left and Bottom-right circles -->
    <div class="circle circle-top-left"></div>
    <div class="circle circle-bottom-right"></div>

    <div class="py-20 content-wrapper">
        <div class="max-w-6xl mx-auto text-center px-4">
            <!-- Title -->
            <h1 class="text-4xl md:text-5xl font-bold">We are passionate</h1>
            <p class="mt-4 text-sm md:text-base opacity-90">about working with you and being there for you.</p>

            <!-- Buttons -->
            <div class="flex justify-center gap-4 mt-8 flex-wrap">
                <a href="#" class="btn-primary">Get to Know us Better</a>
                <a href="tel:0882664868" class="btn-secondary">Call Us : 08 8266 4868</a>
            </div>

            <!-- Stats -->
            <div class="mt-16 flex flex-col md:flex-row justify-around items-center gap-10">
                <div class="text-center">
                    <p class="text-sm opacity-80">Satisfied Aged care<br>and NDIS clients</p>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2" id="clients">0+</h2>
                </div>
                <div class="text-center">
                    <p class="text-sm opacity-80">Brokerage agreements with companies like<br>LHI, MCS, and living choice</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/handshake-icon.png" alt="Handshake" class="w-12 mx-auto mt-2">
                </div>
                <div class="text-center">
                    <p class="text-sm opacity-80">Care Hours provided</p>
                    <h2 class="text-3xl md:text-4xl font-bold mt-2" id="hours">0+</h2>
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

<script>
  function animateNumber(id, target, duration) {
    const element = document.getElementById(id);
    let start = 0;
    let startTime = null;

    function update(timestamp) {
      if (!startTime) startTime = timestamp;
      let progress = (timestamp - startTime) / duration;
      let value = Math.min(Math.floor(progress * target), target);

      element.innerText = value.toLocaleString() + '+';

      if (value < target) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  // Run both animations slowly
  animateNumber('clients', 120, 6000); // 6 seconds
  animateNumber('hours', 5000, 10000); // 10 seconds
</script>




