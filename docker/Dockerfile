FROM rscafi/web-app

RUN addgroup www-data root

RUN apt-get update

RUN apt-get install -y libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite
