FROM php:7.4-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
    wget \
    git \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev && \
    docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \        
    docker-php-ext-install \    
    gd \
    zip \
    intl \
    mysqli \
    pdo_mysql

RUN pecl install xdebug \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony
COPY ./docker/xdebug/xdebug.ini $PHP_INI_DIR/conf.d/docker-php-ext-xdebug.ini
WORKDIR /var/www/project