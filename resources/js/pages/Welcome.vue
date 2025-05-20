<script setup lang="ts">
import { Head, usePoll } from '@inertiajs/vue3';
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'
usePoll(5000, { only: ['userCount'] });
const email = ref('')
const success = ref('')
defineProps({
  userCount: Number,
})
const submit = () => {
  router.post('/signup', { email: email.value }, {
    onSuccess: () => {
      email.value = ''
      success.value = 'Thank you for signing up!'
    },
    onError: () => {
      success.value = ''
    }
  })
}
</script>

<template>
  <Head title="Human">
   

  </Head>
  <div class="relative min-h-screen w-full flex items-center justify-center overflow-hidden bg-black">
    <!-- Mysterious background image with dark overlay -->
    <div class="absolute inset-0 z-0">
      <div class="w-full h-full bg-cover bg-center" style="background-image: url('/ai.png'); filter: blur(2px) brightness(0.7);"></div>
      <div class="absolute inset-0 bg-gradient-to-br from-black/90 via-[#1a1a1e]/80 to-[#2d0a1a]/80"></div>
    </div>
    <!-- Main content -->
    <div class="relative z-10 w-full max-w-5xl mx-auto flex flex-col lg:flex-row rounded-3xl overflow-hidden shadow-2xl border border-[#23232a] bg-white/5 backdrop-blur-md">
      <!-- Text Section -->
      <section class="flex-1 px-8 py-12 flex flex-col justify-center gap-8 text-white">
        <header>
          <h1 class="text-4xl lg:text-5xl font-bold mb-4 drop-shadow-lg" style="letter-spacing: 0.01em;">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#f53003] via-[#ff4433] to-[#fff]">The Silent Takeover</span><br>
            <span class="opacity-80">of Artificial Intelligence</span>
          </h1>
          <p class="text-lg mb-8 max-w-2xl text-[#e0e0e0]">
            In the shadows of progress, <span class="text-[#FF4433] font-semibold">AI is quietly replacing human creativity</span>.<br>
            Will you stand by, or shape the future?
          </p>
        </header>
        <ul class="space-y-4 text-base">
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#FF4433] text-white font-bold shadow-lg">✓</span>
            <span class="font-medium">Creativity is more than code.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#FF4433] text-white font-bold shadow-lg">✓</span>
            <span class="font-medium">Human intelligence is irreplaceable.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#FF4433] text-white font-bold shadow-lg">✓</span>
            <span class="font-medium">People must shape technology's future.</span>
          </li>
        </ul>
        <div class="mt-8">
          <h2 class="text-xl font-semibold mb-3 text-white/90">Join a movement that:</h2>
          <ul class="space-y-3 text-base">
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#fff] text-[#FF4433] font-bold">•</span>
              <span>Promotes ethical, responsible AI</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#fff] text-[#FF4433] font-bold">•</span>
              <span>Protects creative and technical jobs</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#fff] text-[#FF4433] font-bold">•</span>
              <span>Encourages AI as a tool, not a replacement</span>
            </li>
          </ul>
        </div>
      </section>
      <!-- Form Section -->
      <section class="flex-1 flex flex-col justify-center items-center px-8 py-12 bg-black/60 backdrop-blur-lg">
        <div class="w-full max-w-sm mx-auto p-8 rounded-2xl shadow-xl bg-gradient-to-br from-[#18181b]/90 to-[#23232a]/90 border border-[#333]">
          <div class="mb-6 text-center">
            <div class="text-xs uppercase tracking-widest text-[#FF4433] mb-2">Current Humans</div>
            <div class="text-5xl font-extrabold text-white drop-shadow-glow" style="text-shadow: 0 0 16px #FF4433, 0 0 2px #fff;">
              {{ userCount }}<span class="text-[#FF4433] text-2xl align-top">+</span>
            </div>
            <div class="text-gray-400 text-xs mt-2">Already joined the resistance</div>
          </div>
          <form @submit.prevent="submit" class="flex flex-col gap-4">
            <input
              v-model="email"
              type="email"
              placeholder="Enter your email"
              class="border border-[#FF4433] bg-black/60 text-white px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#FF4433] placeholder-gray-400"
              required
            />
            <button type="submit" class="bg-gradient-to-r from-[#f53003] to-[#FF4433] text-white font-bold py-3 rounded-lg shadow-lg hover:from-[#c41e00] hover:to-[#c41e00] transition">
              Sign Up
            </button>
            <p v-if="success" class="text-green-400 text-center mt-2">{{ success }}</p>
          </form>
          <span class="mt-4 block text-gray-500 text-xs text-center">We never spam or share your email.</span>
        </div>
      </section>
    </div>
  </div>
</template>