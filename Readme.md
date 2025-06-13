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

![Image](https://github.com/user-attachments/assets/e5ca118c-0f73-4f7b-8fb9-b440f2514cf4)

Students: 

![Image](https://github.com/user-attachments/assets/21c2e7cf-847d-4480-afcf-7200b0c59818)

![Image](https://github.com/user-attachments/assets/28f5e1fc-00b3-4b9e-95a0-bd7af046c528)

![Image](https://github.com/user-attachments/assets/1f3b693f-04bd-4aaf-bbf6-9a93550af859)

![Image](https://github.com/user-attachments/assets/7afb6bd9-a0b5-41ab-b97c-f969340dbe2b)

![Image](https://github.com/user-attachments/assets/932f2399-3422-49e5-bb70-54baf2de7532)

![Image](https://github.com/user-attachments/assets/6069fef9-bdf7-48c2-943d-cacc5cddcf18)

![Image](https://github.com/user-attachments/assets/6992c431-d904-4c32-ad96-2a268628c190)

Admin : 

![Image](https://github.com/user-attachments/assets/9a7d3f55-2336-4738-8ce5-59fcced3fc9e)

![Image](https://github.com/user-attachments/assets/94321600-6fae-44e3-8a8b-23fd786e9a70)

![Image](https://github.com/user-attachments/assets/5027e36e-9925-4bc7-8e94-41916405a516)

![Image](https://github.com/user-attachments/assets/d6a849eb-e76a-401c-ac4d-49136f16bb22)

![Image](https://github.com/user-attachments/assets/12660d4f-5d77-43b4-8faa-41697764b788)

![Image](https://github.com/user-attachments/assets/b94d14c0-e4f5-4b1f-83f6-80077aef60eb)

![Image](https://github.com/user-attachments/assets/ff384108-a28f-407d-9557-c9c031b6487d)

![Image](https://github.com/user-attachments/assets/d8b2d6e1-48ea-40c1-86f2-50d942b2beee)

Pro-Vc and VC : 

![Image](https://github.com/user-attachments/assets/73912bb6-d3cb-44af-a728-66b6cfc8006d)

![Image](https://github.com/user-attachments/assets/cdaccb2e-1731-4e39-a231-92bd19510caa)

![Image](https://github.com/user-attachments/assets/f694d2bd-98d1-4b9e-bbd1-3b7fb286f0a0)

![Image](https://github.com/user-attachments/assets/669b4590-a5a6-405a-b3d3-cacf49d304a1)
