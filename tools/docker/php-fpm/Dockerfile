FROM php:8.1-fpm-alpine
MAINTAINER  Haykel Brinis <haikelbrinis@gmail.com>
# Set TIMEZONE
ENV TIMEZONE="Europe/Paris"
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

# Install TOOLS
RUN apk add --update --no-cache autoconf g++ imagemagick imagemagick-dev libtool make pcre-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apk del autoconf g++ libtool make pcre-dev

RUN apk update \
    && apk add git \
            curl \
            vim \
            wget \
            bash \
            zlib \
            zlib-dev \
            patch \
            icu-dev \
            libpng-dev \
            libjpeg-turbo-dev \
            libxml2-dev \
            libzip-dev \
            freetype-dev \
            libreoffice \
    && docker-php-ext-install gd

# Install OPCACHE ,XDEBUG extension
RUN apk --update --no-cache add autoconf g++ make && \
    pecl install -f xdebug && \
    docker-php-ext-enable xdebug && \
    apk del --purge autoconf g++ make

RUN apk add --no-cache $PHPIZE_DEPS \
    && docker-php-ext-install opcache bcmath intl pdo pdo_mysql  \
    && docker-php-ext-enable  opcache bcmath intl pdo pdo_mysql  \
    && rm -f /var/lib/apt/lists/*

# Install COMPOSER
# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php
# Install SYMFONY BINARY
RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN apk add --update nodejs npm yarn

WORKDIR /var/www/
EXPOSE 9000
