# Laboratory Database Management System

- A web-based system developed using **PHP** and **MySQL**  for resource optimization of the lab instruments and lab activities.
---

## 🎯 Objective

- To digitize and automate laboratory data management and enable efficient tracking, accountability and utilization for the laboratory staff.

---

## 🔍 Problem Statement 

- Instruments in laboratories are commonly used by students for their course work, experiments, and research work. Manually keeping such records is a tedious, very error prone and inefficient process. has been made in an effort to solve the above described problem, and an object of the present invention is to provide:
    - A secure, role-based login system
    - Instrument borrowing and return tracking
    - Fine management for broken or unreturned equipment

---

## 👥 Stakeholders

- **Lab Staff**: Manage instruments, student usage records, and fines.
- **Students**: Can view instruments and their own borrowing status.

---

## 🧱 Database Design

> Legend:  
> `#` = Primary Key  
> `*` = Foreign Key

1. Authentication_System(#Staff_LogInID,Password)
2. Staffs (#Staff_ID,Staff_Name,*Staff_LogInID,*Lab_No.)
3. labs(#Lab_No.,Lab_Name,Department)
4. Instruments (#Instrument_No.,Instrument_Name,Quantity,Purchased_Date,Price,Description(make),*Lab_No)
5. Users (#Student_ID,Student_Name,Department)
6. Users_record (#Student_ID,#Date_Time,#*Instrument_No,Returned_Date_and_Time)
7. Broken_Details(#Broken_ID,*Instrument_No.,*Student_ID,Fine_Amount,Status)

---

## 🔐 Authentication Workflow

- Staff logs in via login.php
- Credentials are verified from the Authentication_System table
- Session is created on successful login
- Staff can then manage lab resources via the dashboard

---

## ⚙️ System Features

- Staff login with secure authentication
- Add, update, and delete lab instruments
- Track borrowing and returning of instruments
- Record and manage fines for broken instruments
- Student view access to instrument details

---

## 💻 Technologies Used

- PHP
- MySQL

---

## 📌 Future Enhancements	

- Search option

---

## 📄 License

MIT License. Feel free to use and modify.

---

## 👩‍💻 Author

- **Venuja Shanmugarajah**  
  Passionate about full-stack development | Sri Lanka 🇱🇰  
  💬 Let's connect: [LinkedIn](https://www.linkedin.com/in/venuja-shanmugarajah-432aa41ba)