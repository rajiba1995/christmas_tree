# Use PHP 8.2 as the base image
FROM php:8.2-fpm

# Set the working directory to /var/www
WORKDIR /var/www

# Install system dependencies and PHP extensions required for Laravel
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    zip \
    unzip \
    libonig-dev \
    libxml2-dev \
    gnupg2 \
    ca-certificates \
    lsb-release && \
    curl -sL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm && \
    docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer (PHP dependency manager)
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy the Laravel project files into the container
COPY . .

# Set permissions for Laravel storage and cache directories
RUN chown -R www-data:www-data /var/www && \
    chmod -R 775 /var/www/storage && \
    chmod -R 775 /var/www/bootstrap/cache

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Generate Laravel application key
RUN php artisan key:generate

# Install Node dependencies
RUN npm install

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Set the default command to run PHP-FPM
CMD ["php-fpm"]
