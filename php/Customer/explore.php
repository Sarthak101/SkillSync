<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Location-Based Job Search</title>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="../../css/explore.css">
</head>
<body>
    <div class="container">
        <div class="location-box">
            <input id="location-input" type="text" placeholder="Search for a location..." readonly>
            <button onclick="openModal()">Select Location</button>
        </div>

        <div class="job-box-container">
            <div class="job-box" id="job-box-1">
                <img src="https://via.placeholder.com/300x200" alt="Job Image">
                <div class="job-details">
                    <h3>Job Title 1</h3>
                    <p>Company A</p>
                    <p>Location A</p>
                    <p>Description of Job 1</p>
                </div>
            </div>
            <div class="job-box" id="job-box-2">
                <img src="https://via.placeholder.com/300x200" alt="Job Image">
                <div class="job-details">
                    <h3>Job Title 2</h3>
                    <p>Company B</p>
                    <p>Location B</p>
                    <p>Description of Job 2</p>
                </div>
            </div>
            <div class="job-box" id="job-box-3">
                <img src="https://via.placeholder.com/300x200" alt="Job Image">
                <div class="job-details">
                    <h3>Job Title 3</h3>
                    <p>Company C</p>
                    <p>Location C</p>
                    <p>Description of Job 3</p>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div id="map" class="map-container"></div>
            <button onclick="selectLocation()">Select This Location</button>
        </div>
    </div>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <script src="script.js"></script>
</body>
</html>
