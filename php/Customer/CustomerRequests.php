<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Customer/CustomerRequests.css">

    <title>Requests</title>
</head>
<body>
<div class="container">
    <h2>Create Job Posting</h2>
    <form action="#" method="post">
        <label for="jobTitle">Job Title:</label>
        <input type="text" id="jobTitle" name="jobTitle" required>
        
        <label for="company">Company:</label>
        <input type="text" id="company" name="company" required>
        
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        
        <label for="description">Job Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea>
        
        <label for="requirements">Requirements:</label>
        <textarea id="requirements" name="requirements" rows="3" required></textarea>
        
        <label for="salary">Salary:</label>
        <input type="text" id="salary" name="salary">
        
        <input type="submit" value="Create Job Posting">
    </form>
</div>
</body>
</html>