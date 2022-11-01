FROM node:latest
COPY . /var/www
WORKDIR /var/www
RUN npm install
ENTRYPOINT node index.js
EXPOSE 3000