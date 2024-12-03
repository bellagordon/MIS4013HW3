
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<html>

<style>

    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .hero, .cta {
        background-color: rgba(255, 255, 255, 0.8); 
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .hero {
        text-align: center;
        padding: 30px 20px;
    }

    .hero h1 {
        font-size: 2.5em;
        margin: 0;
        color: #007bff;
    }

    .hero p {
        font-size: 1.5em;
        color: #333;
    }

    .cta {
        text-align: center;
        font-size: 1.5em;
        m
    }

    .cta a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .cta a:hover {
        text-decoration: underline;
    }

    .schedule-heading {
        font-weight: bold;
        font-size: 1.50em;
    }
</style>

<div class="container">
    <header class="hero">
        <h1>Seattle Grace Hospital Database</h1>
        <p>Welcome to the centralized database for managing doctor and patient information</p>
    </header>
    <main>
        <section class="cta">
            <p>Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructor.php">Doctors</a> sections.</p>
            <p class="schedule-heading">Today's Schedule</p>
        </section> 
        <section>
            <?php include "timesheet.php"; ?>
        </section>
    </main>
</div>
</body>
</html>
<?php
include "view-footer.php";
?>
