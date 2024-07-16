<html>
<title>Welcome</title>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    animation: backgroundAnimation 5s infinite alternate;
}

@keyframes backgroundAnimation {
    0% { background: linear-gradient(to right, #ff7e5f, #feb47b); }
    100% { background: linear-gradient(to right, #feb47b, #ff7e5f); }
}

#notification {
    background-color: #fff;
    color: #333;
    padding: 30px;
    width: 450px;
    border: 1px solid #dedede;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    text-align: center;
    animation: fadeIn 1s ease-in-out, shake 0.5s;
}

@keyframes shake {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

#notification h5 {
    margin: 0 0 20px;
    font-size: 26px;
    font-weight: bold;
}

#notification img {
    margin: 20px 0;
    width: 60px;
    height: 60px;
    animation: rotate 2s linear infinite;
}

@keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

#notification button {
    background-color: #4CAF50;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
    font-size: 16px;
}

#notification button:hover {
    background-color: #45a049;
}
</style>
<body>
<div id="notification">
    <h5>CONGRATULATION !</h5>
    <img src="images/progress.gif" alt="Progress">
    <br/>
    <p>Instalasi telah berhasil! Folder install akan dihapus untuk keamanan.</p>
    <a href="../index.php"><button>Login</button></a>
</div>
</body>
</html>
