<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
        content="width=device-width, initial-scale=1">
        <!-- @vite('resources/css/app.css') -->
    <title>Galleon Gateway</title>
    <!-- <link rel="icon" href="favicon.svg"> -->
    
    <!-- @vite(['resources/js/app.js', 'resources/css/app.css']) -->
</head>
<body>
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div>
  <nav>
    <div>
      <div>
        <div>
          <div>
            <img src="https://ouch-cdn2.icons8.com/5iRXIex6ENAJfhSm6GxYntqBKoM2lSzRffmJl3YSyws/rs:fit:368:368/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNTEz/L2ExMTRiYjEzLWUz/ZjktNGVlZS1hMTcy/LTgzYmM4OWE5MDQ1/YS5wbmc.png" alt="Loot">
          </div>
          <div>
            <div>
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <!-- <x-nav href="/" :active="request()->is('/')">Tales</x-nav>
              
              <x-nav href="/jobs/create" :active="request()->is('jobs/create')">Your Tale</x-nav>
               -->
            </div>
          </div>
        </div>
        <div>
          <div>

            <!-- Profile dropdown -->
            <!-- <div>
              <div>
                <button type="button" class="drop-shadow-lg relative flex max-w-xs items-center rounded-full bg-yellow-300 text-sm focus:outline-none focus:ring-2 focus:ring-yellow-300 focus:ring-offset-2 focus:ring-offset-orange-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-14 rounded-full" src="https://img.icons8.com/?size=128&id=faGuEfKHrWow&format=png" alt="">
                </button>
              </div>

              
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <!-- <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 right sm:px-3"> -->
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <!-- <x-mob-link  href="/" :active="request()->is('/')">Tales</x-mob-link>
        
        <x-mob-link  href="/jobs/create" :active="request()->is('jobs/create')">Your Tale</x-mob-link>
       
      </div>
      <div class="border-t border-orange-500 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-1">
            <img class="size-16 rounded-full" src="https://img.icons8.com/?size=128&id=faGuEfKHrWow&format=png" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base/5 font-black text-black">Cap. Hook</div>
            <div class="text-sm font-black text-black">hook@captain.com</div>
          </div>
        </div>
        
      </div>
    </div> -->
  </nav>

  <!-- <header class="rounded-b-2xl bg-gradient-to-b from-red-600 via-orange-400 to-yellow-400 dark:bg-gradient-to-b dark:from-red-600 dark:to-yellow-400 shadow">
    <div class="right-0 mx-auto max-w-7xl  px-4 py-6 sm:px-6 flex justify-between  lg:px-8">
      <div>
        <x-button 
          class="text-xl sm:text-xl md:text-3xl lg:text-5xl  px-2 py-2 rounded-xl bg-gradient-to-b from-yellow-300 to-orange-500 text-right font-bold tracking-tight text-white hover:bg-gradient-to-b hover:from-yellow-400 hover:to-orange-600" 
          href="/jobs/create"
        >
          Add a Tale
        </x-button>
      </div>  
      <h1 
        class="text-xl sm:text-xl md:text-3xl lg:text-5xl  px-2 py-2 rounded-xl bg-gradient-to-b from-yellow-300 to-orange-500 text-right font-bold tracking-tight text-white hover:bg-gradient-to-b hover:from-yellow-300 hover:to-orange-600"
      >
        {{ $heading }}
      </h1>

      


    </div>
  </header> -->
  <main>
    <div>
      <!-- Your slot content -->
      {{$slot}}
    </div>
  </main>
</div>

    
</body>
</html>