<x-base>
<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://i.pinimg.com/564x/8a/01/cc/8a01cc0579be056ecc8dfa2f07bd42aa.jpg" alt="Jese Leos">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{$noticia -> user -> name}}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">Someone from the IT Management course</p>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{$noticia->created_at->toDayDateTimeString()}}</p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$noticia->titulo}}</h1>
          </header>
          <p class="lead">{{$noticia -> conteudo}}
                    </p>
            </article>
        </div>
    </main>
</x-base>