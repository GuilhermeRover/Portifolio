<div>
    {{-- Navbar --}}
    <nav class="headroom headroom--pinned fixed w-full z-10 top-0 bg-baseLight-light dark:bg-baseDark bg-opacity-60 dark:bg-opacity-60 md:bg-transparent md:dark:bg-transparent md:bg-opacity-0 toggle-theme" id="header" x-on:click.away="Lang = false;">
        <div class="nav-target">
            <div class="flex items-center justify-between">
                <div class="ml-6 md:ml-20 lg:ml-40 xl:ml-60 flex items-center justify-center">
                    <img class="logo h-20" src="{{asset('images/logo3.png')}}" alt="{{__('Logo')}}">
                </div>
                <div class="mr-6 md:mr-20 lg:mr-40 xl:mr-60 flex items-center justify-center">
                    <div class="nav-btn flex items-center justify-center mr-10 cursor-pointer" @click="dark = !dark, change()">
                        <box-icon id="sun" name='sun' class="fill-current h-8 w-8 absolute text-gray-100 hover:animate-pulse toggle-theme" x-show="dark" x-transition.duration.300ms></box-icon>
                        <box-icon id="moon" name='moon' class="fill-current h-8 w-8 absolute text-gray-800 hover:animate-pulse toggle-theme" x-show="!dark" x-transition.duration.300ms></box-icon>
                    </div>
                    <box-icon name='menu-alt-right' class="open-menu fill-current h-10 w-10 cursor-pointer text-gray-900 dark:text-gray-50 hover:text-primary dark:hover:text-primary toggle-theme" @click="Menu = true"></box-icon>
                </div>
            </div>
        </div>
    </nav>

    {{-- Navbar Menu --}}
    <div class="nav-menu1 w-full h-screen fixed z-20 bg-secundary dark:bg-primary" x-show="Menu">{{-- transition to menu --}}</div>
    <div class="nav-menu2 w-full h-screen fixed z-30 bg-baseLight-light dark:bg-baseDark" x-show="Menu"> 
        <div class="absolute z-10 w-full">
            <div class="h-14 md:h-20 flex items-center justify-between">
                <div>{{-- left element of flex for right close button --}}</div>
                <div class="CloseMenu mr-6 md:mr-20 lg:mr-40 xl:mr-60 flex items-center justify-center cursor-pointer" @click="closeMenu()" {{-- @click="Menu = !Menu" --}}>
                    <box-icon name='x' class="close-menu fill-current h-10 w-10 cursor-pointer text-baseDark dark:text-baseLight-light hover:text-primary dark:hover:text-primary toggle-theme"></box-icon>
                </div>
            </div>
        </div>
        <div class="menu flex items-center justify-center absolute h-full w-full">
            <div>
                <div class="text-menu">
                    Menu
                </div>
                <a href="#" class="nav-link mt-4 flex items-center justify-center text-4xl md:text-5xl lg:text-7xl text-baseDark dark:text-baseLight-light" @click="closeMenu()">
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
                <a href="#aboutMe" class="nav-link mt-4 flex items-center justify-center text-4xl md:text-5xl lg:text-7xl text-baseDark dark:text-baseLight-light" @click="closeMenu()">
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
                <a href="#projects" class="nav-link mt-4 flex items-center justify-center text-4xl md:text-5xl lg:text-7xl text-baseDark dark:text-baseLight-light" @click="closeMenu()">
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
                <a href="#contact" class="nav-link mt-4 flex items-center justify-center text-4xl md:text-5xl lg:text-7xl text-baseDark dark:text-baseLight-light" @click="closeMenu()">
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

        <div class="footer-menu fixed bottom-0 w-screen mb-5 h-10 flex items-center justify-center">
            <div class="text-menu">
                © 2021 Guilherme Rover. Brasil, Ribeirão Preto/SP.
            </div>
        </div>
    </div>
</div>  
 