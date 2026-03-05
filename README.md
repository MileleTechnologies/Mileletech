# Milele Technologies - Laravel Web Application

A comprehensive Laravel-based web application for Milele Technologies, featuring a modern corporate website with integrated Filament admin panel for content management.

## 🚀 Features

### Frontend
- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Modern UI/UX**: Clean, professional design with blue color scheme
- **Interactive Navigation**: Dynamic dropdown menus with image previews
- **Service Pages**: Detailed pages for all engineering and ICT services
- **Contact Forms**: Integrated quote requests and contact messaging
- **Blog System**: News and insights publishing platform
- **Career Portal**: Job application management system
- **Client Testimonials**: Showcase of success stories

### Backend Admin Panel
- **Filament v5**: Modern admin interface
- **Content Management**: Manage pages, blog posts, and testimonials
- **Lead Management**: Track quote requests and contact messages
- **Career Applications**: Review and manage job applications
- **Analytics Dashboard**: Submission trends and statistics
- **User Management**: Admin access control

### Technical Features
- **Performance Optimized**: Vite asset compilation, lazy loading
- **SEO Friendly**: Clean URLs, meta tags, structured data
- **Security**: CSRF protection, input validation, secure headers
- **Database**: MySQL with Eloquent ORM
- **Caching**: Redis support for optimal performance

## 📋 Requirements

- PHP 8.1+
- MySQL 8.0+
- Composer
- Node.js & npm (for asset compilation)
- Redis (optional, for caching)

## 🛠️ Installation

### 1. Clone Repository
```bash
git clone https://github.com/MileleTechnologies/Mileletech.git
cd Mileletech
```

### 2. Install Dependencies
```bash
# PHP dependencies
composer install

# Node.js dependencies
npm install
```

### 3. Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Edit .env with your database and other settings
```

### 4. Database Setup
```bash
# Create database and update .env credentials
# Run migrations
php artisan migrate

# Seed database (optional)
php artisan db:seed
```

### 5. Compile Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

### 6. Link Storage
```bash
php artisan storage:link
```

### 7. Optimize Application
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 🗂️ Project Structure

```
Mileletech/
├── app/
│   ├── Filament/           # Admin panel resources
│   ├── Http/               # Controllers and middleware
│   ├── Models/             # Eloquent models
│   └── Providers/          # Service providers
├── database/
│   ├── migrations/         # Database migrations
│   └── seeders/           # Database seeders
├── public/
│   ├── css/               # Compiled CSS
│   ├── js/                # Compiled JavaScript
│   └── images/            # Static images
├── resources/
│   ├── views/            # Blade templates
│   │   ├── layouts/      # Page layouts
│   │   ├── blog/         # Blog templates
│   │   └── *.blade.php   # Page templates
│   └── js/               # Source JavaScript
├── routes/
│   ├── web.php           # Web routes
│   └── api.php           # API routes
└── vite.config.js        # Vite configuration
```

## 🎨 Frontend Pages

### Company Pages
- **Home** (`/`) - Landing page with services overview
- **About** (`/about`) - Company information and history
- **Team** (`/ourteam`) - Team members and expertise
- **Partners** (`/partners`) - Strategic partnerships
- **Reviews** (`/reviews`) - Client testimonials

### Service Pages
- **Services** (`/services`) - Services overview
- **ICT Solutions** (`/ict-solutions`) - IT and networking
- **Engineering** (`/engineering`) - Engineering services
- **Power Systems** (`/power-systems`) - Energy solutions
- **Automation** (`/automation`) - Automation systems
- **Industries** (`/industries`) - Industry solutions

### Interactive Pages
- **Contact** (`/contact`) - Contact form and information
- **Careers** (`/careers`) - Job opportunities
- **Blog** (`/blog`) - News and insights
- **Projects** (`/projects`) - Project portfolio

## 🔧 Admin Panel Features

### Content Management
- **Blog Posts**: Create, edit, and publish articles
- **Testimonials**: Manage client success stories
- **Pages**: Update static page content
- **Media**: Upload and manage images

### Lead Management
- **Quote Requests**: Track service quote submissions
- **Contact Messages**: Manage contact form submissions
- **Career Applications**: Review job applications
- **Status Tracking**: Update application and request statuses

### Analytics
- **Submission Trends**: Visual charts of form submissions
- **Statistics**: Overview of key metrics
- **User Activity**: Track admin panel usage

## 🚀 Deployment

### Development Server
```bash
php artisan serve
```

### Production Deployment

#### 1. Server Requirements
- Web server (Apache/Nginx)
- PHP 8.1+ with required extensions
- MySQL 8.0+
- SSL certificate

#### 2. Deployment Steps
```bash
# 1. Upload files to server
# 2. Set document root to public/
# 3. Install dependencies
composer install --no-dev --optimize-autoloader

# 4. Set environment variables
# 5. Run database migrations
php artisan migrate --force

# 6. Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# 7. Set file permissions
chmod -R 755 storage bootstrap/cache
```

#### 3. Web Server Configuration

**Apache (.htaccess)**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```

**Nginx**
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

## 🔐 Security

### Environment Security
- Never commit `.env` file to version control
- Use strong, unique passwords
- Enable HTTPS in production
- Regular security updates

### Application Security
- CSRF protection enabled
- Input validation and sanitization
- SQL injection prevention via Eloquent
- XSS protection with Blade escaping

### Admin Panel Security
- Filament authentication system
- Role-based access control
- Activity logging
- Secure session management

## 📝 Environment Variables

Key `.env` settings:

```env
# Application
APP_ENV=production
APP_DEBUG=false
APP_URL=https://www.mileletechnologies.com

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mileletech
DB_USERNAME=username
DB_PASSWORD=password

# Mail
MAIL_MAILER=smtp
MAIL_HOST=mail.example.com
MAIL_PORT=587
MAIL_USERNAME=noreply@mileletechnologies.com
MAIL_PASSWORD=app_password

# Filament
FILAMENT_FILESYSTEM_DISK=public
```

## 🧪 Testing

```bash
# Run all tests
php artisan test

# Run specific test
php artisan test --filter FeatureTest

# Generate test coverage
php artisan test --coverage
```

## 📊 Performance Optimization

### Frontend Optimization
- Vite asset compilation and minification
- Lazy loading for images
- CSS and JS minification
- Browser caching headers

### Backend Optimization
- Route and view caching
- Database query optimization
- Redis caching for frequently accessed data
- Eager loading for relationships

### Monitoring
- Laravel Telescope for debugging
- Error tracking with Sentry
- Performance monitoring with New Relic

## 🔄 Maintenance

### Regular Tasks
- Update dependencies: `composer update`
- Clear caches: `php artisan optimize:clear`
- Backup database and files
- Monitor logs for errors
- Security updates

### Commands
```bash
# Clear all caches
php artisan optimize:clear

# Re-optimize
php artisan optimize

# View logs
tail -f storage/logs/laravel.log

# Queue worker (if using queues)
php artisan queue:work
```

## 🤝 Contributing

1. Fork the repository
2. Create feature branch: `git checkout -b feature-name`
3. Commit changes: `git commit -m 'Add feature'`
4. Push to branch: `git push origin feature-name`
5. Submit pull request

### Code Standards
- Follow PSR-12 coding standards
- Use meaningful variable names
- Add comments for complex logic
- Write tests for new features

## 📄 License

This project is proprietary software of Milele Technologies. All rights reserved.

## 📞 Support

For support and inquiries:
- **Email**: info@mileletechnologies.com
- **Phone**: +255 758553532
- **Website**: https://www.mileletechnologies.com

## 🗺️ Roadmap

### Upcoming Features
- [ ] Multi-language support
- [ ] Advanced analytics dashboard
- [ ] API documentation
- [ ] Mobile app integration
- [ ] E-commerce functionality
- [ ] Customer portal

### Version History
- **v1.0.0** - Initial release with core features
- **v1.1.0** - Added Filament admin panel
- **v1.2.0** - Performance optimization and UI improvements

---

**Developed with ❤️ by Milele Technologies Team**

*Last updated: March 2026*
