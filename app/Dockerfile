FROM alpine:3.10

# phpのインストール
RUN apk update && \
    apk add curl mysql-client && \
    apk add php7 php7-session php7-fileinfo php7-phar php7-openssl php7-bcmath php7-ctype && \
    apk add php7-json php7-mbstring php7-pdo php7-tokenizer php7-xml php7-zip php7-dom php7-xmlwriter php7-pdo_mysql

# composer導入, laravel導入
RUN curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer && \
    composer self-update && \
    composer global require "laravel/installer" --prefer-dist && \
    export PATH="$PATH:$HOME/.config/composer/vendor/bin"

# 作業ディレクトリ
WORKDIR /home/ralsnet_channel/bulletin-board

# 立ち上げ
CMD ["php", "artisan", "serve", "--host=172.17.0.4"]