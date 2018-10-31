FROM php:5.4-cli

COPY . /usr/src/app
WORKDIR /usr/src/app

EXPOSE 8090

CMD [ "php", "-S", "0.0.0.0:8090", "-t", ".", "index.php" ]