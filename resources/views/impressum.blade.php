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
<body class="bg-gray-900">
<ul id="imperial-flower">
    <li class="card bg-gradient-to-tl from-transparent via-stone-400 to-slate-200">
        <span>
            <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Maßgeschneiderte Webseite</h5>
            <div class="opacity-75">
                <p class="mb-6"> du willst eine passgenaue, an Deine Bedürfnisse zugeschnittene,
                    Webseite?</p>
                <p class="mb-8"> Ich kann dir bei der Umsetzung von Anfang bis Ende zur Seite stehen – oder
                    mittendrin rein
                    hechten.</p>
            </div>
        </span>
        <span></span>
    </li>

    <li class="card bg-gradient-to-tl from-transparent via-stone-400 to-slate-200" id="">
            <span class="text-base text-start">
                <h5 class="font-medium leading-tight  text-lg mb-6 mt-5">Fertige Vorlagen</h5>
                <p class="mb-6 opacity-75 text-start">Knappes Budget? Keine Zeit? Oder einfach Lust, die eigene
                                Webseite selbst zu
                                machen?</p>
                <div class="mb-8 ">
                                <p class="opacity-75 inline"> Dann schnapp Dir eines meiner fertigen WordPress Themes
                                    auf
                                </p><a href="#" class=" underline">what-the-phuc.com</a>
                            </div>
            </span>
        <span></span>
    </li>
    <li class="card bg-gradient-to-tl from-transparent via-stone-400 to-slate-200" id="">
        <span>
            <h5 class="font-medium leading-tight text-lg mb-6 mt-5">Kurse</h5>
            <div class="opacity-75">
                <p class="mb-6">Man muss heutzutage nicht programmieren können, um tolle Webseiten zu
                    erstellen.</p>

                <p class="mb-8">Wenn Du es aber dennoch lernen willst, helfe ich beim Einstieg in die
                    fabelhafte Welt des Webdesigns.</p>
            </div>
        </span>
        <span></span>
    </li>
</ul>
</body>
<style>
    * {
        box-sizing: border-box;
    }

    ul, li, ol {
        display: inline-block;
        padding: 0;
        margin: 0;
    }


    li {
        float: right;
        width: 300px;
        height: 300px;

        margin: 20px 10px;
        background: azure;
        padding: 10px 20px;
        color: black;
        border: 1px solid rgba(100, 100, 100, .1);
        position: relative;

        border-radius: 6px;
        box-shadow: 1px 3px 20px rgba(0, 0, 0, .1);
    }


    #imperial-flower {
        display: block;
        border: none;
        margin-left: -200px;
    }

    #imperial-flower {
        display: block;
        border: none;
        margin-left: auto;
        width: 800px;
        margin-right: auto;
    }

    #imperial-flower .card {
        margin-right: -50px;
        display: inline-block;
        position: relative;
        transition: transform .2s ease-out;

    }

    #imperial-flower .card:hover {
        cursor: pointer;
        transform: translate(2%, -10%) rotate(19deg);
        transform-origin: bottom right;
    }

    ul li span {
        display: inline-block;
        position: relative;
    }


    li.card {
        transition: all .2s ease-in-out;
    }

    li.card:hover {
        z-index: 5000;
    }


    .slabo {
        font-family: 'Slabo 27px', serif;
        text-align: center;
        color: azure;
        font-size: 40px;
        text-transform: uppercase;
        letter-spacing: 5px;
    }

    .slabo:after,
    .slabo:before {
        content: '♦';
    }

</style>
<script>
    var card = $('li.card');


    card.hover(function () {
        $(card).not(this).toggleClass('card-behind');
    });
</script>
