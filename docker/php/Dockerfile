FROM php:8.0.0-alpine

RUN apk add --update postgresql-dev
RUN addgroup -g 1000 -S php && adduser -h /home/php -g "" -s /bin/sh -G php -SDu 1000 php
RUN docker-php-ext-install pdo pdo_pgsql