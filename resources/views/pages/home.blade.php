@extends('layouts.default')
@section('content')

    @php
        $artList = [
            [
                'id' => '0',
                'title' => 'ai и рынок труда',
                'desc' => 'Анализ последствий внедрения искусственного интеллекта на рынок труда: изменения в спросе на рабочую силу, перспективы автоматизации и переквалификации.',
                'author' => 'Михаил Третьяков',
                'date' => 'Сб, 05 мар',
            ],
            [
                'id' => '1',
                'title' => 'Еще один умный заголовок',
                'desc' => 'Описание статьи с подробностями о содержании, возможностях и интересных фактах. Некоторые идеи, которые можно включить: эксперименты, открытия, исследования.',
                'author' => 'Анна Иванова',
                'date' => 'Вт, 04 июн',
            ],
            [
                'id' => '2',
                'title' => 'Умный заголовок №2: продолжение истории',
                'desc' => 'Вторая часть умного заголовка: продолжение предыдущего исследования с новыми данными и выводами.',
                'author' => 'Петр Сидоров',
                'date' => 'Пн, 22 мая',
            ],
            [
                'id' => '3',
                'title' => 'Новые технологии в области искусственного интеллекта',
                'desc' => 'Обзор последних достижений в мире искусственного интеллекта и их влияния на будущее общества.',
                'author' => 'Елена Петрова',
                'date' => 'Ср, 17 апр',
            ],
            [
                'id' => '4',
                'title' => 'Тайны Вселенной: открытия и гипотезы',
                'desc' => 'Раскрытие тайн космоса: новые открытия астрономов, астрофизиков и космонавтов.',
                'author' => 'Дмитрий Козлов',
                'date' => 'Чт, 29 мар',
            ],
            [
                'id' => '5',
                'title' => 'Роботизация в производстве: вызовы и перспективы',
                'desc' => 'Анализ влияния роботизации на производственные процессы и будущую экономику.',
                'author' => 'Ольга Николаева',
                'date' => 'Пт, 10 мар',
            ],
            [
                'id' => '6',
                'title' => 'Искусственный интеллект: современные тренды',
                'desc' => 'Тенденции развития искусственного интеллекта в современном мире: новые методы, применения и возможности.',
                'author' => 'Иван Смирнов',
                'date' => 'Вт, 21 фев',
            ],
        ];
    @endphp

    <div class="bg-wood-100">
        <section>
            <div class="items-center 2xl:max-w-7xl max-w-6xl md:px-12 mx-auto px-8 pt-32">
                <div class="border-b pb-5 text-balance">
                    <p class="text-black font-serif text-4xl lg:text-8xl uppercase font-semibold">
                        Привет от smart core!
                    </p>
                    <p class="text-slate-600 mt-4 text-lg">
                        Ваша веб-студия, созданная с интеллектом и стилем
                    </p>
                </div>
            </div>
        </section>
        <section>
            <div class="mx-auto 2xl:max-w-screen-2xl md:px-12 px-8 grid py-12 space-y-6">
                <a href="/blog/1" title="{{ $artList[0]['title'] }}">
                    <div class="w-full lg:pt-6 relative">
                        <article class="mx-auto 2xl:max-w-7xl md:px-12 lg:py-24 px-4 py-4">
                            <div class="w-full absolute inset-0"> <img class="w-full aspect-video h-full object-cover"
                                    src="{{ Vite::image('home/1.jpg') }}" alt="{{ $artList[0]['title'] }}"> </div>
                            <div class="relative 2xl:max-w-7xl lg:mt-24 max-w-6xl md:p-10 mx-auto p-4">
                                <div class="bg-wood-100 p-4 lg:-mb-[8.5rem] lg:p-10 max-w-xl sm:p-8 text-balance">
                                    <div>
                                        <h1 class="text-black uppercase font-serif text-5xl font-bold">
                                            {{ $artList[0]['title'] }} </h1>
                                        <p class="text-black  mt-4 text-lg"> {{ $artList[0]['desc'] }}
                                        </p>
                                    </div>
                                    <div class="items-center inline-flex space-x-1 mt-10">
                                        <p class="font-medium text-gray-900 text-sm">{{ $artList[0]['author'] }}</p>
                                        <span aria-hidden="true">·</span>
                                        <div class="flex text-gray-500 text-sm"> <time
                                                datetime="Sat Jul 01">{{ $artList[0]['date'] }}</time> </div>
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
                    @foreach ($artList as $item)
                        @if ($item['id'] !== '0')
                            <a href="/blog/{{ $item['id'] }}" title="{{ $item['title'] }}" class="group">
                                <article class="h-full flex-1">
                                    <div class="w-full block lg:col-span-2"> <img
                                            class="h-full object-cover aspect-[384/246] bg-center"
                                            src="{{ Vite::image('home/2.jpg') }}" alt="{{ $item['title'] }}"> </div>
                                    <div class="w-full flex flex-col items-start justify-between -mt-20 p-4">
                                        <div
                                            class="w-full p-4 lg:p-8  bg-wood-100 h-full flex flex-col justify-between text-balance">
                                            <div>
                                                <p class="font-medium text-black uppercase text-xl font-serif">
                                                    {{ $item['title'] }}</p>
                                                <p class="text-slate-600 line-clamp-2 mt-12 text-sm">{{ $item['desc'] }}
                                                </p>
                                            </div>
                                            <div class="items-center inline-flex mt-1 space-x-1">
                                                <p class="font-medium text-gray-900 text-xs">{{ $item['author'] }}</p>
                                                <span aria-hidden="true">·</span>
                                                <div class="flex text-gray-500 text-xs"> <time
                                                        datetime="{{ $item['date'] }}">{{ $item['date'] }}</time> </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
        <section class="bg-wood-500">
            <div class="px-8 md:px-12 max-w-6xl mx-auto 2xl:max-w-7xl items-center py-24">
                <div class="grid grid-grid-cols-1 lg:grid-cols-2 justify-between lg:items-end text-balance">
                    <div class="text-center lg:text-left">
                        <h2 class="text-black font-serif text-4xl  uppercase font-semibold ">
                            ПОДПИШИТЕСЬ НА РАССЫЛКУ НОВОСТЕЙ
                        </h2>
                        <p class="mt-4 text-lg text-slate-600">
                            Станьте первыми, кто узнает о всех новостях
                        </p>
                    </div>
                    <div class="mt-12 lg:ml-auto">
                        <form class="flex flex-col lg:flex-row border-2 border-black overflow-hidden">
                            <label for="email-address" class="sr-only">Ваш емайл</label>
                            <input id="email-address" name="email-address" type="email" autocomplete="email"
                                required=""
                                class="w-full bordeflex flex-col lg:flex-row border-2 border-black overflow-hiddenr-white px-5 py-3 h-14 ring-inset placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-mist-700"
                                placeholder="bestemail@gmail.com">
                            <button type="submit"
                                class="inline-flex justify-center w-full lg:w-auto py-1 px-6 h-14 shrink-0 items-center text-sm font-medium tracking-wide focus:outline-none bg-black text-white hover:bg-mist-900 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mist-600 active:bg-mist-700 active:text-white/80 disabled:opacity-30 disabled:hover:bg-mist-600">
                                Подписаться
                            </button>
                        </form>
                        <p class="mt-3 text-sm text-black text-center lg:text-left">
                            Мы заботимся о защите ваших данных. Прочтите нашу
                            <a href="/infopages/privacy"
                                class="font-medium text-salmon-600 hover:text-black underline">Политику
                                конфиденциальности.</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
