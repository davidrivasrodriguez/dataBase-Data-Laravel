# Laravel File Upload App

This application allows users to upload files, which can be viewed either by their ID or by their name. The data of these files is stored in a database.

## Features

- **File Upload**: Users can upload files to the application.
- **File Viewing**: Uploaded files can be viewed by their ID or name.
- **Database Storage**: The data of the uploaded files is stored in a database.
- **Storage Path**: The stored name (`stored_name`) includes part of the file path, specifically "exercises/".

## Installation

1. Clone the repository:
    ```bash
    git clone git@github.com:davidrivasrodriguez/dataBase-Data-Laravel.git
    ```
2. Navigate to the project directory:
    ```bash
    cd dataBase-Data-Laravel
    ```
3. Install the dependencies:
    ```bash
    composer install
    ```
4. Configure the `.env` file with your database credentials.
5. Generate the application key:
    ```bash
    php artisan key:generate
    ```
6. Run the migrations:
    ```bash
    php artisan migrate
    ```

## Usage
1. Upload a file through the user interface.
2. View the uploaded file by its ID or name.

## Screenshot

![First Img](assets/1.png)

![Second Img](assets/2.png)

![Third Img](assets/3.png)