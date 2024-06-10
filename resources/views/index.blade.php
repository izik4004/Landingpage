<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Raily</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased scroll-smooth font-body bg-black text-white px-6 font-lufga">

<!-- nav -->
    @include('sections.nav')

    <main>
        <section class="meetup pt-[2rem] flex flex-col justify-center items-center">
            <img src="{{ asset('images/meetImageLargescreen.webp') }}" alt="" class="mx-auto hidden lg:block">
            <img src="{{ asset('images/meetmobile.webp') }}" alt="Description of the image"
                class="mx-auto lg:hidden block items-center">
            <div class="hidden lg:flex items-center">
                <h3 class="text-[2em]">AI-Driven + Gamify</h3>
            </div>
        </section>


        <section class="lg:w-1/2 lg:mx-auto my-6 ">
            <div class="flex justify-center h-18 overflow-hidden lg:overflow-visible">
                <img src="{{ asset('images/image1.webp') }}" alt="Description of the image"
                    class=" w-[14em] object-contain">
                <img src="{{ asset('images/image2.webp') }}" alt="Description of the image"
                    class=" w-[14em] object-contain">
                <img src="{{ asset('images/image3.webp') }}" alt="Description of the image"
                    class=" w-[14em] object-contain">
            </div>

            <div class="lg:hidden w-full flex justify-center items-center my-10 px-2">
                <div class="space-y-2">
                    <input type="text" class="py-4 px-6 border rounded-full bg-black w-full"
                        placeholder="Enter your email">
                    <button class="py-4 bg-[#A6F8C2] text-black px-6 border rounded-full w-full">Ask for Early
                        Access</button>
                </div>
            </div>

        </section>

        <!-- sections of the page -->
        @include('sections.globe')
        @include('sections.lovedBy')
        @include('sections.meetup')
        @include('sections.railyEcosystem')
        @include('sections.allFeatures')
        @include('sections.arMode')
        @include('sections.socialCircle')

    </main>
</body>

</html>
