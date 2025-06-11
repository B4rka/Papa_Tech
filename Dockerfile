FROM php:8.2-cli

# Installer les outils nécessaires
RUN apt-get update && apt-get install -y unzip curl git \
    && rm -rf /var/lib/apt/lists/*

# Installer Composer globalement
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# Copier uniquement composer files pour cache layer Docker
COPY composer.json composer.lock /app/

# Installer les dépendances PHP avec Composer (sans dev, autoload optimisé)
RUN composer install --no-dev --optimize-autoloader

# Copier le reste du code
COPY . /app

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
