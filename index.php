
<?php
$pageTitle = "Home";
include "view-header.php";
?>
<html>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fillustrations%2Fplain-blue-background&psig=AOvVaw31hyAIzi_IbeA0zOUMedHx&ust=1733279360260000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNjPnffGiooDFQAAAAAdAAAAABAE') no-repeat center center fixed;
        background-size: cover;
        color: #333;
    }

    .container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
    }

    .hero, .features, .cta {
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
</html>
<?php
include "view-footer.php";
?>
