## Sobre o Portfolio

Construído utilizando a stack TALL(Tailwind CSS, Alpine.js, Laravel e Livewire).
Veja a lista de todas as ferramentas utilizadas nesse projeto:

- **[Laravel](https://laravel.com/)**, framework full stack base.
- **[Tailwind CSS](https://tailwindcss.com/)**, framework css base.
- **[Livewire](https://laravel-livewire.com/)**, framework frontend base.
- **[Alpine.js](https://alpinejs.dev/)**, biblioteca javascript base.
- **[Anime.js](https://animejs.com/documentation/)**, utilizado para fazer animações personalizadas.
- **[Aos.js](https://michalsnik.github.io/aos/)**, utilizado para fazer animações show/hidden durante o scroll down e scroll up da página.
- **[Boxicons](https://boxicons.com/)**, biblioteca de ícones diversos.
- **[Headroom.js](https://wicky.nillia.ms/headroom.js/)**, utilizado para controlar o show/hidden da navbar.
- **[laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)**, utilizado para debugar a aplicação.

## Instalação

Para começar a instalação, precisamos clonar o projeto:

```shell
    git clone git@github.com:GuilhermeRover/Portfolio.git
```
Entre na pasta do projeto:
```shell
    cd Portfolio/
```
Baixe e instale as dependências do projeto:
```shell
    composer install && npm install && npm run dev
```
Agora criamos o arquivo .env do seu backup, já que o git exclui este arquivo por motivos de segurança para seus dados sensíveis não vazarem.
```shell
    cp .env.example .env
```
Agora devemos criar a chave de criptografia no arquivo .env. Importante: não gere o comando 'php artisan key:generate' caso o projeto já esteja com dados criados no banco de dados. Isso iria invalidar toda a aplicação.
```shell
    php artisan key:generate
```
Só falta rodar o projeto e aproveitar! o Laravel já nos dá pronto ferramentas para testar a aplicação.
```shell
    php artisan serve
```