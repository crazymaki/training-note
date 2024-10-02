# ベースイメージとしてPHP 8.2を使用
FROM php:8.2-fpm

# Composerと必要な依存関係をインストール
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql zip

# Composerをインストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Node.jsとnpmをインストール (必要であれば)
RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash - \
    && apt-get install -y nodejs

# 作業ディレクトリを設定
WORKDIR /var/www/html

# Laravelアプリケーションの依存関係をインストール
CMD ["php-fpm"]
