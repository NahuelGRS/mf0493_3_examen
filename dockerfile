FROM php:8.3-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libzip-dev

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_pgsql mbstring zip exif pcntl

# Instala Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Copia los archivos del proyecto al contenedor
COPY . /var/www

# Define directorio de trabajo
WORKDIR /var/www

# Instala dependencias de Laravel
RUN composer install --no-interaction --optimize-autoloader

# Otorga permisos a Laravel
RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www/storage

# Expone puerto para Render
EXPOSE 8000

# Comando para arrancar el servidor Laravel
CMD ["sh", "./entrypoint.sh"]

