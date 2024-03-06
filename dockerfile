# Build stage
FROM node:16.20.2 as build-stage

# Set the working directory
WORKDIR /home/dimpy/Documents/Docker/Infinitybrains-fronted

# Remove existing node_modules (if any)
RUN rm -rf node_modules

# Copy package.json and package-lock.json to the working directory
COPY package*.json ./
RUN yarn global add @quasar/cli
# Install Quasar and Vue CLI globally
RUN npm i quasar
RUN npm -g install @vue/cli

# Install dependencies
RUN npm install

# Copy the entire project files to the working directory
COPY . .

# Set execute permissions for the Docker entrypoint script

# Production stage
FROM nginx:stable-alpine as production-stage

# Copy the built application from the build-stage
COPY --from=build-stage /home/dimpy/Documents/Docker/Infinitybrains-fronted/dist/spa /usr/share/nginx/html

# Expose port 80 for the nginx server
EXPOSE 80

# Run nginx with daemon off for foreground mode
CMD ["nginx", "-g", "daemon off;"]
