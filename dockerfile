# Use PHP 8.1.0 with FPM on Alpine
FROM php:8.1.0-fpm-alpine

# Set environment variables for Composer
ENV COMPOSER_PROCESS_TIMEOUT=2000
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install necessary packages and extensions
RUN apk add --no-cache \
    nano \
    zip \
    unzip \
    git \
    curl \
    openssl \
    libintl \
    icu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Download and install CodeIgniter
RUN curl -L https://github.com/codeigniter4/appstarter/archive/refs/tags/v4.5.4.zip -o appstarter.zip \
    && unzip appstarter.zip -d /var/www/html \
    && mv /var/www/html/appstarter-4.5.4 /var/www/html/app \
    && rm appstarter.zip \
    && cd /var/www/html/app \
    && composer install --no-progress --no-interaction

# Change ownership of the project files to the www-data user
RUN chown -R www-data:www-data /var/www/html/app

# Copy the Apache virtual host configuration (assuming you have a custom config file)
COPY codeigniter.conf /etc/apache2/sites-available/

# Enable the CodeIgniter site and reload Apache
RUN a2ensite codeigniter.conf \
    && service apache2 reload || true

# Disable the default Apache site
RUN cd /etc/apache2/sites-available \
    && a2dissite 000-default.conf \
    && service apache2 reload || true

# Expose port 80 to the host
EXPOSE 80

# Define the default command to run when the container starts
CMD ["php-fpm"]
