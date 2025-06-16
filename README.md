# MEDIUM CLONE (Laravel)

A Medium-style blogging platform built with Laravel. This project allows users to register, create articles, interact with posts, and follow favorite authors - replicating the core features of Medium.

## Features

-   User authentication (Registration, Login, Logout)
-   Create, edit, delete, and publish posts
-   Follow creators
-   User profiles with bio and avatar
-   responsive frontend styled with Tailwind CSS
-   RESTful architecture
-   Clean, maintainable code structure

# Tech Stack

-   **Backend Framework**: Laravel 12.14.1
-   **Frontend**: Blade templates + Tailwind CSS + Flowbite
-   **Database**: SQLite
-   **Authentication**: Laravel Breeze
-   **Version Control**: Git
-   **Dev Environment**: Laravel Sail, Composer, npm

# Installation & Setup

1. **Clone the repository**

```bash
git clone https://github.com/Laurel-Amah/medium-clone.git
cd medium-clone
```

2. **Install Dependencies**

```bash
composer install
npm install
npm run dev
```

3. **Configure Environment**

```bash
cp .env.example .env
php artisan key:generate
```

4. **Run Migrations**

```bash
php artisan migrate
```

5. **Start the development server**

```bash
php artisan serve
```

Visit: http://localhost:8000

# License

This project is license under the [MIT] (https://rem.mit-license.org/) License.
