# Nobel Training Academy (NTA)

A web application for Nobel Training Academy built with Laravel 8, featuring course listings for beauty therapy and remedial massage programs, a blog with categories, chatbot integration, team profiles, and an admin panel for content management.

## Features

- **Course Pages** -- Detailed pages for diploma and certificate programs (Beauty Therapy, Remedial Massage, etc.)
- **Blog System** -- Categorized blog with SEO-friendly slugs and rich text content
- **Chatbot Integration** -- BotMan-powered chatbot for visitor inquiries
- **Team Profiles** -- Staff and instructor profile management
- **Admin Dashboard** -- Manage courses, blog posts, categories, and team members via Livewire-powered admin panel
- **Membership System** -- RPL (Recognition of Prior Learning) eligibility requests
- **Contact & Mailing** -- Contact forms with email notification support
- **DataTables** -- Server-side data tables for admin listing pages
- **SEO** -- Sitemap, robots.txt, Bing and Google site verification
- **Caching** -- Response caching middleware for improved page load performance

## Tech Stack

- **Backend:** PHP 7.3+, Laravel 8
- **Frontend:** Blade templates, Tailwind CSS, Laravel Mix
- **Real-Time UI:** Livewire
- **Database:** MySQL
- **Authentication:** Laravel Jetstream with Livewire
- **Chatbot:** BotMan
- **Data Tables:** Yajra Laravel DataTables
- **SEO:** Eloquent Sluggable

## Prerequisites

- PHP >= 7.3
- Composer
- MySQL 5.7+
- Node.js & npm

## Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/mhmalvi/NTA.git
   cd NTA
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Update `.env`** with your database credentials and mail configuration.

5. **Import the database** (if using the provided SQL dump)
   ```bash
   mysql -u root -p your_database < nta.sql
   ```

6. **Run migrations** (alternative to SQL import)
   ```bash
   php artisan migrate --seed
   ```

7. **Build frontend assets**
   ```bash
   npm run dev
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`.

## Project Structure

```
app/
  Http/Controllers/
    Admin/              # Admin panel controllers
    BlogController.php  # Public blog pages
    BotManController.php # Chatbot handler
    CoursesController.php
    HomeController.php
  Models/               # Eloquent models (Blog, Category, Team, Membership, etc.)
routes/
  web.php               # Web routes
resources/              # Blade views, Livewire components, and frontend assets
database/               # Migrations, seeders, and SQL dump
```

## License

MIT
