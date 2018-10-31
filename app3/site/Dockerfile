FROM php:7.2

COPY . /usr/src/site

RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /usr/src/site

CMD ["php", "-S", "0.0.0.0:8080", "-t", "."]