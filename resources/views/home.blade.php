<x-layouts.app>
  <x-slot name="header">
    <x-navbar />
  </x-slot>
  <section id="home" class="min-h-screen px-6 py-32 md:flex md:items-center py-0">
    <div class="max-w-4xl mx-auto text-center">
      <div class="md:my-8 my-4 flex flex-col-reverse items-center md:flex-row justify-center md:gap-12" x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)">
        <div class="w-full md:w-1/2 text-center md:text-left"
        x-show="show"
        x-transition:enter="transition ease-out duration-700"
        x-transition:enter-start="transition translate-x-12 opacity-0"
        x-transition:enter-end="transition translate-x-0 opacity-100">
          <h1 class="mt-2 text-3xl md:text-6xl font-bold leading-tight">Happy Anniversary, <br /> <span class="text-purple-300"> Sayang 💜</span></h1>
          
          <p class="mt-6 text-base md:text-xl text-white/80 leading-relaxed">
            Makasih ya udah selalu support aku,
            dan ngebuat aku percaya diri.
            Aku seneng banget bisa tumbuh bareng sama kamu.
          </p>
          <p class="mt-6 text-sm text-white/60">
            - WanXSky
          </p>
        </div>
        <div 
        x-show="show"
        x-transition:enter="transition ease-out duration-700 delay-200"
        x-transition:enter-start="opacity-0 translate-x-12 rotate-0"
        x-transition:enter-end="opacity-100 translate-x-0 rotate-3"
        class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-lg md:rounded-sm p-3 pb-4 shadow-2xl w-60 md:w-1/2 md:rotate-3 md:bg-white">
           <img 
           src="/asset/image/IMG-20250723-WA0039.jpg"
           loading="lazy"
           class="w-full h-70 md:h-96 object-cover"
           alt="" />
           <p class="bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent text-sm md:text-xl mt-2 md:text-black"> Our Moment💜</p>
        </div>
      </div>
      <div
      class="relative z-10 max-w-7xl mx-auto px-6 mt-24 text-center"
      x-data="countdown('2026-07-22T00:00:00')"
      x-init="start()"
      x-transition:enter="transition ease-out duration-700"
      x-transition:enter-start="opacity-0 translate-y-8"
      x-transition:enter-end="opacity-100 translate-y-0">
      <p class="mt-20 text-sm uppercase tracking-widest text-white/60 mb-4">
        Counting every second with you</p>
      <h2 class="text-2xl md:text-4xl font-bold mb-8">
        Our Next Anniversary 💜 </h2>
      <div class="flex justify-center gap-4 md:gap-8">
        <div class="bg-white/10 backdrop-blur px-4 py-3 rounded-lg w-20 md:w-28">
          <div class="text-3xl md:text-4xl font-bold" x-text="days"></div>
          <div class="text-xs mt-1 text-white/60">Days</div>
        </div>
        <div class="bg-white/10 backdrop-blur px-4 py-3 rounded-lg w-20 md:w-28">
          <div class="text-3xl md:text-4xl font-bold" x-text="hours"></div>
          <div class="text-xs mt-1 text-white/60">Hours</div>
        </div>
        <div class="bg-white/10 backdrop-blur px-4 py-3 rounded-lg w-20 md:w-28">
          <div class="text-3xl md:text-4xl font-bold" x-text="minutes"></div>
          <div class="text-xs mt-1 text-white/60">Minutes</div>
        </div>
        <div class="bg-white/10 backdrop-blur px-4 py-3 rounded-lg w-20 md:w-28">
          <div class="text-3xl md:text-4xl font-bold" x-text="seconds"></div>
          <div class="text-xs mt-1 text-white/60">Seconds</div>
        </div>
      </div>
      </div>
    </div>
  </section>
  <section id="about" class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-16">
        <h2 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">About Us</h2>
        <p class="text-white/60">Cerita tentang kita</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 hover:bg-white/10 transition-all duration-500">
          <div class="text-6xl mb-6">👫</div>
          <div class="text-3xl font-bold mb-4">Our Story</div>
          <p class="text-white/70 leading-relaxed mb-6">
            Berawal cuma nanyain kabar kamu kenapa gak masuk sekolah dan akhirnya nyoba buat buka diri.
          </p>
          <p class="text-white/70 leading-relaxed">
           Awal-awal sih sama sama gengsi dan gak ada yang mau ngalah. tapi seiring berjalan-nya waktu kita makin sering bertukar cerita satu sama lain.
          </p>
          <br />
          <p class="text-white/70 leading-relaxed">
            Dan setelah itu banyak masa-masa yang dimana kita sibuk masing-masing. saat itu aku masih ngerasa belum pantas buat dapetin kamu (Siti Salma).
          </p>
          <br />
          <p class="text-white/70 leading-relaxed">
            Seketika dapet kabar kamu mau Jakarta dan saat itu aku bingung, aku nanya ke diri sendiri "kenapa dia harus ngabarin aku?".<br />
            Dan akhirnya kita ketemu lagi setelah tiga tahun lebih gak ketemu. Dari situ lah kita bisa liat orang nya secara langsung bisa ngobrol dan ternyata setelah kenal lebih dalam kamu tuh orang nya effort banget. kamu bela-belain datang cuma buat mastiin doang dan akhir nya kita pacaran.<br />
            Dan semenjak itu hidup ku jadi gak terlalu flat banget dan lebih grounded.
          </p>
        </div>
        <div class="space-y-6">
          <x-small-card>
          <x-slot name="icon">💕</x-slot>
          <x-slot name="title">Commitment</x-slot>
          Aku mau kita selalu ingat satu hal: Apapun yang terjadi nanti, yang kita lawan adalah masalahnya, bukan orangnya. Kita satu tim, bukan lawan. Komitmen buat aku bukan cuma janji di awal, tapi keputusan buat tetap bertahan pas keadaan lagi nggak baik-baik aja.
        </x-small-card>
          <x-small-card>
          <x-slot name="icon">🌟</x-slot>
          <x-slot name="title">Trust</x-slot>
          Saling percaya satu sama lain. Kalo ada yang bikin ganggu ngomong jangan diem aja. Kepercayaan itu mahal, dan cara jaganya cuma satu: kejujuran. Aku bakal selalu terbuka sama kamu, dan aku harap kamu juga gitu ke aku.
        </x-small-card>
          <x-small-card>
          <x-slot name="icon">🎯</x-slot>
          <x-slot name="title">Goals</x-slot>
          Jadilah pribadi yang lebih baik. Senangin diri sendiri dulu setelah itu satu sama lain. Tujuan aku simpel: aku mau kita sukses bareng-bareng. Kamu dukung progres aku, aku dukung semua mimpi kamu sampai kita nggak perlu LDR-an lagi.
        </x-small-card>
        </div>
      </div>
    </div>
  </section>
  <section id="memories" class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-6xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2 class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">Sweet Memories</h2>
        <p class="text-white/60">Momen-momen berharga yang tak terlupakan</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <x-image-card>
          <x-slot name="image">
            <img src="/asset/image/IMG-20250723-WA0088.jpg" class="h-full object-cover w-full" />
          </x-slot>
          <x-slot name="title">First Date</x-slot>
          Hari pertama yang mengubah alur cerita 
        </x-image-card>
        <x-image-card>
          <x-slot name="image">
            <img src="/asset/image/IMG-20250724-WA0078.jpg" alt="Foto kamu" class="h-full w-full object-cover" />
          </x-slot>
          <x-slot name="title"> Your Photo </x-slot>
          Foto kamu waktu ke BI
        </x-image-card>
        <x-image-card>
          <x-slot name="image">
            <img src="/asset/image/IMG-20250723-WA0044.jpg" alt="Foto aku" class="h-full w-full object-cover" />
          </x-slot>
          <x-slot name="title"> My Photo</x-slot>
          Foto aku waktu ke BI
        </x-image-card>
      </div>
    </div>
  </section>
  <section id="reasons" class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-6xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-white to-red-200 mb-4 bg-clip-text text-transparent">
          Why I Love You
        </h2>
        <p class="text-white/60">Alasan aku mencintai kamu</p>
      </div>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <x-small-card>
          <x-slot name="icon">✨</x-slot>
          <x-slot name="title">Your Smile</x-slot>
          Rasanya Tenang banget kalo liat senyummu.
        </x-small-card>
        <x-small-card>
          <x-slot name="icon">🌙</x-slot>
          <x-slot name="title">Your Presence</x-slot>
          Kalo gak ada kamu rasanya pasti datar banget gak ada yang bikin ceria, gak ada yang diajak cerita, dan rasanya gak tenang aja kalo cerita sama orang lain
        </x-small-card>
        <x-small-card>
          <x-slot name="icon">💫</x-slot>
          <x-slot name="title">Your Soul</x-slot>
          Kita tuh kaya Yin dan Yang kita tuh berlawanan tapi saling melengkapi satu sama lain.
        </x-small-card>
        <x-small-card>
          <x-slot name="icon">💖</x-slot>
          <x-slot name="title">Your Laugh</x-slot>
          Ketawamu bikin aku ikutan ketawa rasanya lepas aja gitu kaya anak kecil.
        </x-small-card>
        <x-small-card>
          <x-slot name="icon">🌸</x-slot>
          <x-slot name="title">Your Care</x-slot>
          Aku tau kamu tuh asli-nya peduli tapi gengsi aja buat nunjukin-nya, Kaya waktu awal aku salah kamu marahin aku dan kasih tau. 
        </x-small-card>
        <x-small-card>
          <x-slot name="icon">🎯</x-slot>
          <x-slot name="title">Your Support</x-slot>
          Kamu selalu support aku dari dulu sampe sekarang gak berubah, semua kegiatan yang baik kamu pasti support
        </x-small-card>
      </div>
    </div>
  </section>
  <section id="timeline" class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-4xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2 class="text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent md:text-6xl">
          Our Journey
        </h2>
        <p class="text-white/60">Perjalanan cinta kita</p>
      </div>
      <div class="space-y-12 relative">
        <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-transparent via-white to-transparent hidden md:block"></div>
        <div class="flex flex-col gap-8 items-center md:flex-row">
          <div class="flex-1 text-right">
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
              <div class="text-sm text-white/50 mb-2">April 2018</div>
              <h3 class="text-xl font-bold mb-2">First Know</h3>
              <p class="text-white/60 text-sm">Berawal dari nanya kenapa.</p>
            </div>
          </div>
          <div class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black items-center flex justify-center text-2xl relative z-10">
            💝
          </div>
          <div class="hidden flex-1 md:block"></div>
        </div>
        <div class="flex flex-col gap-8 items-center md:flex-row">
          <div class="flex-1 hidden md:block"></div>
          <div class="w-12 h-12 rounded-full bg-red-500/30 border-4 border-black items-center flex justify-center text-2xl relative z-10">
            💕
          </div>
          <div class="flex-1 md:text-left">
            <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-500">
              <div class="text-sm text-white/50 mb-2">Juli 2025</div>
              <h3 class="text-xl font-bold mb-2">First Date</h3>
              <p class="text-white/60 text-sm">Tiba-tiba banget kamu ke Jakarta dan akhirnya fact-to-face juga.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="gallery" class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-6xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2 class="text-5xl font-bold bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent md:text-6xl">
          Our Gallery
        </h2>
        <p class="text-white/60">Koleksi Moment bahagia kita.</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <x-gallery-card>
          <img src="/asset/image/IMG-20260122-WA0002.jpg" alt="" class="object-cover">
        </x-gallery-card>
        <x-gallery-card>
          <img src="/asset/image/IMG-20250723-WA0067.jpg" alt="" class="object-cover">
        </x-gallery-card>
        <x-gallery-card>
          <img src="/asset/image/IMG-20260122-WA0001.jpg" alt="" class="object-cover">
        </x-gallery-card>
        <x-gallery-card>
          <img src="/asset/image/IMG-20250723-WA0057.jpg" alt="" class="object-cover">
        </x-gallery-card>
        <div class="aspect-squere bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500 md:col-span-2">
          <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-indigo-500/20 flex items-center justify-center text-6xl group-hover:scale-110 transition-transform duration-500">
            <img src="/asset/image/IMG-20250723-WA0085.jpg" alt="5" class="w-full h-full object-cover" />
          </div>
        </div>
        <x-gallery-card>
          <img src="/asset/image/IMG-20250723-WA0035.jpg" alt="" class="object-cover">
        </x-gallery-card>
        <x-gallery-card>
          <img src="/asset/image/IMG-20260122-WA0000.jpg" alt="" class="object-cover">
        </x-gallery-card>
      </div>
      <div class="mt-12 text-center">
        <button class="bg-white/5 backdrop-blur-xl border border-white/10 px-8 py-3 rounded-full hover:bg-white/10 transition-all duration-300 text-sm">View All Photos</button>
      </div>
    </div>
  </section>
  <section class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-3xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2 class="text-5xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent md:text-6xl">A Letter For Youu</h2>
        <p class="text-white/60">Sebuah pesan dari akuu</p>
      </div>
      <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 md:p-12">
        <div class="text-6xl mb-8 text-center">💌</div>
        <div class="space-y-6 text-white/80 leading-relaxed">
          <p> Sayang,</p>
          <p>kalau kamu bosen, yang diganti itu kegiatan nya bukan orangnya, kalo kamu mikir buat udahan, inget waktu kita mulai-nya gimana perasaan nya saat itu.</p>
          <p>Makasih udah jadi alasan aku buat tetap percaya sama diri aku sendiri. Makasih juga karna udah nerima aku dari segi baik dan buruknya. Kamu buat aku berkembang dan menjadi 1% lebih baik setiap hari-nya</p>
          <p>Aku Janji bakal bantu kamu semaksimal mungkin, lindungin kamu, dan jadi safeplace kamu buat pulang. sama kamu aku jadi tau gimana hubungan yang secure.</p>
          <p>Aku Cinta sama kamu kemarin, hari ini, dan selama-nya.</p>
          <p class="text-right italic mt-8">With Loved, <br />Orang yang paling beruntung dapetin kamu diwaktu yang tepat
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="min-h-screen flex items-center justify-center px-6 py-20">
    <div class="max-w-4xl mx-auto w-full">
      <div class="text-center mb-16">
        <h2
        class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">Love Quotes</h2>
        <p class="text-white/60">Kata-kata</p>
      </div>

      <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-12 md:p-16 text-center">
        <div class="mb-8 text-7xl">💭</div>
        <blockquote id="quote-text"
          class="text-2xl md:text-3xl text-white/90 italic mb-8 min-h-32 flex items-center justify-center">
          "Jatuh cinta itu menyenangkan, apalagi kalau kamu orangnya."
        </blockquote>
        <div class="flex justify-center gap-2 mb-8">
          <span class="w-2 h-2 rounded-full bg-white/50 cursor-pointer hover:bg-white transition-colors" data-quote="0"></span>
          <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors" data-quote="1"></span>
          <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors" data-quote="2"></span>
          <span class="w-2 h-2 rounded-full bg-white/20 cursor-pointer hover:bg-white transition-colors" data-quote="3"></span>
        </div>
        <button id="next-quote"
          class="bg-white/10 border border-white/20 px-6 py-3 rounded-full hover:bg-white/20 transition-all duration-300">
          Next Quote →
          </button>
      </div>
    </div>
  </section>
  <section
  class="min-h-screen flex items-center justify-center px-6 py-20"
  x-data="musicPlayer()"
  x-init="init()"
>
  <div class="max-w-5xl mx-auto w-full">

    <!-- HEADER (tetap dari section 1) -->
    <div class="text-center mb-16">
      <h2
        class="text-5xl md:text-6xl font-bold mb-4
        bg-gradient-to-r from-white to-red-200
        bg-clip-text text-transparent"
      >
        Our Song
      </h2>
      <p class="text-white/60">
        Lagu yang selalu mengingatkanku padamu
      </p>
    </div>

    <!-- PLAYER CONTAINER (layout section 2) -->
    <div
      class="
        bg-white/5 backdrop-blur-xl
        border border-white/10
        rounded-3xl
        shadow-2xl
        p-6 md:p-10
      "
    >
      <div class="flex flex-col md:flex-row gap-8 items-center">

        <!-- COVER -->
        <img
          :src="current.cover"
          class="w-64 h-64 md:w-80 md:h-80 rounded-2xl object-cover shadow-xl"
        />

        <!-- INFO + CONTROLS -->
        <div class="flex-1 w-full">

          <!-- SONG INFO -->
          <div class="mb-6 text-center md:text-left">
            <h3
              class="text-2xl md:text-3xl font-bold text-white"
              x-text="current.title"
            ></h3>
            <p class="text-white/60 mt-1" x-text="current.artist"></p>
          </div>

          <!-- PROGRESS -->
          <div class="mb-6">
            <input
              type="range"
              min="0"
              :max="duration"
              x-model="currentTime"
              @input="seek"
              class="w-full accent-purple-400"
            />
            <div class="flex justify-between text-xs text-white/60 mt-2">
              <span x-text="formatTime(currentTime)"></span>
              <span x-text="formatTime(duration)"></span>
            </div>
          </div>

          <!-- CONTROLS (icon dari section 2) -->
          <div class="flex items-center justify-center gap-8">
            <button @click="prev()">
              <i data-lucide="skip-back" class="w-6 h-6"></i>
            </button>

            <button
              @click="togglePlay"
              class="bg-white text-black p-5 rounded-full shadow-xl"
            >
              <i x-show="!playing" data-lucide="play" class="w-8 h-8"></i>
              <i x-show="playing" data-lucide="pause" class="w-8 h-8"></i>
            </button>

            <button @click="next()">
              <i data-lucide="skip-forward" class="w-6 h-6"></i>
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
    <section class="min-h-screen flex items-center justify-center px-6 py-20">
      <div class="max-w-6xl mx-auto w-full">
        <div class="text-center mb-16">
          <h2
          class="text-5xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">My Promises</h2>
          <p class="text-white/60">Janji-janji yang akan selalu aku tepati</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <x-small-card>
            <x-slot name="icon">🤝</x-slot>
            <x-slot name="title">Always Be There</x-slot>
            Aku janji bakal selalu ada buat kamu gimanapun keadaannya dan apapun yang terjadi. Aku gak akan biarin kamu ngerasa sendiri
          </x-small-card>
          <x-small-card>
            <x-slot name="icon">💪</x-slot>
            <x-slot name="title">Support Your Dreams</x-slot>
            Aku bakal selalu Support mimpimu selagi itu baik dan membantu dirimu ataupun orang lain dan Semoga kita bisa wujudin mimpi kita masing-masing
          </x-small-card>
          <x-small-card>
            <x-slot name="icon">😊</x-slot>
            <x-slot name="title">Make You Smile</x-slot>
            Senyummu gak ada obat, Manis banget.
          </x-small-card>
          <x-small-card>
            <x-slot name="icon">🌱</x-slot>
            <x-slot name="title">Grow Toghether</x-slot>
            Ayo terus sama-sama berkembang dari hari kemarin. Menjadi 1% lebih baik.
          </x-small-card>
        </div>
      </div>
    </section>
    <section class="min-h-screen flex items-center justify-center px-6 py-20">
      <div class="max-w-4xl mx-auto w-full text-center">
        <div class="mb-12 float">
          <div class="text-9xl">💝</div>
        </div>

          <h2
          class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-red-200 bg-clip-text text-transparent">
                    Will You Be Mine?
          </h2>

          <p class="text-xl md:text-2xl text-white/70 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Sedikit momen bareng kamu banyak mulihin energy buat aku.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <button
            class="bg-gradient-to-r from-purple-500 to-indigo-500 text-white font-bold px-12 py-5 rounded-full hover:scale-105 transition-all duration-300 shadow-2xl text-lg">
              Yes, Forever! 💕
          </button>
          <button
          class="bg-white/10 border border-white/20 text-white font-semibold px-12 py-5 rounded-full hover:bg-white/20 transition-all duration-300 text-lg">
            Maybe Later 😊
          </button>
        </div>

        <p class="text-white/40 text-sm mt-12">Just kidding, kamu udah tau jawabannya 😉</p>
      </div>
    </section>
  <x-slot name="footer">
    <footer class="py-20 px-6 border-t border-white/10">
      <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
          <div>
            <h3 class="text-2xl font-bold mb-4">❤️ For You</h3>
            <p class="text-white/60 text-sm">Made with infinite love and devotion for someone who means the
                            world to me, Salma.</p>
          </div>

          <div>
            <h4 class="font-bold mb-4">Quick Links</h4>
            <div class="space-y-2 text-sm">
              <a href="#home" class="block text-white/60 hover:text-white transition-colors">Home</a>
              <a href="#about" class="block text-white/60 hover:text-white transition-colors">About Us</a>
              <a href="#memories"
                class="block text-white/60 hover:text-white transition-colors">Memories</a>
              <a href="#timeline"
                class="block text-white/60 hover:text-white transition-colors">Timeline</a>
            </div>
          </div>

          <div>
            <h4 class="font-bold mb-4">Connect</h4>
            <div class="flex gap-4">
            <button
              class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                 💬
            </button>
            <button
              class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                  📱
            </button>
            <button
              class="w-12 h-12 bg-white/5 backdrop-blur-xl border border-white/10 rounded-full hover:bg-white/10 transition-all duration-300 flex items-center justify-center">
                  📧
            </button>
          </div>
        </div>
      </div>

      <div class="text-center pt-8 border-t border-white/10">
        <p class="text-white/40 text-sm">© 2025 Made with Love. Forever Yours.</p>
      </div>
  </x-slot>
</x-layouts.app>