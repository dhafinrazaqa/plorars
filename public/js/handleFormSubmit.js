function handleFormSubmit(formId, urlRoute, errorMessageId) {
    document.getElementById(formId).addEventListener("submit", function (e) {
        e.preventDefault();
        console.log(`Submitting form: ${formId}`);

        let formData = new FormData(this);
        console.log("Form data prepared:", formData);

        fetch(urlRoute, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                Accept: "application/json",
            },
            body: formData,
        })
            .then((response) => {
                console.log("Response received:", response);
                return response.json();
            })
            .then((data) => {
                console.log("Data received:", data);
                if (data.success) {
                    console.log("Submission successful, redirecting...");
                    window.location.href = data.redirect || "/";
                } else {
                    console.log("Submission failed:", data.message);
                    document.getElementById(errorMessageId).innerText =
                        data.message ||
                        `${formId.replace("-form", "")} failed.`;
                }
            })
            .catch((error) => console.error("Error during fetch:", error));
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
