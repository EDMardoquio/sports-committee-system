# sports-committee-system
Final_Exam

🏀 Municipal of Sta. Cruz Sports Committee Program and Activity Monitoring System with Online Registration

📌 Project Overview

Our Municipal of Sta. Cruz Sports Committee Program and Activity Monitoring System with Online Registration helps streamline event tracking, registration, and administrative control for sports programs across the municipality. The system is built with PHP and MySQL, with a modern interface and robust backend security.

🔐 Security Notices
We have implemented several security enhancements to protect against common vulnerabilities and ensure data integrity:
Cross-Site Request Forgery (CSRF) Protection: All forms and state-changing requests use CSRF tokens that are validated server-side.
Session Management: Sessions use HTTP-only cookies with regeneration logic to prevent fixation attacks.
Input Validation and Sanitization: All user inputs are strictly validated and sanitized to prevent SQL Injection and XSS attacks.
Password Security: Passwords are hashed using password_hash() with the bcrypt algorithm.
Access Control: Role-based access control (RBAC) ensures restricted access based on user roles.
Anti-Bruteforce Protection: Implements lockout after multiple failed login attempts and time-based reset logic.
Error Handling: Logs detailed errors server-side and displays generic messages to users to prevent information leakage.
Secure File Uploads and QR Handling: File uploads and QR data go through content validation and sanitization.
📣 Reporting Vulnerabilities
If you discover a security vulnerability, please report it responsibly by contacting the project maintainer. Avoid public disclosure to help us secure the platform before widespread exposure.

🛠 Features

✅ User authentication with secure login and signup

✅ Role-based access control (RBAC)

✅ CSRF protection on all forms

✅ Secure session handling with HTTP-only cookies

✅ Anti-bruteforce login lockout mechanism

✅ Admin and user dashboards for event and registration tracking

✅ Updated user interface for improved UX and accessibility

✅ Integration of SweetAlert2 for modern alert dialogs

✅ Logging and structured error handling

💡 How to Run the System on Another Computer

📁 1. Clone or Download the Repository

git clone https://github.com/EDMardoquio/MSCSUP-AMS

Or download and extract the ZIP file.

🧱 2. Set Up Your Environment

Ensure the target machine has:

XAMPP (Apache, MySQL)

Web browser (Chrome, Firefox, etc.)

Optional: Visual Studio Code (VS Code)

🛠️ 3. Import the Database

Start Apache and MySQL in XAMPP

Open http://localhost/phpmyadmin

Create a new database: sports_monitoring

Import the .sql file:

Go to Import tab

Upload the SQL from /docs/ or /database/

Click Go

📂 4. Move the Project to htdocs

Place the project folder into:

C:\xampp\htdocs\

⚙️ 5. Configure the Database Connection

Edit this file:

/src/includes/db_config.php

Example:

$host = 'localhost';

$user = 'root';

$pass = '';

$dbname = 'sports_monitoring';

🚀 6. Launch the System

In your browser, navigate to:

http://localhost/your-project-folder/

🔐 7. Default Logins (Optional)

Admin: admin-123

Password: admin


📂 Link to Demo & Files

📁 google drive link (https://drive.google.com/drive/folders/1bh7N87Zipe1QafnVWIqMqerR6ET2OLrJ?usp=drive_link)

🧩 Folder Structure

📁 Docs                    # for your SRS and supporting files

📁 Ui old-new              # if applicable, old vs. new UI assets

📁 src                     # main source code (was scr before)

📄 README.md

📄 Group-Name

