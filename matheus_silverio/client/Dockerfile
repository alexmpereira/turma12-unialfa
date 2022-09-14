FROM node:13-alpine

WORKDIR /app

ENV PATH /app/node_modules/.bin:$PATH

COPY package.json /app/package.json
COPY node_modules /app/node_modules

CMD ["npm", "start"]