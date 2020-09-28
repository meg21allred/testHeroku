<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form -->
    <form action="formGuy.php" method="post">
    
        <!-- name -->
        <label for="name">Enter your name: </label>
        <input type="text" id="name" name="name" placeholder="name"><br><br>
        
        <!-- email -->
        <label for="email">Enter your email: </label>
        <input type="text" name="email" placeholder="email"><br><br>

        <!-- radio buttons -->
        <span>Pick a major:</span><br>
        <input type="radio" name="major" id="comScience" value="Computer Science">
        <label for="comScience">Computer Science</label><br>

        <input type="radio" name="major" id="webDev" value="Web Design and Developement">
        <label for="webDev">Web Design and Developement</label><br>

        <input type="radio" name="major" id="comInfo" value="Computer Information Technology">
        <label for="comInfo">Computer Information Technology</label><br>

        <input type="radio" name="major" id="comEngine" value="Computer Engineering">
        <label for="comEngine">Computer Engineering</label><br><br>

        <!-- comments -->
        <textarea name="comments" rows="5" cols="40" placeholder="comments..."></textarea><br><br>
    
        <!-- submit button -->
        <button type="submit">Submit</button>
    </form>
   
</body>
</html>