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
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B421JFG106');
    </script>
</head>
<body class="bg-[#0a0a0a] opacity-[.97]" style="font-family: Futura">
<div class="text-white mt-6 mx-2 ml-6 mr-6 ">
    <header>
        <div class="flex">
            <div class="flex border border-t-3 p-3 px-2">
                logo
            </div>
            <ul class="flex flex-row w-full justify-end font-normal mt-2 opacity-[.95]">
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
        <h1 class="font-medium leading-tight text-3xl font-light mt-0">Handgefertigte Webseiten</h1>
        <div class="flex flex-row">
            <div class="flex-1">
                <div>
                    <h3 class="font-medium leading-tight text-2xl mb-2 mt-12">als fertige Vorlage oder individuell an
                        Deine
                        Bedürfnisse
                        angepasst.</h3>
                    <div class="mb-6">
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
                    <div class="mb-20">
                        <h5 class=" font-medium leading-tight text-lg mb-2">
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
            <div class="flex-1">
                <img  src="bild.jpg" class="grayscale object-cover">
            </div>
        </div>
        <div class="mb-20">
            <h3 class="opacity-75 font-medium leading-tight font-normal text-xl mb-4 pt-2">ANGEBOT</h3>
            <div class="flex flex-row">
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded h-auto">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Fertige Vorlagen</h5>
                        <div>
                            <p class="mb-6 opacity-75">Knappes Budget? Keine Zeit? Oder einfach Lust, die eigene
                                Webseite selbst zu
                                machen?</p>
                            <div class="mb-8 ">
                                <p class="opacity-75 inline"> Dann schnapp Dir eines meiner fertigen WordPress Themes
                                    auf
                                </p><a href="#" class="text-white underline">what-the-phuc.com</a>
                            </div>
                        </div>
                        <div class="w-full flex mb-6">
                            <a href="#"
                               class="border border-2 border-[#141414] transition ease-in-out delay-75 duration-300 hover:bg-[#0a0a0a] hover:border-2 hover:border-white py-2 px-3 w-fit flex bg-[#1f518e] font-bold text-sm text-center">
                                WHAT THE PHUC</a>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded mx-8">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Maßgeschneiderte Webseite</h5>

                        <div class="opacity-75">
                            <p class="mb-6"> du willst eine passgenaue, an Deine Bedürfnisse zugeschnittene,
                                Webseite?</p>
                            <p class="mb-8"> Ich kann dir bei der Umsetzung von Anfang bis Ende zur Seite stehen – oder
                                mittendrin rein
                                hechten.</p>
                        </div>
                        <div class="w-full flex mb-6">
                            <a href="#"
                               class="border border-2 border-[#141414] transition ease-in-out delay-75 duration-300 py-2 px-3 w-fit flex bg-[#7c0202] font-bold text-sm text-center hover:bg-[#0a0a0a] hover:border-2 hover:border-white">
                                HILF MIR</a>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Kurse</h5>
                        <div class="opacity-75">
                            <p class="mb-6">Man muss heutzutage nicht programmieren können, um tolle Webseiten zu
                                erstellen.</p>

                            <p class="mb-8">Wenn Du es aber dennoch lernen willst, helfe ich beim Einstieg in die
                                fabelhafte Welt des Webdesigns.</p>
                        </div>
                        <div class="w-full flex mb-6">
                            <a href="#"
                               class="border border-2 border-[#141414] transition ease-in-out delay-75 duration-300 py-2 px-3 w-fit flex bg-[#058935] font-bold text-sm text-center hover:bg-[#0a0a0a] hover:border-2 hover:border-white">
                                ZUM KANINCHENBAU</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-20">
            <h3 class="opacity-75 font-medium leading-tight text-xl mb-4 pt-2">WAS ICH MACHE</h3>
            <div class="flex flex-row">
                <div class="w-1/2 bg-[#141414] border border-[#212121] rounded h-auto">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-5 mt-5">HTML & CSS</h5>
                        <div>
                            <p class="mb-5 opacity-75">HTML & CSS schreibe ich am liebsten von Hand. Na ja, schon mit
                                dem Computer
                                aber ich tippe alles selbst.</p>

                            <p class=" inline opacity-75">Frameworks wie </p> <a href="#"
                                                                                 class="text-white underline">Bootstrap</a>,
                            <a href="#" class="text-white underline">Tailwind</a>
                            <p class="inline opacity-75">oder</p> <a href="#"
                                                                     class="text-white underline">Foundation </a>
                            <p class="inline-block opacity-75 mb-5"> kommen bei mir nicht zum
                                Einsatz.</p>
                            <p class="inline opacity-75">Stattdessen kommen Custom Properties (CSS
                                Variablen), Flexbox, CSS Grid, und
                                CSS Animationen sowie </p><a href="#" class="text-white underline">BEM</a>
                            <p class="inline opacity-75"> und </p><a href="#" class="text-white underline">ITCSS</a>
                            <p class="inline-block opacity-75 mb-5">voll zur Geltung.</p>
                            <p class="opacity-75 inline-block">Wenn Du Dich fragst, welche Compiler und Build Tools ich
                                verwende
                                lautet die
                                Antwort: </p>
                            <p class="inline-block mb-5">KEINE.</p>
                        </div>
                        <p>Vanilla CSS rulez Baby!</p>
                    </div>
                </div>
                <div class="w-1/2 bg-[#141414] border border-[#212121] rounded mx-8">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-5 mt-5">WordPress</h5>
                        <div class="mb-5">
                            <p class="mb-5 opacity-75">Als Content Management System kommt WordPress zum Einsatz. Aber
                                auch hier
                                wird fast alles von Hand geschrieben.</p>
                            <p class="mb-5 inline opacity-75">Pagebuilder kommen für mich nicht in Frage. Stattdessen
                                style
                                und erweitere
                                ich den WordPress eigenen </p><a href="#"
                                                                 class="text-white underline inline-block mb-5">Gutenberg
                                Editor</a>.
                            <p class="mb-5 opacity-75">Dadurch bleibt das Design modular und (bis zu einem bestimmten
                                Grad)
                                individualisierbar. Wir wollen das Design ja nicht zerstören.</p>
                            <p class="opacity-75 inline">Warum ich keine Pagebuilder wie </p><a href="#"
                                                                                                class="text-white underline inline">Elementor</a>
                            <p class="opacity-75 inline">oder das</p> <a href="#" class="text-white underline inline">Divi</a>
                            <p class="opacity-75 mb-6 inline">Theme verwende? Weil
                                sie WordPress Funktionalität überschreiben.</p>
                        </div>
                        <p class="mb-6">DON'T FIGHT THE SYSTEM!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-20">
            <h3 class="opacity-75 font-medium leading-tight text-xl mb-8 pt-2">WAS ICH NICHT MACHE</h3>
            <div class="flex flex-row">
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded h-auto">
                    <div class="ml-5">
                        <h5 class="font-medium leading-tight text-lg mb-6 mt-5">JavaScript</h5>
                        <div class="opacity-75">
                            <p class="mb-6">Mit JavaScript kann man tolle Sachen machen.</p>
                            <p class="mb-6">Und ich bin mir sicher, dass sehr viele andere sehr viel mehr Spaß damit
                                haben als ich.</p>
                            <p class="mb-6">Ich kann Dir gern ihre Kontaktdaten geben.</p>
                        </div>
                    </div>
                </div>
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded mx-8">
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
                <div class="w-1/3 bg-[#141414] border border-[#212121] rounded">
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
        <div class="w-full mb-5">
            <h3 class="opacity-75 font-medium leading-tight text-xl mb-4 pt-2">Kontakt</h3>
            <div class=" bg-[#141414] border border-[#212121] rounded w-full p-4">
                <a href="mailto:bewerbung@daniel-spindler.de" class="underline">bewerbung@daniel-spindler.de</a>
                <p class="underline">+49 172 431 55 08</p>
            </div>
        </div>
    </div>
</div>
<footer class="bg-white rounded-b p-4 text-xs">
    <div class="flex">
        <p class="flex-1"> ©2022 - Troll GmbH</p>
        <div class="inline space-x-1 mr-1">
            <a  href="{{route('dataSecurity')}}"  class="inline flex-2">Datenschutzerklärung</a>
            <a  href="{{route('impressum')}}" class=" inline flex-2">Impressum</a>
        </div>
    </div>
</footer>
</body>
</html>
