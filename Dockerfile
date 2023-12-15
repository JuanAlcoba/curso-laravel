# Usa una imagen oficial de PHP como base
FROM php:8.0-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias necesarias
RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    unzip \
    mariadb-client

# Copia la configuración de Apache
COPY laravel.conf /etc/apache2/sites-available/000-default.conf

# Habilita el módulo rewrite
RUN a2enmod rewrite

# Reinicia Apache
RUN service apache2 restart

# Instala Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia el código fuente de tu aplicación al contenedor
COPY cursito-app/ .

# Instala las dependencias de Composer
RUN composer install --no-interaction --no-progress

# Configura los permisos si es necesario
# RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap

# Expone el puerto 80 para el servidor Apache
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]