# Use the base PHP image with Apache
FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the PHP application to the Apache web directory
COPY . /var/www/html/

# Set appropriate permissions for the application directory
RUN chown -R www-data:www-data /var/www/html
