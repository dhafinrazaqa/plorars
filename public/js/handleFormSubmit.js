function handleFormSubmit(formElement, errorElement, processScript) {
    formElement.addEventListener('submit', function(e) {
        e.preventDefault();

        if (formElement.id === 'register-form') {
            
            const password = document.getElementById('passwordInput').value;
            const confirmPassword = document.getElementById('confirmPasswordInput').value;
            const errorMessage = document.getElementById('error-message-register');

            if (password !== confirmPassword) {
                errorMessage.textContent = "Passwords do not match.";
                return;
            }
        }

        const formData = new FormData(formElement);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', processScript);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.setRequestHeader('Accept', 'application/json');

        xhr.onload = () => {
            if (xhr.status === 200) {
                alert("Success!");
                window.location.href = '/dashboard';
            } else {
                errorElement.textContent = 'An error occurred. Please try again.';
            }
        };

        xhr.onerror = () => {
            errorElement.textContent = 'Network Error. Please check your connection.';
        };

        xhr.send(formData);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    handleFormSubmit(
        document.getElementById('register-form'),
        document.getElementById('error-message-register'),
        '{{ route("register") }}'
    );
    handleFormSubmit(
        document.getElementById('login-form'),
        document.getElementById('error-message-login'),
        '{{ route("login") }}'
    );
});

