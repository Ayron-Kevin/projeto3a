<style>
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, blue, black);
        }
        center{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input[type=text]{
            padding: 12px;
            border:none;
            outline:none;
            font-size: 13px;
            
        }
        input{
            background-color: white;
            border: none;
            padding: 10px;
            width: 85%;
            border-radius: 10px;
            font-size: 13px;
        }
        input[type=submit]:hover{
            background-color: rgb(73, 2, 73);
            cursor: pointer;
        }
        
    </style>
<html>

<body>
    <center>
<form id= "cadastro" action="cadastro.php" method= "POST">
nome: <input type= "text" name="nome" Required><br>
login:<input type= "text" name= "login" required><br>
senha:<input type= "password" name= "senha" required><br><br>
<input type= "submit" id="cadastrar" value="cadastrar">
</center>
</body>
</html>