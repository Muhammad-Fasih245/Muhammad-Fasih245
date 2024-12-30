document.getElementById('gradeForm').addEventListener('submit', function(event) {
    event.preventDefault(); 
    
    const studentName = document.getElementById('studentName').value;
    const subject = document.getElementById('subject').value;
    const grade = document.getElementById('grade').value.toUpperCase(); 
    const semester = document.getElementById('semester').value; 
    
    const gradeToNumber = {
       'A': 4.00,
        'A-': 3.67,
        'B+': 3.33,
        'B': 3.00,
        'B-': 2.67,
        'C+': 2.33,
        'C': 2.00,
        'C-': 1.67,
        'D': 1.00,
        'F': 0.00
    };

    if (gradeToNumber[grade] === undefined) {
        alert("Invalid grade! Please enter a letter grade (A, B, C, D, F).");
        return;
    }

    const table = document.getElementById('gradesTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();
    newRow.innerHTML = `
        <td>${studentName}</td>
        <td>${subject}</td>
        <td>${grade}</td>
         <td>${semester}</td>
        <td>${gradeToNumber[grade].toFixed(2)}</td> 
    `;

    const numericGrades = Array.from(table.rows).map(row => gradeToNumber[row.cells[2].innerText]);

    
    const average = numericGrades.reduce((acc, curr) => acc + curr, 0) / numericGrades.length;

    
    const averageGradeElement = document.getElementById('averageGrade');
    averageGradeElement.innerText = isNaN(average) ? "N/A" : average.toFixed(2);
});
1