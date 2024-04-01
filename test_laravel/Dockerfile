# Use the official PHP image from Docker Hub
FROM php:latest

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy project files to the working directory
COPY . .

# Install project dependencies
RUN composer install

# Expose port 80
EXPOSE 80

# Start PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]