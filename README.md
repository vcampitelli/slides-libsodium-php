# :brazil: libsodium no PHP 7
Slides e código da palestra sobre a biblioteca de criptografia moderna [libsodium](https://libsodium.org), que vem
incorporada por padrão desde o PHP 7.2.

## Slides
Os slides podem ser visualizados em 
[https://viniciuscampitelli.com/slides-libsodium-php](https://viniciuscampitelli.com/slides-libsodium-php) ou você pode
acessá-los localmente:

1. Clonar o repositório
    ```
    git clone --recursive git@github.com:vcampitelli/slides-libsodium-php.git
    ```
2. Acessar `index.html` no seu navegador

## Códigos
Há alguns códigos de exemplo na pasta `scripts`.

Para ter certeza que a libsodium está configurada corretamente, execute `php scripts/00-version.php`.
Deverá ser exibido um retorno com a versão instalada, por exemplo:

```sh
array(3) {
  [0] => int(10)
  [1] => int(3)
  [2] => string(6) "1.0.18"
}
```

# :us: libsodium in PHP 7
Slides and scripts about my talk on [libsodium](https://libsodium.org), a modern criptography library that's available
in PHP core since 7.2.

## Slides
Slides can either be viewed online at
[https://viniciuscampitelli.com/slides-libsodium-php/en](https://viniciuscampitelli.com/slides-libsodium-php/en) or
locally by:

1. Clone this repository
    ```
    git clone --recursive git@github.com:vcampitelli/slides-libsodium-php.git
    ```
2. Open file `en/index.html` in your browser

## Show me the code
There are lots of code examples in `scripts` folder.

To make sure libsodium is configured, just run `php scripts/00-version.php`.
If everything is okay, you should see an array with the installed version like this:

```sh
array(3) {
  [0] => int(10)
  [1] => int(3)
  [2] => string(6) "1.0.18"
}
