<?php
error_reporting(0);
$mensaje = $_POST['mensaje'];
if(!empty($mensaje) && strpos($mensaje, '<script>') !== false) {
    echo '<script>alert("Por favor, envía un mensaje válido."); window.location.href = "prueba.php";</script>';
    exit(); 
} else {
    if(!empty($mensaje)){
        $mensaje = "El mensaje es: " . strip_tags($mensaje);
    } else {
        $mensaje = "";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Escribe un comentario</title>
    <style>
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
        .mensaje {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            display: <?php echo empty($mensaje) ? 'none' : 'block'; ?>; 
        }
    </style>
</head>
<body>
    <h1>Escribe un comentario</h1>
    <form action="prueba.php" method="POST">
        <input type="text" id="mensaje" name="mensaje"><br><br>
        <input type="submit" value="Enviar mensaje">
    </form>
    <div class="mensaje"><?php echo $mensaje; ?></div>
</body>
</html>
