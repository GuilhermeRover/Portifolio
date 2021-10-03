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
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script> 

    <title>{{ str_replace('_', ' ', config('app.name')) }}</title>
</head>
<body class="bg-white dark:bg-gray-900 transition duration-1000">
    
    <div x-data="{dark: localStorage.theme === 'dark', Menu: false, Lang: false}">
        {{ $slot }}
    </div>

    @livewireScripts
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    {{-- <script src="{{ asset('js/anime.min.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            anime.timeline({
                easing: 'easeOutExpo',
            })
            .add({
                targets: '.nav-target',
                width: [ '0px', '100%' ],
            })
            .add({
                targets: '.nav-btn',
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 800,
            })
            .add({
                targets: '.logo',
                //height: [ '0rem', '5rem' ],
                opacity: [0, 1],
                translateX: [-200, 0],
                duration: 600,
            })
            .add({
            });
            
            anime({
                easing: 'easeOutExpo',
                targets: '.first-section',
                opacity: [0, 1],
                translateY: [-100, 0],
                delay: 2600,
            });

            var navLinks = document.querySelectorAll('.nav-link');

            navLinks.forEach((navLink) => {
                navLink.addEventListener('mouseenter', () => {

                    
                    var letter = navLink.querySelectorAll('.letter');

                    anime.timeline({
                        targets: letter,
                    })
                    .add({
                        translateX: [0, -30],
                        opacity: [1, 0],
                        easing: 'easeOutExpo',
                        duration: 300,
                        delay: (el, i) => 30 * i,
                    })
                    .add({
                        translateX: [40, 0],
                        opacity: [0, 1],
                        easing: 'easeOutExpo',
                        duration: 700,
                        delay: (el, i) => 30 * i,
                    })
                })
            })

            var OpenMenu = document.querySelector('.open-menu');
            var CloseMenu = document.querySelector('#CloseMenu');

            OpenMenu.addEventListener('click', () => {
                anime.timeline({
                    easing: 'easeInOutExpo',
                })
                .add({
                    targets: '.nav-menu',
                    translateX: ['100%', 0],
                    direction: 'reverse',
                    duration: 500,
                })
                .add({
                    targets: '.menu div, .footer-menu',
                    opacity: [0, 1],
                    translateX: [100, 0],
                    direction: 'reverse',
                    duration: 1000,
                })
            })

            //CloseMenu.addEventListener('click', () => {
            //    anime.
            //})
        });
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