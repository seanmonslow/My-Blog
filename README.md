# My-Blog

Initially only has basic homepage, admin page and create a post page.

Dockerfile also included so you can serve it outside the usual php artisan serve. Will need to set up a mysql container and will get round to it.

Steps:

git clone this url
composer install
docker build -t blog .
docker run -p 80:80 -v /{directory}/blog:/var/www/html/ blog
