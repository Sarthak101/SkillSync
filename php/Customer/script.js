// Your Mapbox access token
mapboxgl.accessToken = 'pk.eyJ1IjoiYW5uZWxpenNob25leSIsImEiOiJjbHVhdndnd2EwcWQ0MmlwaWRuM3FuejlrIn0.FuB65lJHGT9krc_Xrb8LtA';

// Initialize the main map
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-74.5, 40], // Default center (New York)
    zoom: 9, // Default zoom level
    // Add navigation controls to the main map
    attributionControl: false
});

// Function to open the modal for location selection
function openModal() {
    document.getElementById('myModal').style.display = 'block';
    // Fit the map to the current modal size
    resizeModalMap();
}

// Function to close the modal
function closeModal() {
    document.getElementById('myModal').style.display = 'none';
}

// Function to select the location and update job boxes
function selectLocation() {
    // Get the selected location from the main map
    var selectedLocation = map.getCenter();

    // Close the modal
    closeModal();

    // Update the location input box
    document.getElementById('location-input').value = selectedLocation.lng + ', ' + selectedLocation.lat;

    // Call your API to get job details based on the selected location
    // Here we are simulating some job data
    var jobsData = [
        { title: 'Job Title 1', company: 'Company A', location: 'Location A', description: 'Description of Job 1' },
        { title: 'Job Title 2', company: 'Company B', location: 'Location B', description: 'Description of Job 2' },
        { title: 'Job Title 3', company: 'Company C', location: 'Location C', description: 'Description of Job 3' }
        // Add more job objects as needed
    ];

    // Update the job boxes with the new job details
    updateJobBox('job-box-1', jobsData[0]);
    updateJobBox('job-box-2', jobsData[1]);
    updateJobBox('job-box-3', jobsData[2]);
}

// Function to update a job box with new data
function updateJobBox(boxId, jobData) {
    var jobBox = document.getElementById(boxId);
    if (jobBox) {
        jobBox.innerHTML = `
            <img src="https://via.placeholder.com/300x200" alt="Job Image">
            <div class="job-details">
                <h3>${jobData.title}</h3>
                <p><strong>Company:</strong> ${jobData.company}</p>
                <p><strong>Location:</strong> ${jobData.location}</p>
                <p>${jobData.description}</p>
            </div>
        `;
    }
}

// Add navigation control to the main map
map.addControl(new mapboxgl.NavigationControl(), 'top-right');

// Initialize the map in the modal
var modalMap = new mapboxgl.Map({
    container: 'map-modal',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-74.5, 40], // Default center (New York)
    zoom: 9, // Default zoom level
    // Add navigation controls to the modal map
    attributionControl: false
});

// When the modal map is clicked, add a marker
modalMap.on('click', function(e) {
    var marker;
    if (marker) {
        marker.remove();
    }
    marker = new mapboxgl.Marker()
        .setLngLat(e.lngLat)
        .addTo(modalMap);
});

// Function to resize the modal map on modal open
function resizeModalMap() {
    modalMap.resize();
}
