# Smart Workflow Manager

Smart Workflow Manager is an enterprise-grade WordPress plugin that introduces a structured editorial workflow for content-driven websites.  
It is designed using clean OOP PHP, WordPress core APIs, and best practices followed in large-scale WordPress projects.

---

## 🚀 Overview

This plugin adds an **“In Review”** workflow status to WordPress posts, allowing authors, editors, and administrators to manage content approvals efficiently.

The architecture focuses on **scalability, security, and maintainability**, making it suitable for enterprise news portals and content platforms.

---

## ✨ Features

- Custom post status: **In Review**
- Secure admin meta box for workflow control
- Capability checks using WordPress roles
- Email notification when a post enters review
- Clean OOP-based plugin architecture
- WordPress coding standards followed
- Easily extendable for multi-level approvals

---

## 🧠 Workflow Process

1. Author creates or edits a post  
2. Post status is changed to **In Review**  
3. Admin/Editor receives email notification  
4. Editor reviews and publishes the post  

---

## 🛠 Tech Stack

- PHP (OOP)
- WordPress Core APIs
- MySQL
- JavaScript
- Git & GitHub

---

## 📂 Project Structure

smart-workflow-manager/
├── assets/
│ └── js/
│ └── admin.js
├── includes/
│ ├── class-plugin.php
│ ├── class-workflow.php
│ ├── class-admin-ui.php
│ └── class-notifications.php
├── .gitignore
├── README.md
└── smart-workflow-manager.php