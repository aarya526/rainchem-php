# Use the official PHP image with Composer and Node.js pre-installed
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    git \
    && docker-php-ext-install pdo_mysql zip

# Install Composer globally
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files to the container
COPY . .

# Install Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Cache Laravel configuration and routes
RUN php artisan config:cache
RUN php artisan route:cache

# Expose the port for Laravel
EXPOSE 8000

# Start the Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
