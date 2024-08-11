<?php include('../src/templates/header.php'); ?>
<!-- // synthetiq - github.com/once-human -->
<main>
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Synthetiq</h1>
            <p>Your gateway to seamless job applications, profile management, and more!</p>
            <div class="cta-buttons">
                <a href="../public/login.php" class="cta-button primary">Login</a>
                <a href="../public/register.php" class="cta-button secondary">Register</a>
            </div>
        </div>
    </section>

    <section class="features">
        <h2>Our Features</h2>
        <div class="feature-card">
            <h3>Job Applications</h3>
            <p>Apply to various job postings and manage your applications easily.</p>
        </div>
        <div class="feature-card">
            <h3>Profile Management</h3>
            <p>Update your profile and track your application status from one place.</p>
        </div>
        <div class="feature-card">
            <h3>Notifications</h3>
            <p>Receive timely updates on your application status and job postings.</p>
        </div>
        <div class="feature-card">
            <h3>Reports</h3>
            <p>Generate reports to analyze your job application progress and success rates.</p>
        </div>
    </section>

    <section class="about-us">
        <h2>About Us</h2>
        <p>Synthetiq is dedicated to simplifying the job application process. Our platform provides a comprehensive suite of tools to manage applications, track progress, and stay updated with the latest job postings. With a user-friendly interface and powerful features, we're here to help you succeed in your career.</p>
        <a href="about.php" class="cta-button learn-more">Learn More</a>
    </section>

    <!-- New Sections Added -->

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>What Our Users Say</h2>
        <div class="testimonial-card">
            <p>"Synthetiq made my job search effortless. I found my dream job in just a few weeks!"</p>
            <span>- Anjali Sharma, Software Developer</span>
        </div>
        <div class="testimonial-card">
            <p>"The profile management feature is superb. I can easily keep track of all my applications."</p>
            <span>- Raj Patel, Data Analyst</span>
        </div>
        <div class="testimonial-card">
            <p>"I love the notification feature. It keeps me updated on the latest job postings."</p>
            <span>- Neha Singh, UX Designer</span>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="call-to-action">
        <h2>Ready to Take the Next Step?</h2>
        <p>Join thousands of successful applicants who have found their dream jobs through Synthetiq.</p>
        <div class="cta-buttons">
            <a href="../public/register.php" class="cta-button primary">Get Started</a>
            <a href="about.php" class="cta-button secondary">Learn More</a>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <h3>How do I create an account?</h3>
            <p>You can create an account by clicking the "Register" button at the top of the page and filling out the registration form.</p>
        </div>
        <div class="faq-item">
            <h3>How do I apply for a job?</h3>
            <p>Once you log in, navigate to the job listings page, select a job, and click "Apply."</p>
        </div>
        <div class="faq-item">
            <h3>Can I track my application status?</h3>
            <p>Yes, you can track your application status by visiting the "Profile" section after logging in.</p>
        </div>
    </section>

    <section class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us at <a href="mailto:support@synthetiq.com">support@synthetiq.com</a>.</p>
    </section>
</main>

<?php include('../src/templates/footer.php'); ?>
