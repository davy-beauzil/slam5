<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chat.css">
</head>
<body onload="getUsers()">
    <div class="users">
        <div class="title-section">Users</div>
        <!--<a href="#" class="user">Nom d'utilisateur</a>-->
        <input class="btn" type="button" onClick="getUsers()" value="Refresh">
    </div>

    <div class="messages">
        <div class="title-section">Messages</div>
        <textarea name="textareaMessage" id="textareaMessage" cols="60" rows="5"></textarea>
        <input type="button" onClick="" value="Refresh">
        <input type="button" onClick="" value="Send">
    </div>
    
    <script src="script.js"></script>
    
</body>
</html>