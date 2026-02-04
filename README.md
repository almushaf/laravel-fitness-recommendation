# 🚀 Laravel Fitness Recommendation System (SAW)

A web-based fitness training recommendation system built with **Laravel**, implementing the **Simple Additive Weighting (SAW)** method to recommend workout programs based on user fitness goals.

This project showcases backend logic, decision support systems, and full-stack web development using Laravel.

---

## 🎯 Features

- 🔐 User authentication & authorization
- 🏋️ Fitness program management (CRUD)
- 📊 Workout recommendations using **SAW method**
- 📈 Training program monitoring
- 🔍 Search & pagination
- 🧠 Weighted decision-making logic

---

## 🛠 Tech Stack

- **Backend**: Laravel 10, PHP 8
- **Database**: MySQL
- **Frontend**: Blade, Bootstrap
- **Algorithm**: Simple Additive Weighting (SAW)
- **Tools**: Git, GitHub, XAMPP

---

## 🧮 SAW Method Overview

The **Simple Additive Weighting (SAW)** method is used to rank workout programs based on weighted criteria such as:

- Training frequency
- Workout intensity
- User fitness goals (muscle gain, strength training, weight loss)

Each alternative is normalized and scored to produce the best recommendation.

---

## ⚙️ Installation (Local Setup)

```bash
git clone https://github.com/almushaf/laravel-fitness-recommendation.git
cd laravel-fitness-recommendation
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

## 📌 Project Purpose

This project was developed as a portfolio project to demonstrate:
- Backend development with Laravel
- Decision Support System implementation (SAW method)
- Database design and system logic

---

## 👤 Author

Al Mushaf  
Backend / Laravel Developer  

GitHub: https://github.com/almushaf
