# Use an official Nginx image as the base image
FROM nginx:alpine

# Install git
RUN apk add --no-cache git


# Clone the GitHub repository
RUN git clone https://github.com/tillerperry/WebContainer.git temp

# Copy the HTML file from the repository to the Nginx html directory
RUN mv temp/Version1/index.html /usr/share/nginx/html/index.html

#https://github.com/tillerperry/WebContainer/tree/fadf77a4ad7c4ac190322613d00a3d27ca944f0a/Version1

# Expose port 80 to be able to access the web server
EXPOSE 80

# Start Nginx when the container launches
CMD ["nginx", "-g", "daemon off;"]
