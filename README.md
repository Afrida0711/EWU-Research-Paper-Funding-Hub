# 🎓 EWU Research Paper Funding Hub

A secure, Laravel-based web application designed to automate the research paper funding process at **East West University**. The system provides role-based access and real-time status tracking for students, admin, Pro-VC, and VC — replacing the outdated manual workflow.

---

## 📌 Project Summary

The traditional paper-based funding application process at EWU was time-consuming, error-prone, and lacked transparency. This system replaces it with a digital portal using the **Laravel PHP framework** and **MySQL**, enabling:

- Online submission of funding applications  
- Multi-stage approval workflow  
- Role-based dashboards for different user types  
- Real-time status tracking and document management  

---

## 🚀 Key Features

### 🧑‍🎓 Student
- Register and log in
- Submit research paper funding applications
- Upload/download documents
- Track application status in real time
- View funding guidelines

### 🛡️ Admin
- View and manage registered students
- Verify eligibility and documents
- Forward applications to Pro-VC

### 🧑‍💼 Pro-VC
- Review applications
- Reject with remarks or forward to VC

### 🎓 VC
- Give final approval or rejection
- Status updates reflected to students

### 🔐 Security
- Role-based access (middleware)
- Laravel session & CSRF protection
- Encrypted password storage
- Upload validation (file type & size)

---

## 🛠️ Technology Stack

| Layer        | Technology                  |
|--------------|-----------------------------|
| Framework    | Laravel (PHP 10.x)          |
| Frontend     | HTML5, CSS3, Bootstrap, JS  |
| Icons        | Font Awesome                |
| Database     | MySQL + phpMyAdmin          |
| Server       | XAMPP (Apache, MySQL, PHP)  |
| Auth         | Laravel Auth + Middleware   |

---

## ⚙️ Installation & Setup (Using VS Code + XAMPP)

### 🔧 Requirements

- XAMPP (Apache & MySQL)
- Composer installed
- PHP ≥ 8.1
- Visual Studio Code

---

### 🧪 Steps to Run

1. **Move the project** to: C:\xampp\htdocs\ewu-research-funding

2. **Open the folder in VS Code** then

3. **In VS Code terminal**, run:
composer install
copy .env.example .env
php artisan key: generate

4. **Create a MySQL database named**: ewu_research_funding
5. **Update .env file** :
DB_DATABASE=ewu_research_funding
DB_USERNAME=root
DB_PASSWORD=
6.**Run migrations**: php artisan migrate
7. **Start the Laravel server**: php artisan serve
8. **Access the system in your browser**: http://127.0.0.1:8000
🔐 Default Login Credentials
Admin	: Email: ewu.research.admin@ewu.edu	Password: EWU@Admin#Secure123
ProVC: Email:	ewu.research.provc@ewu.edu	Password :EWU@ProVC#Secure456
VC: Email:	ewu.research.vc@ewu.edu  Password:	EWU@VC#Secure789
*Students can register manually using the registration page.*
**Limitations**
1. No email or SMS notifications

2. No password reset/recovery feature

3. No analytics or reporting dashboard

4. Localhost-only deployment

5. Limited file type/size validation

*Developed by Afrida Tasnim*

Supervised by
Md. Arman Hossain
Lecturer
Department of Computer Science & Engineering
East West University

**License**
This project was developed as part of the CSE479: Web Programming course—all rights reserved by the authors and East West University.





