<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuntoDos</title>
</head>

<body style= "font-family:comfortaa; margin:200px;">

<div>

    <h1 style="font-size:40px;
               color: #0092ff">
        Calcula aquí tu IMC - Bodytech
    </h1>
    <hr>
    <br>
    <form style="" method="POST">
        <div>
            <label for="peso" 
            style= "font-size:15px"> Por favor digita tu peso </label>
            <input type="text" 
            name="peso" 
            style="font-family:comfortaa;
            border-radius: 20px;
            width:53px;
            height:25px;" 
            placeholder="  Ej. 70 ">
        </div>
        <br>
        <div>
            <label for="estatura" style="font-size:15px"> Por favor digita tu Estatura</label>
            <input type="text" 
            name="estatura" 
            style="font-family:comfortaa;
            border-radius: 20px;
            width:55px;
            height:25px;" 
            placeholder="  Ej. 1.70">
        </div>
        <br>
        <button style="background-color:#0092ff;
           color: #FFFFFF; 
           font-family:comfortaa; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 8px;" name="IMC" > Calcula tu índice de masa corporal </button> 
    </form>
    <br>
    <hr>
    <br>
    <div style="font-size:15px">
        <?php 
            if(isset($_POST["IMC"])){
                $peso=$_POST["peso"];
                $estatura=$_POST["estatura"];
                $IMC=$peso/($estatura*$estatura);
                echo("Su índice de masa corporal es de " .$IMC);
            }
        ?>
    </div>
    <br>
    <div style="font-size:15px">
        <?php
            if(isset($_POST["IMC"])){
                if ($IMC<18.5) {
                    echo("Tu peso es insuficiente.");
                }
                if (18.5<$IMC && $IMC<24.9) {
                    echo("Tienes un peso normal.");
                }
                if (25<$IMC && $IMC<26.9) {
                    echo("Tienes sobrepeso grado I.");
                }
                if (27<$IMC && $IMC<29.9) {
                    echo("Tienes sobrepeso grado II (preobesidad).");
                }            
                if (30<$IMC && $IMC<34.9) {
                    echo("Tienes obesidad de tipo I.");
                }
                if (35<$IMC && $IMC<39.9) {
                    echo("Tienes obesidad de tipo II.");
                }
                if (40<$IMC && $IMC<49.9) {
                    echo("Tienes obesidad de tipo III, obesidad mórbida.");
                }
                if (50<$IMC) {
                    echo("Tienes obesidad de tipo IV, obesidad extrema.");
                }
            }
        ?>
    </div>
</div>    
</body>
</html>