

# DTI Compass - Laravel Project Documentation

## Overview
DTI Compass is a Laravel-based web application for competency assessment and employee management. The system allows for managing employee competencies, functional groups, and assessments.

## Technology Stack
- PHP 8.0+
- Laravel 9.x
- MySQL/PostgreSQL
- Node.js & NPM (for frontend assets)

## Key Dependencies
- Laravel Framework 9.0
- Laravel UI 4.2 - For authentication scaffolding
- Spatie Permission 5.10 - For role and permission management
- Laravel DataTables 9.0 - For dynamic table handling
- DomPDF - For PDF generation
- Laravel Excel 3.1 - For Excel file handling

## Project Structure

### Key Directories
```
├── app/
│   ├── Http/Controllers/    # Application controllers
│   ├── Models/             # Eloquent models
│   ├── Notifications/      # Notification classes
│   └── Providers/         # Service providers
├── config/                # Configuration files
├── database/
│   ├── migrations/        # Database migrations
│   └── seeders/          # Database seeders
├── public/               # Publicly accessible files
├── resources/
│   ├── views/            # Blade templates
│   └── js/              # JavaScript files
└── routes/
    ├── web.php          # Web routes
    └── api.php          # API routes
```

## Main Features

### Authentication System
- User registration and login
- Password reset functionality
- Role-based access control

### Core Modules
1. **Competency Management**
   - Create and manage competencies
   - Define behavioral indicators
   - Assign competencies to positions

2. **Employee Management**
   - Employee profiles
   - Competency assessments
   - Performance tracking

3. **Functional Groups**
   - Group management
   - Member assignment
   - Group-based permissions

## Route Structure

### Public Routes
- `/login` - User login
- `/register` - New user registration
- `/forgot-password` - Password reset

### Protected Routes
- `/` - Dashboard
- `/competencies/*` - Competency management
- `/employees/*` - Employee management
- `/functionalgroups/*` - Functional group management

## Getting Started

### Prerequisites
- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Installation Steps
1. Clone the repository
```bash
git clone [repository-url]
```

2. Install PHP dependencies
```bash
composer install
```

3. Install JavaScript dependencies
```bash
npm install
```

4. Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

5. Configure your database in `.env`

6. Run migrations and seeders
```bash
php artisan migrate
php artisan db:seed
```

7. Start the development server
```bash
php artisan serve
```

### Development Commands
- `npm run dev` - Compile assets for development
- `npm run build` - Compile assets for production
- `php artisan migrate:fresh --seed` - Reset and seed database

## Security
- Authentication using Laravel's built-in features
- Role-based access control using Spatie Permission
- CSRF protection enabled
- XSS protection through Laravel's security features

## Contributing
1. Create a new branch for your feature
2. Make your changes
3. Submit a pull request

## Maintenance
- Regular database backups recommended
- Keep Laravel and dependencies updated
- Monitor storage and log files

## Troubleshooting
- Check Laravel logs in `storage/logs`
- Ensure proper file permissions
- Verify database connectivity
- Clear cache using `php artisan cache:clear`

## License
This project is licensed under the MIT License.

