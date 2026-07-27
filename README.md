# Single-Leg Multilevel Marketing (MLM) Web Application

[![Live Demo](https://img.shields.io/badge/Live%20Demo-Render-brightgreen?style=for-the-badge&logo=render)](https://single-leg-mlm-laravel.onrender.com/)
[![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-2.x-4FC08D?style=for-the-badge&logo=vue.js)](https://vuejs.org)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.6-7952B3?style=for-the-badge&logo=bootstrap)](https://getbootstrap.com)
[![Docker](https://img.shields.io/badge/Docker-Ready-2496ED?style=for-the-badge&logo=docker)](https://www.docker.com/)

A modern, full-stack Single-Leg Multi-Level Marketing (MLM) management web application built with **Laravel 8**, **Vue.js**, **Bootstrap 4 (Paper Dashboard)**, and **MySQL**.

🔗 **Live Application URL**: [https://single-leg-mlm-laravel.onrender.com/](https://single-leg-mlm-laravel.onrender.com/)

---

## 🚀 Live Demo & Login Credentials

| Role | Access URL | Email | Password |
|---|---|---|---|
| **Admin / User** | [Live Site](https://single-leg-mlm-laravel.onrender.com/) | `admin@test.com` | `password123` |
| **New Registration** | [Register Account](https://single-leg-mlm-laravel.onrender.com/registration) | N/A | N/A |

---

## ✨ Features

- 🌐 **Single-Leg MLM Compensation Engine**:
  - Global single-line downline genealogy tree.
  - Interactive Tree View visualizer (`/treeview/{refkey}`).
- 💰 **Commission & Income Tracking**:
  - **Level Income**: Earnings based on team milestones.
  - **Direct Income**: Direct referral bonuses.
  - Comprehensive financial report section (`/reports`, `/directoutcome`, `/comincome`).
- 💳 **E-Pin Distribution System**:
  - E-Pin generation, user requests, and automated registration PIN allocations (`/epinOrder`, `/epinRequested`, `/myepin`).
- 👤 **User Dashboard & Profile**:
  - Real-time statistics cards, user profile updates, member lists (`/alluserslist`).
- 🐳 **Dockerized & Cloud Deployment**:
  - Production-ready Docker configuration optimized for cloud platforms like **Render**, **Railway**, and **VPS**.

---

## 🛠️ Technology Stack

- **Backend**: PHP 8.x, Laravel 8 Framework
- **Frontend**: Vue.js, JavaScript (ES6+), Sass/SCSS, Bootstrap 4, Paper Dashboard UI
- **Database**: MySQL / SQLite
- **Deployment**: Docker, Render

---

## 💻 Local Development Setup

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js & npm

### Setup Steps

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Pm-vk/single-leg-mlm-laravel.git
   cd single-leg-mlm-laravel
   ```

2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```

3. **Install Frontend Dependencies**:
   ```bash
   npm install
   ```

4. **Environment Setup**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run Database Migrations & Seeders**:
   ```bash
   php artisan migrate --seed
   ```

6. **Build Assets & Start Servers**:
   - Compile Assets:
     ```bash
     npm run dev
     ```
   - Run Laravel Backend Server:
     ```bash
     php artisan serve
     ```
   Open `http://127.0.0.1:8000` in your browser.

---

## 🐳 Production Deployment (Docker / Render)

This repository includes a production-ready `Dockerfile` and `vercel.json`.

### Deploying to Render:
1. Connect repository `Pm-vk/single-leg-mlm-laravel` on [Render](https://dashboard.render.com).
2. Select **Docker** environment runtime.
3. Configure your production environment variables (`DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, `APP_KEY`).
4. Trigger build & deploy!

---

## 📝 License
This project is open-source and available under the [MIT License](LICENSE).
