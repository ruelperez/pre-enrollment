## Pre-Enrollment System

### Installation

1. Download and install [XAMPP](https://www.apachefriends.org/download.html).
2. Download and install [Composer](https://getcomposer.org/download/)
2. Clone or download this repository [pre-enrollment](https://github.com/ruelperez/pre-enrollment)
3. Run `composer update`
4. Run `cp .env.example .env`
5. Run `php artisan key:generate`
6. Create database named `kiosk`
7. Import `kiosk.sql` located at [database/kiosk.sql](database/kiosk.sql)
8. Run `php artisan serve`


### Login
- Open <http://127.0.0.1:8000> in your web browser.


