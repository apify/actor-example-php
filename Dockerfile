FROM php:7.0-cli

COPY ./* ./

CMD [ "php", "./main.php" ]