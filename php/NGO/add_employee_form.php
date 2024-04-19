<!-- add_employee_form.php -->
<form action="add_employee.php" method="POST">
    <div class="form-group">
        <label for="empName">Name:</label>
        <input type="text" class="form-control" id="empName" name="empName" required>
    </div>

    <div class="form-group">
        <label for="empCity">City:</label>
        <input type="text" class="form-control" id="empCity" name="empCity" required>
    </div>

    <div class="form-group">
        <label for="empMobile">Mobile:</label>
        <input type="text" class="form-control" id="empMobile" name="empMobile" required>
    </div>

    <div class="form-group">
        <label for="empEmail">Email:</label>
        <input type="email" class="form-control" id="empEmail" name="empEmail" required>
    </div>

    <div class="form-group">
        <label for="empPassword">Password:</label>
        <input type="password" class="form-control" id="empPassword" name="empPassword" required>
    </div>

    <div class="form-group">
        <label for="empZip">Zip:</label>
        <input type="text" class="form-control" id="empZip" name="empZip" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Employee</button>
</form>
<div id="message" style="display: none;"></div>

<script>
    // Script to handle form submission and display message
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("addEmployeeForm");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            // Submit form data using Fetch API
            fetch("add_employee.php", {
                method: "POST",
                body: new FormData(form)
            })
            .then(response => {
                if (response.ok) {
                    // Display popup box with "OK" button
                    alert("Employee added successfully!");
                    form.reset(); // Reset form fields
                } else {
                    // Display error message in console
                    console.error("Error adding employee: " + response.statusText);
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        });
    });
</script>