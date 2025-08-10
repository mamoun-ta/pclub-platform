# PClub Platform 🚀

An Arabic-language programming education platform designed to provide better learning opportunities for computer science students at our university (unofficial).

## About

PClub Platform is an educational web application that aims to bridge the gap in Arabic programming education. Built to serve our university students, this platform offers programming courses and resources entirely in Arabic, making programming concepts more accessible to Arabic-speaking learners.

## Features

- 📚 **Arabic Programming Content** - Complete courses and tutorials in Arabic
- 🎓 **Student-Focused Design** - Built specifically for university-level programming education  
- 🌐 **Web-Based Learning** - Accessible from any device with an internet connection
- 📖 **Comprehensive Resources** - Structured learning materials and exercises

## Tech Stack

- **Backend**: Laravel (PHP Framework)
- **Frontend**: Blade Templates, HTML, CSS, JavaScript
- **Database**: MySQL

## Getting Started

### Prerequisites

- PHP 8.0 or higher
- Composer
- MySQL
- Node.js & NPM

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/mamoun-ta/pclub-platform.git
   cd pclub-platform
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   - Configure your database credentials in `.env`
   - Run migrations:
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```



## Development Team

- **Mamoun Tabak** - [@mamoun-ta](https://github.com/mamoun-ta)
- **Mohamed Sabaa** - [@mohamedkamalsabaa](https://github.com/mohamedkamalsabaa)

## Mission

Our goal is to make programming education more accessible to Arabic-speaking students by providing high-quality educational content in their native language, thereby helping them build a strong foundation in computer science and programming.

## License

This project is open source and available under the [MIT License](LICENSE).
