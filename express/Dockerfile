FROM node:alpine

COPY . /var/www

WORKDIR /usr/app

RUN npm install

ENTRYPOINT node index.js

EXPOSE 3000
