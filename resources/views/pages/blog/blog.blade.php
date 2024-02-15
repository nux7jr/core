@extends('layouts.default')
@section('content')
    <div class="bg-wood-100">
        <section>
            <div class="mx-auto 2xl:max-w-screen-2xl md:px-12 px-8 grid py-12 space-y-6"> <img
                    class="w-full aspect-video h-full object-cover     " src="../../artFour.jpg" alt="ImageAlt."> </div>
        </section>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-6xl px-8 md:px-12  mx-auto  pb-24">
            <div class="lg:col-span-3 hidden lg:block">
                <div id="table-of-contents" class="sticky top-48">
                    <ul class="space-y-3 text-xs">
                        <li><a href="#choose-your-fonts" class="text-black hover:underline">Choose Your Fonts</a></li>
                        <li><a href="#define-custom-font-family" class="text-black hover:underline">Define Custom Font
                                Family</a></li>
                        <li><a href="#define-custom-styles" class="text-black hover:underline">Define Custom Styles</a></li>
                        <li><a href="#apply-custom-styles" class="text-black hover:underline">Apply Custom Styles</a></li>
                        <li><a href="#conclusion" class="text-black hover:underline">Conclusion</a></li>
                    </ul>
                </div>
            </div>
            <section class="relative bg-wood-100 lg:-mt-96 lg:p-8 overflow-hidden lg:col-span-9 ">
                <div class="grid grid-cols-1 gap-10 xl:gap-24">
                    <div class="mx-auto bg-wood-100      ">
                        <div>
                            <h1 class="text-black font-serif font-bold lg:text-4xl text-xl uppercase"> The Ghost of Willow
                                Creek </h1>
                        </div>
                        <div class="items-center inline-flex mt-10">
                            <div class="items-center inline-flex space-x-1">
                                <p class="font-medium text-gray-900 text-sm"> Akira Nakamura </p>
                                <span aria-hidden="true">·</span>
                                <div class="flex text-gray-500 text-sm"> <time datetime="Tue Jul 18">Tue Jul 18</time>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-3 mt-6"> <span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/web animation">web animation </a> </span><span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/SVG">SVG </a> </span><span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/web performance optimization">web performance optimization </a> </span><span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/CSS transitions">CSS transitions </a> </span><span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/animation libraries">animation libraries </a> </span><span
                                class="bg-wood-500 px-3 py-1.5 text-xs    h-8 text-black items-center flex"> <a
                                    href="/tags/GreenSock">GreenSock </a> </span> </div>
                    </div>
                    <div>
                        <p> <em class="font-medium text-black font-serif text-2xl uppercase">Strange occurrences and
                                sightings of a ghostly figure in the small town of Willow Creek lead a group of teenagers on
                                a thrilling adventure to uncover the truth.</em> </p>
                    </div>
                    <div>
                        <div class="prose-styles ">
                            <h1 id="defining-typography-on-your-tailwind-css-project">Defining typography on your Tailwind
                                CSS project</h1>
                            <p><em>This blog post shows how to add custom typography to your Tailwind CSS project, with
                                    example code.</em></p>
                            <p>Tailwind CSS is a popular utility-first CSS framework that offers a wide range of pre-defined
                                classes to make web development faster and more efficient. While Tailwind provides an
                                extensive set of built-in styles, it’s also easy to customize your project with your own
                                fonts and styles. In this blog post, we’ll go through the steps to apply custom fonts and
                                styles on a Tailwind CSS project using the tailwind.config.js file.</p>
                            <h2 id="choose-your-fonts">Choose Your Fonts</h2>
                            <p>The first step to applying custom fonts on a Tailwind CSS project is to choose the fonts you
                                want to use. There are many websites where you can download free fonts or use a CDN such as:
                                You can also use paid fonts from websites like:</p>
                            <ul>
                                <li><a href="https://www.fontshare.com/">Font Share</a></li>
                                <li><a href="https://fonts.google.com/">Google Fonts</a></li>
                                <li><a href="https://www.collletttivo.it/">Colletivo</a></li>
                                <li><a href="https://coopertype.org/">Type Cooper</a></li>
                                <li><a href="https://www.theleagueofmoveabletype.com/">The league of movable type</a></li>
                                <li><a href="https://velvetyne.fr/">Velvetyne</a></li>
                            </ul>
                            <p>or paid fonts from:</p>
                            <ul>
                                <li><a href="https://www.linotype.com">Linotype</a></li>
                                <li><a href="https://www.atipofoundry.com/">Atypo</a></li>
                                <li><a href="https://pangrampangram.com/">Pangram Pangram</a></li>
                                <li><a href="https://typeheist.co/">Typeheist</a> Once you have chosen your fonts, you need
                                    to add them to your project. You can do this by downloading the font files and placing
                                    them in a folder within your project’s directory.</li>
                            </ul>
                            <h2 id="define-custom-font-family">Define Custom Font Family</h2>
                            <p>After downloading the font files or using the CDN, you need to define a custom font family in
                                the tailwind.config.js file. Open the file and add the following code to the theme
                                section.first-letter: Here is an example of Lexington Themes talwind.config.js file</p>
                            <pre class="astro-code css-variables"
                                style="background-color:var(--astro-code-color-background);color:var(--astro-code-color-text); overflow-x: auto;"
                                tabindex="0"><code><span class="line"><span>/** @type {import('tailwindcss').Config} */</span></span>

                   <p>In this code, “Inter var” and “JetBrains Mono” is the name of the font family you want to use, “Inter var” and “JetBrains Mono” is the name of the font you downloaded or used the CDN, and <code>defaultTheme.fontFamily</code> is the fallback font in case the custom font doesn’t load.</p>
                   <h2 id="define-custom-styles">Define Custom Styles</h2>
                   <p>Once you have defined the custom font family, you can define custom styles that use it. You can create a class for each style or add them to existing Tailwind CSS classes. For example, you can add custom styles to the h1 class as follows:</p>

                   <p>In this code, we added custom styles to outsite the theme section to be able ot override Tailwind’s classes. We added a custom font weight and line-height.</p>
                   <h2 id="apply-custom-styles">Apply Custom Styles</h2>
                   <p>To apply your custom styles to your HTML, use the class attribute and the classes you created or extended in the tailwind.config.js file. For example, to apply the custom styles to an h1 element, add the class attribute as follows:</p>
                   <pre class="astro-code css-variables" style="background-color:var(--astro-code-color-background);color:var(--astro-code-color-text); overflow-x: auto;" tabindex="0"><code><span class="line"><span>&lt;h1 class="font-sans"&gt;Hello World&lt;/h1&gt;</span></span>
         <span class="line"><span>&lt;p class="font-mono"&gt;Hello World, again&lt;/p&gt;</span></span></code></pre>
                            <p>In this code, you do not need to add the <code>font-sans</code> class because is the default
                                class that Tailwind css uses, but you will have to use <code>font-mono</code> to define the
                                mono font within your HTMl. But no inside <code>&lt;pre&gt;</code> or
                                <code>&lt;code&gt;</code> because the font is already mono
                            </p>
                            <h2 id="conclusion">Conclusion</h2>
                            <p>In conclusion, customizing fonts and styles in a Tailwind CSS project using the
                                tailwind.config.js file is straightforward. You can choose your fonts, define a custom font
                                family, define custom styles, and apply them to your HTML elements using the classes you
                                created or extended. With these steps, you can create unique and personalized designs that
                                stand out from the rest.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
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
                        <form class="flex flex-col lg:flex-row border-2 border-black    overflow-hidden"> <label
                                for="email-address" class="sr-only">Email address</label> <input id="email-address"
                                name="email-address" type="email" autocomplete="email" required=""
                                class="w-full border-white px-5 py-3 h-14 ring-inset placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-mist-700"
                                placeholder="Enter your email"> <button type="submit"
                                class="inline-flex justify-center w-full lg:w-auto py-1 px-6 h-14 shrink-0 items-center  text-sm font-medium tracking-wide focus:outline-none bg-black text-white hover:bg-mist-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mist-600 active:bg-mist-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-mist-600">Notify
                                me</button> </form>
                        <p class="mt-3 text-sm text-black text-center lg:text-left">
                            We care about the protection of your data. Read our
                            <a href="/infopages/privacy"
                                class="font-medium text-salmon-600 hover:text-black underline">Privacy Policy.</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
