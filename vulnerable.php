<?php
error_reporting(0);
$mensaje = $_POST['mensaje'];

if(!empty($mensaje)){
    echo "El mensaje es: " . $mensaje;
    //header("Location: login.html");
    exit();
}else{
    echo("");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Escribe un comentario</title>
    <style>
        /* Estilos para el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        form {
            width: 50%;
            margin: 100px auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #666;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }

    </style>

</head>
<body>
    <h1>Escribe un comentario</h1>
    <form action="vulnerable.php" method="POST">
        <label for="mensaje">Usuario:</label>
        <input type="text" id="mensaje" name="mensaje"><br><br>
        <input type="submit" value="Enviar mensaje">
    </form>
</body>
</html>