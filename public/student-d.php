<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="..\public\assets\css\student-d.css">
</head>
<main>
    <div class="dashboard">
        <!-- Left Sidebar -->
        <div class="sidebar-left">
            <div class="profile-section">
                <img src="profile.jpg" alt="User Profile" class="profile-image">
                <h2>John Doe</h2>
                <p>B.Sc Computer Science</p>
            </div>
            <div class="education-section">
                <h3>Education Details</h3>
                <ul>
                    <li>B.Sc Computer Science - XYZ University</li>
                    <li>High School - ABC School</li>
                </ul>
            </div>
            <div class="projects-section">
                <h3>Projects Details</h3>
                <ul>
                    <li>Project 1: Web Development</li>
                    <li>Project 2: Machine Learning</li>
                    <li>Project 3: Mobile App Development</li>
                </ul>
            </div>
        </div>

        <!-- Center Main Section -->
        <div class="main-section">
            <div class="search-filter">
                <input type="text" class="search-bar" placeholder="Search for jobs...">
                <select class="filter">
                    <option value="all">All</option>
                    <option value="full-time">Full-Time</option>
                    <option value="part-time">Part-Time</option>
                    <option value="internship">Internship</option>
                </select>
            </div>
            <div class="job-list">
                <?php include('../src/templates/job-posting-card.php'); ?>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="sidebar-right">
            <h3>Notifications</h3>
            <div class="notifications">
                <?php include('../src/templates/notification-card.php'); ?>
            </div>
            <a href="./notifications.php" class="view-all-btn">View All Notifications</a>
        </div>
    </div>
</main>

<?php include('../src/templates/footer.php'); ?>
