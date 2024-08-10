<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="..\public\assets\css\company-d.css">
</head>
<main>
<div class="company-dashboard">
        <!-- Left Sidebar -->
        <div class="sidebar-left">
            <div class="profile">
                <img src="company-logo.jpg" alt="Company Logo">
                <h3>Company Name</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#manage-jobs">Manage Job Postings</a></li>
                    <li><a href="#manage-profile">Manage Company Profile</a></li>
                    <li><a href="#manage-resumes">Manage Resumes</a></li>
                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content Section -->
        <div class="main-content">
            <!-- Dashboard Overview -->
            <section id="dashboard">
                <h1>Company Dashboard</h1>
                <div class="dashboard-overview">
                    <div class="overview-card">
                        <h3>Total Jobs Posted</h3>
                        <p>25</p>
                    </div>
                    <div class="overview-card">
                        <h3>Applications Received</h3>
                        <p>200</p>
                    </div>
                    <div class="overview-card">
                        <h3>Interviews Scheduled</h3>
                        <p>50</p>
                    </div>
                    <div class="overview-card">
                        <h3>Pending Approvals</h3>
                        <p>10</p>
                    </div>
                </div>
            </section>

            <!-- Manage Job Postings -->
            <section id="manage-jobs">
                <h2>Manage Job Postings</h2>
                <button class="add-job-btn">Add New Job</button>
                <div class="job-list">
                    <div class="job-card">
                        <h3>Software Developer</h3>
                        <p>Location: New York, NY</p>
                        <button>Edit</button>
                        <button>Delete</button>
                    </div>
                    <!-- More job cards... -->
                </div>
            </section>

            <!-- Manage Company Profile -->
            <section id="manage-profile">
                <h2>Manage Company Profile</h2>
                <form class="profile-form">
                    <label for="company-name">Company Name:</label>
                    <input type="text" id="company-name" value="Tech Solutions">

                    <label for="company-location">Location:</label>
                    <input type="text" id="company-location" value="New York, NY">

                    <label for="company-description">Company Description:</label>
                    <textarea id="company-description">Leading tech company focused on innovation and development...</textarea>

                    <button type="submit">Update Profile</button>
                </form>
            </section>

            <!-- Manage Resumes -->
            <section id="manage-resumes">
                <h2>Manage Resumes</h2>
                <div class="resume-list">
                    <div class="resume-card">
                        <h3>John Doe</h3>
                        <p>Applied for: Software Developer</p>
                        <button>View Resume</button>
                        <button>Schedule Interview</button>
                        <button>Reject</button>
                    </div>
                    <!-- More resume cards... -->
                </div>
            </section>

            <!-- Settings -->
            <section id="settings">
                <h2>Settings</h2>
                <div class="settings-options">
                    <button>Change Password</button>
                    <button>Manage Account</button>
                    <button>Logout</button>
                </div>
            </section>
        </div>
    </div>

</main>

<?php include('../src/templates/footer.php'); ?>
