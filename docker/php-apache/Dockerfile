FROM php:7.4-apache

RUN apt-get update
RUN apt-get upgrade -y

# Dependencies for php extensions:
RUN apt-get install -y --no-install-recommends \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
        zlib1g-dev \
        libicu-dev \
        libpq-dev \
        libedit-dev \
        libxml2-dev \
        libxslt1-dev \
        libzip-dev \
        libpng-dev \
        g++ \
        git \
        zip \
        gdebi-core \
        wget \
        vim \
        htop \
        unzip \
        gnupg

RUN docker-php-ext-install -j$(nproc) \
    intl \
    opcache \
    pdo \
    pdo_pgsql \
    pgsql \
    readline \
    soap \
    xsl \
    zip \
    bcmath \
    gd \
    pcntl

RUN pecl install redis && docker-php-ext-enable redis
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo "Enabling apache modules..."

RUN a2enmod rewrite
RUN a2enmod headers

RUN echo "Configure PHP..."
# Use the default development configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
# Override with custom php.ini settings
COPY ./php-ini-overrides.ini $PHP_INI_DIR/conf.d/
# configure xdebug
COPY ./xdebug.ini $PHP_INI_DIR/conf.d/

RUN echo "Install composer..."
RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# Speed up composer installs with that plugin
# From: https://github.com/hirak/prestissimo
RUN composer global require hirak/prestissimo
#RUN composer config -g github-oauth.github.com XXX
RUN service apache2 restart

# We also need psql client and here is an ugly hack to install it
RUN mkdir -p /usr/share/man/man1 /usr/share/man/man7
RUN apt-get install -y --no-install-recommends postgresql-client

WORKDIR /var/www/phycom/current

CMD ["apache2-foreground"]
