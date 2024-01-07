# pokedex-php-docker
A simple pokemon list view in a php script running in one command with Docker

**You must have Docker installed**

Run the following (windows os cmd)

`docker run --rm -p 8080:8080 -v %CD%:/cli php:7.4-cli php -S 0.0.0.0:8080 /cli/pokedex.php`

![pokedex_view](https://i.gyazo.com/510d59c8ea6fb9c6b743e06d05cae18d.gif)


*Special thanks to canalti.com.br for the public API*
