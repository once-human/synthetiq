<?php include('../src/templates/header.php'); ?>
<head>
    <link rel="stylesheet" href="../public/assets/css/application-status.css">
</head>
<body>
<div class="container">
        <!-- Left Sidebar: Application Filter -->
        <aside class="sidebar">
            <h3>Application Filter</h3>
            <ul>
                <li><input type="checkbox" id="status1" name="status1"> Status</li>
                <li><input type="checkbox" id="date1" name="date1"> Date</li>
                <!-- Add more filters as needed -->
            </ul>
        </aside>

        <!-- Right Section: Application List -->
        <main class="main-content">
            <h2>Application List</h2>

            <!-- Job Card 1 -->
            <div class="job-card">
                <div class="job-info">
                    <h3>Job Title</h3>
                    <p>Company Name</p>
                    <button class="details-button">Details</button>
                </div>
                <div class="status-bar">
                    <div class="step-bar">
                        <div class="step completed">
                            <div class="step-number">&#10003;</div>
                        </div>
                        <div class="step active">
                            <div class="step-number">2</div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Card 2 -->
            <div class="job-card">
                <div class="job-info">
                    <h3>Job Title</h3>
                    <p>Company Name</p>
                    <button class="details-button">Details</button>
                </div>
                <div class="status-bar">
                    <div class="step-bar">
                        <div class="step completed">
                            <div class="step-number">&#10003;</div>
                        </div>
                        <div class="step active">
                            <div class="step-number">2</div>
                        </div>
                        <div class="step">
                            <div class="step-number">3</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more job cards as needed -->
        </main>
    </div>
<?php include('../src/templates/footer.php'); ?>

</body>
</html>
