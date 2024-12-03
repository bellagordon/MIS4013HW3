<?php
$pageTitle = "Home";
include "view-header.php";
?>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url('https://i.pinimg.com/originals/7d/53/62/7d5362a6efbc8d8b5c1f6b7492e4d20a.jpg') no-repeat center center fixed;
        background-size: cover;
        color: #333;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    .hero, .features, .cta {
        background-color: rgba(255, 255, 255, 0.8); /* Slightly transparent white */
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
    }

    .cta a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .cta a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <header class="hero">
        <h1>Seattle Grace Hospital Database</h1>
        <p>Welcome to the centralized database for managing doctor and patient information</p>
    </header>
    <main>
        <section class="cta">
            <p>Start by navigating to the <a href="patients.php">Patients</a> or <a href="doctors.php">Doctors</a> sections.</p>
            <p>Today's Schedule</p>
        </section>
    </main>
</div>

<?php
include "timesheet.php";
include "view-footer.php";
?>
