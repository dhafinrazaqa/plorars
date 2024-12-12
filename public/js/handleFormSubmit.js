function handleFormSubmit(formId, urlRoute, errorMessageId) {
    document.getElementById(formId).addEventListener("submit", function (e) {
        e.preventDefault();
        let formData = new FormData(this);

        fetch(urlRoute, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                Accept: "application/json",
            },
            body: formData,
        })
            .then((response) => response.json())
            .then((data) => {
                if (data.success) {
                    window.location.href = data.redirect || "/";
                } else {
                    document.getElementById(errorMessageId).innerText =
                        data.message ||
                        `${formId.replace("-form", "")} failed.`;
                }
            })
            .catch((error) => console.error("Error:", error));
    });
}

handleFormSubmit(
    "login-form",
    document.getElementById("login-form").getAttribute("action"),
    "error-message-login"
);
handleFormSubmit(
    "register-form",
    document.getElementById("register-form").getAttribute("action"),
    "error-message-register"
);
