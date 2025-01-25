function validateForm() {
    var urlInput = document.getElementById("longUrlInput");
    var errorSpan = document.getElementById("urlError");
    var urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;

    if (!urlPattern.test(urlInput.value)) {
        errorSpan.textContent = "Invalid URL format. Please enter a valid URL.";
        return false;
    }

    errorSpan.textContent = "";
    return true;
}

function copyToClipboard() {
    var shortenedUrlInput = document.getElementById("shortenedUrlInput");
    shortenedUrlInput.select();
    document.execCommand("copy");
}

document.getElementById("shortenForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var form = this;
    var formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log("Received shortened URL:", data); // Log the received data for debugging
        var shortenedUrlInput = document.getElementById("shortenedUrlInput");
        shortenedUrlInput.value = data;
        var shortenedUrlContainer = document.getElementById("shortenedUrlContainer");
        shortenedUrlContainer.style.display = "block";
    })
    .catch(error => {
        console.error('Error:', error);
    });
});