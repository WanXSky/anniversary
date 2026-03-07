<div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-2xl overflow-hidden group hover:bg-white/10 transition-all duration-500">
    <div class="h-64 bg-gradient-to-br from-red-500/20 to-rose-500/20 flex items-center justify-center text-8xl group-hover:scale-110 transition-transform duration-500">{{ $image }}</div>
    <div class="p-6">
      <h3 class="text-xl font-bold mb-2">{{ $title }}</h3>
      <p class="text-white/60 text-sm">{{ $slot }}</p>
    </div>
</div>