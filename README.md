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
- Status updates were reflected to students

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

##  Installation & Setup (Using VS Code + XAMPP)

###  Requirements

- XAMPP (Apache & MySQL)
- Composer installed
- PHP ≥ 8.1
- Visual Studio Code

---

###  Steps to Run

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
   
**Default Login Credentials** 
1. Admin	: Email: ewu.research.admin@ewu.edu	Password: EWU@Admin#Secure123
2. ProVC: Email:	ewu.research.provc@ewu.edu	Password :EWU@ProVC#Secure456
3. VC: Email:	ewu.research.vc@ewu.edu  Password:	EWU@VC#Secure789
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

**Screenshot**
![Image](https://github.com/user-attachments/assets/15361fa7-7a58-491d-892b-9df91629a561)
![Image](https://github.com/user-attachments/assets/b4e2119a-be37-47b9-9355-e4b4abb99863)
![Image](https://github.com/user-attachments/assets/c2982388-60dc-4d16-a340-4b5c6c645c6f)
![Image](https://github.com/user-attachments/assets/6b8970bc-8949-4954-9d28-73566c401660)
![Image](https://github.com/user-attachments/assets/f72e3c05-0d7b-40b2-ad25-71ac6ebe1004)
![Image](https://github.com/user-attachments/assets/8b58ed76-52c9-4290-80d7-bc82369b2e1c)
![Image](https://github.com/user-attachments/assets/7ca28861-6498-4dc7-b7eb-5bbf79f6a158)
![Image](https://github.com/user-attachments/assets/e3a754d2-f42d-495f-aef7-dbc87bed4471)
![Image](https://github.com/user-attachments/assets/cb2d72d0-fe12-4900-bca9-3df5bf74a0c3)
![Image](https://github.com/user-attachments/assets/176bcd96-050a-4a67-a73e-f34150266398)
![Image](https://github.com/user-attachments/assets/5db78d4a-04bf-4e98-9792-621f57bc5ee3)
![Image](https://github.com/user-attachments/assets/a6bc74d6-aca7-46f5-ba2e-dd99e060d3e9)
![Image](https://github.com/user-attachments/assets/d17992ca-2db1-46d0-9322-c794cd964e5f)
![Image](https://github.com/user-attachments/assets/612488a7-b4f8-43ad-a206-c0cabfd0ea25)
![Image](https://github.com/user-attachments/assets/558550e2-9341-456d-8b2a-0f23f3a6146a)
![Image](https://github.com/user-attachments/assets/725bb00a-8dfb-48a5-9250-e7bcf478bcf9)
![Image](https://github.com/user-attachments/assets/795ee9ed-6c38-4298-92b3-b26ed73cc71c)
![Image](https://github.com/user-attachments/assets/be30c4c3-b976-4513-bae3-c88c720076a7)
![Image](https://github.com/user-attachments/assets/860c408b-affb-456d-bba8-a0fe0b5783e7)



