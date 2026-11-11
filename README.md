# Ementor

Mentor ve mentee (danışan/öğrenci) eşleştirme platformu. Kullanıcılar kayıt olur, rehber (mentor) veya mentee olarak profil oluşturur, birbirleriyle mesajlaşır ve blog yazıları paylaşır.

## Özellikler

- Kayıt, giriş ve e-posta doğrulama
- Mentor ve mentee rehber listeleri ve arama
- Mesajlaşma (Chatify tabanlı, favoriler dahil)
- Mentor blogları: ekleme, düzenleme, silme
- Yönetici paneli: SSS, bilgi dokümanları, menü ve ana sayfa içerikleri
- Profil ayarları (karanlık mod ve mesajlaşma rengi dahil)

## Kullanılan teknolojiler

- PHP / Laravel
- MySQL
- Blade şablonları, Vite ile derlenen Tailwind/JS varlıkları

## Kurulum

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

`.env` dosyasında MySQL bağlantı bilgilerini düzenleyin, ardından:

```bash
php artisan migrate
npm run dev
php artisan serve
```

Uygulama `http://localhost:8000` adresinde açılır.

## Lisans

Lisans dosyası bulunmamaktadır.
