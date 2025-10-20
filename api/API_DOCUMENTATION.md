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

### Pertemuan 5
- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Pertemuan**: 5 (17 Oktober 2025)
- **Topik**: CRUD API - Show, Update, Destroy dengan apiResource
- **Group**: 2
- **Deadline**: Senin, 20 Oktober 2025, 23:59

### Pertemuan 6
- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Pertemuan**: 6 (20 Oktober 2025)
- **Topik**: Authentication & Authorization dengan Laravel Sanctum
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
      "cover_photo": "https://images.tokopedia.net/img/cache/700/product-1/2020/8/14/batch-upload/batch-upload_0f3c3f1e-dd25-4e5a-9a5c-e7e7b7d9e0d9_700_700.jpg",
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
    "cover_photo": "https://images.tokopedia.net/img/cache/700/product-1/2020/8/14/batch-upload/batch-upload_0f3c3f1e-dd25-4e5a-9a5c-e7e7b7d9e0d9_700_700.jpg",
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

### 9. Show Genre by ID

Mengambil detail genre berdasarkan ID.

**Endpoint:** `GET /api/genres/{id}`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Detail genre",
  "data": {
    "id": 1,
    "name": "Fiction",
    "slug": "fiction",
    "created_at": "2025-10-15T10:00:00.000000Z",
    "updated_at": "2025-10-15T10:00:00.000000Z"
  }
}
```

**Response Error (404) - Genre Not Found:**
```json
{
  "success": false,
  "message": "Genre tidak ditemukan"
}
```

---

### 10. Update Genre

Memperbarui data genre berdasarkan ID.

**Endpoint:** `PUT /api/genres/{id}` atau `PATCH /api/genres/{id}`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "name": "Science Fiction"
}
```

**Validation Rules:**
- `name` (required, string, max:100, unique - kecuali untuk data yang sedang diupdate)

**Response Success (200):**
```json
{
  "success": true,
  "message": "Genre berhasil diperbarui",
  "data": {
    "id": 1,
    "name": "Science Fiction",
    "slug": "science-fiction",
    "created_at": "2025-10-15T10:00:00.000000Z",
    "updated_at": "2025-10-16T05:30:00.000000Z"
  }
}
```

**Response Error (404) - Genre Not Found:**
```json
{
  "success": false,
  "message": "Genre tidak ditemukan"
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

**Response Error (422) - Duplicate Name:**
```json
{
  "message": "The name has already been taken.",
  "errors": {
    "name": [
      "The name has already been taken."
    ]
  }
}
```

---

### 11. Delete Genre

Menghapus genre berdasarkan ID.

**Endpoint:** `DELETE /api/genres/{id}`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Genre berhasil dihapus"
}
```

**Response Error (404) - Genre Not Found:**
```json
{
  "success": false,
  "message": "Genre tidak ditemukan"
}
```

---

### 12. Show Author by ID

Mengambil detail author beserta relasi buku-bukunya berdasarkan ID.

**Endpoint:** `GET /api/authors/{id}`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Detail author",
  "data": {
    "id": 1,
    "name": "J.K. Rowling",
    "email": "jk.rowling@example.com",
    "country": "United Kingdom",
    "birth_date": "1965-07-31",
    "biography": "British author, best known for the Harry Potter series",
    "created_at": "2025-10-14T10:00:00.000000Z",
    "updated_at": "2025-10-14T10:00:00.000000Z",
    "books": [
      {
        "id": 1,
        "title": "Harry Potter and the Philosopher's Stone",
        "isbn": "978-0-7475-3269-9",
        "publication_year": 1997,
        "price": 350000,
        "stock": 25,
        "genre": "Fantasy",
        "author_id": 1,
        "cover_photo": "https://images-na.ssl-images-amazon.com/images/I/81YOuOGFCJL.jpg",
        "created_at": "2025-10-14T10:00:00.000000Z",
        "updated_at": "2025-10-14T10:00:00.000000Z"
      }
    ]
  }
}
```

**Response Error (404) - Author Not Found:**
```json
{
  "success": false,
  "message": "Author tidak ditemukan"
}
```

---

### 13. Update Author

Memperbarui data author berdasarkan ID.

**Endpoint:** `PUT /api/authors/{id}` atau `PATCH /api/authors/{id}`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "name": "Joanne Rowling",
  "email": "joanne.rowling@example.com",
  "country": "United Kingdom",
  "birth_date": "1965-07-31",
  "biography": "British author, philanthropist, and creator of the Harry Potter series"
}
```

**Validation Rules:**
- `name` (required, string, max:255)
- `email` (required, email, max:255, unique - kecuali untuk data yang sedang diupdate)
- `country` (required, string, max:100)
- `birth_date` (optional, date format: Y-m-d)
- `biography` (optional, string)

**Response Success (200):**
```json
{
  "success": true,
  "message": "Author berhasil diperbarui",
  "data": {
    "id": 1,
    "name": "Joanne Rowling",
    "email": "joanne.rowling@example.com",
    "country": "United Kingdom",
    "birth_date": "1965-07-31",
    "biography": "British author, philanthropist, and creator of the Harry Potter series",
    "created_at": "2025-10-14T10:00:00.000000Z",
    "updated_at": "2025-10-16T06:00:00.000000Z"
  }
}
```

**Response Error (404) - Author Not Found:**
```json
{
  "success": false,
  "message": "Author tidak ditemukan"
}
```

**Response Error (422) - Validation Failed:**
```json
{
  "message": "The email field must be a valid email address.",
  "errors": {
    "email": [
      "The email field must be a valid email address."
    ]
  }
}
```

**Response Error (422) - Duplicate Email:**
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

---

### 14. Delete Author

Menghapus author berdasarkan ID.

**Endpoint:** `DELETE /api/authors/{id}`

**Headers:**
```
Accept: application/json
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Author berhasil dihapus"
}
```

**Response Error (404) - Author Not Found:**
```json
{
  "success": false,
  "message": "Author tidak ditemukan"
}
```

**Note:** Jika author memiliki relasi dengan buku, maka buku-buku tersebut juga akan terhapus (cascade delete) karena foreign key constraint.

---

## 🔐 Authentication & Authorization (Pertemuan 6)

### Konsep Dasar

**Authentication (Autentikasi):**
- Proses memverifikasi identitas pengguna
- Menggunakan Laravel Sanctum untuk API token authentication
- User login dengan email & password, mendapatkan token

**Authorization (Otorisasi):**
- Proses menentukan hak akses pengguna
- Menggunakan role-based access control (admin vs user)
- Admin memiliki akses penuh, user biasa hanya bisa read

### 15. Register User Baru

Mendaftarkan user baru ke sistem.

**Endpoint:** `POST /api/register`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "name": "User Test Baru",
  "email": "usertest@booksales.com",
  "password": "password123",
  "password_confirmation": "password123"
}
```

**Validation Rules:**
- `name` (required, string, max:255)
- `email` (required, email, unique)
- `password` (required, string, min:8, confirmed)

**Response Success (201):**
```json
{
  "success": true,
  "message": "User berhasil didaftarkan",
  "data": {
    "user": {
      "name": "User Test Baru",
      "email": "usertest@booksales.com",
      "role": "user",
      "updated_at": "2025-10-20T10:00:00.000000Z",
      "created_at": "2025-10-20T10:00:00.000000Z",
      "id": 5
    },
    "access_token": "3|laravel_sanctum_abcdefghijklmnopqrstuvwxyz123456",
    "token_type": "Bearer"
  }
}
```

**Response Error (422) - Validation Failed:**
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

---

### 16. Login User

Login untuk mendapatkan access token.

**Endpoint:** `POST /api/login`

**Headers:**
```
Accept: application/json
Content-Type: application/json
```

**Request Body:**
```json
{
  "email": "admin@booksales.com",
  "password": "password123"
}
```

**Validation Rules:**
- `email` (required, email)
- `password` (required, string)

**Response Success (200):**
```json
{
  "success": true,
  "message": "Login berhasil",
  "data": {
    "user": {
      "id": 1,
      "name": "Admin User",
      "email": "admin@booksales.com",
      "role": "admin",
      "email_verified_at": null,
      "created_at": "2025-10-20T10:00:00.000000Z",
      "updated_at": "2025-10-20T10:00:00.000000Z"
    },
    "access_token": "1|laravel_sanctum_abcdefghijklmnopqrstuvwxyz123456",
    "token_type": "Bearer"
  }
}
```

**Response Error (401) - Invalid Credentials:**
```json
{
  "success": false,
  "message": "Kredensial yang diberikan tidak sesuai"
}
```

---

### 17. Logout User

Logout dan hapus token saat ini.

**Endpoint:** `POST /api/logout`

**Headers:**
```
Accept: application/json
Authorization: Bearer {token}
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Logout berhasil"
}
```

**Response Error (401) - Unauthenticated:**
```json
{
  "message": "Unauthenticated."
}
```

---

### 18. Get User Info

Mendapatkan informasi user yang sedang login.

**Endpoint:** `GET /api/me`

**Headers:**
```
Accept: application/json
Authorization: Bearer {token}
```

**Response Success (200):**
```json
{
  "success": true,
  "message": "Data user berhasil diambil",
  "data": {
    "id": 1,
    "name": "Admin User",
    "email": "admin@booksales.com",
    "role": "admin",
    "email_verified_at": null,
    "created_at": "2025-10-20T10:00:00.000000Z",
    "updated_at": "2025-10-20T10:00:00.000000Z"
  }
}
```

**Response Error (401) - Unauthenticated:**
```json
{
  "message": "Unauthenticated."
}
```

---

## 🔒 Protected Endpoints (Pertemuan 6)

### Akses Publik (Tanpa Autentikasi)

Endpoint berikut dapat diakses tanpa login:

**Genre:**
- ✅ `GET /api/genres` - Dapatkan semua genre
- ✅ `GET /api/genres/{id}` - Dapatkan genre by ID

**Author:**
- ✅ `GET /api/authors` - Dapatkan semua author
- ✅ `GET /api/authors/{id}` - Dapatkan author by ID

**Books:**
- ✅ `GET /api/books` - Dapatkan semua buku
- ✅ `GET /api/books/{id}` - Dapatkan buku by ID

### Akses Khusus Admin (Perlu Token + Role Admin)

Endpoint berikut hanya bisa diakses oleh user dengan role `admin`:

**Genre:**
- 🔒 `POST /api/genres` - Buat genre baru
- 🔒 `PUT/PATCH /api/genres/{id}` - Update genre
- 🔒 `DELETE /api/genres/{id}` - Hapus genre

**Author:**
- 🔒 `POST /api/authors` - Buat author baru
- 🔒 `PUT/PATCH /api/authors/{id}` - Update author
- 🔒 `DELETE /api/authors/{id}` - Hapus author

**Response Error (401) - Tanpa Token:**
```json
{
  "message": "Unauthenticated."
}
```

**Response Error (403) - User Biasa Coba Akses Endpoint Admin:**
```json
{
  "success": false,
  "message": "Unauthorized. Admin access required."
}
```

---

## 👥 Test Accounts (Pertemuan 6)

### Admin Accounts
```
Email: admin@booksales.com
Password: password123
Role: admin

Email: eko@booksales.com
Password: password123
Role: admin
```

### User Accounts (Tidak Bisa Akses Endpoint Admin)
```
Email: user@booksales.com
Password: password123
Role: user

Email: john@booksales.com
Password: password123
Role: user
```

---

## 🧪 Testing dengan Postman

### Import Collection

1. Buka Postman
2. Klik Import
3. Pilih file:
   - **Pertemuan 3**: `Pertemuan_3_Booksales_API_Postman_Collection.json`
   - **Pertemuan 4**: `Pertemuan_4_Booksales_API_Postman_Collection.json`
   - **Pertemuan 5**: `Pertemuan_5_Booksales_API_Postman_Collection.json`
   - **Pertemuan 6**: `Pertemuan_6_Booksales_API_Postman_Collection.json`
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

4. **Test Pertemuan 5 - Full CRUD Endpoints:**

   **Genre CRUD:**
   - GET /api/genres (Index - All Genres)
   - POST /api/genres (Store - Create Genre)
   - GET /api/genres/{id} (Show - Genre Detail)
   - PUT/PATCH /api/genres/{id} (Update - Edit Genre)
   - DELETE /api/genres/{id} (Destroy - Delete Genre)

   **Author CRUD:**
   - GET /api/authors (Index - All Authors)
   - POST /api/authors (Store - Create Author)
   - GET /api/authors/{id} (Show - Author Detail with Books)
   - PUT/PATCH /api/authors/{id} (Update - Edit Author)
   - DELETE /api/authors/{id} (Destroy - Delete Author)

5. **Test Pertemuan 6 - Authentication & Authorization:**

   **Authentication:**
   - POST /api/register (Daftar user baru)
   - POST /api/login (Login sebagai admin: admin@booksales.com)
   - POST /api/login (Login sebagai user: user@booksales.com)
   - GET /api/me (Dapatkan info user saat ini - perlu token)
   - POST /api/logout (Logout - perlu token)

   **Public Endpoints (Tanpa Token):**
   - GET /api/genres (Dapatkan semua genre - akses publik)
   - GET /api/genres/{id} (Dapatkan genre by ID - akses publik)
   - GET /api/authors (Dapatkan semua author - akses publik)
   - GET /api/authors/{id} (Dapatkan author by ID - akses publik)

   **Admin Only Endpoints (Perlu Token Admin):**
   - POST /api/genres (Buat genre baru - hanya admin)
   - PUT /api/genres/{id} (Update genre - hanya admin)
   - DELETE /api/genres/{id} (Hapus genre - hanya admin)
   - POST /api/authors (Buat author baru - hanya admin)
   - PUT /api/authors/{id} (Update author - hanya admin)
   - DELETE /api/authors/{id} (Hapus author - hanya admin)

   **Authorization Tests (Harus Gagal):**
   - POST /api/genres (Tanpa token - harus 401 Unauthenticated)
   - POST /api/genres (Dengan token user biasa - harus 403 Unauthorized)
   - DELETE /api/authors/{id} (Tanpa token - harus 401 Unauthenticated)
   - DELETE /api/authors/{id} (Dengan token user biasa - harus 403 Unauthorized)

6. **Test Error Handling:**
   - GET /api/authors/999 (Author tidak ditemukan - 404)
   - GET /api/books/999 (Book tidak ditemukan - 404)
   - GET /api/genres/999 (Genre tidak ditemukan - 404)
   - POST /api/genres (tanpa data - validation error 422)
   - POST /api/authors (email duplicate - validation error 422)
   - PUT /api/genres/999 (update genre tidak ada - 404)
   - PUT /api/authors/999 (update author tidak ada - 404)
   - DELETE /api/genres/999 (delete genre tidak ada - 404)
   - DELETE /api/authors/999 (delete author tidak ada - 404)
   - POST /api/login (kredensial salah - 401)
   - POST /api/register (email sudah terdaftar - 422)

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

**Pertemuan 6:**
- ✅ Status Code 201 untuk register berhasil
- ✅ Status Code 200 untuk login berhasil
- ✅ Status Code 401 untuk kredensial salah
- ✅ Status Code 401 untuk endpoint protected tanpa token
- ✅ Status Code 403 untuk user biasa akses endpoint admin
- ✅ Token authentication dengan Bearer token
- ✅ Role-based authorization (admin vs user)
- ✅ Public endpoints dapat diakses tanpa token
- ✅ Admin endpoints hanya bisa diakses dengan token admin

---

## 📊 Database Schema

### Users Table (Pertemuan 6)
```sql
- id (bigint, primary key, auto increment)
- name (varchar 255)
- email (varchar 255, unique)
- email_verified_at (timestamp, nullable)
- password (varchar 255)
- role (enum: 'admin', 'user', default: 'user')
- remember_token (varchar 100, nullable)
- created_at (timestamp)
- updated_at (timestamp)
```

### Personal Access Tokens Table (Laravel Sanctum)
```sql
- id (bigint, primary key, auto increment)
- tokenable_type (varchar 255)
- tokenable_id (bigint)
- name (varchar 255)
- token (varchar 64, unique)
- abilities (text, nullable)
- last_used_at (timestamp, nullable)
- expires_at (timestamp, nullable)
- created_at (timestamp)
- updated_at (timestamp)
```

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
- cover_photo (varchar 255, nullable)
- author_id (bigint, foreign key → authors.id)
- created_at (timestamp)
- updated_at (timestamp)
```

### Relationships
- Author `hasMany` Books
- Book `belongsTo` Author
- User `hasMany` PersonalAccessTokens (Sanctum)

---

## 🔐 Security & Authentication Flow (Pertemuan 6)

### 1. Registrasi User
```
POST /api/register
→ Validasi input
→ Hash password dengan bcrypt
→ Simpan user dengan role 'user' (default)
→ Generate API token
→ Return user + token
```

### 2. Login User
```
POST /api/login
→ Validasi email & password
→ Cek kredensial dengan Hash::check()
→ Generate API token (Sanctum)
→ Return user + token
```

### 3. Menggunakan Token untuk Request
```
Headers:
Authorization: Bearer {token}

→ Laravel Sanctum verify token
→ auth:sanctum middleware check
→ Jika valid, lanjut ke controller
→ Jika tidak valid, return 401
```

### 4. Role-Based Authorization
```
→ Request masuk dengan token valid
→ auth:sanctum middleware pass
→ admin middleware check role
→ Jika role = 'admin', lanjut ke controller
→ Jika role = 'user', return 403
```

### 5. Logout User
```
POST /api/logout
→ Delete current access token
→ User harus login ulang untuk akses protected endpoints
```

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

### Pertemuan 6
1. **Controller:**
   - `app/Http/Controllers/AuthController.php` (register, login, logout, me)

2. **Middleware:**
   - `app/Http/Middleware/AdminMiddleware.php` (role-based authorization)

3. **Models:**
   - `app/Models/User.php` (updated with HasApiTokens trait, role fillable)

4. **Migration:**
   - `database/migrations/0001_01_01_000000_create_users_table.php` (updated with role column)
   - `database/migrations/xxxx_create_personal_access_tokens_table.php` (Sanctum)

5. **Seeder:**
   - `database/seeders/UserSeeder.php` (4 test users: 2 admin, 2 user)

6. **Routes:**
   - `routes/api.php` (updated with auth routes + middleware protection)

7. **Config:**
   - `config/sanctum.php` (Laravel Sanctum configuration)
   - `bootstrap/app.php` (AdminMiddleware registration)

8. **Dependencies:**
   - `composer.json` (updated with laravel/sanctum v4.2.0)

9. **Documentation:**
   - `README.md` (updated with Pertemuan 6 section)
   - `api/API_DOCUMENTATION.md` (updated with authentication endpoints)
   - `api/Pertemuan_6_Booksales_API_Postman_Collection.json`

---

**Dibuat untuk memenuhi Tugas Pertemuan 3 - Pertemuan 6**
**SIB Fullstack Web Developer - Nurul Fikri Academy**
**Eko Muchamad Haryono - 0110223079**
