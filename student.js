document.getElementById('gradeForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Get the values from the form
    const studentName = document.getElementById('studentName').value;
    const subject = document.getElementById('subject').value;
    const grade = document.getElementById('grade').value.toUpperCase();  // Convert to uppercase
    
    // Map letter grades to numeric values
    const gradeToNumber = {
        'A': 4,
        'B': 3,
        'C': 2,
        'D': 1,
        'F': 0
    };

    // Check if the entered grade is valid
    if (gradeToNumber[grade] === undefined) {
        alert("Invalid grade! Please enter a letter grade (A, B, C, D, F).");
        return;
    }

    // Add the grade to the table
    const table = document.getElementById('gradesTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
    newRow.innerHTML = `
        <td>${studentName}</td>
        <td>${subject}</td>
        <td>${grade}</td>
    `;

    // Store the numeric grade in an array for average calculation
    const numericGrades = Array.from(table.rows).map(row => gradeToNumber[row.cells[2].innerText]);

    // Calculate the average
    const average = numericGrades.reduce((acc, curr) => acc + curr, 0) / numericGrades.length;

    // Display the average grade
    const averageGradeElement = document.getElementById('averageGrade');
    averageGradeElement.innerText = isNaN(average) ? "N/A" : average.toFixed(2);
});
