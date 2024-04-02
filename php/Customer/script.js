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

    // Update the location input box with a human-readable address
    // Using reverse geocoding with Mapbox Geocoding API
    fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${selectedLocation.lng},${selectedLocation.lat}.json?types=address&access_token=${mapboxgl.accessToken}`)
        .then(response => response.json())
        .then(data => {
            if (data.features.length > 0) {
                const locationName = data.features[0].place_name;
                document.getElementById('location-input').value = locationName;
            } else {
                document.getElementById('location-input').value = "Unknown Location";
            }
        })
        .catch(error => {
            console.error('Error fetching location:', error);
        });

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

// Function to resize the modal map on modal open
function resizeModalMap() {
    modalMap.resize();
}

// // When the modal map is clicked, update the selected-location input box
// modalMap.on('click', function(e) {
//     var clickedLocation = e.lngLat;

//     fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${clickedLocation.lng},${clickedLocation.lat}.json?types=address&access_token=${mapboxgl.accessToken}`)
//         .then(response => response.json())
//         .then(data => {
//             if (data.features.length > 0) {
//                 const locationName = data.features[0].place_name;
//                 document.getElementById('selected-location').value = locationName;
//             } else {
//                 document.getElementById('selected-location').value = "Unknown Location";
//             }
//         })
//         .catch(error => {
//             console.error('Error fetching location:', error);
//         });
// });


// Assuming you have already initialized your map as 'map'

// Add a click event listener to the map
modalMap.on('click', function(e) {
    // 'e' is the event object, and e.lngLat is the clicked coordinates
    var clickedLocation = e.lngLat;
    
    // You can now use 'clickedLocation' to perform further actions, such as displaying it in an input box, etc.
    console.log('Selected Location:', clickedLocation);
    
    // You can also perform other actions like updating an input box with the clicked location
    updateInputBox(clickedLocation);
});

// Function to update an input box with the clicked location
function updateInputBox(location) {
    // Assuming you have an input box with the id 'selected-location'
    var inputBox = document.getElementById('selected-location');
    
    // Check if the input box exists
    if (inputBox) {
        // Update the input box value with the clicked location
        inputBox.value = JSON.stringify(location);
    }
}
