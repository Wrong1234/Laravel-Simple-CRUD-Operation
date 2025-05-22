# Portfolio Projects Management System

## Overview
This is a portfolio projects management system with complete CRUD (Create, Read, Update, Delete) functionality. The application is built using Laravel as the backend framework and MySQL as the database. The frontend uses Bootstrap for responsive and modern UI components.
This system allows users to showcase their projects with details, images, and links to related resources like GitHub repositories.
## Features
- Full CRUD operations for portfolio projects
- Bootstrap-based frontend with modern UI components
- Responsive card-based project listings
- Project detail pages with descriptions and technology stack
- Edit, delete, and view functionality for each project
- "Add Project" capability for new entries
- Mobile-friendly design using Bootstrap's grid system
- MySQL database integration for data persistence

## Technologies Used

- Backend: Laravel
- Database: MySQL
- Frontend: HTML, CSS, JavaScript, Bootstrap

## Requirements

- PHP 8.0+
- Composer
- MySQL 5.7+
- Node.js & NPM (for asset compilation)

# Installation

## 1. Clone the repo
   - git clone https://github.com/Wrong1234/Laravel-Simple-CRUD-Operation.git
   - cd project
## 2. Install dependencies
    - bashcomposer install
    - npm install

## 2. Environment setup
    - bashcp .env.example .env
    - php artisan key:generate

## 3. Configure database
    - Edit the .env file and update the database credentials:
    - DB_CONNECTION=mysql
    - DB_HOST=127.0.0.1
    - DB_PORT=3306
    - DB_DATABASE=_portfolio_app
    - DB_USERNAME=_projects
    - DB_PASSWORD=""

## 4. Run migrations and seed the database
     - php artisan migrate

## 5. Compile assets
     - npm run dev

## 6. Start the development server
     - php artisan serve
The application will be available at http://localhost:8000


# Usage
- Visit the homepage to view the project listings
- Click the 'Projects' button to view all projects
- Click on individual projects to see detailed information
- Use the "Add Project" button to create new portfolio entries
- Each project card has Edit, Delete, and View options
- Project details display technology stack and descriptions
- Access GitHub links directly from project detail pages

# Project Structure
    - app/ - Contains the core code of the application
    - app/Http/Controllers/ - Controllers for handling project CRUD operations
    - app/Models/ - Eloquent models representing database tables (Projects, Users, etc.)
    - database/migrations/ - Database migrations for projects schema
  ## resources/views/ - Blade templates for the frontend
    - projects/ - Views for project listings and details
    - auth/ - Authentication views
    - layouts/ - Template layouts

  ## public/ - Publicly accessible files including project images
    - routes/ - Application routes for project management
    - config/ - Configuration files

## Projects Home Page
![image alt](/public/projects/homePage.png)

## Project Detail Page
![image alt](https://github.com/Wrong1234/Laravel-Simple-CRUD-Operation/blob/246ebc88f28e2c522bf62e072553fa71d9a885cf/Laravel%20CRUD%20Project%20-%20Google%20Chrome%205_22_2025%2012_50_12%20AM.png)


# Database Schema 

## Projects Table
- id (primary key)
- title (string)
- description (text)
- image_path (string)
- github_url (string, nullable)
- created_at (timestamp)
- updated_at (timestamp)

## Routes
- GET /projects - Display all projects
- GET /projects/create - Show form to create a new project
- POST /projects - Store a newly created project
- GET /projects/{id} - Display a specific project
- GET /projects/{id}/edit - Show form to edit a project
- PUT/PATCH /projects/{id} - Update a specific project
- DELETE /projects/{id} - Delete a specific project
