<!DOCTYPE html>
<html>
    <head>
        <title>Silakan Login</title>
        <style type="text/css">
        body{
            background-image: url(logo.png);
            background-attachment: fixed;
            background-size: 100% 100%;
            margin-top: 10%;
            margin-left: 35%;
            height: 270px;
            font-family: sans-serif;
        }
        .kamu{
            background-color: #ff93c1;
            width: 350px;
            padding: 26px;
            box-sizing: border-box;
            text-align: center;
            border: 1px solid #ff0066;
            border-radius: 10px;
        }
        .kamu .input-group{
            position: relative;
            width: 100%;
            margin-bottom: 25px;
        }
        .kamu .input-group input{
            height: 50px;
            width: 100%;
            padding: 0 20px;
            box-sizing: border-box;
            font-size: 18px;
            border: 1px solid pink;
            border-radius: 10px;
        }
        .kamu .input-group span{
            position: absolute;
            top: 12px;
            left: 20px;
            padding: 4px;
            text-transform: capitalize;
            background-color: rgb(255,192,203,0.9);
            border-radius: 4px;
            transition: 0.5s;
        }
        .kamu .input-group input:focus ~ span,
        .kamu .input-group input:valid ~ span{
            top: -12px;
            left: 20px;
            font-size: 12px;
            background-color: rgb(255,192,203,0.9);
            padding: 2px 4px;
            border-radius: 5px;
            border: 1px solid rgb(255,192,203,0.9);
        }
        .kamu .input-group input[type="submit"]{
            background-color: rgb(199,21,133);
            border: none;
            text-transform: uppercase;
            font-weight: 12px;
            cursor: pointer;
            width: 40%;
            transition: 0.5s;
        }
        .kamu .input-group input[type="submit"]:hover{
            width: 100%;
            color: black;
        }
        </style>
    </head>

<body>
    <div class="kamu">
        <form method="POST" action="simpan.php">
            <h2>LOGIN</h2>
            <div class="input-group">
                <input type="text" name="username" required="">
                <span> Username </i></span>
            </div>
            <div class="input-group">
                <input type="password" name="password" required="">
                <span> Password </i></span>
            </div>
            <div class="input-group">
                <input type="submit" value="login">
            </div>
        </form>
        <form method="post" action="/E-Store/Register/">
            <input type="submit" value="Create a new account">
        </form>
    </div>
</body>
</html>