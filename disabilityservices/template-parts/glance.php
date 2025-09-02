<section class="py-20 bg-gradient-to-b from-[#f9fafb] to-[#eef2f7] relative overflow-hidden">
  <!-- Decorative Circles -->
  <div class="absolute -top-16 -left-16 w-40 h-40 bg-blue-500 rounded-full opacity-20"></div>
  <div class="absolute -bottom-16 right-20 w-56 h-56 bg-blue-400 rounded-full opacity-15"></div>
  <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-gradient-to-r from-blue-300 via-blue-500 to-blue-400 rounded-full opacity-10 mix-blend-multiply"></div>

  <div class="max-w-6xl mx-auto px-6 text-center relative z-10" x-data="{ open: null }">
    <!-- Title -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4">
      Disability Services at a Glance
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto text-lg">
      Providing care, support, and community-driven services with dedication.
    </p>

    <!-- Cards Grid -->
    <div class="mt-12 grid gap-8 md:grid-cols-3">
      
      <!-- Card 1 -->
      <div @click="open='services'" 
           class="bg-white px-6 py-10 rounded-2xl shadow-lg border hover:shadow-2xl cursor-pointer transition transform hover:scale-105 group relative">
        <div class="text-4xl text-[#279a3b] mb-4">💚</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Our Services</h3>
        <p class="text-gray-600">NDIS, aged and private care support.</p>
        <span class="absolute inset-0 bg-gradient-to-r from-[#279a3b] to-green-500 opacity-0 group-hover:opacity-10 transition"></span>
      </div>

      <!-- Card 2 -->
      <div @click="open='management'" 
           class="bg-white px-6 py-10 rounded-2xl shadow-lg border hover:shadow-2xl cursor-pointer transition transform hover:scale-105 group relative">
        <div class="text-4xl text-[#279a3b] mb-4">👩‍⚕️</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">Nurses Led Management</h3>
        <p class="text-gray-600">Care managed by expert nurses.</p>
        <span class="absolute inset-0 bg-gradient-to-r from-[#279a3b] to-green-500 opacity-0 group-hover:opacity-10 transition"></span>
      </div>

      <!-- Card 3 -->
      <div @click="open='dsa'" 
           class="bg-white px-6 py-10 rounded-2xl shadow-lg border hover:shadow-2xl cursor-pointer transition transform hover:scale-105 group relative">
        <div class="text-4xl text-[#279a3b] mb-4">🌏</div>
        <h3 class="text-xl font-bold text-gray-900 mb-2">South Australia Owned</h3>
        <p class="text-gray-600">Proudly supporting the community.</p>
        <span class="absolute inset-0 bg-gradient-to-r from-[#279a3b] to-green-500 opacity-0 group-hover:opacity-10 transition"></span>
      </div>
    </div>

    <!-- Popup Modal -->
    <div x-show="open" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50" x-transition>
      <div class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-6 relative" @click.away="open=null" x-transition>
        <button @click="open=null" class="absolute top-3 right-3 text-gray-600 hover:text-black">✖</button>
        
        <!-- Services Content -->
        <template x-if="open==='services'">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/ndis.jpg" class="rounded-lg mb-4" alt="NDIS Services">
            <h3 class="text-xl font-bold text-gray-900">NDIS, Aged and Private Care</h3>
            <p class="mt-2 text-gray-600">Our professional team provides disability support, aged care, and private services tailored to each individual’s needs.</p>
          </div>
        </template>

        <!-- Management Content -->
        <template x-if="open==='management'">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/nurses.jpg" class="rounded-lg mb-4" alt="Nurses Management">
            <h3 class="text-xl font-bold text-gray-900">Nurses Led Management Team</h3>
            <p class="mt-2 text-gray-600">Our management team consists of experienced nurses ensuring high-quality care standards and compassionate support.</p>
          </div>
        </template>

        <!-- DSA Content -->
        <template x-if="open==='dsa'">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/dsa.jpg" class="rounded-lg mb-4" alt="DSA">
            <h3 class="text-xl font-bold text-gray-900">South Australia Owned - DSA</h3>
            <p class="mt-2 text-gray-600">Proudly South Australian owned, Disability Services Australia (DSA) is committed to supporting the local community.</p>
          </div>
        </template>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
