<?php
$pageTitle = "Home";
include "view-header.php";
?>

<style>

    .card {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        font-family: Georgia, serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
        color: #333;
    }

    .text {
        text-align: center;
        padding: 30px 0;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }

    .text h1 {
        font-size: 2.5em;
        margin: 0;
    }

    .text p {
        font-size: 1.2em;
    }

    .features {
        margin-top: 20px;
    }

    .features h2 {
        font-size: 1.8em;
        color: #0056b3;
    }

    .features ul {
        list-style-type: none;
        padding: 0;
    }

    .features li {
        background-color: #e9ecef;
        margin: 5px 0;
        padding: 10px;
        border-radius: 5px;
    }

    .cta {
        text-align: center;
        margin-top: 30px;
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

<div class="card">
    <header class="text">
        <h1>Seattle Grace Hospital Database</h1>
        <p>Welcome to the centralized database for managing doctor and patient information</p>
    </header>

    <main>
        <section class="features">
            <h2>Features</h2>
            <ul>
                <li>View and manage patient records</li>
                <li>Assign doctors to cases</li>
                <li>Secure access to medical histories</li>
                <li>Generate reports and summaries</li>
            </ul>
        </section>

        <section class="cta">
            <p>Start by navigating to the <a href="courses.php">Patients</a> or <a href="instructors.php">Doctors</a> sections.</p>
        </section>
    </main>
</div>

<?php
include "view-footer.php";
?>
