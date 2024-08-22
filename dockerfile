# Use PHP 8.1.0 with Apache
FROM php:8.1.0-apache

# Set environment variables to improve Composer's performance and handle network issues
ENV COMPOSER_PROCESS_TIMEOUT=2000
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install necessary packages and extensions
RUN apt-get update \
    && apt-get install -y nano zip unzip git libicu-dev ca-certificates iputils-ping \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && apt-get install -y libssl-dev \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure Git to use OpenSSL instead of GnuTLS
RUN git config --global http.sslBackend openssl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
    && composer config --global secure-http false \
    && composer config -g repos.packagist composer https://packagist.org

# Set the working directory
WORKDIR /var/www/html

# Clone the CodeIgniter repository and install dependencies
RUN git clone https://github.com/codeigniter4/appstarter.git app \
    && cd app \
    && composer install --no-progress --no-interaction

# Change ownership of the project files to the Apache user
RUN chown -R www-data:www-data /var/www/html/app

# Copy Apache virtual host configuration
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
CMD ["apache2-foreground"]
