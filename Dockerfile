FROM php:8.2-cli

RUN apt-get update && apt-get install -y \
    unzip \
    zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/app

COPY . .

CMD ["php", "-a"]
