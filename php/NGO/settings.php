<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../../css/med_settings.css">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="settings-sidebar">
                    <h3>Settings</h3>
                    <ul class="list-unstyled">
                        <li><a href="#profile">Edit Profile</a></li>
                        <!-- <li><a href="#employees">Employees</a></li> -->
                        <li><a href="#account">Account</a></li>
                        <li><a href="#privacy">Privacy</a></li>
                        <li><a href="#notifications">Notifications</a></li>
                        <li><a href="#security">Security</a></li>
                        <li><a href="#preferences">Preferences</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="settings-content">
                    <?php include('profile_settings.php');?>
                    <!-- <?php include('employees_settings.php');?> -->
                    <?php include('account_settings.php');?>
                    <?php include('privacy_settings.php');?>
                    <?php include('notifications_settings.php');?>
                    <?php include('security_settings.php');?>
                    <?php include('preferences_settings.php');?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to show the selected section
            function showSelectedSection(hash) {
                $('.settings-content div').hide();
                $(hash).show();
            }

            // Check if URL has hash
            var hash = window.location.hash;
            if (hash) {
                showSelectedSection(hash);
            } else {
                // If no hash, default to profile
                var defaultHash = '#profile';
                showSelectedSection(defaultHash);
            }

            // Handle click events on sidebar links
            $('.settings-sidebar a').on('click', function(e) {
                e.preventDefault();
                var target = $(this).attr('href');
                showSelectedSection(target);
            });

            // Show Employees section when clicked
            // $('a[href="#employees"]').on('click', function() {
            //     $('#employees').show();
            // });
        });
    </script>
</body>
</html>