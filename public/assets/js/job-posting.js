function showPopup() {
    document.getElementById('upload-popup').style.display = 'flex';
}

function hidePopup() {
    document.getElementById('upload-popup').style.display = 'none';
}

function addJobCard(event) {
    event.preventDefault();

    // Get form values
    const jobTitle = document.getElementById('job-title').value;
    const companyName = document.getElementById('company-name').value;
    const description = document.getElementById('description').value;
    const duration = document.getElementById('duration').value;
    const location = document.getElementById('location').value;
    const workMode = document.getElementById('work-mode').value;

    // Create a new job card
    const jobCard = document.createElement('div');
    jobCard.classList.add('job-card');

    jobCard.innerHTML = `
        <div class="job-info">
            <h3>${jobTitle}</h3>
            <p>${companyName}</p>
            <p>Location: ${location}</p>
            <p>Work Mode: ${workMode}</p>
            <button class="details-button">Details</button>
            <div class="job-actions">
                <span class="edit-button">Edit</span>
                <span class="delete-button">Delete</span>
            </div>
        </div>
        <div class="response-count">
            Responses: 0
        </div>
    `;

    // Append the new card to the main content section
    const mainContent = document.querySelector('.main-content');
    mainContent.appendChild(jobCard);

    // Attach event listeners for edit and delete buttons
    const editButton = jobCard.querySelector('.edit-button');
    const deleteButton = jobCard.querySelector('.delete-button');

    editButton.addEventListener('click', () => editJobCard(jobCard));
    deleteButton.addEventListener('click', () => deleteJobCard(jobCard));

    // Clear the form and hide the popup
    document.querySelector('form').reset();
    hidePopup();
}

function editJobCard(jobCard) {
    // Populate the form with the existing job details
    const jobTitle = jobCard.querySelector('.job-info h3').textContent;
    const companyName = jobCard.querySelector('.job-info p:nth-of-type(1)').textContent;
    const location = jobCard.querySelector('.job-info p:nth-of-type(2)').textContent.replace('Location: ', '');
    const workMode = jobCard.querySelector('.job-info p:nth-of-type(3)').textContent.replace('Work Mode: ', '');

    document.getElementById('job-title').value = jobTitle;
    document.getElementById('company-name').value = companyName;
    document.getElementById('description').value = description; // Add this line to populate the description field
    document.getElementById('duration').value = duration; // Add this line to populate the duration field
    document.getElementById('location').value = location;
    document.getElementById('work-mode').value = workMode;

    // Remove the old job card and show the popup for editing
    jobCard.remove();
    showPopup();
}

function deleteJobCard(jobCard) {
    // Remove the job card from the main content
    jobCard.remove();
}

// Attach event listeners to edit and delete buttons
const editButtons = document.querySelectorAll('.edit-button');
const deleteButtons = document.querySelectorAll('.delete-button');

editButtons.forEach(button => button.addEventListener('click', () => editJobCard(button.parentElement.parentElement.parentElement)));
deleteButtons.forEach(button => button.addEventListener('click', () => deleteJobCard(button.parentElement.parentElement.parentElement)));



