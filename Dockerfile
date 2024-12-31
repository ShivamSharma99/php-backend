# Use the official PHP image with Apache
FROM php:8.0-apache

# Set working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www/html

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install required PHP extensions and MySQL
RUN apt-get update && apt-get install -y \
    mariadb-server \
    mariadb-client \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Start MySQL service
RUN service mysql start

# Expose port 80 for Apache
EXPOSE 80

# Start MySQL and Apache
CMD service mysql start && apache2-foreground
