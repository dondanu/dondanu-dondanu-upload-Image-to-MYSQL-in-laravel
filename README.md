# AcademiQR

**AcademiQR** is a student management system built using Laravel. This project allows you to manage student information with ease, providing features such as CRUD operations, user authentication, PDF generation, and QR code creation.

## Features

- **CRUD Operations**: Add, view, edit, and delete student records.
- **Authentication**: User login, registration, and password reset functionality.
- **PDF Export**: Download student details in a PDF format.
- **QR Code Generation**: Generate QR codes for students with their unique details.

## Screenshots

Here are some screenshots of the **AcademiQR** application:

<img src="a.png" alt="Dashboard Screenshot">
<p><em>Example of the dashboard view.</em></p>

<img src="a2.png" alt="Student Login Screenshot">
<p><em>View of the student list.</em></p>

<img src="a3.png" alt="Student Foget Password Screenshot">
<p><em>Detailed student profile view.</em></p>

<img src="a4.png" alt="Registration Screenshot">
<p><em>Download student details in PDF format.</em></p>

<img src="a5.png" alt="Profile Screenshot">
<p><em>Generated QR code for student details.</em></p>

<img src="a6.png" alt="Profile Screenshot">
<p><em>Generated QR code for student details.</em></p>

<img src="a7.png" alt="Add new Screenshot">
<p><em>Generated QR code for student details.</em></p>

<img src="a8.png" alt="QR Screenshot">
<p><em>Generated QR code for student details.</em></p>

<img src="a9.png" alt="Details Screenshot">
<p><em>Generated QR code for student details.</em></p>

## Installation

### Prerequisites

- PHP 8.0 or higher
- Composer (for managing dependencies)
- XAMPP (or any local server)
- MySQL database

### Setup Instructions


1. Clone the repository:  
   ```bash  
   git clone https://github.com/dondanu/dondanu-dondanu-upload-Image-to-MYSQL-in-laravel
   
2. Navigate to the project folder:
   ```bash
   cd AcademiQR

3. Install dependencies using Composer:
   ```bash
   composer install  

4. Set up your .env file:
   Copy .env.example to .env:
   ```bash
   cp .env.example .env   

6. Update the .env file with your database credentials.
   Generate the application key:
   ```bash
   php artisan key:generate

7. Run database migrations:
   ```bash
   php artisan migrate

8. Serve the application:
   ```bash
   php artisan serve
   
9. Your application should now be accessible at http://localhost:8000.



