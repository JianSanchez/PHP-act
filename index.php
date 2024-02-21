<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sanchez part sa CRUD</title>
</head>
<body>
    <div class="container-lg">
        <form action="process.php" method="post">
        <input type="text" name="userName" placeholder="Username">
        <br>
        <input type="text" name="userPassword" placeholder="Password">
        <br>
        <input type="text" name="email" placeholder="Email">
        <br>
        <input type="text" name="firstname" placeholder="Firstname">
        <br>
        <input type="text" name="lastname" placeholder="Lastname">
        <br>
        <input type="submit" name="submit_Cred">
        <select name="roles">
            <option value="Student">Student</option>
            <option value="Admin">Admin</option>
        </select>
        

        </form>
    </div>
    


</body>
</html>