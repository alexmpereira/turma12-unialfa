
FROM node:alpine

COPY . /var/www

WORKDIR /usr/app

COPY package*.json ./

RUN npm install

EXPOSE 3000

CMD ["npm","start"]