@extends('layouts.default')
@section('content')
<body class="bg-wood-100">
   <section>
      <div class="items-center 2xl:max-w-7xl max-w-6xl md:px-12 mx-auto px-8 pt-32">
         <div class="border-b pb-5 text-balance">
            <p class="text-black font-serif text-4xl lg:text-8xl uppercase font-semibold">
               Welcome to Phanatik's blog!
            </p>
            <p class="text-slate-600 mt-4 text-lg">
               Advice, Strategies, Insights and Stories for the success of companies,
               schools and start-ups.
            </p>
         </div>
      </div>
   </section>
   <section>
      <div class="mx-auto 2xl:max-w-screen-2xl md:px-12 px-8 grid py-12 space-y-6">
         <a href="/posts/1" title="The Secret Garden of Elsie">
            <div class="w-full lg:pt-6 relative">
               <article class="mx-auto 2xl:max-w-7xl md:px-12 lg:py-24 px-4 py-4">
                  <div class="w-full absolute inset-0"> <img class="w-full aspect-video h-full object-cover " src="../../artOne.jpg" alt="The Secret Garden of Elsie"> </div>
                  <div class="relative 2xl:max-w-7xl lg:mt-24 max-w-6xl md:p-10 mx-auto p-4">
                     <div class="bg-wood-100   p-4 lg:-mb-[8.5rem] lg:p-10 max-w-xl sm:p-8 text-balance">
                        <div>
                           <h1 class="text-black uppercase font-serif text-5xl font-bold"> The Secret Garden of Elsie </h1>
                           <p class="text-black  mt-4 text-lg"> Elsie discovers a hidden garden in the middle of the city and uncovers a magical world of talking animals and enchanted plants </p>
                        </div>
                        <div class="items-center inline-flex space-x-1 mt-10">
                           <p class="font-medium text-gray-900 text-sm">Alejandro Martinez</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-sm"> <time datetime="Sat Jul 01">Sat Jul 01</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </a>
      </div>
   </section>
   <section>
      <div class="2xl:max-w-7xl max-w-6xl md:px-12 mx-auto px-8 py-12">
         <div class="grid gap-4 grid-cols-1 lg:gap-y-24 sm:grid-cols-2 lg:grid-cols-3">
            <a href="/posts/3" title="The Time Traveler's Notebook" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artThree.jpg" alt="The Time Traveler's Notebook"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">The Time Traveler's Notebook</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm"> A mysterious notebook falls into the hands of a young woman, leading her on a journey through time as she learns about the lives of those who came before her. </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Giovanni Russo</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Wed Jul 12">Wed Jul 12</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
            <a href="/posts/4" title="The Ghost of Willow Creek" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artFour.jpg" alt="The Ghost of Willow Creek"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">The Ghost of Willow Creek</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm"> Strange occurrences and sightings of a ghostly figure in the small town of Willow Creek lead a group of teenagers on a thrilling adventure to uncover the truth. </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Akira Nakamura</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Tue Jul 18">Tue Jul 18</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
            <a href="/posts/5" title="The Island of Lost Souls" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artFive.jpg" alt="The Island of Lost Souls"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">The Island of Lost Souls</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm">  A group of travelers finds themselves stranded on an island inhabited by mysterious creatures and haunted by the ghosts of its past inhabitants. </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Isabella Garcia</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Sun Jul 23">Sun Jul 23</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
            <a href="/posts/6" title="The Curse of Blackwood Manor" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artSix.jpg" alt="The Curse of Blackwood Manor"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">The Curse of Blackwood Manor</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm"> A family moves into a grand old mansion, but soon discovers that the house is cursed and they must unravel its dark secrets before it's too late. </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Henry Thompson</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Sat Jul 29">Sat Jul 29</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
            <a href="/posts/7" title="Create a VSCode theme" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artSeven.jpg" alt="Create a VSCode theme"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">Create a VSCode theme</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm"> ey Michael! we don’t need more tutorials on how to build a theme, there’s 100s! You may say I,simply wanted to do my version because I have been building my own theme and is easier than you may think. </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Jack Tatanka</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Sat Jul 29">Sat Jul 29</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
            <a href="/posts/8" title="Use Serendipity" class="group">
               <article class="h-full flex-1">
                  <div class="w-full block lg:col-span-2"> <img class="h-full object-cover aspect-[384/246] bg-center " src="../../artEight.jpg" alt="Use Serendipity"> </div>
                  <div class="w-full flex flex-col  items-start justify-between -mt-20 p-4">
                     <div class="w-full p-4 lg:p-8  bg-wood-100    h-full flex flex-col justify-between text-balance">
                        <div>
                           <p class="font-medium text-black uppercase text-xl font-serif">Use Serendipity</p>
                           <p class="text-slate-600 line-clamp-2 mt-12 text-sm"> On the official website you will find guidelines, color refference, color pickers and a list of interefaces that Serendipity has been ported to </p>
                        </div>
                        <div class="items-center inline-flex mt-1 space-x-1">
                           <p class="font-medium text-gray-900 text-xs">Henry Thompson</p>
                           <span aria-hidden="true">·</span>
                           <div class="flex text-gray-500 text-xs"> <time datetime="Sat Jul 29">Sat Jul 29</time> </div>
                        </div>
                     </div>
                  </div>
               </article>
            </a>
         </div>
      </div>
   </section>
   <section class="bg-wood-500">
      <div class="px-8 md:px-12 max-w-6xl mx-auto 2xl:max-w-7xl items-center py-24">
         <div class="grid grid-grid-cols-1 lg:grid-cols-2 justify-between lg:items-end text-balance">
            <div class="text-center lg:text-left">
               <h2 class="text-black font-serif text-4xl  uppercase font-semibold ">
                  Sign up for the newsletter
               </h2>
               <p class="mt-4 text-lg text-slate-600">
                  Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui Lorem
                  cupidatat commodo. Elit sunt amet fugiat.
               </p>
            </div>
            <div class="mt-12    lg:ml-auto">
               <form class="flex flex-col lg:flex-row border-2 border-black    overflow-hidden"> <label for="email-address" class="sr-only">Email address</label> <input id="email-address" name="email-address" type="email" autocomplete="email" required="" class="w-full border-white px-5 py-3 h-14 ring-inset placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-mist-700" placeholder="Enter your email"> <button type="submit" class="inline-flex justify-center w-full lg:w-auto py-1 px-6 h-14 shrink-0 items-center  text-sm font-medium tracking-wide focus:outline-none bg-black text-white hover:bg-mist-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mist-600 active:bg-mist-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-mist-600">Notify me</button> </form>
               <p class="mt-3 text-sm text-black text-center lg:text-left">
                  We care about the protection of your data. Read our
                  <a href="/infopages/privacy" class="font-medium text-salmon-600 hover:text-black underline">Privacy Policy.</a>
               </p>
            </div>
         </div>
      </div>
   </section>
   <script defer="" src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
@stop
