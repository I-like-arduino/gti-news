<x-base>

<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
    <!-- Card -->
    @foreach($noticias as $noticia)
    <a class="group block rounded-xl overflow-hidden focus:outline-none" href="{{route('exibeNoticia', $noticia)}}">
      <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
        <div class="shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
          <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl" src= "{{$noticia -> capa}}" alt="Blog Image">
        </div>
        <div class="grow">
          <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
            {{$noticia->titulo}}
          </h3>
          <p class="mt-3 text-gray-600 dark:text-neutral-400">
            {{$noticia->resumo}}
          </p>
          <p class="mt-4 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
            Ver notícia
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </p>
        </div>
      </div>
    </a>
    @endforeach
  </div>
  <!-- End Grid -->
</div>
<!-- End Card Blog -->

</x-base>
