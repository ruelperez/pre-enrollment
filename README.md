## Pre-Enrollment System

### Download and install the following tools:
- [XAMPP](https://www.apachefriends.org/download.html)
- IDE code editor such as
  [VS Code](https://code.visualstudio.com),
  [WebStorm](https://www.jetbrains.com/webstorm) or
  [Sublime Text](https://www.sublimetext.com).
- [Composer](https://getcomposer.org/download/)

### Installation

1. Clone or download this repository [pre-enrollment](https://github.com/ruelperez/pre-enrollment)
2. Open the cloned project in your code editor.
3. Create database name `kiosk`
4. Import `kiosk.sql` located at [database/kiosk.sql](database/kiosk.sql)
5. Open terminal and execute the following commands:

#### Install Backend dependencies:
    composer install
#### Create Environment File:
    cp .env.example .env
#### Generate Application Key:
    php artisan key:generate
#### Serve the Application:
    php artisan serve

### Production
#### Login
- Access <http://127.0.0.1:8000> in your web browser.


