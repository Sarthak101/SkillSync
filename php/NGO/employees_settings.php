<div id="employees" style="display:none;">
    <h2>Employees</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Zip Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Database Connection
            include('../dbConnection.php');

            // Fetch Technicians
            $sql = "SELECT * FROM technician_tb";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["empid"] . "</td>";
                    echo "<td>" . $row["empName"] . "</td>";
                    echo "<td>" . $row["empCity"] . "</td>";
                    echo "<td>" . $row["empMobile"] . "</td>";
                    echo "<td>" . $row["empEmail"] . "</td>";
                    echo "<td>" . $row["empZip"] . "</td>";
                    echo "<td><a href='#' class='btn btn-primary btn-sm editBtn' data-id='" . $row["empid"] . "' data-bs-toggle='modal' data-bs-target='#editTechnicianModal'>Edit</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No technicians found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Modal for Editing Technician -->
    <div class="modal fade" id="editTechnicianModal" tabindex="-1" aria-labelledby="editTechnicianModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTechnicianModalLabel">Edit Technician</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="editTechnicianModalBody">
                    <!-- Content will be loaded dynamically using AJAX -->
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Handle click events on Edit buttons
        $('.editBtn').on('click', function(e) {
            e.preventDefault();
            var empId = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: 'edit_technician.php',
                data: {
                    empId: empId
                },
                success: function(response) {
                    $('#editTechnicianModal').modal('show');
                    $('#editTechnicianModalBody').html(response);
                }
            });
        });
    });
</script>

</div>
