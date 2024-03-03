FROM php:8-apache
RUN apt-get update && apt-get install -y unzip git \
    && rm -rf /var/lib/apt/lists/*
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./configFiles/php.ini-development /usr/local/etc/php/php.ini-development
COPY ./configFiles/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
ENV PHP_INI_FILE php.ini-development
# RUN apt-get install -y php-xdebug
WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
RUN chown -R :www-data /var/www && chmod -R 775 /var/www/
