<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Website Clone</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B421JFG106"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-B421JFG106');
    </script>
</head>
<body class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-700 opacity-[.97]" style="font-family: Futura">
<div class="text-white mt-6  ">
    <header>
        <div class="flex">
            <div class="flex border border-t-3 p-3 px-2 ml-6">
                logo
            </div>
            <ul class="flex flex-row w-full justify-end font-normal mt-2 opacity-[.95] mr-6">
                <li>
                    <a href="#" class="block my-2 mr-4 text-white text-white rounded" aria-current="page">Themes</a>
                </li>
                <li>
                    <a href="#" class="block my-2 mr-4 ml-3 text-white text-white rounded" aria-current="page">Blog</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                       class="block my-2 ml-3 text-white text-white rounded" aria-current="page">Kontakt</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="mt-8">
        <div class="flex flex-row  mb-10">
            <div class="flex-auto -mr-32 -ml-24">
                <h1 class=" font-medium leading-tight text-3xl text-center font-light mt-0">Handgefertigte Webseiten</h1>
                <div>
                    <h3 class="font-medium leading-tight text-center text-2xl mb-2 mt-14">
                        Individuell an
                        Deine
                        Bedürfnisse
                        angepasst.</h3>
                    <div class="flex justify-around ml-16 mt-12">
                        <div>
                            <h5 class="mt-8 font-medium leading-tight text-lg mb-2">Egal wofür Du Dich entscheidest,
                                <p>das gibt's keinesfalls:</p></h5>
                            <ul class="list-disc ml-4 opacity-75">
                                <li>
                                    <p>lange Ladezeiten</p>
                                </li>
                                <li>
                                    <p>aufgeblasenen Code</p>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="mt-8 font-medium leading-tight text-lg mb-2">
                                Stattdessen gibts:
                            </h5>
                            <ul class="list-disc ml-4 opacity-75">
                                <li>Jemanden, <s>der Dich</s> den du verstehst</li>
                                <li><s>Pixelgenaue</s> Optimale Designumsetzung</li>
                                <li>eine <s>saftige</s> angemessene Rechnung</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 -mt-6 ">
                <img src="bild.jpg" class="flex object-cover mix-blend-multiply mx-auto rounded-full md:h-96 md:w-96 ">
            </div>
        </div>
        <div class="mb-10">
            <h3 class="opacity-75 font-medium leading-tight font-normal text-xl text-center mb-8 pt-2">ANGEBOT</h3>
            <div class="flex flex-row">
                <div class="w-1/2 bg-gray-900">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Maßgeschneiderte Webseite</h5>

                        <div class="opacity-75">
                            <p class="mb-6"> du willst eine passgenaue, an Deine Bedürfnisse zugeschnittene
                                Webseite?</p>

                            <p class="mb-8"> Ich kann dir bei der Umsetzung von Anfang bis Ende zur Seite stehen – oder
                                mittendrin rein
                                hechten.</p>
                            <p class="mb-6"> Bei mir gibt es Minimal designs aus fertigen Vorlagen, sowie Arbeit nach deinen Design. </p>

                        </div>
                        <div class="w-full flex mb-6">
                            <a href="#"
                               class=" roundedborder border-2 border-[#141414] transition ease-in-out delay-75 duration-300 py-2 px-3 w-fit flex bg-[#7c0202] font-bold text-sm text-center hover:bg-[#0a0a0a] hover:border-2 hover:border-white">
                                HILF MIR</a>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 bg-black">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Kurse</h5>
                        <div class="opacity-75">
                            <p class="mb-6">Man muss heutzutage nicht programmieren können, um einfache Webseiten zu
                                erstellen.</p>

                            <p class="mb-8">Wenn Du es aber dennoch lernen willst, helfe ich beim Einstieg in die
                                fabelhafte Welt des Webdesigns.</p>

                            <p class="mb-6">Ich biete Basic einstiegskurse an die direkt ein Projekt nacht absprache enthalten</p>
                        </div>
                        <div class="w-full flex mb-6">
                            <a href="#"
                               class=" rounded border border-2 border-[#141414] transition ease-in-out delay-75 duration-300 py-2 px-3 w-fit flex bg-[#058935] font-bold text-sm text-center hover:bg-[#0a0a0a] hover:border-2 hover:border-white">
                                ZUM KANINCHENBAU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5">
            <h3 class="opacity-75 font-medium leading-tight text-xl mb-8 pt-2 text-center">WAS ICH MACHE</h3>
            <div class="flex flex-row">
                <div class="w-1/2 bg-[#141414] bg-gradient-to-r from-black via-gray-900 to-gray-700">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-5 mt-5">PHP(bevorzugt im Laravel-Framework) und Design</h5>
                        <div class="mb-8">
                            <p class="mb-5 opacity-75">HTML & CSS schreibe ich am liebsten von Hand(für die Basics wird natürlich Tailwind zum Zeitsparen verwendet).
                                Na ja, schon mit dem Computer aber ich tippe alles selbst.</p>

                            <p class=" inline opacity-75">Frameworks wie </p> <a href="#"
                                                                                 class="text-white underline">Tailwind</a>,
                            <a href="#" class="text-white underline">Laravel</a>
                            <p class="inline opacity-75">oder</p> <a href="#"
                                                                     class="text-white underline">React </a>
                            <p class="inline-block opacity-75 mb-5"> kommen bei mir zum
                                Einsatz.</p>
                            <p class="inline-block opacity-75">Auch möglich sind: Custom Properties (CSS
                                Variablen), Flexbox, CSS Grid, und
                                CSS Animationen. </p>
                        </div>
                        <p>Frameworks sind die Zukunft!</p>
                    </div>
                </div>
                <div class="w-1/2 bg-[#141414] bg-gradient-to-r from-gray-700 via-gray-800 to-black">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-5 mt-5">CMS?</h5>
                        <div class="mb-5">

                        </div>
                        <p class="mb-6">DON'T FIGHT THE SYSTEM!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-0">
            <h3 class="opacity-75 font-medium leading-tight text-xl text-center mb-8 pt-2">WAS ICH NICHT MACHE</h3>
            <div class="flex flex-row">
                <div class="w-1/3 bg-[#141414]">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Da ich mich dauerhaft weiterbilden möchte..</h5>
                        <div class="opacity-75">
                            <p class="mb-6">bin ich für fast alles zu haben.</p>
                            <p class="mb-6">Das lässt sich jedoch alles nach einer Anfrage klären.</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-[#141414]">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Online Marketing</h5>

                        <div>
                            <p class=" inline opacity-75">Du willst alles über deine Besucher wissen? Dann bist Du bei
                                mir </p>
                            <p class="inline-block mb-6">FALSCH.
                            <p class="mb-6 opacity-75">Such dir lieber einen Marketing Spezialisten der sich mit Funnels
                                & Co.
                                auskennt.</p>
                            <p class="mb-6 opacity-75">Ich bau das dann schon in deine Webseite ein, allerdings ohne
                                Begeisterung.</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-[#141414]">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Browsersupport</h5>
                        <div>
                            <p class="mb-6 opacity-75">Wer den Browser nicht updatet, bleibt auf der Strecke.</p>
                            <p class="inline opacity-75">Zum Thema Browsersupport gibt's für mich nur eine Richtung
                                – </p>
                            <p class="inline-block mb-6">VORWÄRTS.</p>
                            <p class="mb-6 opacity-75">Es führt kein Weg daran vorbei?
                                Kostet extra! Kostet mich ja auch extra Nerven.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="bg-white rounded-b p-4 text-xs">
    <div class="flex text-center">
        <p class="flex-auto"> ©2022 - .x. GmbH</p>
        <a href="mailto:bewerbung@daniel-spindler.de" class="flex-auto underline">bewerbung@daniel-spindler.de</a>
        <p class="underline flex-auto">+49 172 431 55 08</p>
        <a href="{{route('dataSecurity')}}" class="inline flex-auto">Datenschutzerklärung</a>
        <a href="{{route('impressum')}}" class=" inline flex-auto">Impressum</a>
    </div>
</footer>
</body>
</html>
