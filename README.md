# ⚖️ Lawyer Management System  

A comprehensive **Lawyer Management System** designed to streamline the operations of law firms and individual lawyers. This system enables efficient management of clients, cases, schedules, and more. Built with **HTML**, **CSS**, **PHP**, and **SQL**, it provides a user-friendly interface and a robust backend to handle legal practice operations.  

---

## 🚀 Features  
- **Client Management**: Add, update, and manage client details efficiently.  
- **Case Management**: Track and update case statuses and records.  
- **Appointment Scheduling**: Schedule, reschedule, and manage appointments seamlessly.  
- **Document Handling**: Upload and organize legal documents related to cases and clients.  
- **User Authentication**: Secure login system for lawyers, staff, and admins.  
- **Responsive Design**: Optimized for desktop and mobile use.  

---

## 🛠️ Technologies Used  
- **HTML & CSS**: For creating a responsive and visually appealing frontend.  
- **PHP**: Backend scripting for server-side logic and data processing.  
- **SQL**: For database management and query execution.  
- **JavaScript**: For interactivity and form validations.  

---

## 📖 How to Set Up  

1. **Clone the Repository**:  
   ```bash
   git clone https://github.com/your-username/lawyer-management-system.git
   cd lawyer-management-system
   ```  

2. **Set Up the Database**:  
   - Import the SQL file (e.g., `database.sql`) provided in the project into your database system (e.g., MySQL).  
     ```sql
     mysql -u root -p < database.sql
     ```  

3. **Configure the Backend**:  
   - Open the `config.php` file and update the database credentials:  
     ```php
     <?php
     $host = "localhost";
     $username = "root";
     $password = "";
     $database = "lawyers_db";
     ?>
     ```  

4. **Start the Server**:  
   - Use **XAMPP** or **WAMP** to start the Apache and MySQL servers.  
   - Place the project folder in the `htdocs` directory of your local server.  

5. **Access the Application**:  
   - Open your browser and navigate to:  
     ```bash
     http://localhost/lawyer-management-system/
     ```

---

## 🖼️ Screenshots  

1. **Login Page**
   ![image](https://github.com/user-attachments/assets/7333c5c7-0ead-4ef9-b4b4-42daa40a33f3)

2. **Home Page**
![image](https://github.com/user-attachments/assets/1dd0b2e6-d3d9-4093-b55c-f2690f05b91a)




---

## 📂 Project Structure  

```plaintext
lawyer-management-system/
│
├── css/
│   └── styles.css          # Main CSS file
│
├── js/
│   └── scripts.js          # JavaScript functionality
│
├── includes/
│   ├── config.php          # Database configuration
│   ├── header.php          # Common header file
│   └── footer.php          # Common footer file
│
├── pages/
│   ├── dashboard.php       # Dashboard page
│   ├── clients.php         # Client management page
│   ├── cases.php           # Case management page
│   └── appointments.php    # Appointments management page
│
├── database.sql            # SQL file for database setup
├── index.php               # Landing page
└── README.md               # Documentation
```

---

## 🤝 Contributing  
Contributions are welcome!  
1. Fork the repository.  
2. Create your feature branch:  
   ```bash
   git checkout -b feature/your-feature-name
   ```  
3. Commit your changes:  
   ```bash
   git commit -m "Add your message"
   ```  
4. Push to the branch:  
   ```bash
   git push origin feature/your-feature-name
   ```  
5. Open a Pull Request.  

---

## 📝 License  
This project is licensed under the MIT License.  

---

## 👩‍💻 About the Developer  
Developed by **Shreya Singh Thakur**.  
For inquiries or feedback, connect with me on:  
- [GitHub](https://github.com/shreyathakurr)  

