# Synthetiq Placement Portal

## Overview

**Synthetiq** is a dynamic and comprehensive placement portal designed to connect students with job opportunities, manage applications, and facilitate notifications. This project was developed as part of a hackathon to showcase modern web development practices, including PHP, MySQL, and responsive design.

## Features

- **User Authentication**: Secure login and registration for students, companies, and admins.
- **Student Dashboard**: Personalized profile with educational details, project information, job applications, and notifications.
- **Company Dashboard**: Job posting management and application tracking.
- **Admin Dashboard**: Comprehensive management of users, job postings, and application statuses.
- **Job Search and Filter**: Advanced search and filtering options for job listings.
- **Notifications System**: Real-time notifications for job updates and application statuses.

## Technical Details

### Technologies Used

- **Frontend**:
  - HTML5
  - CSS3
  - JavaScript
  - Responsive Design with media queries
- **Backend**:
  - PHP 7.x
  - MySQL 8.x
  - PDO for database interactions
- **Database**:
  - MariaDB for relational database management
  - Database tables include: `admin_actions`, `applications`, `company_profiles`, `jobs`, `job_categories`, `job_category_mapping`, `notifications`, `reports`, `student_profiles`, `users`
- **Additional Tools**:
  - Figma for UI/UX design
  - Git for version control

### Database Schema

- **student_profiles**: Stores student profile information.
- **education_details**: Contains educational background of students.
- **student_projects**: Details of student projects.
- **applications**: Information about job applications by students.
- **notifications**: Notifications sent to users.

### Security

- **User Authentication**: Secure login with session management.
- **Role-based Access Control**: Access restrictions based on user roles (student, company, admin).

## Setup Instructions

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/once-human/synthetiq.git
   cd synthetiq

2. **Configure Database**:
   - Update the database configuration in `src/config/db.php` with your database credentials.
   - Import the SQL schema and data provided in `src/lib/synthetiq.sql` into your MySQL instance.

3. **Install Dependencies**:
   - Ensure you have PHP and MariaDB installed on your system.
   - Install Composer for PHP dependencies (if any).

4. **Start the Server**:
   ```bash
   php -S localhost:8000

5. **Access the Application**:
   - Open your web browser and navigate to `http://localhost:8000`.

## User Instructions

### For Students
- **Profile Management**: View and update your profile, education details, and project information from the student dashboard.
- **Job Applications**: Apply for jobs, track your application status, and view notifications about your applications.

### For Companies
- **Job Posting**: Post new job opportunities and manage existing listings.
- **Application Tracking**: View and manage applications received for job postings.

### For Admins
- **User Management**: Manage student, company, and admin accounts.
- **Job and Application Management**: Oversee job postings and application statuses.

## Screenshots

![Admin Dashboard](storage/uploads/admin_dashboard.png)
![Student Dashboard](storage/uploads/student_dashboard.png)
![Company Dashboard](storage/uploads/company_dashboard.png)
![Login Page](storage/uploads/login_page.png)
![Registration Page](storage/uploads/registration_page.png)
![Home Page](storage/uploads/home_page.png)

## Contributing

Feel free to contribute to the project by submitting issues or pull requests. Ensure that you follow the coding standards and guidelines outlined in the project's contribution guide.

## License

This project is licensed under the [GNU GENERAL PUBLIC LICENSE V3](https://www.gnu.org/licenses/gpl-3.0.en.html) - see the [LICENSE](LICENSE) file for details.