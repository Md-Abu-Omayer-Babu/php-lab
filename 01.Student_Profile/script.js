function validateForm() {
    const form = document.forms["studentForm"];
    const requiredFields = ["name", "roll", "reg", "dept", "session", "email", "phone", "dob"];
    for (let fieldName of requiredFields) {
        let field = form[fieldName];
        if (!field.value.trim()) {
            alert(`Please fill out the ${fieldName} field.`);
            field.focus();
            return false;
        }
    }

    const email = form["email"].value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        form["email"].focus();
        return false;
    }

    const phone = form["phone"].value.trim();
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Phone number must be exactly 10 digits.");
        form["phone"].focus();
        return false;
    }

    const courses = form["courses[]"];
    let courseChecked = false;
    if (courses.length) {
        for (let checkbox of courses) {
            if (checkbox.checked) {
                courseChecked = true;
                break;
            }
        }
    } else if (courses.checked) {
        courseChecked = true;
    }
    if (!courseChecked) {
        alert("Please select at least one course.");
        return false;
    }

    const optional = form["optional"];
    let optionalChecked = false;
    for (let radio of optional) {
        if (radio.checked) {
            optionalChecked = true;
            break;
        }
    }
    if (!optionalChecked) {
        alert("Please select an optional course.");
        return false;
    }

    return true;
}