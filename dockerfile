# Use PHP 8.1.0 with Apache on Alpine
FROM php:8.1.0-apache

# Install dependensi dan ekstensi PHP yang dibutuhkan untuk CodeIgniter
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip

# Install ekstensi GD dan mysqli
#RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && docker-php-ext-install gd mysqli

# Aktifkan mod_rewrite untuk Apache
RUN a2enmod rewrite

# Set the ServerName to avoid warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy kode CodeIgniter ke dalam container
COPY . /var/www/html/

# Set direktori kerja
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Jalankan Apache server
CMD ["apache2-foreground"]
