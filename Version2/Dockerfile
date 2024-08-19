# Use an official Nginx image as the base image
FROM nginx:alpine

# Install git inside the container to clone the repository
RUN apk add --no-cache git

# Clone the GitHub repository into a temp directory
RUN git clone https://github.com/tillerperry/WebContainer.git /tmp/repo

# Copy the files from the repository to the Nginx html directory
COPY /tmp/repo/Version3/app /usr/share/nginx/html/app

# Expose port 80 to be able to access the web server
EXPOSE 80

# Start Nginx when the container launches
CMD ["nginx", "-g", "daemon off;"]
