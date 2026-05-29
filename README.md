# 🏢 Meeting Room Reservation System

Sistem manajemen reservasi ruang rapat yang modern dan user-friendly dibangun dengan Laravel, Bootstrap, dan modern web technologies.

---

## 📋 Daftar Isi

- [Tentang Proyek](#tentang-proyek)
- [Fitur Utama](#fitur-utama)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Konfigurasi Environment](#konfigurasi-environment)
- [Setup Database](#setup-database)
- [Running Aplikasi](#running-aplikasi)
- [Testing](#testing)
- [Troubleshooting](#troubleshooting)
- [Struktur Proyek](#struktur-proyek)
- [Dokumentasi Tambahan](#dokumentasi-tambahan)

---

## 📖 Tentang Proyek

**Meeting Room Reservation System** adalah aplikasi web untuk manajemen reservasi ruang rapat dengan fitur:
- Autentikasi pengguna dengan role-based access control (Admin & User)
- Manajemen ruang rapat dengan foto
- Sistem reservasi ruang yang user-friendly
- Approval workflow untuk admin
- Dashboard analytics
- Export laporan ke PDF

Aplikasi ini dibangun dengan teknologi terkini dan design yang modern serta responsif.

---

## ✨ Fitur Utama

### 👥 User Management
- ✅ Registrasi dan login
- ✅ Two-role system: Admin & User
- ✅ Profile management

### 🏫 Room Management (Admin)
- ✅ Create, read, update, delete ruang rapat
- ✅ Upload foto ruang
- ✅ Set kapasitas dan lokasi
- ✅ View semua reservasi ruang

### 📅 Reservation System (User)
- ✅ Browse dan reservasi ruang
- ✅ View status reservasi
- ✅ Buat reservasi dengan tanggal & waktu
- ✅ Cancel reservasi

### ⚙️ Admin Dashboard
- ✅ Review dan approve/reject reservasi
- ✅ Dashboard analytics
- ✅ Manage ruang rapat
- ✅ View laporan

### 📊 Reporting
- ✅ Export ke PDF
- ✅ Laporan reservasi
- ✅ Data analytics

---

## 💻 Persyaratan Sistem

### Environment
- **PHP**: 8.3 atau lebih tinggi
- **Composer**: Latest version
- **Node.js**: 18+ dan npm
- **MySQL**: 5.7+
- **Git**: untuk version control

### Paket PHP
- Laravel 13.8
- Spatie Laravel Permission 7.4
- BarryVdh Laravel DomPDF 3.1
- PHPUnit 12.5

### Node Packages
- Bootstrap 5.3.8
- TailwindCSS 4.0
- Vite 8.0
- Chart.js 4.5
- SweetAlert2 11.26

---

## 🚀 Instalasi

### Step 1: Clone Repository

```bash
git clone <repository-url>
cd meetingroom-app
```

### Step 2: Install PHP Dependencies

```bash
composer install
```

### Step 3: Install Node Dependencies

```bash
npm install
```

### Step 4: Setup Environment File

```bash
# Copy .env.example ke .env
cp .env.example .env

# Atau di Windows:
copy .env.example .env
```

### Step 5: Generate Application Key

```bash
php artisan key:generate
```

---

## ⚙️ Konfigurasi Environment

Edit file `.env` dan konfigurasi variabel berikut:

```env
# Application
APP_NAME="Meeting Room Reservation"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meetingroom_app
DB_USERNAME=root
DB_PASSWORD=your_password

# Cache & Session
CACHE_STORE=database
SESSION_DRIVER=database
SESSION_LIFETIME=120

# Queue
QUEUE_CONNECTION=database

# Mail (Optional)
MAIL_MAILER=log
MAIL_FROM_ADDRESS="noreply@meetingroom.test"
MAIL_FROM_NAME="Meeting Room System"
```

**Penjelasan Konfigurasi:**
- `APP_DEBUG=true`: Mode debug untuk development
- `APP_URL`: URL aplikasi Anda
- `DB_*`: Konfigurasi database MySQL
- `QUEUE_CONNECTION=database`: Menggunakan database untuk queue
- `SESSION_DRIVER=database`: Session disimpan di database

---

## 🗄️ Setup Database

### Step 1: Buat Database

```bash
# Login ke MySQL
mysql -u root -p

# Buat database
CREATE DATABASE meetingroom_app CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

### Step 2: Jalankan Migrations

```bash
php artisan migrate
```

**Migrations yang akan dibuat:**
- `users_table` - Tabel pengguna
- `cache_table` - Tabel cache
- `jobs_table` - Tabel background jobs
- `rooms_table` - Tabel ruang rapat
- `reservations_table` - Tabel reservasi
- `permissions` dan `roles` - Spatie permission

### Step 3: Jalankan Seeders (Optional)

```bash
php artisan db:seed
```

Ini akan membuat data dummy untuk development:
- Admin user
- Regular users
- Sample rooms

### Step 4: Verifikasi Database

```bash
php artisan tinker
# Cek User
>>> App\Models\User::count()
# Cek Rooms
>>> App\Models\Room::count()
```

---

## 🎮 Running Aplikasi

### Option 1: Menggunakan Artisan Serve (Simple)

**Terminal 1 - Backend Server:**
```bash
php artisan serve
# Aplikasi akan berjalan di http://localhost:8000
```

**Terminal 2 - Vite Dev Server (untuk hot reload):**
```bash
npm run dev
# Akan berjalan di http://localhost:5173
```

### Option 2: Menggunakan Composer Script (Recommended)

```bash
composer run dev
```

Ini akan menjalankan:
- PHP Artisan Server
- Queue Worker
- Vite Dev Server

Secara bersamaan dalam satu terminal.

### Option 3: Menggunakan Docker (Optional)

Jika Anda menggunakan Docker:

```bash
docker-compose up -d
php artisan migrate
```

---

## 🧪 Testing

### Jalankan Unit Tests

```bash
php artisan test
```

### Jalankan Tests dengan Coverage

```bash
php artisan test --coverage
```

### Jalankan Tests Spesifik

```bash
php artisan test tests/Feature/ExampleTest.php
```

---

## 📁 Struktur Proyek

```
meetingroom-app/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Business logic controllers
│   │   ├── Middleware/         # HTTP middleware
│   │   └── Requests/           # Form requests & validation
│   ├── Models/                 # Eloquent models
│   │   ├── User.php
│   │   ├── Room.php
│   │   └── Reservation.php
│   └── Providers/              # Service providers
├── bootstrap/                  # Bootstrap app configuration
├── config/                     # Configuration files
├── database/
│   ├── factories/              # Model factories
│   ├── migrations/             # Database migrations
│   └── seeders/                # Database seeders
├── public/                     # Publicly accessible files
│   ├── index.php
│   ├── storage/                # Public storage
│   └── build/                  # Vite build output
├── resources/
│   ├── css/                    # CSS files
│   │   └── app.css
│   ├── js/                     # JavaScript files
│   │   └── app.js
│   └── views/                  # Blade templates
│       ├── layouts/            # Layout templates
│       ├── admin/              # Admin pages
│       ├── user/               # User pages
│       └── auth/               # Auth pages
├── routes/
│   ├── web.php                 # Web routes
│   └── console.php             # Console routes
├── storage/                    # File storage
│   ├── app/                    # Application storage
│   ├── logs/                   # Log files
│   └── framework/              # Framework files
├── tests/                      # Test files
│   ├── Feature/                # Feature tests
│   └── Unit/                   # Unit tests
├── vendor/                     # Composer dependencies
├── node_modules/               # NPM dependencies
├── composer.json               # Composer config
├── package.json                # NPM config
├── vite.config.js              # Vite config
├── .env.example                # Environment example
├── .gitignore                  # Git ignore rules
├── artisan                     # Artisan command
└── README.md                   # This file
```

---

## 🔐 User Login

Setelah seeder dijalankan, gunakan credentials berikut:

### Admin Account
```
Email: admin@example.com
Password: password
Role: Admin
```

### Regular User
```
Email: user@example.com
Password: password
Role: User
```

---

## 🎨 Customization

### Mengubah Theme Colors

Edit file [resources/css/app.css](resources/css/app.css) dan ubah CSS custom properties:

```css
:root {
    --primary-color: #0d6efd;      /* Biru */
    --secondary-color: #f8f9fa;    /* Abu-abu */
    --success-color: #198754;      /* Hijau */
    --danger-color: #dc3545;       /* Merah */
}
```

### Mengubah Brand Name

Edit `.env`:
```env
APP_NAME="Nama Aplikasi Anda"
```

---

## 🐛 Troubleshooting

### 1. Error: "No application encryption key has been specified"

**Solusi:**
```bash
php artisan key:generate
```

### 2. Error: "SQLSTATE[HY000]: General error: 1030 Got error..."

**Solusi:**
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Reset database
php artisan migrate:fresh
php artisan db:seed
```

### 3. Port 8000 sudah digunakan

**Solusi:**
```bash
# Jalankan dengan port berbeda
php artisan serve --port=8001
```

### 4. Node/npm tidak terinstall

**Solusi:**
- Download dan install dari https://nodejs.org/
- Verify: `node --version` dan `npm --version`

### 5. Composer dependencies error

**Solusi:**
```bash
# Clear composer cache
composer clear-cache

# Update dependencies
composer update
```

### 6. Permission denied errors (Linux/Mac)

**Solusi:**
```bash
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
```

---

## 📚 Dokumentasi Tambahan

- [REDESIGN_SUMMARY.md](REDESIGN_SUMMARY.md) - Ringkasan redesain UI
- [STYLE_GUIDE.md](STYLE_GUIDE.md) - Panduan styling
- [THEME_DOCUMENTATION.md](THEME_DOCUMENTATION.md) - Dokumentasi theme
- [Laravel Documentation](https://laravel.com/docs)
- [Bootstrap Documentation](https://getbootstrap.com/docs)

---

## 📝 Development Workflow

### 1. Development Server

```bash
# Terminal 1
php artisan serve

# Terminal 2
npm run dev
```

Aplikasi akan hot-reload saat Anda mengubah file.

### 2. Building untuk Production

```bash
# Build assets
npm run build

# Optimize untuk production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 3. Database Migrations

```bash
# Buat migration baru
php artisan make:migration create_table_name

# Jalankan migrations
php artisan migrate

# Rollback terakhir
php artisan migrate:rollback
```

### 4. Membuat Model & Controller

```bash
# Create model with migration
php artisan make:model ModelName -m

# Create controller
php artisan make:controller ControllerName

# Create resource controller
php artisan make:controller ControllerName -r
```

---

## 🤝 Contributing

Contributions sangat welcome! Berikut step untuk berkontribusi:

1. Fork repository
2. Buat feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buka Pull Request

---

## 📄 License

Project ini dilisensikan dibawah MIT License. Lihat file [LICENSE](LICENSE) untuk details.

---

## ✉️ Support & Contact

Jika ada pertanyaan atau issues:
- Buka issue di repository
- Email: support@meetingroom.test
- Cek dokumentasi di folder `/docs` (jika tersedia)

---

**Happy Coding! 🚀**
