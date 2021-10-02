<div>
    {{-- Navbar --}}
    <nav class="headroom headroom--pinned fixed w-full z-10 top-0 bg-transparent" id="header" x-on:click.away="Lang = false;">
        <div class="navbar">
            <div class="flex items-center justify-between">
                <div class="ml-6 md:ml-20 lg:ml-40 xl:ml-60 flex items-center justify-center">
                    <img class="logo h-20" src="{{asset('images/logo3.png')}}" alt="{{__('Logo')}}">
                </div>
                <div class="mr-6 md:mr-20 lg:mr-40 xl:mr-60 flex items-center justify-center">
                    <div class="nav-btn flex items-center justify-center mr-10 cursor-pointer" @click="dark = !dark, change()">
                        <box-icon name='sun' class="theme" x-show="dark" x-transition.duration.300ms></box-icon>
                        <box-icon name='moon' class="theme" x-show="!dark" x-transition.duration.300ms></box-icon>
                    </div>
                    <box-icon name='menu-alt-right' class="fill-current h-10 w-10 cursor-pointer text-gray-900 dark:text-gray-100 transition duration-1000" x-show="!Menu" @click="Menu = true"></box-icon>
                </div>
            </div>
        </div>
    </nav>

    {{-- Navbar Menu --}}
    <div class="w-full h-screen fixed z-20 bg-gray-900 dark:bg-gray-50" x-show="Menu" data-aos="fade-right">
        <div class="absolute z-10 w-full">
            <div class="h-14 md:h-20 flex items-center justify-between">
                <div>{{-- left element of flex --}}</div>
                <div class="mr-6 md:mr-20 lg:mr-40 xl:mr-60 flex items-center justify-center cursor-pointer" @click="Menu = !Menu">
                    <box-icon name='x' class="fill-current h-10 w-10 text-gray-50 dark:text-gray-900"></box-icon>
                </div>
            </div>
        </div>

        <div class="menu">
            <div>
                <div class="text-menu">
                    Menu
                </div>
                <a href="#" class="nav-link">
                    <div class="letter">
                        H
                    </div>
                    <div class="letter">
                        o
                    </div>
                    <div class="letter">
                        m
                    </div>
                    <div class="letter">
                        e
                    </div>
                </a>
                <a href="#" class="nav-link">
                    <div class="letter">
                        P
                    </div>
                    <div class="letter">
                        r
                    </div>
                    <div class="letter">
                        o
                    </div>
                    <div class="letter">
                        j
                    </div>
                    <div class="letter">
                        e
                    </div>
                    <div class="letter">
                        t
                    </div>
                    <div class="letter">
                        o
                    </div>
                    <div class="letter">
                        s
                    </div>
                </a>
                <a href="#" class="nav-link">
                    <div class="letter">
                        S
                    </div>
                    <div class="letter">
                        o
                    </div>
                    <div class="letter">
                        b
                    </div>
                    <div class="letter">
                        r
                    </div>
                    <div class="letter">
                        e
                    </div>
                    <div class="letter">
                        &nbsp;
                    </div>
                    <div class="letter">
                        m
                    </div>
                    <div class="letter">
                        i
                    </div>
                    <div class="letter">
                        m
                    </div>
                </a>
                <a href="#" class="nav-link">
                    <div class="letter">
                        C
                    </div>
                    <div class="letter">
                        o
                    </div>
                    <div class="letter">
                        n
                    </div>
                    <div class="letter">
                        t
                    </div>
                    <div class="letter">
                        a
                    </div>
                    <div class="letter">
                        t
                    </div>
                    <div class="letter">
                        o
                    </div>
                </a>
            </div>
        </div>

        <div class="footer-menu">
            <div class="text-menu">
                © 2021 Guilherme Rover. Brasil, Ribeirão Preto/SP.
            </div>
        </div>
    </div>
</div>  
 