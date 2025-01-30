

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banadir School Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #0b3d91, #8b0000);
            color: white;
            text-align: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
        }
        .header img {
            height: 50px;
        }
        .header h1 {
            margin: 0;
        }
        .header button {
            background: white;
            color: black;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        .table-container {
            margin: 20px;
            background: white;
            color: black;
            padding: 15px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
        }
        .footer p {
            margin: 5px;
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .footer a img {
            width: 20px;
            vertical-align: middle;
        }
        .footer span {
            font-weight: bold;
        }
        .id-section {
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 8px;
        }
        .id-section img {
            width: 100px;
            height: auto;
            border-radius: 50%;
        }
        .id-section p {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
    <script>
        function calculateResults() {
            let marks = document.querySelectorAll(".marks");
            let totalMarks = 0;
            marks.forEach(mark => totalMarks += parseInt(mark.innerText));
            
            let gpa = (totalMarks / (marks.length * 100)) * 4;
            let grade = gpa >= 3.7 ? "A" : gpa >= 3.0 ? "B" : gpa >= 2.0 ? "C" : "D";
            
            document.getElementById("gpa").innerText = gpa.toFixed(2);
            document.getElementById("grade").innerText = grade;
            document.getElementById("totalMarks").innerText = totalMarks;
        }

        function printPage() {
            window.print();
        }

        window.onload = calculateResults;
    </script>
</head>
<body>
    <div class="header">
        <img src="images.jpg" alt="School Logo">
        <h1>Banadir School BEST</h1>
        <button onclick="printPage()">Print</button>
    </div>
    
    <div class="id-section">
        <img src="MAN.JPG" alt="MAN.JPG"> <!-- Beddel halkan sawirka -->
        <H1>Mohamed Abdulkadir Mohamed</H1>
        <p>ID NO: 0021</p>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <th>Maadada</th>
                <th>Buntada</th>
                <th>Darajada</th>
                <th>Fasalka</th>
                <th>Marks</th>
            </tr>
            <tr>
                <td>WINDOW 10</td>
                <td>A</td>
                <td>90</td>
                <td>Form 4</td>
                <td class="marks">95</td>
            </tr>
            <tr>
                <td>M-S WORD</td>
                <td>B</td>
                <td>80</td>
                <td>Form 4</td>
                <td class="marks">85</td>
            </tr>
            <tr>
                <td>M-S EXCEL</td>
                <td>B</td>
                <td>85</td>
                <td>Form 4</td>
                <td class="marks">88</td>
            </tr>
            <tr>
                <td>M-S POWER POINT</td>
                <td>A</td>
                <td>95</td>
                <td>Form 4</td>
                <td class="marks">92</td>
            </tr>
        </table>
    </div>
    
    <div class="footer">
        <p><span>GPA:</span> <span id="gpa">0.0</span> | <span>Grade:</span> <span id="grade">N/A</span> | <span>Total Marks:</span> <span id="totalMarks">0</span></p>
        <p>
            Contact: school@gmail.com | 
            <a href="https://www.facebook.com/KulmisSkillsTrainingAcdemy/" target="_blank">
                <img src="facebook.jpg" alt="Facebook"> Facebook
            </a> |
            <a href="https://wa.me/252610448092" target="_blank">
                <img src="whatsapp.jpg" alt="WhatsApp"> WhatsApp
            </a>
        </p>
    </div>
</body>
</html>
