FROM alpine:3.10

# phpのインストール, その他curl, mysql-client
RUN apk --update --no-cache add \
    curl \
    mysql-client \
    php7 \
    php7-bcmath \
    php7-ctype \
    php7-dom \
    php7-fileinfo \
    php7-json \
    php7-mbstring \
    php7-openssl \
    php7-pdo \
    php7-pdo_mysql \
    php7-phar \
    php7-session \
    php7-tokenizer \
    php7-xml \
    php7-xmlwriter \
    php7-zip

# composer導入, laravel導入
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer global require "laravel/installer" --prefer-dist

# 作業ディレクトリ
WORKDIR /home/ralsnet_channel/bulletin-board