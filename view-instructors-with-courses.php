<h1 class="text-center">All Records</h1>

<!-- Container with blue background -->
<div style="padding: 20px;">
    <div></div> <!-- Empty div to balance the layout -->
    <?php include "view-instructors-with-courses-newform.php"; ?>  

    <?php while ($instructor = $instructors->fetch_assoc()) { ?>
    <div class="card border-info m-2" style="background-color: #ffffff;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $instructor['doctor_name']; ?></h5>
            <p class="card-text">Office: <?php echo $instructor['office_number']; ?></p>
            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $instructor['doctor_id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $instructor['doctor_id']; ?>">
                View Patients
            </button>
            <div class="collapse mt-3" id="collapse<?php echo $instructor['doctor_id']; ?>">
                <div class="card card-body">
                    <ul class="list-group">
                        <?php
                        $courses = selectCoursesByInstructor($instructor['doctor_id']);
                        while ($course = $courses->fetch_assoc()) {
                        ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span><?php echo $course['patient_name']; ?> - <?php echo $course['room']; ?> - <?php echo $course['day_time']; ?></span>
                            <div class="d-flex">
                                <a href="edit_url" class="btn btn-warning btn-sm me-2">Edit</a>
                                <form method="post" action="" onsubmit="return confirm('Are you sure?');">
                                    <input type="hidden" name="sid" value="<?php echo $course['nurse_id']; ?>">
                                    <input type="hidden" name="actionType" value="Delete">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Org Chart with border and opaque white background -->
    <div class="d-flex justify-content-center mb-3">
        <div class="card" style="width: 100%; max-width: 800px; border: 1px solid #17a2b8; background-color: rgba(255, 255, 255, 0.8);">
            <div class="card-body">
                <?php include "org-chart.php"; ?>
            </div>
        </div>
    </div>
</div>
