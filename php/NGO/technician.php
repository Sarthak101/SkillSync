<div id="employees" class="section">
    <h2>List of Employees</h2>
    <?php
    $sql = "SELECT * FROM technician_tb";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo '<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>ZIP Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>';
        while($row = $result->fetch_assoc()){
            echo '<tr>';
            echo '<td>'.$row["empid"].'</td>';
            echo '<td>'. $row["empName"].'</td>';
            echo '<td>'.$row["empCity"].'</td>';
            echo '<td>'.$row["empMobile"].'</td>';
            echo '<td>'.$row["empEmail"].'</td>';
            echo '<td>'.$row["empZip"].'</td>';
            echo '<td>';
            echo '<a href="edit_employee.php?empid='.$row["empid"].'" class="btn btn-primary">Edit</a> ';
            echo '<a href="delete_employee.php?empid='.$row["empid"].'" class="btn btn-danger">Delete</a>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        echo "No employees found";
    }
    ?>
</div>
