<section class="">
    <div class="flex items-center justify-center pt-20">
    <h3 class="text-7xl text-center">Raily ecosystem</h3>
    </div>

    <div class="relative min-h-screen lg:flex flex-col justify-center items-center my-[6em] hidden ">
        <div class="absolute inset-0 flex flex-col lg:flex-row items-center justify-evenly px-4 py-8 lg:py-0">
            <!-- AR Section -->
            <div class="flex flex-col items-center lg:items-start space-y-4 -ml-[30em]">
                <div class="relative ">
                    <img src="{{ asset('images/ar.webp') }}" alt="AR" class="w-64 md:w-72 lg:w-[30em] ">
                    <div class="absolute top-24 -right-16 rounded-full p-2">
                    <span class="mt-2 rounded-full py-3 px-8 border bg-white/20 border-white/35">AR</span>
                    </div>
                </div>
            </div>
            
            <!-- Center Section -->
            <div class="flex flex-col items-center space-y-6  lg:mt-0">
                <div class="flex space-x-10 items-center">
                    <button class="bg-green-500 text-black px-4 py-2 rounded-full">Matchmaking</button>
                    <div class="flex flex-col items-center space-y-10">
                        <div>
                        <img src="{{ asset('images/7.svg') }}" alt="discover" class="w-10">
                        </div>
                        <div>
                        <img src="{{ asset('images/logo.webp') }}" alt="discover" class="w-20">
                        </div>
                        <div>AI Raily</div>
                    </div>
                    <button class="bg-purple-500 text-black px-4 py-2 rounded-full">Concierge</button>
                </div>
                <div class="flex space-x-32  absolute ">
                    <div class="flex items-center mt-14">
                        <img src="{{ asset('images/smartwatch.webp') }}" alt="Smartwatch" class="w-24 md:w-28 lg:w-[12em]">
                        <span class="mt-2 rounded-full py-3 px-8 border bg-white/20 border-white/35">Smartwatches</span>
                    </div>
                    <div class="flex  items-center mt-32">
                    <span class="mt-2 rounded-full py-3 px-8 border bg-white/20 border-white/35">Mobile App</span>
                        <img src="{{ asset('images/bond1.webp') }}" alt="Mobile App" class="w-32 md:w-36 lg:w-[12em]">
                       
                    </div>
                </div>
            </div>
            
            <!-- XR Section -->
            <div class="flex flex-col items-center  space-y-4 -mr-[18em] -mt-[10em]">
                <div class="relative flex items-center -mt-28">
                <div class="absolute items-center -left-28 top-34  rounded-full p-2">
                <span class="mt-2 rounded-full py-3 px-8 border bg-white/20 border-white/35">XR</span>
                </div>
                <div>
                    <img src="{{ asset('images/xr.webp') }}" alt="XR" class="w-64 md:w-72 lg:w-80">
                    </div>
                   
                </div>
            </div>
        </div>

        <!-- Background Circles -->
        <div class=" flex flex-col items-center justify-center space-y-8 pointer-events-none">
        <img src="{{ asset('images/wave.svg') }}" alt="discover" class="w-[70em] inline-block">
        </div>
    </div>
</section>

<section class="py-16 lg:hidden block">

<img src="{{ asset('images/image76.png') }}" alt="discover" class="w-[70em] inline-block">

</section>
