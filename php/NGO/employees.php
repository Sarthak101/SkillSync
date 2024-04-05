<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="../../css/med_settings.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dash.php">My Employees</a>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3">
                <div class="settings-sidebar">
                    <h3>Employees</h3>
                    <ul class="list-unstyled">
                        <li><a href="view_all_employees.php">My Employees</a></li>
                        <li><a href="add_employee_form.php">Add New Employee</a></li>
                        <li><a href="edit_employee_details.php">Edit Employee Information</a></li>
                        <li><a href="delete_employee_form.php">Delete Employees</a></li>
                        <!-- Add other functionalities as needed -->
                    </ul>
                </div>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="settings-content" id="all-employees">
                    <!-- This section will be dynamically updated -->
                </div>
            </div>
            <!-- End Main Content -->
        </div>
    </div>

    <!-- jQuery and AJAX Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to load content using AJAX
            function loadContent(url, heading) {
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        // Clear previous content
                        $('#all-employees').empty();

                        // Add heading and data to content
                        $('#all-employees').append("<h2>" + heading + "</h2>");
                        $('#all-employees').append(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Default to showing all employees on page load
            loadContent('view_all_employees.php', "My Employees");

            // Handle click events on sidebar links
            $('.settings-sidebar a').on('click', function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                var heading = $(this).text();
                loadContent(target, heading);
            });
        });
    </script>
</body>
</html>
