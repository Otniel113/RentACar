# RentACar - Web Admin & API

A cross-platform car rental booking application for tourism. This repository contains the **Laravel-based web admin panel** for monitoring car bookings and the **REST API** that serves the mobile application.

## 🚗 About

RentACar is a comprehensive car rental management system that consists of:
- **Web Admin Panel** (this repository) - Built with Laravel for managing bookings, vehicles, and members
- **Mobile App** - Flutter/React Native application for customers to book cars
- **REST API** - Laravel API endpoints consumed by the mobile application

### Mobile Repository
🔗 [RentACar Mobile App](https://github.com/Otniel113/RentACar-Mobile)

## 📋 Features

- **Vehicle Management**: CRUD operations for three vehicle categories:
  - Small Cars (Mobil Kecil)
  - Large Cars (Mobil Besar)
  - Minibus
- **Member Management**: Handle customer profiles and information
- **Booking System**: Monitor and manage car rental bookings
- **Authentication**: Secure login, register, and logout functionality for admin
- **REST API**: Provides endpoints for mobile application integration
- **Admin Dashboard**: Comprehensive frontend for monitoring operations

## 🛠️ Tech Stack

- **Framework**: Laravel 8.x/9.x
- **Language**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: Blade Templates, CSS, JavaScript
- **Package Manager**: Composer, NPM

## 🚀 Installation

### Prerequisites

- PHP >= 7.4
- Composer
- MySQL
- Node.js & NPM

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Otniel113/RentACar.git
   cd RentACar
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   ```
   
   Then edit `.env` file with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=rentacar
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Build frontend assets**
   ```bash
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve --port=8000
   ```

9. **Access the application**
   - Web Admin Panel: `http://localhost:8000`
   - API Endpoints: `http://localhost:8000/api`

Note:
You don't really need Node or NPM if you can run it with XAMPP.

## 📁 Project Structure

```
RentACar/
├── app/
│   ├── Http/Controllers/    # Controllers for handling requests
│   ├── Models/              # Eloquent models
│   │   ├── Booking.php
│   │   ├── Member.php
│   │   ├── Minibus.php
│   │   ├── MobilBesar.php
│   │   ├── MobilKecil.php
│   │   └── User.php
│   └── Providers/
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── public/                  # Public assets
├── resources/
│   └── views/               # Blade templates
├── routes/
│   ├── api.php              # API routes
│   └── web.php              # Web routes
└── storage/
```

## 🔌 API Endpoints

The application provides REST API endpoints for the mobile application. Base URL: `http://localhost:8000/api`

### Example Endpoints:
- `GET /api/vehicles` - Get all vehicles
- `GET /api/bookings` - Get all bookings
- `POST /api/bookings` - Create new booking
- `GET /api/members` - Get all members

*(For complete API documentation, refer to the routes/api.php file)*

## 👥 Contributors

This project was developed by:

1. **Otniel Abiezer**
   - Small Cars & Large Cars (CRUD + Database)
   - REST API Development

2. **Gilang M Rizky**
   - Authentication System (Login, Register, Logout)
   - Admin CRUD + Database

3. **Winico Fazry**
   - Member/Profile Management (View)
   - Member CRUD + Database

4. **Aulia Arief**
   - Minibus Module (CRUD + Database)
   - Frontend Views (Majority)

## 📝 License

This project is developed for educational purposes as part of Platform-Based Application course.

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

## 📧 Contact

For questions or support, please contact the development team through the GitHub repository.
