@extends('layouts.default')
@section('content')
<section>
    <div class="px-8 md:px-12 max-w-6xl mx-auto py-24 2xl:max-w-7xl">
       <div class="max-w-5xl">
          <h1 class="text-black font-serif text-4xl lg:text-8xl uppercase font-semibold">
             Overview
          </h1>
       </div>
       <ol role="list" class="mt-16 flex flex-col gap-12 lg:gap-24">
          <li>
             <h3 class="font-serif text-2xl font-bold text-black uppercase">Main pages</h3>
             <ol role="list" class="mt-4 gap-2 lg:gap-6 text-sm flex flex-col lg:flex-row items-center">
                <li> <a class="hover:text-salmon-600 duration-300" href="/"> Home</a> </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/about">
                   About
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/contact">
                   Contact
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/author">
                   Author
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/team">
                   Team
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/pricing/pricing-one">
                   Pricing
                   </a>
                </li>
             </ol>
          </li>
          <li>
             <h3 class="font-serif text-2xl font-bold text-black uppercase">
                Blog pages
             </h3>
             <ol role="list" class="mt-4 gap-2 lg:gap-6 text-sm flex flex-col lg:flex-row items-center">
                <li> <a class="hover:text-salmon-600 duration-300" href="/">
                   Blog
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/blog/blog-two">
                   Blog two
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/posts/1">
                   Blog post
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/tags">
                   Tag Index
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/tags/HTML">
                   Tag Category
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/rss.xml">
                   RSS
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/archive">
                   Archive
                   </a>
                </li>
             </ol>
          </li>
          <li>
             <h3 class="font-serif text-2xl font-bold text-black uppercase">
                Utility pages
             </h3>
             <ol role="list" class="mt-4 gap-2 lg:gap-6 text-sm flex flex-col lg:flex-row items-center">
                <li> <a class="hover:text-salmon-600 duration-300" href="/infopages/terms">
                   Terms of use
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/infopages/privacy">
                   Privacy policy
                   </a>
                </li>
                <li> <a class="hover:text-salmon-600 duration-300" href="/404">
                   404
                   </a>
                </li>
             </ol>
          </li>
       </ol>
    </div>
 </section>
 @stop
