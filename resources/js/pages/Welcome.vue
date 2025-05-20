<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Welcome">


  </Head>
  <div class="min-h-screen w-full flex items-center justify-center bg-gradient-to-br from-[#fdf6f6] to-[#f7f7fa] dark:from-[#18181b] dark:to-[#1a1a1e]">
    <div class="w-full max-w-7xl mx-auto flex flex-col lg:flex-row shadow-2xl rounded-3xl overflow-hidden bg-white/90 dark:bg-[#18181b]/90 border border-[#ececec] dark:border-[#23232a]">
      <!-- Text Section -->
      <section class="flex-1 px-8 py-12 flex flex-col justify-center gap-8">
        <header>
          <h1 class="text-4xl lg:text-5xl font-bold mb-4 text-[#1b1b18] dark:text-[#f7f7fa] leading-tight" style="font-family: 'Inter', sans-serif;">
            Stop the Silent Takeover of AI
          </h1>
          <p class="text-lg text-[#5a5955] dark:text-[#bdbdb8] mb-6 max-w-2xl" style="font-family: 'IBM Plex Sans', sans-serif;">
            In a world where technology evolves rapidly, <strong class="text-[#f53003] dark:text-[#FF4433]">Artificial Intelligence is quietly replacing human creativity and skill</strong>—starting with developers and digital creators.<br>
            We are <strong>not against progress</strong>, but we demand a <strong>balanced</strong> future where <strong>AI empowers us</strong>, not replaces us.
          </p>
        </header>
        <ul class="space-y-4 text-base">
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000000] dark:bg-[#000000] text-white font-bold">✓</span>
            <span>
              <span class="font-medium">Creativity is more than code.</span>
            
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000] dark:bg-[#000] text-white font-bold">✓</span>
            <span>
              <span class="font-medium">Human intelligence is irreplaceable.</span>
            
            </span>
          </li>
          <li class="flex items-start gap-3">
            <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000] dark:bg-[#000] text-white font-bold">✓</span>
            <span>
              <span class="font-medium">People should shape the future of technology—not be pushed aside by it.</span>
            </span>
          </li>
        </ul>
        <div class="mt-8">
          <h2 class="text-xl font-semibold mb-3 text-[#1b1b18] dark:text-[#f7f7fa]">Join us now and support a movement that:</h2>
          <ul class="space-y-3 text-base">
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000] dark:bg-[#000] text-white font-bold">•</span>
              <span>Promotes ethical and responsible use of AI</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000] dark:bg-[#000] text-white font-bold">•</span>
              <span>Protects creative and technical jobs</span>
            </li>
            <li class="flex items-start gap-3">
              <span class="mt-1 flex h-4 w-4 items-center justify-center rounded-full bg-[#000] dark:bg-[#000] text-white font-bold">•</span>
              <span>Encourages AI as a tool, not a substitute</span>
            </li>
          </ul>
        </div>
        <div class="mt-10">
          <strong class="block text-lg mb-4 text-[#1b1b18] dark:text-[#f7f7fa]">Sign up today and be part of the voice calling for a fair and human-centered future.</strong>
          <a
            href="https://cloud.laravel.com"
            target="_blank"
            class="inline-block rounded-lg border border-[#f53003] bg-[#f53003] px-8 py-3 text-base font-semibold text-white shadow hover:bg-[#c41e00] hover:border-[#c41e00] transition dark:bg-[#FF4433] dark:border-[#FF4433] dark:hover:bg-[#c41e00] dark:hover:border-[#c41e00]"
          >
            Deploy now
          </a>
        </div>
      </section>
      <!-- Image Section -->
     <section
  class="flex-1 min-h-[400px] flex items-center justify-center relative bg-cover bg-center"
  style="background-image: url('/ai.png'); background-size: cover; background-position: center;"
>
  <div class="absolute inset-0 bg-gradient-to-t from-[red]/80 to-transparent dark:from-[#1D0002]/80 pointer-events-none"></div>
</section>
    </div>
  </div>
</template>