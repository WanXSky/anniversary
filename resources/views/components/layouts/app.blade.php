<html lang="en" class="scroll-smooth">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>For You Salma</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://unpkg.com/lucide@latest"></script>
    </head>
    <body class="bg-black text-white overflow-x-hidden">
      <div id="particles" class="fixed z-0 pointer-events-none inset-0"></div>
      <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl rotate-slow"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl rotate-slow"></div>
      </div>
        <div class="relative z-10">
            <header class="fixed top-0 left-0 right-0 p-6 md:p-8 z-50 bg-white/5 backdrop-blur-xl border-b border-white/10">
              {{ $header ?? 'Default Header' }}
            </header>
            
            <main>
              {{ $slot }}
            </main>
            
            <footer>
              {{ $footer ?? 'Default Footer' }}
            </footer>
        </div>
        <script>
  function countdown(targetDate) {
  return {
    target: new Date(targetDate).getTime(),
    days: 0,
    hours: 0,
    minutes: 0,
    seconds: 0,

    start() {
      this.update()
      setInterval(() => this.update(), 1000)
    },

    update() {
      const now = new Date().getTime()
      const diff = this.target - now

      if (diff <= 0) {
        this.days = this.hours = this.minutes = this.seconds = 0
        return
      }

      this.days = Math.floor(diff / (1000 * 60 * 60 * 24))
      this.hours = Math.floor((diff / (1000 * 60 * 60)) % 24)
      this.minutes = Math.floor((diff / (1000 * 60)) % 60)
      this.seconds = Math.floor((diff / 1000) % 60)
    }
  }
}
const quotes = [
            "Jatuh cinta itu menyenangkan, apalagi kalau sama kamu.",
            "Kalau udah punya yang saling melengkapi, jangan cari yang sempurna di orang lain, nanti kamu akan kehilangan keduanya, didunia ini gada yang sempurna, maka jadilah pasangan yang bertumbuh semaksimal mungkin.",
            "karena memilih pasangan bukan soal yang terbaik, tapi yang paling cocok dan saling melengkapi.",
            "Jangan pernah lupain orang yang udah support kamu walaupun kamu lagi dibawah."
        ];

        let currentQuote = 0;
        const quoteText = document.getElementById('quote-text');
        const nextBtn = document.getElementById('next-quote');
        const quoteDots = document.querySelectorAll('[data-quote]');

        function updateQuote(index) {
            currentQuote = index;
            quoteText.style.opacity = '0';

            setTimeout(() => {
                quoteText.textContent = `"${quotes[currentQuote]}"`;
                quoteText.style.opacity = '1';

                quoteDots.forEach((dot, i) => {
                    if (i === currentQuote) {
                        dot.classList.remove('bg-white/20');
                        dot.classList.add('bg-white/50');
                    } else {
                        dot.classList.remove('bg-white/50');
                        dot.classList.add('bg-white/20');
                    }
                });
            }, 300);
        }

        nextBtn.addEventListener('click', () => {
            updateQuote((currentQuote + 1) % quotes.length);
        });

        quoteDots.forEach(dot => {
            dot.addEventListener('click', () => {
                updateQuote(parseInt(dot.dataset.quote));
            });
        });

        quoteText.style.transition = 'opacity 0.3s ease-in-out';
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });
        function musicPlayer() {
  return {
    playlist: [
      {
        title: "Terbuang Dalam Waktu",
        artist: "Barasuara",
        src: "/asset/music/terbuang-dalam-waktu.mp3",
        cover: "https://i.ytimg.com/vi/xCchJ0ujd0o/hqdefault.jpg",
      },
      {
        title: "Kota Ini Tak Sama Tanpamu",
        artist: "Nadhif Basalamah",
        src: "/asset/music/kota-ini-tak-sama-tanpamu.mp3",
        cover: "https://i.ytimg.com/vi/grp6FCnioMM/hqdefault.jpg",
      },
      {
        title: "Love",
        artist: "Wave To Earth",
        src: "/asset/music/love.mp3",
        cover: "https://i.ytimg.com/vi/Q49pnA4jsp8/hqdefault.jpg",
      },
    ],

    index: 0,
    audio: null,
    playing: false,
    currentTime: 0,
    duration: 0,

    get current() {
      return this.playlist[this.index]
    },

    init() {
      this.audio = new Audio(this.current.src)

      this.audio.addEventListener("timeupdate", () => {
        this.currentTime = this.audio.currentTime
        this.duration = this.audio.duration || 0
      })

      this.audio.addEventListener("ended", () => {
        this.next()
      })

      lucide.createIcons()
    },

    togglePlay() {
      if (this.playing) {
        this.audio.pause()
      } else {
        this.audio.play()
      }
      this.playing = !this.playing
    },

    next() {
      this.audio.pause()
      this.index = (this.index + 1) % this.playlist.length
      this.load()
    },

    prev() {
      this.audio.pause()
      this.index =
        (this.index - 1 + this.playlist.length) % this.playlist.length
      this.load()
    },

    load() {
      this.audio = new Audio(this.current.src)
      this.playing = false
      this.currentTime = 0
      this.duration = 0
      this.init()
      this.audio.play()
      this.playing = true
    },

    seek() {
      this.audio.currentTime = this.currentTime
    },

    formatTime(sec) {
      if (!sec) return "0:00"
      const m = Math.floor(sec / 60)
      const s = Math.floor(sec % 60).toString().padStart(2, "0")
      return `${m}:${s}`
    },
  }
}
        </script>
    </body>
</html>