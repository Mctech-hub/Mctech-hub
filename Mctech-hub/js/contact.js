document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = this;
    const formMessages = document.getElementById('form-messages');
    const buttonText = form.querySelector('.button-text');
    const spinner = form.querySelector('.spinner');
    
    // Show loading state
    buttonText.style.display = 'none';
    spinner.style.display = 'inline-block';
    
    const formData = new FormData(form);
    
    fetch('process_contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        formMessages.innerHTML = data.message;
        formMessages.className = data.success ? 'success-message' : 'error-message';
        
        if (data.success) {
            form.reset();
        }
    })
    .catch(error => {
        formMessages.innerHTML = 'An error occurred. Please try again.';
        formMessages.className = 'error-message';
    })
    .finally(() => {
        // Restore button state
        buttonText.style.display = 'inline-block';
        spinner.style.display = 'none';
    });
});
