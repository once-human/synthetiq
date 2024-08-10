<?php include('../src/templates/header.php'); ?>

<head>
    <link rel="stylesheet" href="..\public\assets\css\job-details.css">
</head>
<main>
    <div class="job-details-page">
        <!-- Left Sidebar -->
        <div class="sidebar-left">
            <div class="company-info">
                <h2>Company Info</h2>
                <p><strong>Company Name:</strong> Tech Solutions</p>
                <p><strong>Location:</strong> New York, NY</p>
                <p><strong>Website:</strong> <a href="#">www.techsolutions.com</a></p>
                <p><strong>About the Company:</strong> Tech Solutions is a leading provider of innovative technology services and solutions.</p>
            </div>
            <div class="similar-jobs">
                <h2>Similar Jobs</h2>
                <ul>
                    <li><a href="#">Software Developer at ABC Corp</a></li>
                    <li><a href="#">Web Developer at XYZ Inc</a></li>
                    <li><a href="#">Frontend Engineer at MNO Ltd</a></li>
                    <li><a href="#">Backend Developer at QRS Co</a></li>
                </ul>
            </div>
        </div>

        <!-- Right Section - Job Details -->
        <div class="job-details-section">
            <h1>Senior Software Engineer</h1>
            <p><strong>Company Name:</strong> Tech Solutions</p>
            <p><strong>Location:</strong> New York, NY</p>
            <p><strong>Job Type:</strong> Full-Time</p>

            <div class="job-description">
                <h2>Job Description</h2>
                <p>
                    We are looking for a Senior Software Engineer to join our dynamic team. The ideal candidate will have
                    experience in software development, be able to work in a fast-paced environment, and have a passion for
                    technology. You will be responsible for designing, developing, and maintaining software applications
                    that meet the needs of our clients.
                </p>
                <p>
                    Responsibilities include:
                    <ul>
                        <li>Designing and developing software applications.</li>
                        <li>Collaborating with cross-functional teams to define, design, and ship new features.</li>
                        <li>Ensuring the performance, quality, and responsiveness of applications.</li>
                        <li>Identifying and correcting bottlenecks and fixing bugs.</li>
                        <li>Continuously discovering, evaluating, and implementing new technologies to maximize development efficiency.</li>
                    </ul>
                </p>
                <p>
                    Qualifications:
                    <ul>
                        <li>Bachelor's degree in Computer Science or a related field.</li>
                        <li>5+ years of experience in software development.</li>
                        <li>Proficiency in Java, Python, or other programming languages.</li>
                        <li>Strong problem-solving skills and attention to detail.</li>
                        <li>Excellent communication and teamwork skills.</li>
                    </ul>
                </p>
            </div>

            <button class="apply-button">Apply Now</button>
        </div>
    </div>
</main>

<?php include('../src/templates/footer.php'); ?>
