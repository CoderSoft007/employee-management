# Employee Management System (Laravel 11)

A small **Employee Management System** built with Laravel 11 to demonstrate database design, Eloquent ORM, middleware, validation, RESTful APIs, queued jobs, and authentication.

---

## 🚀 Features

- Departments and Employees with one-to-many relationship  
- CRUD APIs with validation  
- Admin-only routes protected by custom middleware  
- Sanctum-based authentication  
- Queued job to log welcome message when employee is created  
- Paginated and filterable employee listing  
- Beautiful API responses using Laravel Resources  
- Postman collection and environment included

---

## 🛠️ Installation Guide

### 1. Clone the Repository
```bash
git clone https://github.com/jeet-developer/employee-management.git
cd employee-management
```

### 2. Install Dependencies
```bash
composer install
```

### 3. Setup Environment
Copy `.env.example` to `.env` and update credentials:
```bash
cp .env.example .env
```

Update the following:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employee_management
DB_USERNAME=root
DB_PASSWORD=

QUEUE_CONNECTION=database
```

### 4. Generate App Key
```bash
php artisan key:generate
```

### 5. Run Migrations and Seeders
```bash
php artisan migrate --seed
```

### 6. Setup Queue
```bash
php artisan queue:table
php artisan migrate
php artisan queue:work
```

### 7. Serve the Application
```bash
php artisan serve
```

## 📡 API Endpoints

| Action | Method | Endpoint | Auth | Notes |
|--------|---------|-----------|-------|-------|
| List Departments | GET | `/api/departments` | No | View all departments |
| Create Department | POST | `/api/departments` | Admin | Create new department |
| List Employees | GET | `/api/employees` | No | Paginated with filtering |
| Create Employee | POST | `/api/employees` | Admin | Creates employee + dispatch job |
| Delete Employee | DELETE | `/api/employees/{id}` | Admin | Soft deletes employee |

---

## 🧠 Filtering & Pagination
Employees list can be filtered using query parameters:
```
GET /api/employees?department_id=1&name=John&page=2
```

---

## 📬 Queued Job
When a new employee is created, a queued job logs a welcome message:
```
[info] Welcome email queued for John Doe
```

---

## 📘 Postman Collection
The folder **api_collection/** includes:
- `EmployeeManagement.postman_collection.json`
- `EmployeeManagement.postman_environment.json`

Import these into Postman to test the APIs.

---

## 🧾 License
This project is open-source under the [MIT License](LICENSE).

---

**Developed by:** *Chiranjit Kumar Ghosh - 8981780279*  
**Framework:** Laravel 11
