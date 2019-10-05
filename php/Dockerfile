FROM php:7.2-apache
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpq-dev vim zip \
  && docker-php-ext-install pdo_mysql pgsql pdo_pgsql mysqli mbstring gd iconv
#  && mysql-client postgresql

RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

ENV APP_PATH /var/www/html
RUN mkdir -p $APP_PATH

WORKDIR $APP_PATH

# Apache2のmodule rewrite有効化
RUN a2enmod rewrite