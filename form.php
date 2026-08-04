<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <label>first name:</label><br>
        <input type="text" name="fname"><br>
        <label>last name:</label><br>
        <input type="text" name="lname"><br>
        <label>gender:</label><br>
        <input type="radio" name="gender" id="male"value="male">
        <label for="male">male</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">female</label><br>
        <label>skill:</label><br>
        <input type="checkbox" name="skill" id="html">
        <label for="html">HTML</label>
        <input type="checkbox" name="skill" id="css">
        <label for="css">CSS</label>
        <input type="checkbox" name="skill" id="js">
        <label for="js">JS</label><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>