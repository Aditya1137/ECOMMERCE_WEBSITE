# 🛒 PHP E-Commerce Website

A fully functional **E-Commerce Website** built using **PHP & MySQL**, featuring a user-friendly shopping experience with secure authentication, product management, and an admin panel. 🚀

## 🌟 Features
✅ **User Authentication** – Register, login, and manage user accounts 🔐  
✅ **Product Management** – Browse, add, edit, and delete products 🛍️  
✅ **Shopping Cart** – Add, remove, and update items in the cart 🛒  
✅ **Order Processing** – Checkout and track order status 📦  
✅ **Payment Integration** – Secure transactions via PayPal/Stripe 💳  
✅ **Admin Dashboard** – Manage users, products, and orders efficiently ⚙️  
✅ **Responsive Design** – Fully mobile-friendly layout 📱  

## 🏗️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript (Bootstrap) 🎨  
- **Backend:** PHP (Core PHP ) 🖥️  
- **Database:** MySQL 🗄️  
- **Authentication:** PHP Sessions & Cookies 🔑  

## 🚀 Installation Guide
### Prerequisites:
- PHP installed (`7.4+` recommended)
- MySQL Server (`phpMyAdmin` preferred)
- Apache Server (`XAMPP` or `WAMP` recommended)

### Steps:
1. **Clone the repository:**
   ```bash
   git clone (https://github.com/Aditya1137/ECOMMERCE_WEBSITE/)
   ```
2. **Move to the project directory:**
   ```bash
   cd ecommerce-php
   ```
3. **Import the database:**
   - Open **phpMyAdmin**
   - Create a new database (e.g., `ecommerce_db`)
   - Import `database.sql` file from the project folder
4. **Update database credentials in `config.php`:**
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', 'yourpassword');
   define('DB_NAME', 'ecommerce_db');
   ```
5. **Start the PHP development server:**
   ```bash
   php -S localhost:8000
   ```
6. **Open your browser and visit:**
   ```
   http://localhost:8000
   ```

## 📸 Screenshots
![Homepage](images/homepage.png)
![Product Page](images/product-page.png)
![Shopping Cart](images/cart.png)

## 📂 Folder Structure
```md
📂 ecommerce-php
 ├── 📂 assets          # CSS, JS, images
 ├── 📂 includes        # Common PHP functions
 ├── 📂 admin           # Admin panel
 ├── 📂 database        # Database files
 ├── index.php         # Homepage
 ├── cart.php          # Shopping cart page
 ├── checkout.php      # Checkout process
 ├── config.php        # Database configuration
 ├── README.md         # Project documentation
```

## 🤝 Contributing
Contributions are welcome! Follow these steps:
1. Fork the repository
2. Create a new branch (`feature-newfeature`)
3. Commit your changes (`git commit -m 'Added new feature'`)
4. Push to the branch (`git push origin feature-newfeature`)
5. Open a Pull Request

## 🔥 Live Demo (If Hosted Online)
🔗 [Live Demo]((https://github.com/Aditya1137/ECOMMERCE_WEBSITE/))

## 📩 Contact
For any queries or suggestions, feel free to reach out! ✉️

---

Enjoy building your eCommerce website! 🚀

