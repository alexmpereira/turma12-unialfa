FROM node:latest

COPY . /var/www
WORKDIR /var/www
RUN npm install

#primeira acao apos subir o container
ENTRYPOINT node index.js
EXPOSE 3000