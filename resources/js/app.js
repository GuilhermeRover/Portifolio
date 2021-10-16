require('./bootstrap');

// anime.js
import anime from 'animejs/lib/anime.es';
    
    var navLinks = document.querySelectorAll('.nav-link');
    var OpenMenu = document.querySelector('.open-menu');
    var aboutBtn = document.querySelector('.aboutBtn');
    var titleKnowledge = document.querySelector('.title-knowledge');
    var descriptionKnowledge1 = document.querySelector('.description-knowledge1');
    var descriptionKnowledge2 = document.querySelector('.description-knowledge2');
    var timeKnowledge = document.querySelector('.time-knowledge');
    var codeIcons = document.querySelectorAll('.codeIcons');

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
        duration: 600,
    })
    .add({
        targets: '.logo',
        //height: [ '0rem', '5rem' ],
        opacity: [0, 1],
        translateX: [-200, 0],
        duration: 600,
    });

    anime({
        easing: 'easeOutExpo',
        targets: '.first-section',
        opacity: [0, 1],
        translateY: [-100, 0],
        delay: 2200,
    });

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
    });

    OpenMenu.addEventListener('click', () => {
        anime.timeline({
            easing: 'easeInOutExpo',
        })
        .add({
            targets: '.open-menu',
            translateX: [0, 200],
            opacity: [1, 0],
            duration: 400,
        })
        .add({
            targets: '.nav-menu1',
            translateX: ['100%', 0],
            direction: 'reverse',
            duration: 600,
            offset: '-=100',
        })
        .add({
            targets: '.nav-menu2',
            translateX: ['100%', 0],
            direction: 'reverse',
            duration: 400,
            offset: '-=300'
        })
        .add({
            targets: '.menu div, .footer-menu',
            opacity: [0, 1],
            translateX: [100, 0],
            direction: 'reverse',
            offset: '-=300',
            duration: 800,
        })
        .add({
            targets: '.CloseMenu',
            opacity: [0, 1],
            translateX: ['100%', 0],
            direction: 'reverse',
            offset: '-=300',
            duration: 400,
        })
    });
    
    aboutBtn.addEventListener('mouseenter', () => {
        anime.timeline({
            targets: '.about-icon',
            translateX: 70,
            duration: 1000,
            easing: 'easeInOutSine',
        })
        .add({
            targets: '.about-text',
            translateX: 12,
            easing: 'easeInOutSine',
            offset: '-=400',
        })
    })

    aboutBtn.addEventListener('mouseout', () => {
        anime.timeline({
            targets: '.about-text',
            translateX: [12, 0],
            easing: 'easeInOutSine',
        })
        .add({
            targets: '.about-icon',
            translateX: [70, 0],
            easing: 'easeInOutSine',
            offset: '-=400',
        })
    })

    anime({
        easing: 'easeInOutSine',
        targets: '.scroll-btn',
        translateY: [0, 10],
        loop: true,
        direction: 'alternate',
        duration: 600,
    });

    codeIcons.forEach((codeIcon) => {
        codeIcon.children[1].classList.add('hidden');
    });

    

    codeIcons.forEach((codeIcon) => {
        codeIcon.children[0].addEventListener('mouseenter', () => {

            codeIcon.children[1].classList.remove('hidden');
            codeIcon.children[1].classList.add('block');

            switch(codeIcon.children[1].classList[0]) {
            case 'git':
                titleKnowledge.innerHTML= 'GIT';
                content = 'É uma tecnologia que possibilita a gestão das versões de um projeto no início, no fim e após o lançamento. Também possibilita o trabalho em equipe que trabalha em arquivos que precisam um do outro, fazendo que os membros da equipe tenham os arquivos sempre atualizados com o trabalho do colega.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 ano de experiência';
                break;
            case 'linux':
                titleKnowledge.innerHTML= 'Linux';
                var content = 'É um sistema operacional open source que possui muitas competências tanto para uso comum quanto para servidores. Possui muita eficiência ao utilizar os componentes físicos do computador, como a memória RAM e o processador, otimizando os recursos e possibilitando um menor custo, além de ser gratuito (open source). Mas principalmente é utilizado por ser conhecido pela sua segurança e pelo seu uso open source, podendo alterar e manipular qualquer aspecto do computador. Por possuir uma interface pouco amigável se comparado ao Windows, ele costuma impedir a chegada de novos usuários.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            case 'nginx':
                titleKnowledge.innerHTML= 'Nginx';
                var content = 'É um software que torna o computador em um servidor web, possibilitando o uso de banco de dados remoto(na nuvem), entre outras ferramentas. Nginx concorre diretamente com o apache, outro servidor web, sendo os dois open source. Já utilizei ambos, mas hoje utilizo o Nginx nas minhas aplicações.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '3 meses de experiência';
                break;
            case 'mysql':
                titleKnowledge.innerHTML= 'MySql';
                var content = 'É um sistema de gestão de banco de dados. Simplificando, um banco de dados nada mais é que um aglomerado de arquivos com certos dados em cada um, e o MySql nada mais é do que um gerenciador de arquivos como este, porém utilizando da linguagem SQL para escrever esses arquivos.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 ano e 6 meses de experiência';
                break;
            case 'html5':
                titleKnowledge.innerHTML= 'HTML5';
                var content = 'É uma tecnologia que possibilita a estruturação de uma página web. Ela não é considerada uma linguagem de programação, mas é indispensável para qualquer site.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            case 'sass':
                titleKnowledge.innerHTML= 'SASS';
                var content = 'É um pré-processador que gera arquivos CSS. A sua vantagem é que com o com o SASS, é possível utilizar importações, variáveis, entre outras ferramentas que facilitam a rapidez do desenvolvimento e uma melhor estrutura de projeto.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '3 meses de experiência';
                break;
            case 'css':
                titleKnowledge.innerHTML= 'CSS';
                var content = 'É uma tecnologia que possibilita a manipulação da aparência de um site. Não é considerada uma linguagem de programação, mas é indispensável em páginas web.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            case 'tailwindcss':
                titleKnowledge.innerHTML= 'Tailwind CSS';
                var content = 'É uma biblioteca CSS diferente das demais do mercado. O Tailwind CSS utiliza o conceito de "css utilitário", onde por meio de classes, são denominadas todas as funções do css, possibilitando que você tenha maior controle do seu design e reduza a quantidade de arquivos css, consequentemente diminuindo a quantidade de requisições http. Além disso, possui o conceito "mobile first" que eu considero essencial nos dias de hoje, já que no Brasil cerca de 80% das pessoas acima de 10 anos de idade possui um celular, sendo encontrado em 99,5% dos domicílios com acesso a internet. Já o computador existe em 45% das residências com acesso a internet.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 e 2 meses de experiência';
                break;
            case 'javascript':
                titleKnowledge.innerHTML= 'JavaScript';
                var content = 'É uma tecnologia que possibilita o uso de ações em um site. É considerada uma linguagem de programação e hoje, é indispensável em qualquer site já que, em qualquer ação feita em um site, seja um formulário ou a animação de um botão, o javascript está presente.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            case 'php':
                titleKnowledge.innerHTML= 'PHP';
                var content = 'É uma linguagem de programação que diferente do javascript que roda no lado do cliente - aquele que está utilizando o site -, o php roda do lado do servidor. É ele que faz a manipulação dos dados antes de entrarem no banco de dados, e também é ele que pega esses dados do banco e pré-processa para disponibilizar para o cliente. Essa é só uma das funções de uma linguagem que atua do lado do servidor.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            case 'livewire':
                titleKnowledge.innerHTML= 'Livewire';
                var content = 'É um framework frontend para Laravel que facilita muito o desenvolvimento, criando em poucas linhas de código uma aplicação rodando dinamicamente com ajax sem nenhuma linha de javascript escrita diretamente. A visão desse framework é o futuro do mercado de programação, já que ele oferece tudo que precisamos: velocidade, praticidade e qualidade.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 e 2 meses de experiência';
                break;
            case 'alpinejs':
                titleKnowledge.innerHTML= 'Alpine.js';
                var content = 'É uma biblioteca javascript que realiza ações básicas que todo site utiliza, como esconder e mostrar um objeto, fazer animações, entre outras, com pouquíssimas linhas de código. Além disso, é muito leve e prático.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 e 2 meses de experiência';
                break;
            case 'laravel':
                titleKnowledge.innerHTML= 'Laravel';
                var content = 'É um framework que utiliza o php para gerar toda a estrutura necessária para manter um projeto seguro, estruturado e prático, facilitando e agilizando muito o desenvolvimento de um novo projeto(não pode ser usado em projetos já existentes). O Laravel é uma inspiração para outros frameworks de outras linguagens de programação por ser muito bem construído e de fácil utilização.';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '1 e 2 meses de experiência';
                break;
            case 'bootstrap':
                titleKnowledge.innerHTML= 'Bootstrap 4';
                var content = 'É uma biblioteca CSS que facilita o uso do css com classes pré-criadas para diversos fins que definem a aparência de um site. Interessante notar que ela adota um modelo de classes "padrão", enquanto o Tailwind CSS utiliza classes utilitárias com foco no conceito "mobile first".';
                descriptionKnowledge1.innerHTML= content;
                descriptionKnowledge2.innerHTML= content;
                timeKnowledge.innerHTML= '2 anos de experiência';
                break;
            default:
                //
                titleKnowledge.innerHTML = 'Veja as tecnologias que eu conheço.';
                descriptionKnowledge1.innerHTML= 'Clique em algum ícone para ver mais.';
                descriptionKnowledge2.innerHTML= 'Passe o mouse sobre algum ícone para ver mais.';
                timeKnowledge.innerHTML= '2 anos de experiência';
            }
        })
    });

    codeIcons.forEach((codeIcon) => {
        codeIcon.addEventListener('mouseout', () => {
            codeIcon.children[1].classList.remove('block');
            codeIcon.children[1].classList.add('hidden');
            //knowledge.classList.remove('hidden');

            titleKnowledge.innerHTML = 'Veja as tecnologias que eu conheço.';
            descriptionKnowledge1.innerHTML = 'Clique em algum ícone para ver mais.';
            descriptionKnowledge2.innerHTML = 'Passe o mouse sobre algum ícone para ver mais.';
            timeKnowledge.innerHTML= '';
            
        })
    });