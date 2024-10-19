# Use the base PHP image with Apache
FROM php:7.4-apache

# Install additional PHP extensions, for example: mysqli
RUN docker-php-ext-install mysqli
# Install lynx (or you can use w3m as an alternative)
RUN apt-get update && apt-get install -y lynx

# Copy the PHP application to the Apache web directory
COPY . /var/www/html/

# Set appropriate permissions for the application directory
RUN chown -R www-data:www-data /var/www/html
