FROM php:8-apache
RUN apt-get update && apt-get install -y unzip git \
    && rm -rf /var/lib/apt/lists/*
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./config_files/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY ./config_files/php.ini-development /usr/local/etc/php/php.ini-development
ENV PHP_INI_FILE php.ini-development
# RUN apt-get install -y php-xdebug
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
RUN chown -R :www-data /var/www && chmod -R 775 /var/www/
RUN chown -R :www-data /var/log/apache2/ && chmod -R 775 /var/log/apache2/
WORKDIR /var/www/html
USER www-data
