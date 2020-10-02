<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PuntoUno</title>
</head>

<body style= "margin:200px; margin-top:300px; background-image: url('back1-01_Mesa de trabajo 1.png'); background-size: cover;">


    <h1 style="font-size:40px;
               color: #ffbeb5;
               font-family: sketchy;
               letter-spacing: 10px">
        Realiza Aquí Tus Calculos Matemáticos
    </h1>
    <hr>
    <br>

    <form style="font-family:comfortaa;color: #ffffff;" method="POST">
        <div>
            <label for="numero1">Por favor digita el primer numero</label>
            <input type="text" 
            name="numero1" 
            style="font-family:comfortaa;
            border-radius: 20px;
            width:50px;
            height: 25px;
            border-color: #ffffff;
            background-color: #6b9ef7;" 
            placeholder="  Ej. 1">
        </div>
        <br>
        <div>
            <label for="numero2">Por favor digita el Segundo numero</label>
            <input type="text" 
            name="numero2" 
            style="font-family:comfortaa;
            border-radius: 20px;
            width:50px;
            border-color: #ffffff;
            height:25px;
            background-color: #6b9ef7;" 
            placeholder="  Ej. 5">
        </div>

        <div id= "botones" >
           <button style="background-color:#0092ff;
           color: #FFFFFF; 
           font-family:comfortaa; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 20px;"  
           margin:5px;" name="suma"> ¿Deseas Sumar? </button> 

          <button style="background-color:#0092ff;
           color: #FFFFFF; 
           font-family:comfortaa; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 20px;" 
           name="resta"> ¿Deseas Restar? </button> 

          <button style="background-color:#0092ff;
           color: #FFFFFF; 
           font-family:comfortaa; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 20px;" 
           name="multiplicacion"> ¿Deseas Multiplicar? </button> 
           <button style="background-color:#0092ff;
           color: #FFFFFF; 
           font-family:comfortaa; 
           border-radius: 20px;
           border: none;
           font-size:15px;
           letter-spacing: normal;
           display: inline-block;
           padding: 8px;
           margin-top: 20px;" 
           name="todasOp"> ¿Deseas Hacer Todas las operaciones? </button> 
        </div>
    </form>
    <br>
    <hr>
    <br>
<div style= "font-family: comfortaa;color: #FFFFFF;">
    <div>
        <?php 
            if(isset($_POST["suma"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $suma=$numero1+$numero2;
                echo("El resultado de la suma es " .$suma);
            }
        ?>
    </div>
    <br>
    <div>
        <?php 
            if(isset($_POST["resta"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $resta=$numero1-$numero2;
                echo("El resultado de la resta es " .$resta);
            }
        ?>
    </div>
    <br>
    <div>
        <?php 
            if(isset($_POST["multiplicacion"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $multiplicacion=$numero1*$numero2;
                echo("El resultado de la multiplicación es " .$multiplicacion);
            }
        ?>
    </div>
    <br>
    <div>
        <?php 
            if(isset($_POST["todasOp"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $suma=$numero1+$numero2;
                echo("El resultado de la suma es " .$suma);
            }
        ?>
    </div>
    <br>
    <div>
        <?php 
            if(isset($_POST["todasOp"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $resta=$numero1-$numero2;
                echo("El resultado de la resta es " .$resta);
            }
        ?>
    </div>
    <br>
    <div>
        <?php 
            if(isset($_POST["todasOp"])){
                $numero1=$_POST["numero1"];
                $numero2=$_POST["numero2"];
                $multiplicacion=$numero1*$numero2;
                echo("El resultado de la multiplicación es " .$multiplicacion);
            }
        ?>
    </div>
</div>
</body>
</html>