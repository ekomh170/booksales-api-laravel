# 📚 Booksales API Documentation

## Identitas Tugas

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Kode Tugas**: FL-2024226
- **Pertemuan**: 3 (15 Oktober 2025)
- **Topik**: REST API dengan Laravel
- **Group**: 2
- **Deadline**: Jumat, 17 Oktober 2025, 23:59

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

## 🧪 Testing dengan Postman

### Import Collection

1. Buka Postman
2. Klik Import
3. Pilih file `Booksales_API_Postman_Collection.json`
4. Collection akan otomatis ter-import dengan semua endpoint

### Menjalankan Tests

1. **Pastikan server Laravel berjalan:**
   ```bash
   php artisan serve
   ```

2. **Test semua endpoint secara berurutan:**
   - GET / (Welcome)
   - GET /api/authors (All Authors)
   - GET /api/authors/1 (Author Detail)
   - GET /api/books (All Books)
   - GET /api/books/1 (Book Detail)

3. **Test Error Handling:**
   - GET /api/authors/999 (Author tidak ditemukan)
   - GET /api/books/999 (Book tidak ditemukan)

### Expected Results

- ✅ Status Code 200 untuk request yang berhasil
- ✅ Status Code 404 untuk resource yang tidak ditemukan
- ✅ Response format JSON sesuai struktur yang ditentukan
- ✅ Data relasi (author-books) muncul dengan benar

---

## 📊 Database Schema

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

1. **Controller:**
   - `app/Http/Controllers/LibraryController.php`

2. **Routes:**
   - `routes/api.php`

3. **Models:**
   - `app/Models/Author.php`
   - `app/Models/Book.php`

4. **Documentation:**
   - `README.md`
   - `API_DOCUMENTATION.md`
   - `Booksales_API_Postman_Collection.json`

---

**Dibuat untuk memenuhi Tugas Pertemuan 3**  
**SIB Fullstack Web Developer - Nurul Fikri Academy**  
**Eko Muchamad Haryono - 0110223079**
