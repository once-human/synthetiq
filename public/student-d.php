<?php
include('../src/templates/header.php');
include('../src/config/db.php'); // Include the database connection

// Fetch student profile data
$studentId = 1; // Set this to the appropriate student ID based on session or other means
$studentProfileStmt = $pdo->prepare("SELECT * FROM student_profiles WHERE user_id = ?");
$studentProfileStmt->execute([$studentId]);
$studentProfile = $studentProfileStmt->fetch(PDO::FETCH_ASSOC);

// Fetch education details
$educationStmt = $pdo->prepare("SELECT * FROM education_details WHERE student_id = ?");
$educationStmt->execute([$studentId]);
$educationDetails = $educationStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch projects details
$projectsStmt = $pdo->prepare("SELECT * FROM student_projects WHERE student_id = ?");
$projectsStmt->execute([$studentId]);
$projects = $projectsStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch job applications
$applicationsStmt = $pdo->prepare("SELECT j.title, a.status, a.applied_at FROM applications a JOIN jobs j ON a.job_id = j.id WHERE a.student_id = ?");
$applicationsStmt->execute([$studentId]);
$applications = $applicationsStmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch notifications
$notificationsStmt = $pdo->prepare("SELECT * FROM notifications WHERE user_id = ? ORDER BY created_at DESC LIMIT 5");
$notificationsStmt->execute([$studentId]);
$notifications = $notificationsStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <link rel="stylesheet" href="../public/assets/css/student-d.css">
</head>
<main>
    <div class="dashboard">
        <!-- Left Sidebar -->
        <div class="sidebar-left">
            <div class="profile-section">
                <img src="<?php echo htmlspecialchars($studentProfile['resume']); ?>" alt="User Profile" class="profile-image">
                <h2><?php echo htmlspecialchars($studentProfile['full_name']); ?></h2>
                <p><?php echo htmlspecialchars($studentProfile['address']); ?></p>
            </div>
            <div class="education-section">
                <h3>Education Details</h3>
                <ul>
                    <?php foreach ($educationDetails as $education): ?>
                        <li><?php echo htmlspecialchars($education['degree']); ?> - <?php echo htmlspecialchars($education['institution']); ?> (<?php echo htmlspecialchars($education['year_of_passing']); ?>)</li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="projects-section">
                <h3>Projects Details</h3>
                <ul>
                    <?php foreach ($projects as $project): ?>
                        <li><?php echo htmlspecialchars($project['project_title']); ?>: <?php echo htmlspecialchars($project['description']); ?></li>
                    <?php endforeach; ?>
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
                <?php foreach ($applications as $application): ?>
                <div class="job-posting-card">
                    <h4><?php echo htmlspecialchars($application['title']); ?></h4>
                    <p>Status: <?php echo htmlspecialchars($application['status']); ?></p>
                    <p>Applied on: <?php echo htmlspecialchars($application['applied_at']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="sidebar-right">
            <h3>Notifications</h3>
            <div class="notifications">
                <?php foreach ($notifications as $notification): ?>
                <div class="notification-card">
                    <p><?php echo htmlspecialchars($notification['message']); ?></p>
                    <p><?php echo htmlspecialchars($notification['created_at']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <a href="./notifications.php" class="view-all-btn">View All Notifications</a>
        </div>
    </div>
</main>

<?php include('../src/templates/footer.php'); ?>
