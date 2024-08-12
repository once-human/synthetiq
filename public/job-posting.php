<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="../public/assets/css/job-posting.css">
</head>
<body>
    <!-- Main Content -->
    <div class="container">
        <!-- Upload Button -->
        <div class="upload-section">
            <button class="upload-button" onclick="showPopup()">Upload Job Posting</button>
        </div>

        <!-- Job Posting List -->
        <main class="main-content full-width">
            <h2>Job Postings</h2>

            <!-- Job Card 1 -->
            <div class="job-card" id="card_1">
                <div class="job-info">
                    <h3>Job Title</h3>
                    <p>Company Name</p>
                    <p>Location: City, State</p>
                    <p>Work Mode: Remote/On-site</p>
                    <button class="details-button">Details</button>
                    <div class="job-actions">
                        <span class="edit-button">Edit</span>
                        <span class="delete-button">Delete</span>
                    </div>
                </div>
                <div class="response-count">
                    Responses: 24
                </div>
            </div>
            <!-- Add more job cards as needed -->
        </main>
    </div>

    <!-- Job Upload Popup -->
    <div id="upload-popup" class="popup">
        <div class="popup-content">
            <span class="close-button" onclick="hidePopup()">&times;</span>
            <h3>Upload Job Details</h3>
            <form id="job-upload-form" onsubmit="addJobCard(event)">
                <!-- Form fields... -->
                <label for="job-title">Job Title:</label>
                <input type="text" id="job-title" name="job-title" required>

                <label for="company-name">Company Name:</label>
                <input type="text" id="company-name" name="company-name" required>

                <label for="description">Job Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" required>

                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>

                <label for="work-mode">Work Mode:</label>
                <select id="work-mode" name="work-mode" required>
                    <option value="remote">Remote</option>
                    <option value="on-site">On-site</option>
                    <option value="hybrid">Hybrid</option>
                </select>
                <button type="submit" class="submit-button">Upload</button>
            </form>
        </div>
    </div>
    <?php include('../src/templates/footer.php'); ?>
    <script src="../public/assets/js/job-posting.js"></script>
</body>
</html>
