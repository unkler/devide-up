FROM php:8.1-fpm-bullseye

EXPOSE 5173

ENV TZ=Asia/Tokyo \
  LANG=ja_JP.UTF-8 \
  LANGUAGE=ja_JP:ja \
  LC_ALL=ja_JP.UTF-8 \
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.3 /usr/bin/composer /usr/bin/composer

RUN apt-get update \
  && apt-get -y install --no-install-recommends \
    locales \
    git \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    unzip \
    vim \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* \
  && locale-gen ja_JP.UTF-8 \
  && localedef -f UTF-8 -i ja_JP ja_JP.UTF-8 \
  && docker-php-ext-install \
    bcmath \
    intl \
    pdo_mysql \
    zip \
  && composer config -g process-timeout 3600 \
  && composer config -g repos.packagist composer https://packagist.org

COPY ./src /var/www/html
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/html
# --no-devオプションを入れるとbuildに失敗する(Class "Barryvdh\Debugbar\ServiceProvider" not foundとなる)ので--no-devオプション削除し、実行
# RUN composer install -q -n --no-ansi --no-dev --no-scripts --no-progress --prefer-dist \
RUN composer install -q -n --no-ansi --no-scripts --no-progress --prefer-dist \
  && chown -R www-data:www-data ./ \
  && chmod -R 777 storage bootstrap/cache \
  && php artisan storage:link \
  && php artisan optimize:clear \
  && php artisan optimize \
  && php artisan cache:clear \
  && php artisan config:clear \
  && php artisan route:clear \
  && php artisan view:clear 

RUN curl -sL https://deb.nodesource.com/setup_lts.x | bash -
RUN apt-get install -y nodejs
# RUN npm run build