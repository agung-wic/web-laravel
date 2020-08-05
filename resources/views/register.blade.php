<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Dasar</title>
</head>
<body>
    <h1><strong>Buat Account Baru!</strong></h1>
    <h2><strong>Sign Up Form</strong></h2>
    <form action="welcome.html" method="POST">
        <label for="first-name">First name:</label><br><br>
        <input type="Text"><br><br>
        <label for="last-name">Last name:</label><br><br>
        <input type="Text"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporeans">Singaporeans</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>            
        </select><br><br>
        <label for="language">Language spoken:</label><br><br>
        <input type="checkbox" id="bahasa-1" name="bahasa-1" value="bahasa-indonesia">
        <label for="bahasa-1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="bahasa-2" name="bahasa-2" value="english">
        <label for="bahasa-2">English</label><br>
        <input type="checkbox" id="bahasa-3" name="bahasa-3" value="other">
        <label for="bahasa-3">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio-text" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
</body>
</html>