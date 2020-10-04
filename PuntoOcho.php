<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuntoOcho</title>

</head>
<body style= "margin:200px;  background-image: url('federacion.jpg'); background-size: cover;"">
    <header>
        <h1 style="font-family: segoe ui;">Federación Nacional de Fútbol - Edad</h1>
    </header>
    
    <hr>
  
    <p style="font-size:20px; font-family: segoe ui;"> Completa los datos de tu fecha de nacimiento</p>
    <form style="font-family: segoe ui;" method="POST">
        <div>
            <label for="dia" style="font-size:15px">¿Que dia naciste?</label>
            <input type="number"
            name="dia"
            style="font-family: segoe ui;
            text-align: center;
            border-radius: 20px;
            width:50px;
            height: 25px;
            font-size:15px;"
            placeholder="9">
        </div>
        <br>
        <div>
            <label for="mes" style="font-size:15px">¿Cual es tu mes de Nacimiento?</label>
            <input type="number"
            name="mes"
            style="font-family: segoe ui;
            border-radius: 20px;
            width:50px;
            text-align: center;
            height: 25px;
            font-size:15px;"
            placeholder="08">
        </div>
        <br>
        <div>
            <label for="año" style="font-size:15px">¿ En que año naciste?</label>
            <input type="number" 
            name="año" 
            style="font-family: segoe ui;
            border-radius: 20px;
            width:50px;
            text-align: center;
            height: 25px;
            font-size:15px;"
            placeholder="1997">
        </div>
        <br>
        <button style="background-color:#00477C;
           color: #FFFFFF; 
           font-family: segoe ui; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 8px;"
           name="boton" > Calcular Edad </button> 
    </form>
    <br>
    <hr>
    <br>
    <div style="font-family: segoe ui;">
    <?php
        if(isset($_POST["boton"])){
            $dia=$_POST["dia"];
            $mes=$_POST["mes"];
            $año=$_POST["año"];
            if ($dia>04 && $mes>10) {
                $año=$año+1;   
            }
            $edad=2020-$año;
            echo("La edad de este jugador es de " .$edad. " años");
        }
    ?>
    </div>  
</body>
        
</html>