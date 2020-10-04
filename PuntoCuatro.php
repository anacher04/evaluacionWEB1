<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuntoCuatro</title>
</head>


    <body style= "font-family:helvetica; margin:200px; background-image: url('postobon.jpg'); background-size: cover;">

    <header>
        <h1 style="font-size:60px;
               color: #ffffff;
               font-family: sketchy;
               letter-spacing: 4px;">
               Postobón si Paga
        </h1>
    </header>
    <div style= "background-color: #841a7070; border-radius:20px; padding:10px; padding-left:30px;">

    <br>

         <h2 style="font-size:30px;
               color: #ffffff;
               font-family: sketchy;
               letter-spacing: 4px;">
               ¿Quieres saber el valor de tu pago cada semana?
        </h2>

        <h4 style="font-size:20px;
               color: #ffffff;
               font-family: comfortaa;">
               Por favor digita aquí la cantidad de horas que trabajas en la semana
        </h4>

    <form style="" method="POST">
        <div>
            <label for="horas" 
            style="font-size:20px"></label>
            <input type="text" name="horas" 
            style="font-family: sketchy;
            letter-spacing: 4px;
            border-radius: 20px;
            width:65px;
            height: 25px;"
             placeholder="  Ej. 20" >
        </div>
        <br>
        <button style="background-color:#841a70;
           color: #FFFFFF; 
           font-family: sketchy;
           border-radius: 20px;
           border: none;
           font-size:20px;
           letter-spacing: 4px;
           display: inline-block;
           padding: 8px;
           margin-top: 8px;"
        name="total" > Calcula tu sueldo semanal </button> 
    </form>

<br>

</div>
<br>


    <div style="color: #ffffff;border-radius:20px; font-size:60px; font-family: sketchy;letter-spacing:2px; background-color:#841a70; padding-left:30px">
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