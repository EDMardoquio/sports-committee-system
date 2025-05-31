# sports-committee-system
Final_Exam

# 🏀 Sports Committee System  
**Final Exam Project**

## 📌 Project Overview  
**Municipal of Sta. Cruz Sports Committee Program and Activity Monitoring System with Online Registration**

This system streamlines event tracking, participant registration, and administrative tasks for sports programs across the municipality. Built with **PHP** and **MySQL**, it features a modern user interface and strong backend security.

## 🔐 Security Features  
We’ve implemented several security measures to protect against common vulnerabilities and ensure data integrity:

- **CSRF Protection**: All forms and state-changing requests are protected with server-validated CSRF tokens.  
- **Session Management**: Uses HTTP-only cookies and session regeneration to prevent fixation attacks.  
- **Input Validation & Sanitization**: All user inputs are validated and sanitized to prevent SQL Injection and XSS attacks.  
- **Password Security**: Passwords are hashed using `password_hash()` with the Bcrypt algorithm.  
- **Access Control**: Role-Based Access Control (RBAC) restricts access based on user roles.  
- **Anti-Brute Force Mechanism**: Locks account after repeated failed login attempts, with time-based reset.  
- **Error Handling**: Logs detailed errors on the server while displaying generic messages to users.  
- **Secure File Uploads and QR Handling**: All file and QR data undergo strict validation and sanitization.

## 📣 Reporting Vulnerabilities  
If you discover a security issue, please report it responsibly by contacting the project maintainer. Avoid public disclosure to ensure proper mitigation before exposure.

## 🛠 Features  
- ✅ Secure user authentication (login & sign-up)  
- ✅ Role-based access control (RBAC)  
- ✅ CSRF protection on all forms  
- ✅ Secure session handling with HTTP-only cookies  
- ✅ Anti-brute force login lockout mechanism  
- ✅ Admin and user dashboards for events and registration  
- ✅ Modern UI for better UX and accessibility  
- ✅ SweetAlert2 integration for sleek alert dialogs  
- ✅ Structured error handling and logging  

## 💻 Technologies Used  
| Technology        | Purpose / Description                                |
|-------------------|------------------------------------------------------|
| PHP               | Server-side scripting for backend logic              |
| MySQL             | Relational database for user, event, and activity data |
| HTML, CSS, JS     | Core technologies for building responsive pages      |
| Bootstrap         | Responsive UI framework                              |
| SweetAlert2       | Enhanced alert and modal pop-ups                     |
| Chart.js          | Data visualization for dashboards                    |
| jQuery            | DOM manipulation and AJAX                            |
| FontAwesome, Feather Icons | UI icons                                   |
| XAMPP             | Local dev environment (Apache, MySQL, PHP)           |
| Git & GitHub      | Version control and hosting                          |
| VS Code           | Code editor                                          |
| Postman           | API testing and simulation                           |
| PHPUnit           | Backend unit testing                                 |

## 💡 How to Run the System on Another Computer

1. **Clone or Download the Repository**  
   ```bash
   git clone https://github.com/EDMardoquio/MSCSUP-AMS
   ```
   Or download and extract the ZIP file.

2. **Set Up the Environment**  
   - Install **XAMPP** (includes Apache and MySQL)  
   - Open your browser (Chrome, Firefox, etc.)  
   - (Optional) Install **VS Code**  

3. **Import the Database**  
   - Start Apache and MySQL via XAMPP  
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)  
   - Create a database: `sports_monitoring`  
   - Import the `.sql` file from `/docs/` or `/database/`

4. **Move Project to `htdocs` Directory**  
   - Place the project folder in:  
     ```
     C:\xampp\htdocs\
     ```

5. **Configure Database Connection**  
   Edit `/src/includes/db_config.php`:
   ```php
   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'sports_monitoring';
   ```

6. **Launch the System**  
   Navigate to:  
   ```
   http://localhost/your-project-folder/
   ```

7. **Default Logins (Optional)**  
   - **Username**: `admin-123`  
   - **Password**: `admin`  

## 📂 Demo & Files  
Google Drive Link (https://drive.google.com/drive/folders/1bh7N87Zipe1QafnVWIqMqerR6ET2OLrJ?usp=drive_link)

## 🧩 Folder Structure  
```
📁 Docs         # SRS and supporting documents  
📁 Ui old-new   # Old vs. new UI designs  
📁 src          # Main source code  
📄 README.md  
```

## 👥 Contributors  
- 👨‍💻 Erson D. Mardoquio – Lead Developer / Final Enhancements  
- 👨‍💻 Angelo Sam Peralta Paulino – Backend & Security Integration  
- 👨‍💻 Kendall Siclon – UI Designer / Frontend Improvements  
- 👨‍💻 Wrandell Vergel de Dios – Database & Feature Testing  

