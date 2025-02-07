# Chuka Student Portal

A comprehensive web-based student portal built with Laravel, designed to manage student information, course registration, and academic records. 

A streamlined authentication system built with Laravel, featuring secure login/logout functionality and a basic dashboard portal.

## Features

- User Authentication (Admin/Student)
- Student Management
- Course Registration
- Profile Management
- Secure Authentication System
- Responsive Design

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP >= 7.4
- Composer installed
- Node.js and NPM installed
- MySQL/MariaDB
- Apache/Nginx web server
- Git

## Installation

1. Clone the repository
```bash
git clone https://github.com/steve-ongera/Chuka-Student-Portal.git
cd student-portal
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies and compile assets
```bash
npm install
npm run dev
```

4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure your database in `.env` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

6. Run database migrations and seeders
```bash
php artisan migrate
php artisan db:seed
```

7. Create storage link
```bash
php artisan storage:link
```

8. Start the development server
```bash
php artisan serve
```

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   ├── StudentController.php
│   │   │   └── HomeController.php
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   │   └── Student.php
│   └── Providers/
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   ├── students/
│   │   └── layouts/
│   ├── css/
│   └── js/
└── routes/
    └── web.php
```

## Routes

The application includes the following main routes:

```php
// Authentication Routes
Auth::routes();

// Dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Student Management Routes
Route::resource('students', 'StudentController');
```

## Authentication

The system uses Laravel's built-in authentication system with the following features:
- Login/Logout functionality
- Password reset
- Remember me functionality
- Session management

## Student Management

The Student Controller (`StudentController.php`) handles the following operations:
- Index (List all students)
- Create (Add new student)
- Store (Save student data)
- Show (View student details)
- Edit (Update student information)
- Delete (Remove student record)

## Database Schema

### Students Table
```sql
CREATE TABLE students (
    id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    registration_number varchar(255) NOT NULL,
    created_at timestamp NULL DEFAULT NULL,
    updated_at timestamp NULL DEFAULT NULL,
    PRIMARY KEY (id)
);
```

## Security Measures

1. CSRF Protection
```php
// Included in web.php
protected $middleware = [
    \App\Http\Middleware\VerifyCsrfToken::class,
];
```

2. XSS Protection
- All output is escaped by default in Blade templates
- HTML Purifier for rich text input

3. SQL Injection Prevention
- Use of Laravel's Query Builder and Eloquent ORM
- Parameterized queries

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Support

For support, email steveongera001@gmail.com or create an issue in the repository.

## Acknowledgments

- Laravel Framework
- Bootstrap for frontend design
- All contributors who have helped with pull requests