FROM rscafi/web-app

RUN addgroup www-data root

RUN apt-get update

RUN apt-get install -y chromedriver

RUN apt-get install -y sqlite3

RUN docker-php-ext-install pdo_sqlite
