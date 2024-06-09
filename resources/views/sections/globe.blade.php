<section class="mt-[17em] mb-[10em] lg:-mt-[5em]">
<div class="block-planet">
  <div class="box-im-planet relative">
    <img src="{{ asset('images/globe1.webp') }}" alt="Connect" class="im-planet _1">
    <img src="{{ asset('images/globe2.webp') }}" alt="Connect" class="im-planet _2">
    <img src="{{ asset('images/globe3.webp') }}" alt="Connect" class="im-planet _3">
    <img src="{{ asset('images/globe4.webp') }}" alt="Connect" class="im-planet _4">
    <img src="{{ asset('images/globe5.webp') }}" alt="Connect" class="im-planet _5">
    <img src="{{ asset('images/globe6.webp') }}" alt="Connect" class="im-planet _6">
    <img src="{{ asset('images/globe7.webp') }}" alt="Connect" class="im-planet _7">
    <img src="{{ asset('images/globe8.webp') }}" alt="Connect" class="im-planet _8">
    
  </div>
  
</div>
<div class="lg:!w-2/5 !w-full mx-auto lg:-mt-[35em] -mt-[18em]  im-planet _9">
    <div class="flex justify-center text-center my-14">
        <h1 class="lg:text-5xl">TRAVEL. CONNECT. <br class="lg:hidden"> EXPLORE.</h1>
    </div>
    <div class="flex flex-wrap justify-between py-2 backdrop-blur-xl bg-white/20 px-4 rounded-3xl items-center space-y-2 lg:space-y-0 lg:space-x-4">
  <div class="text-xs w-full lg:w-auto hidden lg:block text-center lg:text-left space-x-1">
    Trusted by <br>industry<br>leaders
  </div>
  <div class="flex flex-wrap justify-center lg:justify-start lg:space-x-4">
    <img src="{{ asset('images/image11.svg') }}" alt="Connect" class="lg:w-16 w-10">
    <img src="{{ asset('images/nvidia.svg') }}" alt="Connect" class="w-16 h-12">
    <img src="{{ asset('images/aws.svg') }}" alt="Connect" class="w-16 h-12">
    <img src="{{ asset('images/google.svg') }}" alt="Connect" class="w-16 h-12">
    <div class="flex flex-col items-center lg:items-start">
      <img src="{{ asset('images/leap.webp') }}" alt="Connect" class="w-10 h-6">
      <p class="text-[6px] text-center lg:text-left">RocketFuel Semi-<br>Finalist 2024</p>
    </div>
    <img src="{{ asset('images/beta.webp') }}" alt="Connect" class="w-10 h-10">
  </div>
</div>

</section>

<script>
document.addEventListener('scroll', function() {
  const scrollPosition = window.scrollY;

  const images = document.querySelectorAll('.im-planet');
  images.forEach((image, index) => {
    const delay = index * 100; // delay in milliseconds
    setTimeout(() => {
      image.style.transform = `translateY(${scrollPosition * 0.1}px)`;
      image.style.opacity = `${ scrollPosition / 1000}`;
    }, delay);
  });
});

</script>
