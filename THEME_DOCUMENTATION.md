# 📋 Meeting Room Reservation - Custom Theme Documentation

## 🎨 Spesifikasi Desain

Sistem ini menggunakan tema UI modern yang dirancang khusus untuk aplikasi Meeting Room Reservation dengan spesifikasi sebagai berikut:

### Warna Palet
- **Warna Utama (Primary)**: `#0d6efd` (Biru cerah)
- **Warna Utama Gelap**: `#0b5ed7` (Biru gelap untuk hover)
- **Warna Sekunder**: `#f8f9fa` (Abu-abu muda)
- **Warna Sekunder Gelap**: `#e9ecef` (Abu-abu lebih gelap)
- **Warna Netral Gelap**: `#212529` (Warna teks utama)
- **Warna Border**: `#dee2e6` (Garis border standar)

### Ukuran Border Radius
- **Small (--radius-sm)**: `8px`
- **Medium (--radius-md)**: `12px` *(default)*
- **Large (--radius-lg)**: `16px`
- **Extra Large (--radius-xl)**: `20px`

### Sistem Shadow (Soft Shadow)
Menggunakan shadow yang lembut dengan gradasi berdasarkan kedalaman:

```css
--shadow-xs: 0 1px 2px 0 rgba(13, 110, 253, 0.05);
--shadow-sm: 0 2px 4px 0 rgba(13, 110, 253, 0.08);
--shadow-md: 0 4px 8px 0 rgba(13, 110, 253, 0.1);
--shadow-lg: 0 8px 16px 0 rgba(13, 110, 253, 0.12);
--shadow-xl: 0 12px 24px 0 rgba(13, 110, 253, 0.15);
```

### Typography
- **Font Family**: System font stack (-apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", etc.)
- **Base Font Size**: `1rem` (16px)
- **Line Height Base**: `1.5`
- **Font Weights**: 
  - Normal: `400`
  - Medium: `500`
  - Semi-Bold: `600`
  - Bold: `700`

---

## 📦 Komponen Global

### 1. **Buttons**

#### Variasi Tombol

```html
<!-- Button Primary -->
<button class="btn btn-primary">Masuk</button>

<!-- Button Secondary -->
<button class="btn btn-secondary">Batal</button>

<!-- Button Danger -->
<button class="btn btn-danger">Hapus</button>

<!-- Button Success -->
<button class="btn btn-success">Simpan</button>

<!-- Button Outline -->
<button class="btn btn-outline-primary">Lihat Detail</button>
```

#### Ukuran Tombol

```html
<!-- Small Button -->
<button class="btn btn-primary btn-sm">Kecil</button>

<!-- Default Button (Medium) -->
<button class="btn btn-primary">Normal</button>

<!-- Large Button -->
<button class="btn btn-primary btn-lg">Besar</button>

<!-- Full Width Button -->
<button class="btn btn-primary btn-block">Lebar Penuh</button>
```

### 2. **Cards**

#### Struktur Card

```html
<div class="card">
  <div class="card-header">
    <h5>Judul Card</h5>
  </div>
  <div class="card-body">
    Konten utama card
  </div>
  <div class="card-footer">
    Footer card (opsional)
  </div>
</div>
```

#### Card Statistik

```html
<div class="card">
  <div class="card-stat">
    <div style="font-size: 0.875rem; color: var(--gray); font-weight: 500; text-transform: uppercase;">
      Total Ruangan
    </div>
    <div class="card-stat-value">24</div>
    <p class="card-stat-label">Ruangan tersedia</p>
  </div>
</div>
```

### 3. **Forms**

#### Input Form

```html
<div class="form-group">
  <label for="email">Email</label>
  <input 
    type="email" 
    id="email"
    class="form-control" 
    placeholder="masukkan email Anda"
  >
</div>
```

#### Form dengan Bantuan Teks

```html
<div class="form-group">
  <label for="password">Password</label>
  <input 
    type="password" 
    id="password"
    class="form-control"
  >
  <p class="form-text">Password minimal 8 karakter</p>
</div>
```

### 4. **Alerts**

```html
<!-- Alert Primary -->
<div class="alert alert-primary">
  <div>Informasi penting untuk Anda</div>
</div>

<!-- Alert Success -->
<div class="alert alert-success">
  <div>✓ Operasi berhasil dilakukan</div>
</div>

<!-- Alert Danger -->
<div class="alert alert-danger">
  <div>✕ Terjadi kesalahan, silakan coba lagi</div>
</div>

<!-- Alert Warning -->
<div class="alert alert-warning">
  <div>⚠ Perhatian: Tindakan ini tidak dapat dibatalkan</div>
</div>
```

---

## 🏗️ Layout & Grid

### Container

```html
<!-- Container Standar (max-width: 1200px) -->
<div class="container">
  Konten dengan padding responsive
</div>

<!-- Container Kecil (max-width: 576px) -->
<div class="container-sm">
  Konten untuk form atau dialog
</div>

<!-- Container Medium (max-width: 768px) -->
<div class="container-md">
  Konten untuk tampilan sedang
</div>

<!-- Container Large (max-width: 992px) -->
<div class="container-lg">
  Konten untuk tampilan besar
</div>
```

### Grid System

```html
<!-- 12 Column Grid -->
<div class="row">
  <!-- Full Width -->
  <div class="col-12">Kolom penuh</div>
  
  <!-- Half Width -->
  <div class="col-6">Setengah lebar</div>
  <div class="col-6">Setengah lebar</div>
  
  <!-- Thirds -->
  <div class="col-4">Sepertiga lebar</div>
  <div class="col-4">Sepertiga lebar</div>
  <div class="col-4">Sepertiga lebar</div>
  
  <!-- Responsive -->
  <div class="col-12 col-md-6">
    Full width di mobile, half width di desktop
  </div>
</div>
```

---

## 🧩 Flexbox Utilities

```html
<!-- Flex Container -->
<div class="d-flex">
  <!-- Items di-arrange horizontal -->
</div>

<!-- Flex Column -->
<div class="d-flex flex-column">
  <!-- Items di-arrange vertical -->
</div>

<!-- Space Between -->
<div class="d-flex justify-content-between">
  <!-- Ruang antara items -->
</div>

<!-- Center Items -->
<div class="d-flex align-items-center justify-content-center">
  <!-- Items centered both horizontally and vertically -->
</div>

<!-- Gap -->
<div class="d-flex gap-2">
  <!-- Gap 0.5rem between items -->
</div>
<div class="d-flex gap-3">
  <!-- Gap 1rem between items -->
</div>
```

---

## 🎯 Navigation

### Navbar

```html
<nav class="navbar">
  <div class="navbar-content">
    <a href="/" class="navbar-brand">
      📋 MeetingRoom
    </a>
    
    <ul class="navbar-menu">
      <li><a href="/dashboard" class="navbar-link active">Dashboard</a></li>
      <li><a href="/rooms" class="navbar-link">Ruangan</a></li>
      <li><a href="/reservations" class="navbar-link">Reservasi</a></li>
      <li>
        <button class="btn btn-danger btn-sm">Logout</button>
      </li>
    </ul>
  </div>
</nav>
```

---

## 🎨 Kustomisasi Warna

### Mengubah Variabel Warna Global

Edit file `resources/css/app.css` dan ubah nilai di `:root`:

```css
:root {
  --primary: #0d6efd;           /* Ubah warna utama */
  --secondary: #f8f9fa;         /* Ubah warna sekunder */
  --success: #198754;           /* Ubah warna sukses */
  --danger: #dc3545;            /* Ubah warna danger */
  --warning: #ffc107;           /* Ubah warna warning */
  --info: #0dcaf0;              /* Ubah warna info */
}
```

### Menggunakan Kelas Warna Teks

```html
<p class="text-primary">Teks berwarna biru</p>
<p class="text-success">Teks berwarna hijau</p>
<p class="text-danger">Teks berwarna merah</p>
<p class="text-warning">Teks berwarna kuning</p>
<p class="text-info">Teks berwarna cyan</p>
<p class="text-muted">Teks abu-abu (muted)</p>
```

### Background Color

```html
<div class="bg-light">Latar belakang abu-abu muda</div>
<div class="bg-white">Latar belakang putih</div>
<div class="bg-primary">Latar belakang biru</div>
```

---

## 📱 Responsive Design

### Breakpoints

- **Mobile**: < 576px (default)
- **Tablet**: 576px - 768px
- **Desktop**: 768px+

### Media Query Classes

```html
<!-- Tampil di mobile dan tablet, tersembunyi di desktop -->
<div style="display: block;">
  Mobile content
</div>

<!-- Grid responsive -->
<div class="row">
  <div class="col-12 col-md-6">
    Full width di mobile, half width di tablet dan desktop
  </div>
</div>

<!-- Font responsive -->
<h1 style="font-size: 1.5rem;">
  <!-- Ukuran berbeda untuk mobile dan desktop -->
</h1>
```

---

## 💡 Best Practices

### 1. **Gunakan Spacing Konsisten**
```html
<!-- Gunakan variable spacing -->
<div style="margin-bottom: var(--spacing-lg);">
  Konten dengan margin yang konsisten
</div>
```

### 2. **Hindari Hard-coded Colors**
```html
<!-- ❌ Jangan lakukan ini -->
<div style="background-color: #0d6efd;">Konten</div>

<!-- ✅ Lakukan ini -->
<div style="background-color: var(--primary);">Konten</div>
```

### 3. **Gunakan Border Radius yang Konsisten**
```html
<!-- ✅ Gunakan variable radius -->
<div style="border-radius: var(--radius-md);">Konten</div>

<!-- Ukuran yang tersedia:
  - var(--radius-sm): 8px
  - var(--radius-md): 12px
  - var(--radius-lg): 16px
  - var(--radius-xl): 20px
-->
```

### 4. **Gunakan Shadow yang Tepat**
```html
<!-- Card biasa -->
<div class="card shadow-sm">Card dengan shadow kecil</div>

<!-- Card dengan interaksi -->
<div class="card shadow-md">Card dengan shadow medium</div>

<!-- Card important -->
<div class="card shadow-lg">Card dengan shadow besar</div>
```

### 5. **Typography Profesional**
```html
<!-- Heading dengan font-weight konsisten -->
<h1>Judul Halaman</h1>        <!-- font-weight: 600 -->
<h3>Subjudul</h3>              <!-- font-weight: 600 -->

<!-- Body text -->
<p>Teks body dengan line-height 1.5</p>

<!-- Muted text untuk secondary info -->
<p class="text-muted">Informasi sekunder</p>
```

---

## 📚 File Struktur

```
resources/
├── css/
│   └── app.css                    ← CSS custom global
├── views/
│   ├── layouts/
│   │   └── app.blade.php          ← Layout utama dengan navbar & footer
│   ├── auth/
│   │   └── login.blade.php        ← Halaman login modern
│   ├── admin/
│   │   └── dashboard.blade.php    ← Admin dashboard
│   ├── user/
│   │   └── dashboard.blade.php    ← User dashboard
│   └── welcome-new.blade.php      ← Halaman welcome
```

---

## 🚀 Menggunakan Tema

### 1. **Di Halaman Blade**
```blade
@extends('layouts.app')

@section('content')
  <!-- Gunakan kelas CSS sesuai dengan dokumentasi -->
  <div class="container">
    <h1>Halaman Saya</h1>
    <div class="card">
      <div class="card-body">
        Konten card
      </div>
    </div>
  </div>
@endsection
```

### 2. **Inline Styling**
```blade
<!-- Gunakan variable CSS untuk konsistensi -->
<div style="
  background-color: var(--primary);
  padding: var(--spacing-lg);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-md);
">
  Konten dengan styling konsisten
</div>
```

---

## ✅ Checklist Implementasi

- [x] CSS custom global dengan sistem desain lengkap
- [x] Layout utama dengan navbar dan footer
- [x] Komponen buttons dengan berbagai variasi
- [x] Sistem card yang modern dan profesional
- [x] Form styling yang user-friendly
- [x] Alert components untuk berbagai status
- [x] Grid system 12 kolom
- [x] Flexbox utilities
- [x] Responsive design
- [x] Shadow system yang lembut
- [x] Typography profesional

---

## 📝 Catatan

- Semua warna, ukuran, dan shadow didefinisikan sebagai CSS custom properties (variables) untuk kemudahan kustomisasi
- Desain mengikuti prinsip modern application design dengan fokus pada keterbacaan dan profesionalitas
- Responsive design dioptimalkan untuk mobile-first approach
- Transisi dan hover effects halus untuk meningkatkan user experience

---

**Terakhir Diperbarui**: Mai 24, 2026
**Versi**: 1.0.0
