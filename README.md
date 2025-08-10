# SBBL - Bank Management System (PHP Full Project)

This is a full-stack web application designed to simulate a complete bank management system. The project features a public-facing front-end website and a secure back-end with three distinct user portals (Admin, Staff, and Client), all built with native PHP and a MySQL database.

**Live Demo:** [**https://sbbl.jis.digital/**](https://sbbl.jis.digital/)

---

## Demo & Login Credentials

A live version of the application is hosted for demonstration purposes. You can test the different user roles using the credentials below.

| Role         | Username         | Password  | Notes                                                   |
|--------------|------------------|-----------|---------------------------------------------------------|
| **Client**   | `ripon@mail.com` | `12345`   | View account balance, transaction history, and transfer funds. |
| **Staff**    | `staf@mail.com`  | `12345`   | Manage client accounts and process transactions.        |
| **Admin**    | -                | -         | For access to the full-control Admin Panel, please contact me. |

<p align="center">
  <a href="https://wa.me/8801733956590" target="_blank">
    <img src="https://img.shields.io/badge/Request_Admin_Access_on_WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white" alt="Contact me on WhatsApp for Admin Login">
  </a>
</p>

---

## About This Project

The SBBL Bank Management System is a comprehensive platform that handles core banking functionalities. It separates the public-facing website from the internal management system, providing a realistic representation of a modern banking application.

### Key Features:

*   **Front-End Website:** A clean, responsive, and professional user-facing website for the bank.
*   **Back-End Management System:** A robust back-end with distinct portals for different user roles.
*   **Three User Portals:**
    *   **Admin Panel:** Full control over the system, including managing staff, viewing all client accounts, and overseeing system-wide settings.
    *   **Staff Panel:** Authority to manage client accounts, process transactions, and perform day-to-day banking operations.
    *   **Client Portal:** Allows bank clients to securely view their account balance, see transaction history, transfer funds, and manage their profile.
*   **Secure Authentication:** A secure login system for all three user roles.
*   **Core Banking Functions:** Full functionality for account creation, deposits, withdrawals, and internal fund transfers.

---

## Built With

This project is built on a classic web stack, focusing on server-side logic with PHP.

*   ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
*   ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)
*   ![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
*   ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
*   ![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)

---

## Getting Started

To get a local copy of this project up and running, please follow these steps.

### Prerequisites

You will need a local server environment that supports PHP and MySQL.
*   [XAMPP](https://www.apachefriends.org/index.html) (Recommended for Windows)
*   [MAMP](https://www.mamp.info/en/windows/) (For macOS)

### Installation

1.  **Clone the repository:**
    ```sh
    git clone https://github.com/ShovonScripts/SBBL-Bank-Management-PHP-Full-Project.git
    ```
2.  **Move the project folder** into your server's `htdocs` (for XAMPP) or `www` directory.

3.  **Set up the database:**
    *   Open `phpMyAdmin` from your XAMPP/MAMP control panel.
    *   Create a new database and name it `sbbl_db`.
    *   Find the `.sql` file in the repository (e.g., `database.sql`) and import it into your new database. This will create all the necessary tables.

4.  **Configure the database connection:**
    *   Navigate to the `includes` folder (or wherever your database connection file is located).
    *   Open the database configuration file (e.g., `db_connect.php`, `config.php`).
    *   Update the database credentials (`$hostname`, `$username`, `$password`, `$dbname`) to match your local setup.

5.  **Run the application:**
    *   Open your web browser and navigate to `http://localhost/SBBL-Bank-Management-PHP-Full-Project`.

---

## Contact

**Johirul Islam Shovon** - [My GitHub Profile](https://github.com/ShovonScripts)

Project Link: [https://github.com/ShovonScripts/SBBL-Bank-Management-PHP-Full-Project](https://github.com/ShovonScripts/SBBL-Bank-Management-PHP-Full-Project)
