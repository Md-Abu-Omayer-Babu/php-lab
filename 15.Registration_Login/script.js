function validateForm() {
    let username = document.forms["regForm"]["username"].value.trim();
    let password = document.forms["regForm"]["password"].value.trim();
    let confirm  = document.forms["regForm"]["confirm_password"].value.trim();
    let email    = document.forms["regForm"]["email"].value.trim();
    let name     = document.forms["regForm"]["name"].value.trim();
    let contact  = document.forms["regForm"]["contact"].value.trim();

    if (!username || !password || !email || !name || !contact) {
        alert("All fields are required.");
        return false;
    }
    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }
    if (password !== confirm) {
        alert("Passwords do not match.");
        return false;
    }
    // Simple email validation without regex
    if (email.indexOf("@") < 1 || email.lastIndexOf(".") < email.indexOf("@") + 2 || email.lastIndexOf(".") === email.length - 1) {
        alert("Invalid email format.");
        return false;
    }
    return true;
}
