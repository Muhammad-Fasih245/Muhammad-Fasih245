<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Tracker</title>
    <link rel="stylesheet" href="style6.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <h1>Gradify</h1>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="sky.php">Grade Tracker</a></li>
            <li><a href="about1.html">About</a></li>
            <li><a href="contact1.html">Contact</a></li>
        </ul>
    </nav>
    <br>
    <br>

    <div class="container">
        <header id="home">
            <h1>Student Grade Tracker</h1>
        </header>

        <section class="input-section" id="gradeTracker">
            <h2>Enter Student's Grade</h2>
           
<form action="submit.php" method="post">
    <label>Student Name:</label>
    <input type="text" name="studentName" required><br>

    <label>Subject:</label>
    <input type="text" name="subject" required><br>

    <label>Grade(A, A-, B+, B, B-, C+, C, C-, D, F):</label>
    <input type="text" name="grade" required><br>

    <label>Semester:</label>
    <input type="text" name="semester" required><br>

    <button type="submit" name="submit">Add Grade</button>
</form>

        </section>

        <section class="grades-section">
            <h2>Student Grades</h2>
            <table id="gradesTable">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>Semester</th>
                        <th>Individual GPA</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
            <h3>Average GPA: <span id="averageGrade">N/A</span></h3>
        </section>
    </div>

    <footer id="contact">
        <h3>Contact Us</h3>
        <p>If you have any questions, feel free to <a href="mailto:info@example.com">email us</a>.</p>

    <a href="https://wa.me/yourphonenumber" target="_blank">
        <i class="fab fa-whatsapp" style="font-size: 40px;"></i>
    </a>
    <a href="https://twitter.com/yourusername" target="_blank">
        <i class="fab fa-twitter" style="font-size: 40px;"></i>
    </a>
    <a href="https://instagram.com/yourusername" target="_blank">
        <i class="fab fa-instagram" style="font-size: 40px;"></i>
    </a>
    </footer>

    <script src="student.js"></script>
</body>
</html>
