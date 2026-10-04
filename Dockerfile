FROM php:8.2-apache

# Enable Apache rewrite module for routing
RUN a2enmod rewrite

# Install PHP extensions for MySQL database connection
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy application files to Apache root
COPY . /var/www/html/

# Set file permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
