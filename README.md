
# Donation Widget 💳❤️

Welcome to the **Donation Widget** project! This is a Laravel-based web application built to provide a simple, user-friendly donation interface for websites or platforms. Follow the steps below to get started with setting up the project locally. 🚀

---

## Getting Started 🚀

To set up and run the **Donation Widget** project locally, follow these steps:

### 1. Clone the Repository 📂

First, clone the repository to your local machine:

```bash
git clone https://github.com/MAbdullah-dev/donation-widget.git
```

### 2. Setup Environment File 🌱

After cloning the repo, navigate to the project root and create a new `.env` file:

```bash
cp .env.example .env
```

Now configure the necessary environment variables. At a minimum, you should set the following:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

---

### 3. Install PHP Dependencies 📦

Install the Laravel project's PHP dependencies:

```bash
composer install
```

---

### 4. Install Frontend Dependencies 📦

If the project uses frontend assets (via Laravel Mix or Vite), install the Node.js dependencies:

```bash
npm install
```

---

### 5. Build Assets 🏗️

Compile and build frontend assets:

```bash
npm run build
```

Or use development mode:

```bash
npm run dev
```

---

### 6. Generate Application Key 🔑

Generate the Laravel application key:

```bash
php artisan key:generate
```

---

### 7. Setup Storage Link 🗄️

Create a symbolic link from `public/storage` to `storage/app/public`:

```bash
php artisan storage:link
```

---

### 8. Run Migrations and Seeders 🛠️

Run database migrations:

```bash
php artisan migrate
```

(Optional) Seed the database:

```bash
php artisan db:seed
```

---

### 9. Serve the Application 🖥️

Start the Laravel development server:

```bash
php artisan serve
```

Visit your application at [http://localhost:8000](http://localhost:8000) 🎉

---

## Troubleshooting ⚠️

- **Missing `.env` file**: Make sure you create it using `.env.example`.
- **Database errors**: Double-check your DB credentials in the `.env` file.
- **Composer issues**: Run `composer install` or `composer update`.
- **NPM issues**: Delete `node_modules` and run `npm install` again.

---

## Additional Notes 📝

- Make sure your PHP version is compatible with the Laravel version used in this project.
- For deployment, caching, queues, and more, consult the [Laravel documentation](https://laravel.com/docs).

---

## License 🛡️

This project is open-source and available under the [MIT License](LICENSE).

---

## Contributing 🤝

Contributions are welcome! Feel free to fork the repository, make your changes, and submit a pull request. Please follow standard Laravel coding practices.

---

**Thank you for checking out Donation Widget!**  
Happy coding! 💻❤️
