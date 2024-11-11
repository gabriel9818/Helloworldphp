# HelloWorld PHP

HelloWorld PHP is a simple PHP application running on Apache, designed to demonstrate a "Hello, World!" setup with PHP in a Docker container.

## Requirements

- Docker

## Installation and Setup

1. Clone this repository:

    ```bash
    git clone https://github.com/yourusername/helloworldphp.git
    cd helloworldphp
    ```

2. Build the Docker image:

    ```bash
    docker build -t helloworldphp .
    ```

3. Run the Docker container:

    ```bash
    docker run -p 80:80 helloworldphp
    ```

The application will be accessible at `http://localhost`.

## Dockerfile

This project includes a `Dockerfile` with the following configuration:

- Uses the PHP 7.0 image with Apache.
- Copies the application files from `src/` to `/var/www/html` in the container.
- Exposes port 80 for HTTP access.
