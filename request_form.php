<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Request Sign-Up Form </title>
</head>
<body>

    <h1> Request Account </h1>

    <form method="post" action="send-email.php">
    <label for ="name"> Name </label>
    <input type ="text" name="name" id="name" required> 
    
        <label for="email"> Email</label>
        <input type ="email" name="email" id="email" required></label>

        <label for ="subject"> Subject </label>
        <input type ="text" name="subject" id="subject" required> 

        <label for="message"> Message</label>
        <textarea name="message" id="message" required></textarea>

        <br>

        <button> Submit </button>

    </form>
    
    
</body>
</html>