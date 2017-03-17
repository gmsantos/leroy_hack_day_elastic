FROM rscafi/web-app

RUN addgroup www-data root

# install chrome driver
# RUN curl -O https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
# RUN dpkg -i --force-depends google-chrome-stable_current_amd64.deb
# RUN apt-get install -f
RUN apt-get update
RUN apt-get install chromedriver