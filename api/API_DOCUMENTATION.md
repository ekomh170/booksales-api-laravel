# 📚 Booksales API Documentation

## Identitas Tugas

### Pertemuan 3
- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Pertemuan**: 3 (15 Oktober 2025)
- **Topik**: REST API dengan Laravel
- **Group**: 2
- **Deadline**: Jumat, 17 Oktober 2025, 23:59

### Pertemuan 4
- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Pertemuan**: 4 (16 Oktober 2025)
- **Topik**: CRUD API - Create & Read untuk Genre dan Author
- **Group**: 2
- **Deadline**: Kamis, 23 Oktober 2025, 23:59

---

## 🚀 Base URL

```
http://localhost:8000
```

---

## 📋 Endpoints

### 1. Welcome Endpoint

Menampilkan informasi API dan daftar endpoint yang tersedia.

**Endpoint:** `GET /`

**Response:**
```json
{
  "success": true,
  "message": "Selamat Datang di Booksales API - SIB STT NF",
  "info": {
    "nama": "Eko Muchamad Haryono",
    "nim": "0110223079",
    "tugas": "Pertemuan 3 - REST API",
    "endpoints": {
      "GET /api/authors": "Ambil semua data authors",
      "GET /api/books": "Ambil semua data books",
      "GET /api/authors/{id}": "Ambil detail author",
      "GET /api/books/{id}": "Ambil detail book"
    }
  }
}
```

---

### 2. Ambil Data Semua Authors

Mengambil semua data authors dari database.

**Endpoint:** `GET /api/authors`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Data authors berhasil diambil",
  "data": [
    {
      "id": 1,
      "name": "Nadhifa Allya Tsana",
      "email": "nadhifa.allya@example.com",
      "country": "Indonesia",
      "birth_date": "1996-05-12",
      "biography": "Penulis muda Indonesia yang terkenal dengan novel remaja...",
      "created_at": "2025-10-15T10:00:00.000000Z",
      "updated_at": "2025-10-15T10:00:00.000000Z"
    },
    ...
  ]
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method GET
3. Masukkan URL: `http://localhost:8000/api/authors`
4. Tambahkan header `Accept: application/json`
5. Klik Send
6. Verifikasi response status 200 dan data authors muncul

---

### 3. Ambil Data Detail Author

Mengambil detail author berdasarkan ID beserta daftar buku yang ditulisnya.

**Endpoint:** `GET /api/authors/{id}`

**Headers:**
```
Accept: application/json
```

**URL Parameters:**
- `id` (required) - ID author yang ingin dilihat detailnya

**Response Success (200):**
```json
{
  "success": true,
  "message": "Detail author berhasil diambil",
  "data": {
    "id": 1,
    "name": "Nadhifa Allya Tsana",
    "email": "nadhifa.allya@example.com",
    "country": "Indonesia",
    "birth_date": "1996-05-12",
    "biography": "Penulis muda Indonesia yang terkenal dengan novel remaja...",
    "created_at": "2025-10-15T10:00:00.000000Z",
    "updated_at": "2025-10-15T10:00:00.000000Z",
    "books": [
      {
        "id": 1,
        "title": "Geez & Ann",
        "isbn": "978-602-220-123-4",
        "description": "Novel romansa remaja yang menceritakan tentang...",
        "published_date": "2018-03-15",
        "price": "85000.00",
        "stock": 45,
        "genre": "Romance",
        "author_id": 1,
        "created_at": "2025-10-15T10:00:00.000000Z",
        "updated_at": "2025-10-15T10:00:00.000000Z"
      }
    ]
  }
}
```

**Response Error (404):**
```json
{
  "success": false,
  "message": "Author tidak ditemukan",
  "data": null
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method GET
3. Masukkan URL: `http://localhost:8000/api/authors/1`
4. Tambahkan header `Accept: application/json`
5. Klik Send
6. Verifikasi response berisi detail author beserta books
7. Coba dengan ID yang tidak ada (misal: 999) untuk test error response

---

### 4. Ambil Data Semua Books

Mengambil semua data buku beserta informasi author.

**Endpoint:** `GET /api/books`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Data books berhasil diambil",
  "data": [
    {
      "id": 1,
      "title": "Geez & Ann",
      "isbn": "978-602-220-123-4",
      "description": "Novel romansa remaja yang menceritakan tentang...",
      "published_date": "2018-03-15",
      "price": "85000.00",
      "stock": 45,
      "genre": "Romance",
      "author_id": 1,
      "created_at": "2025-10-15T10:00:00.000000Z",
      "updated_at": "2025-10-15T10:00:00.000000Z",
      "author": {
        "id": 1,
        "name": "Nadhifa Allya Tsana",
        "email": "nadhifa.allya@example.com",
        "country": "Indonesia",
        "birth_date": "1996-05-12",
        "biography": "Penulis muda Indonesia yang terkenal dengan novel remaja...",
        "created_at": "2025-10-15T10:00:00.000000Z",
        "updated_at": "2025-10-15T10:00:00.000000Z"
      }
    },
    ...
  ]
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method GET
3. Masukkan URL: `http://localhost:8000/api/books`
4. Tambahkan header `Accept: application/json`
5. Klik Send
6. Verifikasi response status 200 dan data books dengan author muncul

---

### 5. Ambil Data Detail Book

Mengambil detail buku berdasarkan ID beserta informasi author.

**Endpoint:** `GET /api/books/{id}`

**Headers:**
```
Accept: application/json
```

**URL Parameters:**
- `id` (required) - ID buku yang ingin dilihat detailnya

**Response Success (200):**
```json
{
  "success": true,
  "message": "Detail book berhasil diambil",
  "data": {
    "id": 1,
    "title": "Geez & Ann",
    "isbn": "978-602-220-123-4",
    "description": "Novel romansa remaja yang menceritakan tentang...",
    "published_date": "2018-03-15",
    "price": "85000.00",
    "stock": 45,
    "genre": "Romance",
    "author_id": 1,
    "created_at": "2025-10-15T10:00:00.000000Z",
    "updated_at": "2025-10-15T10:00:00.000000Z",
    "author": {
      "id": 1,
      "name": "Nadhifa Allya Tsana",
      "email": "nadhifa.allya@example.com",
      "country": "Indonesia",
      "birth_date": "1996-05-12",
      "biography": "Penulis muda Indonesia yang terkenal dengan novel remaja...",
      "created_at": "2025-10-15T10:00:00.000000Z",
      "updated_at": "2025-10-15T10:00:00.000000Z"
    }
  }
}
```

**Response Error (404):**
```json
{
  "success": false,
  "message": "Book tidak ditemukan",
  "data": null
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method GET
3. Masukkan URL: `http://localhost:8000/api/books/1`
4. Tambahkan header `Accept: application/json`
5. Klik Send
6. Verifikasi response berisi detail book beserta author
7. Coba dengan ID yang tidak ada (misal: 999) untuk test error response

---

### 6. Ambil Data Semua Genres

Mengambil semua data genre dari database.

**Endpoint:** `GET /api/genres`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Data genres berhasil diambil",
  "data": [
    {
      "id": 1,
      "name": "Romance",
      "slug": "romance",
      "description": "Cerita tentang hubungan romantis dan cinta",
      "created_at": "2025-10-16T02:00:00.000000Z",
      "updated_at": "2025-10-16T02:00:00.000000Z"
    },
    ...
  ]
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method GET
3. Masukkan URL: `http://localhost:8000/api/genres`
4. Tambahkan header `Accept: application/json`
5. Klik Send
6. Verifikasi response status 200 dan data genres muncul

---

### 7. Create Genre Baru

Membuat data genre baru ke database.

**Endpoint:** `POST /api/genres`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "name": "Mystery",
  "slug": "mystery",
  "description": "Cerita misteri dan teka-teki"
}
```

**Validation Rules:**
- `name` (required, string, max:100, unique)
- `slug` (optional, string, max:100, unique) - jika tidak diisi, akan auto-generate dari name
- `description` (optional, string)

**Response Success (201):**
```json
{
  "success": true,
  "message": "Genre berhasil dibuat",
  "data": {
    "name": "Mystery",
    "slug": "mystery",
    "description": "Cerita misteri dan teka-teki",
    "updated_at": "2025-10-16T03:00:00.000000Z",
    "created_at": "2025-10-16T03:00:00.000000Z",
    "id": 6
  }
}
```

**Response Error (422) - Validation Failed:**
```json
{
  "message": "The name field is required.",
  "errors": {
    "name": [
      "The name field is required."
    ]
  }
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method POST
3. Masukkan URL: `http://localhost:8000/api/genres`
4. Tambahkan headers:
   - `Accept: application/json`
   - `Content-Type: application/json`
5. Di tab Body, pilih raw dan JSON
6. Masukkan data genre baru
7. Klik Send
8. Verifikasi response status 201 dan genre berhasil dibuat
9. Test validasi dengan data kosong atau invalid

---

### 8. Create Author Baru

Membuat data author baru ke database.

**Endpoint:** `POST /api/authors`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "name": "Tere Liye",
  "email": "tere.liye@example.com",
  "country": "Indonesia",
  "birth_date": "1979-05-21",
  "biography": "Penulis produktif Indonesia dengan berbagai karya bestseller"
}
```

**Validation Rules:**
- `name` (required, string, max:255)
- `email` (required, email, max:255, unique)
- `country` (required, string, max:100)
- `birth_date` (optional, date format: Y-m-d)
- `biography` (optional, string)

**Response Success (201):**
```json
{
  "success": true,
  "message": "Author berhasil dibuat",
  "data": {
    "name": "Tere Liye",
    "email": "tere.liye@example.com",
    "country": "Indonesia",
    "birth_date": "1979-05-21",
    "biography": "Penulis produktif Indonesia dengan berbagai karya bestseller",
    "updated_at": "2025-10-16T03:00:00.000000Z",
    "created_at": "2025-10-16T03:00:00.000000Z",
    "id": 6
  }
}
```

**Response Error (422) - Validation Failed:**
```json
{
  "message": "The email field is required.",
  "errors": {
    "email": [
      "The email field is required."
    ]
  }
}
```

**Response Error (422) - Email Already Exists:**
```json
{
  "message": "The email has already been taken.",
  "errors": {
    "email": [
      "The email has already been taken."
    ]
  }
}
```

**Testing dengan Postman:**
1. Buka Postman
2. Buat request baru dengan method POST
3. Masukkan URL: `http://localhost:8000/api/authors`
4. Tambahkan headers:
   - `Accept: application/json`
   - `Content-Type: application/json`
5. Di tab Body, pilih raw dan JSON
6. Masukkan data author baru
7. Klik Send
8. Verifikasi response status 201 dan author berhasil dibuat
9. Test validasi dengan:
   - Data kosong
   - Email tidak valid
   - Email yang sudah ada (duplicate)

---

## 🧪 Testing dengan Postman

### Import Collection

1. Buka Postman
2. Klik Import
3. Pilih file:
   - **Pertemuan 3**: `Pertemuan_3_Booksales_API_Postman_Collection.json`
   - **Pertemuan 4**: `Pertemuan_4_Booksales_API_Postman_Collection.json`
4. Collection akan otomatis ter-import dengan semua endpoint

### Menjalankan Tests

1. **Pastikan server Laravel berjalan:**
   ```bash
   php artisan serve
   ```

2. **Test Pertemuan 3 - Read Only Endpoints:**
   - GET / (Welcome)
   - GET /api/authors (All Authors)
   - GET /api/authors/1 (Author Detail)
   - GET /api/books (All Books)
   - GET /api/books/1 (Book Detail)

3. **Test Pertemuan 4 - Create & Read Endpoints:**
   - GET /api/genres (All Genres)
   - POST /api/genres (Create Genre)
   - POST /api/authors (Create Author)

4. **Test Error Handling:**
   - GET /api/authors/999 (Author tidak ditemukan)
   - GET /api/books/999 (Book tidak ditemukan)
   - POST /api/genres (tanpa data - validation error)
   - POST /api/authors (email duplicate - validation error)

### Expected Results

**Pertemuan 3:**
- ✅ Status Code 200 untuk request yang berhasil
- ✅ Status Code 404 untuk resource yang tidak ditemukan
- ✅ Response format JSON sesuai struktur yang ditentukan
- ✅ Data relasi (author-books) muncul dengan benar

**Pertemuan 4:**
- ✅ Status Code 200 untuk GET request yang berhasil
- ✅ Status Code 201 untuk POST request yang berhasil (Create)
- ✅ Status Code 422 untuk validation error
- ✅ Auto-generate slug jika tidak diisi
- ✅ Validasi email unique untuk author
- ✅ Response format JSON sesuai struktur

---

## 📊 Database Schema

### Genres Table (Pertemuan 4)
```sql
- id (bigint, primary key, auto increment)
- name (varchar 100, unique)
- slug (varchar 100, unique)
- description (text, nullable)
- created_at (timestamp)
- updated_at (timestamp)
```

### Authors Table
```sql
- id (bigint, primary key, auto increment)
- name (varchar 255)
- email (varchar 255, unique)
- country (varchar 100)
- birth_date (date, nullable)
- biography (text, nullable)
- created_at (timestamp)
- updated_at (timestamp)
```

### Books Table
```sql
- id (bigint, primary key, auto increment)
- title (varchar 255)
- isbn (varchar 20, unique)
- description (text, nullable)
- published_date (date)
- price (decimal 10,2)
- stock (integer)
- genre (varchar 100)
- author_id (bigint, foreign key → authors.id)
- created_at (timestamp)
- updated_at (timestamp)
```

### Relationships
- Author `hasMany` Books
- Book `belongsTo` Author

---

## 🔧 Cara Menjalankan Project

1. **Clone repository**
   ```bash
   git clone <repository-url>
   cd booksales-api
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi database** di file `.env`
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=booksales_api
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Migrate dan seed database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

6. **Jalankan server**
   ```bash
   php artisan serve
   ```

7. **Test API** dengan Postman atau browser
   ```
   http://localhost:8000/api/authors
   http://localhost:8000/api/books
   ```

---

## 📝 Catatan Penting

- Semua endpoint API menggunakan prefix `/api`
- Semua response dalam format JSON
- File views sudah dihapus karena fokus ke API
- Menggunakan Eloquent ORM untuk query database
- Relasi antar tabel sudah diterapkan (hasMany & belongsTo)
- Error handling untuk resource tidak ditemukan (404)

---

## 📦 File-file Penting untuk Dikumpulkan

### Pertemuan 3
1. **Controller:**
   - `app/Http/Controllers/AuthorController.php`
   - `app/Http/Controllers/BookController.php`

2. **Routes:**
   - `routes/api.php`

3. **Models:**
   - `app/Models/Author.php`
   - `app/Models/Book.php`

4. **Documentation:**
   - `README.md`
   - `api/API_DOCUMENTATION.md`
   - `api/Pertemuan_3_Booksales_API_Postman_Collection.json`

### Pertemuan 4
1. **Controller:**
   - `app/Http/Controllers/GenreController.php`
   - `app/Http/Controllers/AuthorController.php` (updated with store method)

2. **Models:**
   - `app/Models/Genre.php` (updated to Eloquent)

3. **Migration:**
   - `database/migrations/2025_10_16_024722_create_genres_table.php`

4. **Seeder:**
   - `database/seeders/GenreSeeder.php`

5. **Documentation:**
   - `README.md` (updated)
   - `api/API_DOCUMENTATION.md` (updated)
   - `api/Pertemuan_4_Booksales_API_Postman_Collection.json`

---

**Dibuat untuk memenuhi Tugas Pertemuan 3**  
**SIB Fullstack Web Developer - Nurul Fikri Academy**  
**Eko Muchamad Haryono - 0110223079**
