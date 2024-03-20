<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/Customer/dashCustomer.css">
    <link rel="icon" type="image/x-icon" href="../../public/Icons/Bgtp.ico">

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>SkillSync</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../../public/Icons/logo.png" alt="logo">
                </span>

                <div class="text logo-text">
                    <span class="name">SkillSync</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link" >
                        <a href="#" onclick="loadIframe('dashboard.php')" >
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                        <span class="tooltip">Dashboard</span>
                    </li>

                    <li class="nav-link">
                        <a href="#" onclick="loadIframe('explore.php')">
                            <i class='bx bx-compass icon'></i>
                            <span class="text nav-text">Explore</span>
                        </a>
                        <span class="tooltip">Explore</span>
                    </li>


                    <li class="nav-link">
                        <a href="#" onclick="loadIframe('CustomerRequests.php')">
                            <i class='bx bx-chat icon'></i>
                            <span class="text nav-text">Requests</span>
                        </a>
                        <span class="tooltip">Requests</span>
                    </li>

                    <li class="nav-link">
                        <a href="#" onclick="loadIframe('settings.php')">
                            <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">Settings</span>
                        </a>
                        <span class="tooltip">Settings</span>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="base-login.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                    <span class="tooltip">Logout</span>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">

        <div id = "frame" ></div>
    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
        loadIframe('dashboard.php'); //Default Loaded Dashboard
        function loadIframe(src) {
        removeIframe();
        var iframeContainer = document.getElementById('frame');

        iframeContainer.innerHTML = '<iframe id="framenew" src="' + src + '"width=100% frameborder="0"  "></iframe>';
    }
    
        function removeIframe() {
            var iframeContainer = document.getElementById('frame');
            iframeContainer.innerHTML = ''; // Remove the iframe by clearing the container

        }
    </script>

</body>

</html>