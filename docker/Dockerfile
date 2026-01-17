# Base image
FROM php:8.2-apache

# Copy app files
COPY ../app/ /var/www/html/

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Expose port
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
