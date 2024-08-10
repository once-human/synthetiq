<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="../public/assets/css/profile.css">
</head>
<main>
    <div class="profile-page">
        <!-- Left Sidebar - Navigation Panel -->
        <div class="sidebar-left">
            <ul class="nav">
                <li><a href="#personal-details">Personal Details</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#settings">Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-section">
            <div id="personal-details" class="section">
                <h2>Personal Details</h2>
                <img src="profile.jpg" alt="User Profile" class="profile-image" id="profileImage">
                <input type="file" id="profileImageUpload" class="file-input" accept="image/*">
                <h3 contenteditable="true">John Doe</h3>
                <p contenteditable="true">B.Sc Computer Science</p>
            </div>

            <div id="education" class="section">
                <h2>Education</h2>
                <ul contenteditable="true">
                    <li>B.Sc Computer Science - XYZ University</li>
                    <li>High School - ABC School</li>
                </ul>
            </div>

            <div id="projects" class="section">
                <h2>Projects</h2>
                <ul contenteditable="true">
                    <li>Project 1: Web Development</li>
                    <li>Project 2: Machine Learning</li>
                    <li>Project 3: Mobile App Development</li>
                </ul>
            </div>

            <div id="resume" class="section">
                <h2>Resume</h2>
                <input type="file" id="resumeUpload" accept=".pdf,.doc,.docx">
                <p id="resumeStatus">No resume uploaded.</p>
            </div>

            <div id="experience" class="section">
                <h2>Experience</h2>
                <ul contenteditable="true">
                    <li>Internship at ABC Corp - Web Developer</li>
                    <li>Part-time at XYZ Ltd - Data Analyst</li>
                </ul>
            </div>

            <div id="settings" class="section">
                <h2>Settings</h2>
                <div class="settings-options">
                    <label for="notificationSettings">Enable Notifications</label>
                    <input type="checkbox" id="notificationSettings" checked>
                </div>
                <div class="settings-options">
                    <label for="darkMode">Dark Mode</label>
                    <input type="checkbox" id="darkMode">
                </div>
                <button class="save-settings-btn">Save Settings</button>
            </div>
        </div>
    </div>

    <script src="../public/assets/js/profile.js"></script>
</main>

<?php include('../src/templates/footer.php'); ?>