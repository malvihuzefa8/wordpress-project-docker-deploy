<div align="center">

# 🚀 WordPress Docker Deployment on AWS EC2

### A production-ready, containerized WordPress setup with custom child theme, MySQL, and phpMyAdmin

[![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com/)
[![WordPress](https://img.shields.io/badge/WordPress-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![AWS](https://img.shields.io/badge/AWS_EC2-FF9900?style=for-the-badge&logo=amazon-aws&logoColor=white)](https://aws.amazon.com/ec2/)
[![phpMyAdmin](https://img.shields.io/badge/phpMyAdmin-6C78AF?style=for-the-badge&logo=phpmyadmin&logoColor=white)](https://www.phpmyadmin.net/)

</div>

---

## 📖 Overview

This project demonstrates a **complete DevOps workflow** for deploying a custom WordPress site on AWS EC2 using Docker. It covers everything from containerizing a custom child theme to managing persistent data, securing secrets, and preparing the project for team collaboration via GitHub.

> **Why this project matters:** It showcases real-world skills in Docker, Docker Compose, cloud deployment, volume management, and Git best practices — the exact stack used by modern DevOps and platform engineering teams.

---

## ✨ Key Features

- 🐳 **Fully containerized** — WordPress, MySQL, and phpMyAdmin run as isolated services
- 🎨 **Custom child theme baked into the image** — immutable, version-controlled deployments
- 💾 **Smart persistence strategy** — uploads and plugins persist on the host, database in a bind mount
- 🔐 **Secret management** — passwords live in `.env`, never in Git
- 🛠 **One-command setup** — `docker compose up -d` and you're live
- 📦 **Production-ready patterns** — pinned image versions, health checks, `.dockerignore` optimization
- 📚 **Self-documenting** — full troubleshooting guide and backup/restore commands included

---

## 🏗 Architecture

```
                    ┌─────────────────────────────────────┐
                    │           AWS EC2 Instance          │
                    │                                     │
   Browser ────────▶│  ┌─────────────┐  ┌─────────────┐  │
   (Port 80)        │  │  WordPress  │  │ phpMyAdmin  │  │
                    │  │  Container  │  │  Container  │  │
                    │  └──────┬──────┘  └──────┬──────┘  │
                    │         │                │         │
                    │         ▼                ▼         │
                    │  ┌─────────────────────────────┐   │
                    │  │      MySQL 5.7 Container    │   │
                    │  └──────────────┬──────────────┘   │
                    │                 │                   │
                    │    ┌────────────┴────────────┐     │
                    │    ▼                         ▼     │
                    │  ./db_data/          ./wp-content/  │
                    │  (bind mount)        uploads/plugins│
                    └─────────────────────────────────────┘
```

---

## 🧰 Tech Stack

| Layer | Technology |
|---|---|
| **CMS** | WordPress 6.7 (PHP 8.2 + Apache) |
| **Database** | MySQL 5.7 |
| **DB Admin** | phpMyAdmin (latest) |
| **Containerization** | Docker + Docker Compose v2 |
| **Cloud** | AWS EC2 (Ubuntu) |
| **Version Control** | Git + GitHub |

---

## 📁 Project Structure

```
wordpress-project/
├── .env                        # Real secrets (gitignored)
├── .gitignore                  # Excludes db_data, uploads, .env
├── .dockerignore               # Speeds up builds
├── Dockerfile                  # Custom WordPress image
├── docker-compose.yml          # 3-service orchestration
├── README.md
└── wp-content/
    ├── themes/
    │   └── vw-child-care-pro/  # Custom theme (baked into image)
    ├── plugins/                # Persisted via bind mount
    └── uploads/                # Persisted via bind mount
```

---


## 🔐 Environment Variables

| Variable | Purpose |
|---|---|
| `MYSQL_ROOT_PASSWORD` | MySQL root password (also used by WordPress) |
| `MYSQL_DATABASE` | WordPress database name |

> Secrets are stored in `.env` (gitignored). Only `.env.example` is committed — a standard 12-factor app practice.

---

## 💡 What I Learned / Demonstrated

- **Container orchestration** — multi-service Compose setup with dependency ordering
- **Volume strategy** — choosing between bind mounts and named volumes based on data lifecycle
- **Image immutability** — baking the theme into the image for reproducible deploys
- **Secret hygiene** — separating config from code with `.env`
- **Debugging in containers** — reading logs, exec-ing into containers, verifying mounts
- **Git discipline** — `.gitignore` and `.dockerignore` to keep repos clean and builds fast

---

## 🛠 Common Commands

```bash
docker compose up -d              # Start
docker compose down               # Stop (data safe)
docker compose logs -f db         # Follow DB logs
docker compose build && docker compose up -d   # Rebuild after theme change
docker compose exec wordpress bash             # Shell into WordPress
```

---

## 💾 Backup & Restore

```bash
# Database
docker compose exec db mysqldump -u root -p"$MYSQL_ROOT_PASSWORD" vw-child-care-pro > backup.sql

# Uploads
tar -czf uploads-backup.tar.gz ./wp-content/uploads/
```

---

## 🩺 Troubleshooting Highlights

| Issue | Fix |
|---|---|
| `Error establishing a database connection` | Check `.env` passwords match; wait 60s for MySQL init |
| Theme not visible in admin | `docker compose exec wordpress ls .../themes/` — rebuild if missing |
| Upload permission denied | `docker compose exec -u 0 wordpress chown -R www-data:www-data .../uploads` |
| phpMyAdmin can't connect | Ensure `PMA_HOST=db` matches service name |

---

## 🔒 Security Notes

- `.env` is gitignored — passwords never reach GitHub
- Default passwords should be rotated before production
- EC2 Security Group should restrict `8081` to trusted IPs only
- Use HTTPS (Let's Encrypt + Nginx) in production
- Consider a dedicated MySQL user (not `root`) for WordPress

---

## 📌 Future Improvements

- [ ] Add Nginx reverse proxy + Let's Encrypt SSL
- [ ] Migrate database to AWS RDS
- [ ] Store uploads in S3 (via WP Offload Media)
- [ ] Add GitHub Actions CI for automated builds
- [ ] Add health checks and auto-restart policies
- [ ] Infrastructure as Code with Terraform

---

<div align="center">

### 👤 Author

**Huzefa Malvi**

⭐ **If this project helped you, consider giving it a star!**

</div>