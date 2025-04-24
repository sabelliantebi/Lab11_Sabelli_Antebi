FROM gcc:latest

# Set working directory
WORKDIR /app

# Copy source file
COPY hello.c /app/

# Build the application
RUN gcc -o hello hello.c

# Set the command to run when container starts
CMD ["./hello"]
