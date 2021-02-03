FROM php:8.0.1-cli-alpine3.13

COPY ./.docker/php.ini /usr/local/etc/php/

RUN apk upgrade --update && \
  apk --no-cache add --virtual build-dependencies \
  icu-dev \
  autoconf \
  make \
  g++ \
  gcc \
  oniguruma-dev \
  mariadb-dev \
  curl-dev \
  libzip-dev \
  libxml2-dev \
  wget \
  unzip \
  git

RUN docker-php-ext-install -j$(nproc) \
  bcmath \
  opcache \
  pdo_mysql \
  zip \
  intl \
  opcache

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1
ENV COMPOSER_MEMORY_LIMIT -1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN apk del --no-cache \
  autoconf \
  make \
  g++ \
  gcc

WORKDIR /var/www
