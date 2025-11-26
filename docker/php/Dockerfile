FROM php:8.2-apache

# Instala dependências necessárias do sistema
RUN apt-get update && \
    apt-get install -y \
        libicu-dev \
        git \
        zip \
        unzip \
        libzip-dev && \
    rm -rf /var/lib/apt/lists/*

# Extensões necessárias para CI4
RUN docker-php-ext-install intl mysqli pdo pdo_mysql zip

# Ativa mod_rewrite (necessário para CI4)
RUN a2enmod rewrite

# Copia virtual host
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

# Instala composer (copia da imagem oficial)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
