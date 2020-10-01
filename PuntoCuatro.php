<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuntoCuatro</title>
</head>


    <body style= "font-family:comfortaa; margin:200px;">

    <header>
        <h1 style="font-size:40px;
               color: #0092ff">
               Postobón te paga
        </h1>
    <hr>
    <br>
    </header>

         <h2>
               ¿Quieres saber el valor de tu pago cada semana?
        </h2>

        <h4>
               Por favor digita aquí la cantidad de horas que trabajas en la semana
        </h4>

    <form style="" method="POST">
        <div>
            <label for="horas" 
            style="font-size:20px"></label>
            <input type="text" name="horas" 
            style="font-family:comfortaa;
            border-radius: 20px;
            width:50px;
            height: 25px;"
             placeholder="  Ej. 20" >
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
           margin-top: 8px;"
        name="total" > Calcula tu sueldo semanal </button> 
    </form>

<br>
<hr>
<br>

    <div style="font-size:15px">
        <?php 
            if(isset($_POST["total"])){
                $horas=$_POST["horas"];
                if ($horas>40) {
                    $horasex=$horas-40;
                    $totalex=$horasex*25000;
                    $total=800000+$totalex;
                }
                if ($horas<=40) {
                    $total=$horas*20000;
                }
                echo("Usted esta semana va a recibir  ".$total  );
            }
        ?>
    </div>

</body>

</html>