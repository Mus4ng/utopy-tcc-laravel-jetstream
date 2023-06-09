<x-app-layout>
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                    <!--Carousel indicators-->
                    <div class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                        data-te-carousel-indicators>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0"
                            data-te-carousel-active
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 2"></button>
                        <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-label="Slide 3"></button>
                    </div>

                    <!--Carousel items-->
                    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                        <!--First item-->
                        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{ url('storage\games\Hollow Knight - SilkSong\SilkSong-Banner.jpg') }}" class="block w-full"
                                alt="..." />
                            <div class="absolute left-[35%] bottom-5 hidden py-5 text-center text-white md:block ">
                                <h5 class="text-xl w-96 align-center">Hornet, princesa protetora de Hallownest,
                                    encontra-se sozinha em um
                                    mundo vasto e desconhecido.</h5>
                            </div>

                        </div>
                        <!--Second item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{ url('storage\games\Ori and the Blind Forest\Ori-Banner.jpg') }}" class="block w-full"
                                alt="..." />
                            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                <h5 class="text-xl">Ori and the Blind Forest conta a história de um jovem órfão
                                    destinado ao heroísmo</h5>
                            </div>
                        </div>
                        <!--Third item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item style="backface-visibility: hidden">
                            <img src="{{ url('storage\games\Celeste\Celeste-Banner.jpeg') }}" class="block w-full"
                                alt="..." />
                            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-white md:block">
                                <h5 class="text-xl">Ajude Madeline a sobreviver à sua jornada para o topo da Montanha
                                    Celeste</h5>
                            </div>
                        </div>
                    </div>

                    <!--Carousel controls - prev item-->
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
                    </button>
                    <!--Carousel controls - next item-->
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Proxima</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
            <h2 class="mb-6 text-2xl font-heading tracking-tight text-white">Ultimos lançamentos</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($game as $games)
                    <article
                        class="mx-auto hover:cursor-pointer rounded-xl bg-slate-800 p-3 shadow-lg hover:shadow-xl hover:transform hover:scale-105 duration-300 min-w-full max-w-fit">
                        <a href="{{ route('game-page', ['id' => $games->id, 'title' => $games->title]) }}">
                            <div class="relative flex items-center overflow-hidden rounded-xl">
                                <img src="{{ url("storage/games/$games->title/$games->cover") }}"
                                    alt="{{ $games->title }}" class="object-cover h-54 mx-auto" />
                            </div>

                            <div class="mt-1 p-2">
                                <h2 class="text-white">{{ $games->title }}</h2>
                                <p class="mt-1 text-sm text-slate-400">{{ $games->genreGame->name }}</p>

                                <div class="mt-3 flex items-end justify-between">
                                    <p class="text-lg font-bold text-white">R${{ $games->final_price }}</p>
                                    <div
                                        class="flex items-center justify-center space-x-1.5 rounded-lg bg-slate-700 px-6 py-3 text-white duration-100 hover:bg-main-500">
                                        Ver mais
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
</x-app-layout>



<script>
    import {
        Carousel,
        initTE,
    }
    from "tw-elements";

    initTE({
        Carousel
    });
</script>
