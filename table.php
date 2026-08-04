<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table th, td{
            border: 1px solid black;
            border-collapse: collapse;
            
        }

        table {
            width: 100%;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>gender</th>
        </tr>
        <tr>
            <td>John</td>
            <td>25</td>
            <td>Male</td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>30</td>
            <td>Female</td>
        </tr>
    </table>
<br><br>
    <table>
        <tr>
            <th rowspan="2">student name</th>
            <th colspan="2">parents name</th>
        </tr>
        <tr>
            <th>father</th>
            <th>mother</th>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>Jim Doe</td>
            <td>Jane Doe</td>
        </tr>
    </table>
</body>
</html>