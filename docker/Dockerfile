FROM rscafi/web-app

RUN addgroup www-data root

RUN apt-get update && apt-get install -y chromedriver

RUN docker-php-ext-install pdo-sqlite
