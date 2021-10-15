<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @livewire('site.header.header')
    
    <main>
        <section class="first-section w-full h-screen flex items-center justify-center">
            <div class="h-full w-5/6 lg:w-3/6 xl:w-5/6 flex items-center justify-center bg-baseLight-light dark:bg-baseDark toggle-theme">
                <div class="">
                    <div class="mt-7 mb-4 mini:my-4 text-center text-2xl md:text-4xl font-light text-gray-700 dark:text-gray-300 toggle-theme">
                        Guilherme Rover
                    </div>
                    <div class="flex items-center justify-center">
                        {{-- - w-340px --}}
                        <div class="mini:hidden text-center inline-block">
                            <a href="#" class="nav-link flex items-center justify-center text-3xl md:text-6xl font-semibold text-baseDark dark:text-baseLight-light toggle-theme">
                                Programador full stack
                            </a>
                        </div>
                        {{-- + w-340px --}}
                        <div class="hidden mini:block text-center inline-block">
                            <a href="#" class="nav-link flex items-center justify-center text-3xl md:text-6xl font-semibold text-baseDark dark:text-baseLight-light toggle-theme">
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
                                    g
                                </div>
                                <div class="letter">
                                    r
                                </div>
                                <div class="letter">
                                    a
                                </div>
                                <div class="letter">
                                    m
                                </div>
                                <div class="letter">
                                    a
                                </div>

                                <div class="letter">
                                    d
                                </div>

                                <div class="letter">
                                    o
                                </div>
                                <div class="letter">
                                    r
                                </div>
                                <div class="letter">
                                    &nbsp;
                                </div>
                                <div class="letter">
                                    F
                                </div>
                                <div class="letter">
                                    u
                                </div>
                                <div class="letter">
                                    l
                                </div>
                                <div class="letter">
                                    l
                                </div>
                                <div class="letter">
                                    &nbsp;
                                </div>
                                <div class="letter">
                                    S
                                </div>
                                <div class="letter">
                                    t
                                </div>
                                <div class="letter">
                                    a
                                </div>
                                <div class="letter">
                                    c
                                </div>
                                <div class="letter">
                                    k
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="my-4 text-center text-xl text-gray-700 dark:text-gray-300 toggle-theme">
                        Sou um desenvolvedor de websites, aplicativos web e mobile, sem medo do desconhecido e que busca sempre o aprimoramento.
                    </div>
                    <div class="flex items-center justify-center mt-10 mini:mt-20">
                        <div class="inline-block">
                            <div class="flex items-center justify-center">
                                <a class="absolute overflow-hidden h-12 w-36 flex items-center justify-center rounded-md cursor-pointer bg-baseDark dark:bg-baseLight">
                                    <div class="about-text text-xl tracking-widest text-secundary dark:text-secundary-dark">
                                        Sobre mim
                                    </div>
                                    <box-icon name='right-arrow-alt' class="about-icon fill-current text-secundary dark:text-secundary-dark"></box-icon>
                                </a>
                                <a href="#aboutMe" class="absolute aboutBtn h-12 w-36 rounded-3xl cursor-pointer">{{-- the light --}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:absolute lg:top-0 lg:right-20 lg:h-full lg:flex lg:items-center lg:justify-center">
                        <div class="mini:mt-5 lg:mt-0 flex items-center justify-center lg:block">
                            <a href="https://www.linkedin.com/in/eder-guilherme-90b216140/" target="_blank" class="block mt-10 mx-2 p-2 shadow-md rounded-md cursor-pointer text-gray-600 dark:text-gray-400 decoration-social toggle-theme">
                                <box-icon type='logo' name='linkedin' class="fill-current h-10 w-10"></box-icon>
                            </a>
                            <a href="https://www.instagram.com/eder_guilherme1/" target="_blank" class="block mt-10 mx-2 p-2 shadow-md rounded-md cursor-pointer text-gray-600 dark:text-gray-400 decoration-social toggle-theme">
                                <box-icon name='instagram' type='logo' class="fill-current h-10 w-10"></box-icon>
                            </a>
                            {{-- https://wa.me/5516991321027?text=Oii%20Guilherme,%20vim%20pelo%20seu%20portifólio --}}
                            <a href="https://bit.ly/3Bz55WJ" target="_blank" class="block mt-10 mx-2 p-2 shadow-md rounded-md cursor-pointer text-gray-600 dark:text-gray-400 decoration-social toggle-theme">
                                <box-icon name='whatsapp' type='logo' class="fill-current h-10 w-10"></box-icon>
                            </a>
                            <a href="https://github.com/GuilhermeRover" target="_blank" class="block mt-10 mx-2 p-2 shadow-md rounded-md cursor-pointer text-gray-600 dark:text-gray-400 decoration-social toggle-theme">
                                <box-icon name='github' type='logo' class="fill-current h-10 w-10"></box-icon>
                            </a>
                        </div>
                    </div>
                    <div class="mt-10 mini:my-0 flex items-center justify-center">
                        <div class="absolute bottom-10">
                            <box-icon name='down-arrow-alt' class="scroll-btn fill-current h-8 w-8 text-secundary dark:text-secundary-dark"></box-icon>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <section id="aboutMe" class="w-full py-32 flex items-center justify-center bg-white dark:bg-baseDark-dark">
            <div class="md:flex md:justify-center md:w-5/6" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                <div class="md:w-3/6">
                    <div class="absolute -top-10 mb-4 mx-10 text-4xl text-left font-semibold text-gray-700 dark:text-gray-200 toggle-theme">
                        Quem sou
                        <div class="w-full h-1 decoration-title"></div>
                    </div>
                    <div class="p-5 mt-8 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Meu nome é Guilherme Rover, nascido em 1998, natural do Brasil, interior de São Paulo. Trabalho há 2 anos no desenvolvimento de websites, utilizando principalmente a stack TALL(tailwind css, Alpine.js, Laravel e Livewire).
                    </div>
                    <div class="px-5 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Meu foco de estudos atual é me aprofundar ainda mais na stack TALL, e recentemente inciei estudos em desenvolvimento mobile utilizando next.js. Eu já utilizava o Cordova para projetos mobile, mas decidi migrar de tecnologia.
                    </div>
                    <div class="p-5 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Meus projetos atuais sem fins lucrativos são para a criação desse portfolio. Já os meus projetos pessoais de mercado em processo de desenvolvimento são principalmente dois: a criação de uma plataforma de gestão de empresas com foco na saúde e bem estar, e a criação de websites em geral.
                    </div>
                    <div class="ml-3 text-baseDark dark:text-baseLight-light toggle-theme" data-aos="fade-right">
                        <a href="https://www.linkedin.com/in/eder-guilherme-90b216140/" target="_blank" class="inline-block border text-3xl mt-10 mx-2 p-2 shadow-md rounded-md cursor-pointer bg-baseDark dark:bg-baseLight text-secundary dark:text-secundary-dark decoration-social toggle-theme">
                            Linkedin
                        </a>
                    </div>
                </div>
                <div class="mini:hidden md:block" data-aos="fade-left">
                    <img class="w-96" src="{{ asset('images/Eu.png') }}" alt="Eu">
                </div>
            </div>
        </section>
        <section class="w-full py-32 flex items-center justify-center bg-white dark:bg-baseDark-dark">
            <div class="md:flex md:justify-center md:w-5/6" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                <div class="mt-10 mx-5 md:mt-0" data-aos="fade-up">
                    <div class="flex items-center justify-center">
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='git' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-orange-700"></box-icon>
                            <div class="git textIcons text-center absolute toggle-theme">
                                GIT
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon name='terminal' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer"></box-icon>
                            <div class="linux textIcons text-center absolute toggle-theme">
                                Linux
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <img src="{{ asset('images/nginx.svg') }}" alt="Nginx" class="h-10 w-10 md:h-14 md:w-14">
                            <div class="nginx textIcons text-center absolute toggle-theme">
                                Nginx
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center justify-center mt-6">
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <img src="{{ asset('images/mysql.svg') }}" alt="MySql" class="h-10 w-10 md:h-14 md:w-14">
                            <div class="mysql textIcons text-center absolute toggle-theme">
                                MySql
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='html5' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-orange-700"></box-icon>
                            <div class="html5 textIcons text-center absolute toggle-theme">
                                HTML5
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='sass' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-rose-400"></box-icon>
                            <div class="sass textIcons text-center absolute toggle-theme">
                                SASS
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center justify-center mt-6">
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='css3' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-blue-600"></box-icon>
                            <div class="css textIcons text-center absolute toggle-theme">
                                CSS
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='tailwind-css' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-blue-600"></box-icon>
                            <div class="tailwindcss textIcons text-center absolute toggle-theme">
                                TailwindCSS
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='javascript' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-yellow-500"></box-icon>
                            <div class="javascript textIcons text-center absolute toggle-theme">
                                JavaScript
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center justify-center mt-6">
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='php' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer"></box-icon>
                            <div class="php textIcons text-center absolute toggle-theme">
                                PHP
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <img src="{{ asset('images/livewire.png') }}" alt="MySql" class="h-10 w-10 md:h-14 md:w-14">
                            <div class="livewire textIcons text-center absolute toggle-theme">
                                Livewire
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <img src="{{ asset('images/alpinejs.svg') }}" alt="MySql" class="h-10 w-10 md:h-14 md:w-14">
                            <div class="alpinejs textIcons text-center absolute toggle-theme">
                                Alpine.js
                            </div>
                        </a>
                    </div>
                    <div class="flex items-center justify-center mt-6">
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <img src="{{ asset('images/laravel.svg') }}" alt="MySql" class="h-10 w-10 md:h-14 md:w-14">
                            <div class="laravel textIcons text-center absolute toggle-theme">
                                Laravel
                            </div>
                        </a>
                        <a class="codeIcons px-6 text-gray-700 dark:text-gray-300 toggle-theme">
                            <box-icon type='logo' name='bootstrap' class="fill-current text-center h-10 w-10 md:h-14 md:w-14 cursor-pointer text-purple-700"></box-icon>
                            <div class="bootstrap textIcons text-center absolute toggle-theme">
                                Bootstrap 4
                            </div>
                        </a>
                    </div>
                </div>
                <div class="description md:w-3/6">
                    <div class="absolute -top-10 mb-4 mx-10 text-4xl text-left font-semibold text-gray-700 dark:text-gray-200 toggle-theme">
                        Conhecimentos
                        <div class="w-full h-1 decoration-title">{{-- underline title decoration --}}</div>
                    </div>
                    <div class="title-knowledge p-5 mt-8 text-2xl text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Veja as tecnologias que eu conheço.
                    </div>
                    <div class="md:hidden description-knowledge1 px-5 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Clique em algum ícone para ver mais.
                    </div>
                    <div class="hidden md:block description-knowledge2 px-5 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">
                        Passe o mouse sobre algum ícone para ver mais.
                    </div>
                    <div class="hidden md:block time-knowledge px-5 mt-10 text-lg text-gray-700 dark:text-gray-200 toggle-theme" data-aos="fade-right">{{-- JS content --}}</div>
                </div>
            </div>
        </section>
        <section id="projects" class="w-full py-32 flex items-center justify-center">
            <div class="md:w-4/6">
                <div class="mb-20 flex items-center justify-center">
                    <div class="mb-4 mx-10 text-4xl text-left font-semibold text-gray-700 dark:text-gray-200 toggle-theme">
                        Projetos
                        <div class="w-full h-1 decoration-title"></div>
                    </div>
                </div>
                <div class="">
                    <div class="flex items-center justify-center" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                        <div class="m-4 flex items-center justify-center transform hover:scale-105 toggle-theme">
                            <div class="p-2">
                                <div class="">
                                    <img src="{{ asset('images/portfolio.png') }}" alt="" class="hidden md:block filter rounded-md brightness-25">
                                    <img src="{{ asset('images/portfolio_mobile.png') }}" alt="" class="md:hidden filter rounded-md brightness-25">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="absolute bottom-0 w-full h-full">
                                        <div class="ml-10 md:ml-24 lg:ml-40 mt-5 md:mt-10 h-full flex items-center justify-start bg-transparent">
                                            <div class="">
                                                <div class="text-3xl md:text-4xl text-gray-100">
                                                    Portfolio Guilherme Rover
                                                </div>
                                                <div class="mt-5 mb-5 w-5/6 text-lg md:text-xl text-gray-100">
                                                    Feito com a stack TALL, possui o intuito de apresentar uma breve introdução sobre mim e sobre o meu trabalho.
                                                </div>  
                                                <a href="https://github.com/GuilhermeRover/Portifolio" class="w-5/6 p-2 rounded-md inline text-2xl border border-opacity-25 bg-baseDark dark:bg-baseLight text-secundary dark:text-secundary-dark toggle-theme">
                                                    Veja no Github
                                                </a>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                        <div class="m-4 flex items-center justify-center transform hover:scale-105 toggle-theme">
                            <div class="p-2">
                                <div class="">
                                    <img src="{{ asset('images/pratice_test.png') }}" alt="" class="hidden md:block filter rounded-md brightness-25">
                                    <img src="{{ asset('images/pratice_test_mobile.png') }}" alt="" class="md:hidden filter rounded-md brightness-25">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="absolute bottom-0 w-full h-full">
                                        <div class="ml-10 md:ml-24 lg:ml-40 mt-5 md:mt-10 h-full flex items-center justify-start bg-transparent">
                                            <div class="">
                                                <div class="text-3xl md:text-4xl text-gray-100">
                                                    Painel administrativo
                                                </div>
                                                <div class="mt-5 mb-5 w-5/6 text-lg md:text-xl text-gray-100">
                                                    É uma aplicação feita com framework Laravel simulando um painel administrativo com cadastro de clientes.
                                                </div>  
                                                <a href="https://github.com/GuilhermeRover/teste-pratico-laravel" class="w-5/6 p-2 rounded-md inline text-2xl border border-opacity-25 bg-baseDark dark:bg-baseLight text-secundary dark:text-secundary-dark toggle-theme">
                                                    Veja no Github
                                                </a>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                        <div class="m-4 flex items-center justify-center transform hover:scale-105 toggle-theme">
                            <div class="p-2">
                                <div class="">
                                    <img src="{{ asset('images/next_project.png') }}" alt="" class="hidden md:block filter rounded-md brightness-25">
                                    <img src="{{ asset('images/next_project_mobile.png') }}" alt="" class="md:hidden filter rounded-md brightness-25">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="absolute bottom-0 w-full h-full">
                                        <div class="ml-10 md:ml-24 lg:ml-40 mt-5 md:mt-10 h-full flex items-center justify-start bg-transparent">
                                            <div class="">
                                                <div class="text-3xl md:text-4xl text-gray-100">
                                                    Gestor empresarial
                                                </div>
                                                <div class="mt-5 mb-5 w-5/6 text-lg md:text-xl text-gray-100">
                                                    Um gestor empresarial que, por meio de uma interface fluída e dinâmica, a empresa além de gerir melhor, vai obter novas perpectivas do próprio negócio.
                                                </div>  
                                                <div class="opacity-80 w-5/6 p-2 rounded-md inline text-2xl border border-opacity-25 bg-baseDark dark:bg-baseLight text-secundary dark:text-secundary-dark toggle-theme">
                                                    Em breve
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center" data-aos="fade-up"> {{-- fade-up      fade-up-right      fade-up-right --}}
                        <div class="m-4 flex items-center justify-center transform hover:scale-105 toggle-theme">
                            <div class="p-2">
                                <div class="">
                                    <img src="{{ asset('images/next_project.png') }}" alt="" class="hidden md:block filter rounded-md brightness-25">
                                    <img src="{{ asset('images/next_project_mobile.png') }}" alt="" class="md:hidden filter rounded-md brightness-25">
                                </div>
                                <div class="flex items-center justify-center">
                                    <div class="absolute bottom-0 w-full h-full">
                                        <div class="ml-10 md:ml-24 lg:ml-40 mt-5 md:mt-10 h-full flex items-center justify-start bg-transparent">
                                            <div class="">
                                                <div class="text-3xl md:text-4xl text-gray-100 toggle-theme">
                                                    Outros projetos
                                                </div>
                                                <div class="mt-5 mb-5 w-5/6 text-lg md:text-xl text-gray-100 toggle-theme">
                                                    Recline sua cadeira e aguarde, estamos criando algo incrível!
                                                </div>  
                                                <div class="opacity-80 w-5/6 p-2 rounded-md inline text-2xl border border-opacity-25 bg-baseDark dark:bg-baseLight text-secundary dark:text-secundary-dark toggle-theme">
                                                    Em breve
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @livewire('site.footer.footer')

    </main>
</div>
