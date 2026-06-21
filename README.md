# 📚 SIM NILAI MDTA PRO WEB V3

**Sistem Informasi Manajemen Nilai Madrasah Professional - Web Version 3**

Aplikasi web profesional untuk mengelola data santri, guru, kelas, mata pelajaran, nilai, ranking, leger, dan rapor secara otomatis, modern, cepat, dan mudah digunakan.

## 🎯 Fitur Utama

- ✅ Dashboard Modern & Real-time
- ✅ Manajemen Data Santri & Guru
- ✅ Manajemen Kelas & Mata Pelajaran (Fleksibel)
- ✅ Input Nilai Otomatis (NH, UTS, UAS)
- ✅ Penghitungan Nilai Akhir Otomatis
- ✅ Ranking Otomatis Per Kelas
- ✅ Leger Otomatis (Cetak & Export)
- ✅ Rapor Profesional (Cetak & Export)
- ✅ Export PDF & Excel
- ✅ Import Data dari Excel
- ✅ Role-Based Access Control (Admin, Guru)
- ✅ Responsive Design (Desktop, Tablet, Mobile)
- ✅ Tema Premium (Hijau Tua, Emas, Putih)

## 🛠️ Tech Stack

- **Backend:** Laravel 12
- **Frontend:** Blade + Livewire + Alpine.js
- **Database:** MySQL 8.0+
- **CSS Framework:** Tailwind CSS
- **UI Components:** Flowbite, Heroicons
- **Export:** DomPDF, Laravel Excel
- **Authentication:** Laravel Breeze/Jetstream

## 📋 Requirements

- PHP 8.2+
- Composer
- Node.js & NPM
- MySQL 8.0+
- Git

## 🚀 Instalasi

```bash
# Clone repository
git clone https://github.com/rohmatulummah1707-code/sim-nilai-mdta-pro.git
cd sim-nilai-mdta-pro

# Install dependencies
composer install
npm install

# Copy .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Setup database
php artisan migrate
php artisan db:seed

# Build assets
npm run build

# Start server
php artisan serve
```

## 📁 Struktur Folder

```
sim-nilai-mdta-pro/
├── app/
│   ├── Models/              # Eloquent Models
│   ├── Http/
│   │   ├── Controllers/     # Controllers
│   │   ├── Requests/        # Form Requests
│   │   └── Middleware/      # Custom Middleware
│   ├── Services/            # Business Logic
│   ├── Exports/             # Excel Exports
│   └── Imports/             # Excel Imports
├── database/
│   ├── migrations/          # Database Migrations
│   ├── seeders/             # Database Seeders
│   └── factories/           # Model Factories
├── resources/
│   ├── views/
│   │   ├── layouts/         # Layout templates
│   │   ├── dashboard/       # Dashboard pages
│   │   ├── guru/            # Guru management
│   │   ├── santri/          # Santri management
│   │   ├── kelas/           # Kelas management
│   │   ├── nilai/           # Nilai management
│   │   ├── ranking/         # Ranking pages
│   │   ├── leger/           # Leger pages
│   │   ├── rapor/           # Rapor pages
│   │   └── pengaturan/      # Settings
│   ├── css/                 # Custom CSS
│   └── js/                  # Custom JS
├── routes/
│   ├── web.php              # Web routes
│   └── api.php              # API routes
├── config/
│   └── app.php              # App config
├── storage/
│   ├── app/exports/         # Generated exports
│   ├── app/imports/         # Uploaded imports
│   └── app/uploads/         # Uploaded files
├── tests/                   # Unit & Feature Tests
├── .env.example             # Environment example
├── composer.json
├── package.json
└── docker-compose.yml       # Docker setup
```

## 👥 Role & Akses

### Admin
- Akses penuh ke semua menu
- Manajemen user, guru, santri, kelas, mata pelajaran
- Pengaturan sistem
- Backup & restore database
- Export/import data

### Guru
- Lihat dashboard
- Input nilai kelas yang diajar
- Edit nilai kelas yang diajar
- Cetak leger kelas yang diajar
- Cetak rapor santri
- Read-only akses ke kelas lain

## 🔐 Security

- Authentication dengan Laravel Breeze
- Role-Based Access Control (RBAC)
- SQL Injection protection
- XSS Protection
- CSRF Protection
- Password hashing dengan bcrypt
- Rate limiting

## 📚 Database Schema

### Tabel Utama
- users
- guru
- santri
- kelas
- mata_pelajaran
- guru_kelas
- nilai
- ranking
- rapor
- tahun_ajaran
- semester
- pengaturan

## 🎨 UI/UX Design

- **Tema:** Hijau Tua (#1a472a), Emas (#d4af37), Putih
- **Karakter:** Modern, Elegan, Premium, Islami, Profesional
- **Responsive:** Mobile First Design
- **Aksesibilitas:** WCAG compliant

## 📖 Panduan Penggunaan

### Untuk Admin
1. Login dengan akun admin
2. Setup pengaturan madrasah
3. Buat tahun ajaran & semester
4. Buat kelas & tambah guru
5. Import data santri (atau input manual)
6. Buat mata pelajaran

### Untuk Guru
1. Login dengan akun guru
2. Pilih kelas yang diajar
3. Input nilai santri
4. Lihat ranking & leger
5. Cetak rapor & leger

## 🐳 Docker Setup

```bash
# Build & run dengan Docker
docker-compose up -d

# Access aplikasi
http://localhost:8000
```

## 🔧 Environment Variables

```env
APP_NAME="SIM NILAI MDTA PRO"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sim_nilai_mdta
DB_USERNAME=root
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
```

## 📝 Lisensi

Proprietary - Untuk Madrasah

## 👨‍💻 Pengembang

- AI Assistant (Full Stack Developer)
- Tahun: 2024-2025

## 📞 Support

Hubungi: support@simnilai.local

---

**Dibuat dengan ❤️ untuk Madrasah Indonesia**
