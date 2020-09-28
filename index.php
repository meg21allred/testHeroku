<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formGuy.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <label for="comScience">Computer Science</label>
    <input type="radio" name="major" id="comScience" value="Computer Science">
    <label for="webDev">Web Design and Developement</label>
    <input type="radio" name="major" id="webDev" value="Web Design and Developement">
    <label for="comInfo">Computer Science</label>
    <input type="radio" name="major" id="comInfo" value="Computer information technology">
    <label for="comEngine">Computer Science</label>
    <input type="radio" name="major" id="comEngine" value="Computer Engineering">
    <input type="textarea" name="comments" rows="5" cols="40" placeholder="comments...">
    <button type="submit"></button>
    </form>
   
</body>
</html>