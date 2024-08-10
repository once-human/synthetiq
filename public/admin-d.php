<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="..\public\assets\css\sadmin-d.css">
</head>
<main>
<div class="admin-dashboard">
        <!-- Left Sidebar -->
        <div class="sidebar-left">
            <div class="profile">
                <img src="admin-profile.jpg" alt="Admin Profile">
                <h3>Admin Name</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#students">Manage Students</a></li>
                    <li><a href="#companies">Manage Companies</a></li>
                    <li><a href="#jobs">Manage Jobs</a></li>
                    <li><a href="#notifications">Notifications</a></li>
                    <li><a href="#reports">Reports</a></li>
                    <li><a href="#settings">Settings</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content Section -->
        <div class="main-content">
            <!-- Dashboard Overview -->
            <section id="dashboard">
                <h1>Admin Dashboard</h1>
                <div class="dashboard-overview">
                    <div class="overview-card">
                        <h3>Total Students</h3>
                        <p>1500</p>
                    </div>
                    <div class="overview-card">
                        <h3>Total Companies</h3>
                        <p>200</p>
                    </div>
                    <div class="overview-card">
                        <h3>Total Jobs</h3>
                        <p>300</p>
                    </div>
                    <div class="overview-card">
                        <h3>Pending Approvals</h3>
                        <p>20</p>
                    </div>
                </div>
            </section>

            <!-- Manage Students -->
            <section id="students">
                <h2>Manage Students</h2>
                <div class="search-filter">
                    <input type="text" placeholder="Search Students...">
                    <button>Search</button>
                </div>
                <div class="student-list">
                    <div class="student-card">
                        <h3>John Doe</h3>
                        <p>Bachelor's in Computer Science</p>
                        <button>View Profile</button>
                        <button>Delete</button>
                    </div>
                    <!-- More student cards... -->
                </div>
            </section>

            <!-- Manage Companies -->
            <section id="companies">
                <h2>Manage Companies</h2>
                <div class="search-filter">
                    <input type="text" placeholder="Search Companies...">
                    <button>Search</button>
                </div>
                <div class="company-list">
                    <div class="company-card">
                        <h3>Tech Solutions</h3>
                        <p>New York, NY</p>
                        <button>View Details</button>
                        <button>Delete</button>
                    </div>
                    <!-- More company cards... -->
                </div>
            </section>

            <!-- Manage Jobs -->
            <section id="jobs">
                <h2>Manage Jobs</h2>
                <div class="job-list">
                    <div class="job-card">
                        <h3>Senior Software Engineer</h3>
                        <p>Company: Tech Solutions</p>
                        <p>Location: New York, NY</p>
                        <button>View Details</button>
                        <button>Delete</button>
                    </div>
                    <!-- More job cards... -->
                </div>
            </section>

            <!-- Notifications -->
            <section id="notifications">
                <h2>Notifications</h2>
                <div class="notification-list">
                    <div class="notification-card">
                        <p>New student registered: John Doe</p>
                        <p>2 hours ago</p>
                    </div>
                    <!-- More notifications... -->
                </div>
            </section>

            <!-- Reports -->
            <section id="reports">
                <h2>Reports</h2>
                <div class="report-list">
                    <div class="report-card">
                        <h3>Monthly Activity Report</h3>
                        <button>View Report</button>
                    </div>
                    <!-- More report cards... -->
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
