<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    
    <script>
        // Dark mode configuration
        
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <title>{{ str_replace('_', ' ', config('app.name')) }}</title>
</head>
<body class="bg-baseLight-light dark:bg-baseDark toggle-theme">
    
    <div x-data="{dark: localStorage.theme === 'dark', Menu: false, Lang: false, aboutBtn: false}">
        {{ $slot }}
    </div>

    @livewireScripts
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        function closeMenu() {
            anime.timeline({
                easing: 'easeInOutExpo',
            })
            .add({
                targets: '.CloseMenu',
                translateX: [0, 200],
                opacity: [1, 0],
                duration: 400,
            })
            .add({
                targets: '.menu div, .footer-menu',
                opacity: [1, 0],
                translateX: [0, 100],
                direction: 'reverse',
                duration: 800,
            })
            .add({
                targets: '.nav-menu2',
                translateX: [0, '100%'],
                duration: 400,
            })
            .add({
                targets: '.nav-menu1',
                translateX: [0, '100%'],
                duration: 600,
            })
            .add({
                targets: '.open-menu',
                translateX: [0],
                opacity: [0, 1],
                direction: 'reverse',
                duration: 400,
            })
        }
    </script>

    <script>
        // toggle theme
        var htmlClasses = "";
        function change() {
            htmlClasses = document.querySelector('html').classList;
            if(localStorage.theme == 'dark') {
                htmlClasses.remove('dark');
                localStorage.removeItem('theme')
            } else {
                htmlClasses.add('dark');
                localStorage.theme = 'dark';
            }
        }
    </script>
</body>
</html> 