// Handle Profile Image Upload
const profileImage = document.getElementById('profileImage');
const profileImageUpload = document.getElementById('profileImageUpload');

profileImage.addEventListener('click', () => {
    profileImageUpload.click();
});

profileImageUpload.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            profileImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});

// Handle Resume Upload
const resumeUpload = document.getElementById('resumeUpload');
const resumeStatus = document.getElementById('resumeStatus');

resumeUpload.addEventListener('change', function() {
    const fileName = this.files[0].name;
    resumeStatus.textContent = `Resume Uploaded: ${fileName}`;
});

// Handle Settings Save Button
const saveSettingsBtn = document.querySelector('.save-settings-btn');

saveSettingsBtn.addEventListener('click', () => {
    alert('Settings have been saved!');
});

// Smooth Scrolling for Navigation
const navLinks = document.querySelectorAll('.nav a');

navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetSection = document.querySelector(targetId);

        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});
