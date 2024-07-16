<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #form_login {
            background: #fff;
            padding: 30px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        #form_login h3 {
            margin-bottom: 20px;
            color: #333;
        }
        #form_login input[type="text"],
        #form_login input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        #form_login input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        #form_login input[type="submit"]:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div id="form_login">
        <h3 align="center">Instalasi ...</h3>
        <form method="POST" action="install2.php">
            <label for="host">Host</label>
            <input type="text" id="host" name="host" value="localhost" readonly/><br/>
            <label for="user">Username</label>
            <input type="text" id="user" name="user" value="root" /><br/>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass"/><br/>
            <label for="db">Database Name</label>
            <input type="text" id="db" name="db"/><br/>
            <input type="submit" name="step1" value="Lakukan Instalasi"/>
        </form>
    </div>
</body>
</html>