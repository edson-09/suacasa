FROM php:8.2-apache

# Instala dependências necessárias
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl

# Extensões necessárias para CI4
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ativa mod_rewrite (necessário para CI4)
RUN a2enmod rewrite

# Copia virtual host
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Instala composer (copia do image oficial)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
