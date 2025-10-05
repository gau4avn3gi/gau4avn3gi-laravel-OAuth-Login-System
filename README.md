# Laravel OAuth Dashboard with Socialite

**Laravel OAuth Dashboard with Socialite** is a modern Laravel application that implements **social login (OAuth)** using the **Socialite library**. Users can authenticate via **Google, Facebook, GitHub**, and other providers. The app includes a **responsive dashboard** displaying user profile information, login provider, and account activity. The UI is built using **Laravel Breeze** and **TailwindCSS**, offering a sleek, mobile-friendly interface.

---

## Features

* Social login with multiple providers (Google, Facebook, GitHub, etc.)
* Auto-create users when logging in via OAuth
* Responsive and modern dashboard UI
* User profile card with avatar, login provider, and account details
* Activity overview placeholder for future analytics
* Easy to extend with more providers
* Full authentication flow: login, logout, and account linking

---

## Tech Stack

* **Framework:** Laravel 12
* **Authentication:** Laravel Breeze + Socialite
* **Frontend:** TailwindCSS
* **Database:** MySQL (or your preferred DB)
* **Version Control:** Git + GitHub

---

## Installation & Setup

1. **Clone the repository:**

```bash
git clone https://github.com/gau4avn3gi/gau4avn3gi-laravel-OAuth-Login-System.git
cd gau4avn3gi-laravel-OAuth-Login-System
```

2. **Install dependencies:**

```bash
composer install
npm install
npm run dev
```

3. **Set up environment variables:**

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` file to configure your database and OAuth credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=

GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URL=http://localhost:8000/auth/google/callback

FACEBOOK_CLIENT_ID=your-facebook-client-id
FACEBOOK_CLIENT_SECRET=your-facebook-client-secret
FACEBOOK_REDIRECT_URL=http://localhost:8000/auth/facebook/callback
```

4. **Run database migrations:**

```bash
php artisan migrate
```

5. **Start local development server:**

```bash
php artisan serve
```

---

## OAuth Setup (Socialite)

1. Go to your OAuth provider (Google, Facebook, GitHub) developer console
2. Create a new application and copy the **Client ID** and **Client Secret**
3. Set the **Redirect URL** to `http://localhost:8000/auth/{provider}/callback`

   * Example: `http://localhost:8000/auth/google/callback`
4. Update your `.env` file with the credentials

---

## Project Structure

```
LaravelOauth/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── SocialController.php
│   └── Models/
│       └── User.php
├── database/
│   └── migrations/
├── resources/
│   ├── views/
│   │   ├── auth/
│   │   │   ├── login.blade.php
│   │   │   └── register.blade.php
│   │   └── dashboard.blade.php
├── routes/
│   └── web.php
├── public/
├── composer.json
└── package.json
```

---

## Usage

1. Visit `http://localhost:8000/register` or `/login`
2. Click **Login with Google / Facebook**
3. After successful login, you will be redirected to the dashboard
4. Dashboard displays user info, login provider, and member since date

---

## Screenshots

> You can add images here to showcase your login page, dashboard, and profile cards.

---

## License

MIT License © 2025 Gaurav Negi

---

## Author

**Gaurav Negi**

* [LinkedIn](https://www.linkedin.com/in/gaurav-negi)
* [GitHub](https://github.com/gau4avn3gi)
