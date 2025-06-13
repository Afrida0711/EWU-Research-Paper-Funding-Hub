##EWU Research Paper Funding Hub
A secure, Laravel-based web application designed to automate the research paper funding process at East
West University.
The system provides role-based access and real-time status tracking for students, admin, Pro-VC, and VC.
Project Summary
This system replaces the paper-based workflow with a digital portal using Laravel and MySQL, enabling:
- Online application submission
- Multi-stage approval workflow
- Role-based dashboards
- Real-time status tracking
Key Features
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
Security:
- Role-based access
- Laravel CSRF/session protection
- Encrypted passwords
Technology Stack
- Laravel (PHP)
- HTML, CSS, JS, Bootstrap
- Font Awesome
- MySQL + phpMyAdmin
- XAMPP (Apache, MySQL, PHP)
Installation & Setup
Requirements:
- XAMPP, Composer, PHP >= 8.1, VS Code
Steps:
1. Move project to C:/xampp/htdocs/ewu-research-funding
2. Open folder in VS Code terminal and run:
 composer install
 copy .env.example .env
 php artisan key:generate
3. Create DB in phpMyAdmin: ewu_research_funding
4. Update `.env`:
 DB_DATABASE=ewu_research_funding
 DB_USERNAME=root
README - EWU Research Paper Funding Hub
 DB_PASSWORD=
5. Run migration:
 php artisan migrate
6. Start server:
 php artisan serve
7. Visit: http://127.0.0.1:8000
Default Login Credentials
- Admin: ewu.research.admin@ewu.edu / EWU@Admin#Secure123
- ProVC: ewu.research.provc@ewu.edu / EWU@ProVC#Secure456
- VC: ewu.research.vc@ewu.edu / EWU@VC#Secure789
Known Limitations
- No email/SMS alerts
- No password reset
- No analytics
- Localhost only
Developed by
- Afrida Tasnim 

Supervised by
Md. Arman Hossain, Lecturer, Dept. of CSE, EWU
License
Project for CSE479: Web Programming at East West University.
