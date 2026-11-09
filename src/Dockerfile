FROM php:8.2-apache

# Instalar dependencias del sistema y extensiones PDO para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Cambiar el puerto por defecto de Apache de 80 a 10000 para Render
RUN sed -i 's/80/10000/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Copiar el código fuente a la ruta web de Apache
COPY . /var/www/html/

EXPOSE 10000
