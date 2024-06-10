<nav class="shadow-lg py-2  ">
    <div class="w-full mx-auto flex justify-between items-center lg:fixed md:fixed">
      <div class="text-xl font-bold">
         <img src="{{ asset('images/railytextimg.svg') }}" alt="Raily" class="w-24">
      </div>
      <div class="md:hidden">
        <button id="menu-button" class="focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>
      <div class="hidden md:flex space-x-4">
        <ul class="flex items-center rounded-3xl backdrop-blur-xl bg-white/20 py-2  px-4 gap-8">
          <li class="mx-2">
            <a href="#meetup" class="text-gray-300 text-sm hover:bg-white/30 hover:rounded-3xl hover:py-1 px-3">Meet up</a>
            <a href="#ecosystem" class="text-gray-300 text-sm hover:bg-gray-500 hover:rounded-3xl hover:py-1 px-3">Ecosystem</a>
            <a href="#features" class="text-gray-300 text-sm hover:bg-gray-500 hover:rounded-3xl hover:py-1 px-3">Features</a>
            <a href="#AI" class="text-gray-300 text-sm hover:bg-gray-500 hover:rounded-3xl hover:py-1 px-3">AI</a>
            <a href="#socialCircle" class="text-gray-300 text-sm hover:bg-gray-500 hover:rounded-3xl hover:py-1 px-3">Social Circle</a>
          </li>
        </ul>
      </div>
      <div class="hidden md:flex text-xs mr-10">Contact us</div>
    </div>
    <div id="mobile-menu" class="absolute py-6 left-0 w-full bg-black shadow-lg hidden">
      <a href="#meetup" class="block px-4 py-2 hover:border rounded-3xl">Meetup</a>
      <a href="#ecosystem" class="block px-4 py-2 hover:border rounded-3xl">AI</a>
      <a href="#features" class="block px-4 py-2 hover:border rounded-3xl">Gamification</a>
      <a href="#AI" class="block px-4 py-2 hover:border rounded-3xl">Contact</a>
      <a href="#socialCircle" class="block px-4 py-2 hover:border rounded-3xl">Social Circle</a>
    </div>
  </nav>