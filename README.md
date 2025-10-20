# SIB Fullstack Web Developer - Tugas Pemrograman Framework Laravel & PHP - FWD

## Identitas Mahasiswa
- **NIM**: 0110223079
- **Nama**: Eko Muchamad Haryono
- **Aktivitas**: SIB Fullstack Web Developer (NFA)
- **Topik**: Framework Laravel - FWD
- **Group**: 2
- **Ruangan**: Zoom Mentoring Kelompok 02 Fullstack Web Developer - Gedung NF Academy Training Center
- **Prodi & Peminatan**: Teknik Informatika - Software Engineering
- **Semester**: 5

## Deskripsi Project
Repository ini berisi kumpulan tugas-tugas yang dikerjakan selama mengikuti program SIB (Studi Independen Bersertifikat) Fullstack Web Developer di Nurul Fikri Academy. Setiap tugas diorganisir menggunakan sistem branch untuk memudahkan pengelolaan dan review.

### Tujuan Repository:
- Mengumpulkan semua tugas SIB Fullstack Web Developer
- Dokumentasi progress pembelajaran
- Portfolio project selama program
- Referensi untuk pembelajaran berkelanjutan

## 🎯 Tugas Pertemuan 1: Sistem MVC Sederhana

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Topik**: Pemrograman PHP - Pertemuan 1
- **Group**: 2
- **Deadline**: Rabu, 15 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, MVC Pattern

**Deskripsi Tugas:**

1. Buatlah sistem MVC sederhana untuk menampilkan data array pada Model kemudian ditampilkan dengan view
2. Lakukan pada studi kasus tabel Genre dan Author pada dokumen Brief
3. Berikan masing-masing 5 data pada Model
4. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File Model Genre dan Author

**Implementasi MVC:**

**Model:**
- `Genre.php` - 5 data genre buku
- `Author.php` - 5 data penulis

**Controller:**
- `LibraryController.php` - Handle request genres() dan authors()

**View:**
- `layouts/app.blade.php` - Layout utama
- `genres/index.blade.php` - Tampilan daftar genre
- `authors/index.blade.php` - Tampilan daftar penulis

**Routes:**
- `/` - Redirect ke halaman genres
- `/genres` - Tampilkan daftar genre
- `/authors` - Tampilkan daftar penulis

## 🎯 Tugas Pertemuan 2: Migration dan Seeder

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Topik**: Framework Laravel - Migration dan Seeder
- **Group**: 2
- **Deadline**: Kamis, 16 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, MySQL, Migration, Seeder

**Deskripsi Tugas:**

1. Buatlah tabel Book dan Author menggunakan fitur Laravel Migration dengan mengikuti susunan dari Brief yang sudah tersedia
2. Berikan 5 data dummy yang dibuat menggunakan Laravel Seeder
3. Jangan lupa untuk mengatur file model, controller, routing, dan view agar data yang sudah dibuat dapat ditampilkan ke view
4. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File Migration dan Seeder Book dan Author

**Implementasi Migration & Seeder:**

**Migration:**
- `create_authors_table.php` - Struktur tabel authors
- `create_books_table.php` - Struktur tabel books dengan foreign key ke authors
  - Fields: title, isbn, description, published_date, price, stock, genre, **cover_photo**, author_id

**Seeder:**
- `AuthorSeeder.php` - 5 data dummy penulis
- `BookSeeder.php` - 5 data dummy buku dengan cover photo URL

**Model (Eloquent):**
- `Author.php` - Model Author dengan relasi hasMany books
- `Book.php` - Model Book dengan relasi belongsTo author

**Controller:**
- Update `LibraryController.php` - Gunakan database via Eloquent

**View:**
- Update views untuk menampilkan data dari database

## 🎯 Tugas Pertemuan 3: REST API

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Topik**: Framework Laravel - REST API
- **Group**: 2
- **Deadline**: Jumat, 17 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, REST API, Postman

**Deskripsi Tugas:**

1. Menggunakan API - Pindahkan semua routing yang sudah dibuat ke `route/api.php`
2. Atur ulang controller untuk menampilkan data dengan output JSON
3. Gunakan POSTMAN untuk melakukan testing aplikasi
4. Hapus file view yang sudah dibuat (pembelajaran fokus ke API, tidak membutuhkan view)
5. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File Controller Book dan Author

**Implementasi REST API:**

**API Routes (`routes/api.php`):**
```php
GET /api/authors          // Mendapatkan semua authors
GET /api/books            // Mendapatkan semua books
GET /api/authors/{id}     // Mendapatkan detail author beserta books
GET /api/books/{id}       // Mendapatkan detail book beserta author
```

**Controller (`LibraryController.php`):**
- Method `authors()` - Return JSON semua authors
- Method `books()` - Return JSON semua books dengan relasi author
- Method `authorDetail($id)` - Return JSON detail author beserta books-nya
- Method `bookDetail($id)` - Return JSON detail book beserta author-nya

**Response Format:**
```json
{
  "success": true,
  "message": "Data berhasil diambil",
  "data": [...]
}
```

**Testing dengan Postman:**

1. **GET All Authors**
   - URL: `http://localhost:8000/api/authors`
   - Method: GET
   - Expected: Status 200, JSON array berisi 5 authors

2. **GET All Books**
   - URL: `http://localhost:8000/api/books`
   - Method: GET
   - Expected: Status 200, JSON array berisi 5 books dengan data author

3. **GET Author Detail**
   - URL: `http://localhost:8000/api/authors/1`
   - Method: GET
   - Expected: Status 200, JSON object author dengan list books-nya

4. **GET Book Detail**
   - URL: `http://localhost:8000/api/books/1`
   - Method: GET
   - Expected: Status 200, JSON object book dengan data author

**Cara Menjalankan:**

```bash
# Jalankan development server
php artisan serve

# Akses API di browser atau Postman
http://localhost:8000/api/authors
http://localhost:8000/api/books
```

**Perubahan dari Tugas Sebelumnya:**
- ✅ Routes dipindahkan dari `web.php` ke `api.php`
- ✅ Controller diubah mengembalikan JSON response
- ✅ File views dihapus (genres, authors, books, layouts)
- ✅ Fokus ke REST API, tidak ada tampilan web

## 🎯 Tugas Pertemuan 4: Create Data API

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Topik**: Framework Laravel - Create & Read Data API
- **Group**: 2
- **Deadline**: Sabtu, 18 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, REST API, Postman

**Deskripsi Tugas:**

1. Buatlah fitur **Read all data** untuk tabel **genre** dan **author**
2. Buatlah fitur **Create data** untuk tabel **genre** dan **author**
3. Gunakan **POSTMAN** untuk melakukan testing aplikasi
4. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File Controller Genre dan Author

**Implementasi Fitur Create & Read:**

**API Routes (`routes/api.php`):**
```php
// Genres
GET  /api/genres          // Read all genres
POST /api/genres          // Create new genre

// Authors
GET  /api/authors         // Read all authors
POST /api/authors         // Create new author
GET  /api/authors/{id}    // Read author detail with books
```

**Controllers:**

**GenreController.php:**
- `index()` - GET all genres dari database
- `store()` - POST create genre baru dengan validasi

**AuthorController.php (Updated):**
- `index()` - GET all authors dari database
- `store()` - POST create author baru dengan validasi
- `show($id)` - GET detail author beserta books

**Database Schema:**

**Tabel Genres:**
```sql
- id (bigint, PK)
- name (varchar 255)
- slug (varchar 255, unique)
- description (text, nullable)
- created_at, updated_at
```

**Request & Response Format:**

**POST /api/genres (Create Genre):**
```json
// Request Body
{
  "name": "Science Fiction",
  "slug": "science-fiction",    // optional, auto-generated
  "description": "Cerita fiksi ilmiah"
}

// Response (201 Created)
{
  "success": true,
  "message": "Genre berhasil ditambahkan",
  "data": {
    "id": 6,
    "name": "Science Fiction",
    "slug": "science-fiction",
    "description": "Cerita fiksi ilmiah",
    "created_at": "2025-10-16T...",
    "updated_at": "2025-10-16T..."
  }
}
```

**POST /api/authors (Create Author):**
```json
// Request Body
{
  "name": "John Doe",
  "email": "john.doe@email.com",
  "country": "Amerika",
  "birth_date": "1980-05-15",    // optional
  "biography": "Penulis terkenal..."  // optional
}

// Response (201 Created)
{
  "success": true,
  "message": "Author berhasil ditambahkan",
  "data": {
    "id": 6,
    "name": "John Doe",
    ...
  }
}
```

**Validasi:**
- Genre: name (required), slug (unique), description (optional)
- Author: name (required), email (required, unique), country (required), birth_date & biography (optional)

**Testing dengan Postman:**

1. **GET /api/genres** - Ambil semua data genre
2. **POST /api/genres** - Tambah genre baru
3. **GET /api/authors** - Ambil semua data author
4. **POST /api/authors** - Tambah author baru

**Cara Menjalankan:**

```bash
# Migrasi database
php artisan migrate

# Seed data dummy
php artisan db:seed

# Jalankan server
php artisan serve

# Test di Postman
POST http://localhost:8000/api/genres
POST http://localhost:8000/api/authors
```

**Fitur Baru:**
- ✅ Tabel genres dengan migration & seeder
- ✅ GenreController dengan method index & store
- ✅ AuthorController ditambah method store
- ✅ Validasi input data dengan Laravel Validation
- ✅ Auto-generate slug untuk genre
- ✅ HTTP Status Code 201 untuk resource created

## 🎯 Tugas Pertemuan 5: Full CRUD API dengan apiResource

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Topik**: Framework Laravel - Full CRUD dengan apiResource
- **Group**: 2
- **Deadline**: Minggu, 19 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, REST API, apiResource Routing

**Deskripsi Tugas:**

1. Buatlah fitur **Show, Update, Destroy** data untuk tabel **Genre** dan **Author**
2. Atur validasi ketika data yang ingin dicari **tidak ditemukan** (404 Not Found)
3. Ubah kode `routes/api.php` dengan menggunakan **Route apiResource**
4. Gunakan **POSTMAN** untuk melakukan testing aplikasi
5. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File Controller Genre dan Author
   - File routes/api.php

**Implementasi Full CRUD dengan apiResource:**

**API Routes (`routes/api.php`):**
```php
// Menggunakan apiResource untuk auto-generate 5 routes CRUD
Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);

// Auto-generated routes:
// Genre:
// GET    /api/genres           -> index()   (Read all)
// POST   /api/genres           -> store()   (Create)
// GET    /api/genres/{id}      -> show()    (Read one)
// PUT    /api/genres/{id}      -> update()  (Update)
// DELETE /api/genres/{id}      -> destroy() (Delete)

// Author: (sama seperti di atas)
```

**Controllers dengan Full CRUD:**

**GenreController.php:**
- ✅ `index()` - GET all genres
- ✅ `store()` - POST create genre (validasi unique name)
- ✅ `show($id)` - GET genre by ID dengan validasi 404
- ✅ `update($id)` - PUT/PATCH update genre dengan validasi 404 & unique (exclude current)
- ✅ `destroy($id)` - DELETE genre dengan validasi 404

**AuthorController.php:**
- ✅ `index()` - GET all authors
- ✅ `store()` - POST create author (validasi unique email)
- ✅ `show($id)` - GET author by ID dengan books relation & validasi 404
- ✅ `update($id)` - PUT/PATCH update author dengan validasi 404 & unique email (exclude current)
- ✅ `destroy($id)` - DELETE author dengan cascade delete books & validasi 404

**Validasi 404 Not Found:**
```php
// Contoh di GenreController
public function show($id) {
    $genre = Genre::find($id);

    if (!$genre) {
        return response()->json([
            'success' => false,
            'message' => 'Genre tidak ditemukan'
        ], 404);
    }

    return response()->json([
        'success' => true,
        'message' => 'Detail genre',
        'data' => $genre
    ], 200);
}
```

**Request & Response Format:**

**GET /api/genres/{id} (Show Genre):**
```json
// Response Success (200)
{
  "success": true,
  "message": "Detail genre",
  "data": {
    "id": 1,
    "name": "Fiction",
    "slug": "fiction",
    ...
  }
}

// Response Error (404)
{
  "success": false,
  "message": "Genre tidak ditemukan"
}
```

**PUT /api/genres/{id} (Update Genre):**
```json
// Request Body
{
  "name": "Science Fiction"
}

// Response Success (200)
{
  "success": true,
  "message": "Genre berhasil diperbarui",
  "data": {
    "id": 1,
    "name": "Science Fiction",
    "slug": "science-fiction",
    ...
  }
}

// Response Error (404)
{
  "success": false,
  "message": "Genre tidak ditemukan"
}

// Response Error (422) - Validation
{
  "message": "The name has already been taken.",
  "errors": {
    "name": ["The name has already been taken."]
  }
}
```

**DELETE /api/genres/{id} (Delete Genre):**
```json
// Response Success (200)
{
  "success": true,
  "message": "Genre berhasil dihapus"
}

// Response Error (404)
{
  "success": false,
  "message": "Genre tidak ditemukan"
}
```

**Validasi Update dengan Exclude Current ID:**
```php
// Update Genre - unique name kecuali data sendiri
'name' => 'required|string|max:100|unique:genres,name,' . $id

// Update Author - unique email kecuali data sendiri
'email' => 'required|email|max:255|unique:authors,email,' . $id
```

**Testing dengan Postman:**

**Genre CRUD (10 test cases):**
1. GET /api/genres - Get all genres
2. POST /api/genres - Create new genre
3. GET /api/genres/1 - Show genre by ID
4. PUT /api/genres/1 - Update genre
5. DELETE /api/genres/6 - Delete genre
6. GET /api/genres/999 - Show genre not found (404)
7. PUT /api/genres/999 - Update genre not found (404)
8. DELETE /api/genres/999 - Delete genre not found (404)
9. POST /api/genres - Validation error (empty name)
10. POST /api/genres - Duplicate name error (422)

**Author CRUD (11 test cases):**
1. GET /api/authors - Get all authors
2. POST /api/authors - Create new author
3. GET /api/authors/1 - Show author with books
4. PUT /api/authors/1 - Update author
5. DELETE /api/authors/6 - Delete author
6. GET /api/authors/999 - Show author not found (404)
7. PUT /api/authors/999 - Update author not found (404)
8. DELETE /api/authors/999 - Delete author not found (404)
9. POST /api/authors - Validation error (missing fields)
10. POST /api/authors - Duplicate email error (422)
11. POST /api/authors - Invalid email format (422)

**Cara Menjalankan:**

```bash
# Jalankan server
php artisan serve

# Lihat semua routes
php artisan route:list --path=api

# Test di Postman dengan collection
# Import: Pertemuan_5_Booksales_API_Postman_Collection.json
```

**Fitur Baru Pertemuan 5:**
- ✅ Method show() untuk Genre dan Author dengan validasi 404
- ✅ Method update() untuk Genre dan Author dengan validasi 404 & unique (exclude current)
- ✅ Method destroy() untuk Genre dan Author dengan validasi 404
- ✅ Cascade delete untuk Author → Books relationship
- ✅ Route apiResource menggantikan individual routes
- ✅ HTTP Status Codes: 200 (Success), 404 (Not Found), 422 (Validation Error)
- ✅ Fresh() method untuk mendapatkan data ter-update setelah update()
- ✅ Postman Collection lengkap dengan 21 test cases

**Total API Endpoints:**
- Genre: 5 endpoints (index, store, show, update, destroy)
- Author: 5 endpoints (index, store, show, update, destroy)
- Books: 2 endpoints (index, show) - read only

**Total: 12 API Routes**


## 🎯 Tugas Pertemuan 6: Authentication & Authorization

**Identitas Tugas:**

- **Nama**: Eko Muchamad Haryono
- **NIM**: 0110223079
- **Kode**: FL-2024226
- **Topik**: Authentication & Authorization dengan Laravel Sanctum
- **Group**: 2
- **Deadline**: Rabu, 22 Oktober 2025, 23:59
- **Teknologi**: Laravel 12, PHP 8.2, Laravel Sanctum, Middleware, JWT

**Deskripsi Tugas:**

1. Pahami konsep middleware, lalu atur bagian routing
2. **Read All** dan **Show** pada Author dan Genre, dapat diakses untuk **semua orang**, bahkan yang belum melakukan autentikasi
3. **Create, Update, dan Destroy** hanya dapat diakses oleh **admin**
4. Gunakan POSTMAN untuk melakukan testing aplikasi
5. Push ke GitHub, kemudian cantumkan ke kantung tugas:
   - Link repository
   - File `routes/api.php`

### Persyaratan

#### Sistem Autentikasi:
- ✅ Registrasi user dengan role (admin/user)
- ✅ Login user dengan email & password
- ✅ Autentikasi berbasis token menggunakan Laravel Sanctum
- ✅ Logout user untuk mencabut token
- ✅ Mendapatkan informasi user yang sedang login

#### Aturan Otorisasi:
- ✅ **Akses Publik (Tanpa Autentikasi):**
  - GET `/api/genres` - Dapatkan semua genre
  - GET `/api/genres/{id}` - Lihat detail genre
  - GET `/api/authors` - Dapatkan semua author
  - GET `/api/authors/{id}` - Lihat detail author
  - GET `/api/books` - Dapatkan semua buku
  - GET `/api/books/{id}` - Lihat detail buku

- ✅ **Khusus Admin (Memerlukan auth:sanctum + admin middleware):**
  - POST `/api/genres` - Buat genre baru
  - PUT `/api/genres/{id}` - Update genre
  - DELETE `/api/genres/{id}` - Hapus genre
  - POST `/api/authors` - Buat author baru
  - PUT `/api/authors/{id}` - Update author
  - DELETE `/api/authors/{id}` - Hapus author

### Detail Implementasi

#### 1. Instalasi Laravel Sanctum
```bash
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate
```

#### 2. Peningkatan Model User
**File:** `app/Models/User.php`

**Perubahan:**
- Menambahkan trait `Laravel\Sanctum\HasApiTokens`
- Menambahkan field `role` ke array fillable
- Role enum: 'admin' atau 'user'

```php
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  // Field baru
    ];
}
```

#### 3. Migrasi Database
**File:** `database/migrations/0001_01_01_000000_create_users_table.php`

**Ditambahkan:**
```php
$table->enum('role', ['admin', 'user'])->default('user');
```

#### 4. Controller Autentikasi
**File:** `app/Http/Controllers/AuthController.php`

**Method:**
- `register(Request $request)` - Daftar user baru, kembalikan token
- `login(Request $request)` - Autentikasi user, kembalikan token
- `logout(Request $request)` - Cabut token saat ini
- `me(Request $request)` - Dapatkan info user yang sedang login

**Contoh Request/Response:**

**Register:**
```json
POST /api/register
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "password_confirmation": "password123",
    "role": "user"
}

Response:
{
    "success": true,
    "message": "User berhasil didaftarkan",
    "data": {
        "user": {...},
        "access_token": "1|abc...",
        "token_type": "Bearer"
    }
}
```

**Login:**
```json
POST /api/login
{
    "email": "admin@booksales.com",
    "password": "password123"
}

Response:
{
    "success": true,
    "message": "Login berhasil",
    "data": {
        "user": {
            "id": 1,
            "name": "Admin User",
            "email": "admin@booksales.com",
            "role": "admin"
        },
        "access_token": "2|def...",
        "token_type": "Bearer"
    }
}
```

#### 5. Middleware Admin
**File:** `app/Http/Middleware/AdminMiddleware.php`

**Tujuan:** Cek apakah user yang terautentikasi memiliki role 'admin'

```php
public function handle(Request $request, Closure $next): Response
{
    if (!$request->user() || $request->user()->role !== 'admin') {
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized. Admin access required.'
        ], 403);
    }

    return $next($request);
}
```

**Registered in:** `bootstrap/app.php`
```php
->withMiddleware(function (Middleware $middleware): void {
    $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ]);
})
```

#### 6. Konfigurasi Route API
**File:** `routes/api.php`

**Struktur:**
```php
// Route Autentikasi (Publik)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Route Autentikasi Terproteksi
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
});

// Route Publik (Tanpa Autentikasi)
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{genre}', [GenreController::class, 'show']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

// Route Khusus Admin
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    // Genres
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{genre}', [GenreController::class, 'update']);
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

    // Authors
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{author}', [AuthorController::class, 'update']);
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy']);
});
```

#### 7. User Seeder
**File:** `database/seeders/UserSeeder.php`

**Akun Uji Coba:**

| Role | Name | Email | Password |
|------|------|-------|----------|
| Admin | Admin User | admin@booksales.com | password123 |
| Admin | Eko Muchamad Haryono | eko@booksales.com | password123 |
| User | Regular User | user@booksales.com | password123 |
| User | Muhammad Akbar Maulana | akbar@booksales.com | password123 |

### Ringkasan Endpoint API

#### Endpoint Autentikasi
| Method | Endpoint | Auth | Deskripsi |
|--------|----------|------|-----------|
| POST | `/api/register` | Tidak | Daftar user baru |
| POST | `/api/login` | Tidak | Login user |
| POST | `/api/logout` | Ya | Logout (cabut token) |
| GET | `/api/me` | Ya | Dapatkan info user |

#### Endpoint Publik (Tanpa Auth)
| Method | Endpoint | Auth | Deskripsi |
|--------|----------|------|-----------|
| GET | `/api/genres` | Tidak | Dapatkan semua genre |
| GET | `/api/genres/{id}` | Tidak | Lihat detail genre |
| GET | `/api/authors` | Tidak | Dapatkan semua author |
| GET | `/api/authors/{id}` | Tidak | Lihat detail author |
| GET | `/api/books` | Tidak | Dapatkan semua buku |
| GET | `/api/books/{id}` | Tidak | Lihat detail buku |

#### Endpoint Khusus Admin
| Method | Endpoint | Auth | Deskripsi |
|--------|----------|------|-----------|
| POST | `/api/genres` | Admin | Buat genre |
| PUT | `/api/genres/{id}` | Admin | Update genre |
| DELETE | `/api/genres/{id}` | Admin | Hapus genre |
| POST | `/api/authors` | Admin | Buat author |
| PUT | `/api/authors/{id}` | Admin | Update author |
| DELETE | `/api/authors/{id}` | Admin | Hapus author |

### Testing dengan Postman

#### 1. Setup Environment Variables
Buat collection variables:
- `admin_token` - Otomatis diset setelah admin login
- `user_token` - Otomatis diset setelah user login

#### 2. Alur Testing

**Langkah 1: Login sebagai Admin**
```
POST http://localhost:8000/api/login
Body:
{
    "email": "admin@booksales.com",
    "password": "password123"
}

→ Copy access_token dari response
```

**Langkah 2: Test Endpoint Publik (Tanpa Token)**
```
GET http://localhost:8000/api/genres

→ Harus return 200 OK dengan list genre
```

**Langkah 3: Test Endpoint Admin dengan Token Admin**
```
POST http://localhost:8000/api/genres
Headers:
    Authorization: Bearer {admin_token}
Body:
{
    "name": "Fiksi Ilmiah"
}

→ Harus return 201 Created
```

**Langkah 4: Login sebagai User Biasa**
```
POST http://localhost:8000/api/login
Body:
{
    "email": "user@booksales.com",
    "password": "password123"
}

→ Copy access_token
```

**Langkah 5: Test Otorisasi Gagal**
```
POST http://localhost:8000/api/genres
Headers:
    Authorization: Bearer {user_token}
Body:
{
    "name": "Genre Test"
}

→ Harus return 403 Forbidden
→ Message: "Unauthorized. Admin access required."
```

**Langkah 6: Test Akses Tanpa Autentikasi**
```
POST http://localhost:8000/api/genres
Body:
{
    "name": "Test Genre"
}

→ Harus return 401 Unauthenticated
```

### Postman Collection

**File:** `api/Pertemuan_6_Booksales_API_Postman_Collection.json`

**Berisi:**
- 5 request autentikasi (Daftar, Login Admin, Login User, Me, Logout)
- 6 test endpoint publik (Genres, Authors, Books - List & Show)
- 6 test endpoint admin (Buat, Update, Hapus untuk Genres & Authors)
- 4 test kegagalan otorisasi (Tanpa token, Dengan token user)

**Total:** 21 request testing

**Import ke Postman:**
```bash
File → Import → Select Pertemuan_6_Booksales_API_Postman_Collection.json
```

### Fitur Baru di Pertemuan 6

#### 1. **Autentikasi Berbasis Token**
- Menggunakan Laravel Sanctum untuk API token
- Token disimpan di tabel `personal_access_tokens`
- Setiap login menghasilkan token baru, token lama dicabut

#### 2. **Role-Based Access Control (RBAC)**
- User memiliki role: 'admin' atau 'user'
- Admin dapat melakukan semua operasi CRUD
- User biasa hanya dapat membaca data publik

#### 3. **Proteksi Middleware**
- `auth:sanctum` - Verifikasi token valid
- `admin` - Verifikasi role admin
- Combined middleware untuk route khusus admin

#### 4. **Akses API Publik**
- Operasi Read (GET) bersifat publik
- Tidak perlu autentikasi untuk melihat data
- Bagus untuk API publik atau aplikasi mobile

#### 5. **Penanganan Error**
- 401 Unauthorized - Tidak ada token atau token tidak valid
- 403 Forbidden - Token valid tapi tidak punya izin
- 422 Unprocessable Entity - Error validasi

### Migrasi & Seeding

```bash
# Migrasi fresh dengan semua seeder
php artisan migrate:fresh --seed

# Membuat:
# - 4 users (2 admin, 2 user biasa)
# - 5 genres
# - 5 authors
# - 5 books
```

### Perintah Verifikasi

```bash
# Cek routes
php artisan route:list --path=api

# Menampilkan 16 routes:
# - 4 route auth
# - 6 route publik
# - 6 route admin
```

### File yang Dimodifikasi/Dibuat di Pertemuan 6

**File Baru:**
- `app/Http/Controllers/AuthController.php`
- `app/Http/Middleware/AdminMiddleware.php`
- `database/seeders/UserSeeder.php`
- `database/migrations/2025_10_20_051148_create_personal_access_tokens_table.php`
- `config/sanctum.php`
- `api/Pertemuan_6_Booksales_API_Postman_Collection.json`

**File yang Dimodifikasi:**
- `app/Models/User.php` - Ditambahkan trait HasApiTokens, field role
- `database/migrations/0001_01_01_000000_create_users_table.php` - Ditambahkan kolom role
- `bootstrap/app.php` - Registrasi AdminMiddleware
- `routes/api.php` - Restrukturisasi lengkap dengan proteksi middleware
- `database/seeders/DatabaseSeeder.php` - Ditambahkan UserSeeder
- `composer.json` - Ditambahkan dependency laravel/sanctum

### Best Practice Keamanan yang Diimplementasikan

✅ Password hashing dengan bcrypt
✅ Autentikasi berbasis token
✅ Otorisasi middleware
✅ Role-based access control
✅ Validasi input
✅ Proteksi CSRF (Sanctum)
✅ Rate limiting (default Laravel)
✅ Sanitasi pesan error

### Hasil Testing

**✅ Semua Test Berhasil:**
- ✅ Registrasi user berhasil
- ✅ Login admin mengembalikan token
- ✅ Login user biasa mengembalikan token
- ✅ Endpoint publik dapat diakses tanpa auth
- ✅ Endpoint admin dapat diakses dengan token admin
- ✅ Endpoint admin diblokir untuk user biasa (403)
- ✅ Endpoint admin diblokir tanpa token (401)
- ✅ Pencabutan token saat logout bekerja
- ✅ Endpoint get user info bekerja

---


---
*Repository dibuat untuk program SIB Fullstack Web Developer (NFA) - Batch 2025*


---

> Dibuat untuk memenuhi tugas course Pemrograman PHP & Laravel  SIB NF Academy.


---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

---

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
