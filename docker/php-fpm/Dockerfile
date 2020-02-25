FROM php:7.4-fpm-alpine


# Dependencies for php extensions:
RUN apk --no-cache --update add \
    curl \
    icu-dev \
    postgresql-dev \
    postgresql-client \
    libedit-dev \
    libxml2-dev \
    libxslt-dev \
    libzip-dev \
    libpng-dev

RUN docker-php-ext-install -j$(nproc) \
    intl \
    opcache \
    pdo \
    pdo_pgsql \
    pgsql \
    readline \
    soap \
    xml \
    xsl \
    zip \
    bcmath \
    gd \
    pcntl

RUN apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del -f .phpize-deps

RUN set -xe \
    && apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS \
    && pecl install -o -f redis  \
    && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini \
    && rm -rf /usr/share/php \
    && rm -rf /tmp/* \
    && apk del .phpize-deps

# configure php
# Use the default development configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
# Override with custom opcache settings
COPY ./opcache.ini $PHP_INI_DIR/conf.d/
# Override with custom php.ini settings
COPY ./php-ini-overrides.ini $PHP_INI_DIR/conf.d/

# configure xdebug
COPY ./xdebug.ini $PHP_INI_DIR/conf.d/
# configure custom log path for xdebug
ARG XDEBUG_REMOTE_LOGFILE="/var/log/xdebug/xdebug.log"
RUN mkdir -p $(dirname ${XDEBUG_REMOTE_LOGFILE}) && touch ${XDEBUG_REMOTE_LOGFILE} && chmod 775 ${XDEBUG_REMOTE_LOGFILE} && chown www-data:www-data ${XDEBUG_REMOTE_LOGFILE}
RUN echo "xdebug.remote_log=${XDEBUG_REMOTE_LOGFILE}" >> ${PHP_INI_DIR}/conf.d/xdebug.ini

# Override fpm config
COPY ./www.conf /usr/local/etc/php-fpm.d/

# Install and configure composer
RUN echo "Install composer..."
RUN curl --silent --show-error https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
# Speed up composer installs with that plugin
# From: https://github.com/hirak/prestissimo
RUN composer global require hirak/prestissimo

WORKDIR /var/www/phycom/current

CMD ["php-fpm"]
