FROM node:20

WORKDIR /app
COPY package.json package-lock.json* ./

RUN npm install

# default command (será sobreposto pelo docker-compose se quiseres)
CMD ["npm", "run", "ife"]
