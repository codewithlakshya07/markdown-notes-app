# 📓 Markdown Notes App

A simple self-hosted notes app to create and view notes written in Markdown using PHP & MySQL.

---

## 🛠️ Features

- 📝 Add, view notes written in markdown
- 🔄 Markdown preview using **Parsedown**
- 💾 Data saved using **MySQL**
- 🔐 Lightweight, no login required (for now)

---

## 🧰 Technologies Used

- PHP
- MySQL
- HTML / CSS
- Parsedown (Markdown parser)

---

## ⚙️ Setup Instructions

### 1. 🔧 Create Database
Run the following SQL to create the `notes_app` database and `notes` table:

```sql
CREATE DATABASE notes_app;
USE notes_app;

CREATE TABLE notes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  content TEXT
);
