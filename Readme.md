**EWU Research Paper Funding Hub**

A secure, Laravel-based web application designed to automate the research paper funding process at East
West University. The system provides role-based access and real-time status tracking for students, admin, Pro-VC, and VC.
**Project Summary**
This system replaces the paper-based workflow with a digital portal using Laravel and MySQL, enabling:
- Online application submission
- Multi-stage approval workflow
- Role-based dashboards
- Real-time status tracking
  
**Key Features**
  
Student:
- Register/login
- Submit applications
- Upload/download documents
- Track status
- View guidelines
  
Admin:
- View/manage students
- Verify documents & eligibility
- Forward to Pro-VC

Pro-VC:
- Review or forward to VC
  
VC:
- Final approve/reject

**Security**:

- Role-based access
- Laravel CSRF/session protection
- Encrypted passwords
**Technology Stack**
  
- Laravel (PHP)
- HTML, CSS, JS, Bootstrap
- Font Awesome
- MySQL + phpMyAdmin
- XAMPP (Apache, MySQL, PHP)
  
**Installation & Setup**
Requirements:
- XAMPP, Composer, PHP >= 8.1, VS Code
  
Steps:
1. Move project to C:/xampp/htdocs/ewu-research-funding
2. Open the folder in VS Code terminal and run:
 composer install
 copy .env.example .env
 php artisan key:generate
3. Create DB in phpMyAdmin: ewu_research_funding
4. Update `.env`:
 DB_DATABASE=ewu_research_funding
 DB_USERNAME=root
 DB_PASSWORD=
5. Run migration:
 php artisan migrate
6. Start server:
 php artisan serve
7. Visit: http://127.0.0.1:8000
   
**Default Login Credentials**
- Admin: ewu.research.admin@ewu.edu / EWU@Admin#Secure123
- ProVC: ewu.research.provc@ewu.edu / EWU@ProVC#Secure456
- VC: ewu.research.vc@ewu.edu / EWU@VC#Secure789
  
**Limitations**
- No email/SMS alerts
- No password reset
- No analytics
- Localhost only
- 
*Developed by*
- Afrida Tasnim 

Supervised by
Md. Arman Hossain, Lecturer, Dept. of CSE, EWU

License
Project for CSE479: Web Programming at East West University.

**ScreenShot**
![Image](https://github.com/user-attachments/assets/460d12d3-14d0-40e7-8ba4-e6be18784295)
![Image](https://github.com/user-attachments/assets/a1ba6477-f0a7-4308-af91-0812c715aa12)
![Image](https://github.com/user-attachments/assets/5b4ff551-8516-4d74-b9e8-202646c04e69)
![Image](https://github.com/user-attachments/assets/dedb0c9d-5ebd-42cd-afb7-7be5fc32f99b)
![Image](https://github.com/user-attachments/assets/2b74d040-b2d0-4666-bfab-ee14e1d64478)
![Image](https://github.com/user-attachments/assets/93ecc43a-da90-4741-82c7-bfc4805691f5)
![Image](https://github.com/user-attachments/assets/1f477772-9a75-4625-b5f5-54e45c8a7761)
![Image](https://github.com/user-attachments/assets/743da8b4-7b6c-4b85-a3d0-cddaf4195e67)
![Image](https://github.com/user-attachments/assets/02dfd12a-378b-4971-8527-c7f797d05ac2)
![Image](https://github.com/user-attachments/assets/ebe4d99c-5d11-49ca-a231-0c9c58f9bc21)
![Image](https://github.com/user-attachments/assets/1fe857a5-3adf-419d-968e-06cb2a0a8b7e)
![Image](https://github.com/user-attachments/assets/7ac053c5-c559-4a97-a5fa-30da3059060a)
![Image](https://github.com/user-attachments/assets/ff2294a8-f9f3-4d1d-b7ba-3bf3302d2574)
![Image](https://github.com/user-attachments/assets/1e7b09eb-565b-4345-8385-950791fddba6)
![Image](https://github.com/user-attachments/assets/f90d372a-c594-4ece-a51f-3b4d3e769144)
![Image](https://github.com/user-attachments/assets/d78dbb94-b181-41d0-8f9b-367a7897240d)
![Image](https://github.com/user-attachments/assets/03864e2f-0838-4178-8063-d0e75eaff9c7)
![Image](https://github.com/user-attachments/assets/828adf85-fc49-440c-beb3-477adb9c81e6)
![Image](https://github.com/user-attachments/assets/5857e99e-4d04-49ac-adab-88b06b4d0b94)
![Image](https://github.com/user-attachments/assets/fa697d9e-5b62-4c75-9bfc-66c9b754b716)
