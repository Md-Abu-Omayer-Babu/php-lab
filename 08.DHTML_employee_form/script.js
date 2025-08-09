function validateForm() {
    const form = document.forms["empForm"];
    if (form.fullname.value.trim() === "") {
        alert("Please enter Full Name");
        form.fullname.focus();
        return false;
    }
    if (form.email.value.trim() === "" || !form.email.value.includes("@")) {
        alert("Please enter a valid Email");
        form.email.focus();
        return false;
    }
    if (form.phone.value.trim().length !== 10 || isNaN(form.phone.value)) {
        alert("Phone number must be exactly 10 digits");
        form.phone.focus();
        return false;
    }
    if (form.department.value.trim() === "") {
        alert("Please enter Department");
        form.department.focus();
        return false;
    }
    if (form.position.value.trim() === "") {
        alert("Please enter Position");
        form.position.focus();
        return false;
    }
    if (form.salary.value.trim() === "" || isNaN(form.salary.value) || Number(form.salary.value) <= 0) {
        alert("Please enter a valid Salary");
        form.salary.focus();
        return false;
    }
    if (form.hire_date.value === "") {
        alert("Please select Hire Date");
        form.hire_date.focus();
        return false;
    }
    if (form.address.value.trim() === "") {
        alert("Please enter Address");
        form.address.focus();
        return false;
    }
    return true;
}
