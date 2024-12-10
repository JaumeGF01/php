<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación Plurilingüe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       
       body{
            background-color: rgb(20, 20, 30);
        }
        .container{
            max-width:900px;
            box-shadow:white 2px 2px 10px;
        }
        
        header{
            
            display:flex;
            height:10vh;
            color:white;
            justify-content:space-around;
            align-items: center
        }
        form{
            display:flex;
        }
        select{
            max-width: max-content;
        }
    </style>

</head>
<body>
    <header>
        <h3>Aplicación Plurilingüe</h3>
        <form action="plurilingue.php"method="post">
        
        <select class="form-select"  name="idioma" id="idioma">
            <option value="es" >Español</option>
            <option value="va">Valenciano</option>
            <option value="en">Inglés</option>
        </select>
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </form>
    </header>
    <div class="container mt-5 bg bg-light rounded border border-secondary">
        <!-- <form action="plurilingue.php" method="post">
            <label for="idioma" class="form-label mt-2">Selecciona el idioma deseado</label>
            <select class="form-select mt-2" name="idioma" id="idioma">
                <option value="es">Español</option>
                <option value="va">Valenciano</option>
                <option value="en">Inglés</option>
            </select>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Confirmar</button>
    </form> -->
    <?php
        $estudios_es = "Soy un modelo de lenguaje desarrollado por OpenAI. Tengo una gran cantidad de conocimientos y puedo ayudarte en una variedad de tareas.";
        $idiomas_es = "Hablo varios idiomas, incluyendo el español y el inglés.";

        $estudios_va = "Sóc un model de llenguatge desenvolupat per OpenAI. Tinc una gran quantitat de coneixements i puc ajudar-te en una varietat de tasques.";
        $idiomas_va = "Parle diversos idiomes, incloent-hi l’espanyol i l’anglés.";

        $estudios_en = "I am a language model developed by OpenAI. I have a vast amount of knowledge and can assist you in a variety of tasks.";
        $idiomas_en = "I speak multiple languages, including Spanish and English.";

        $idioma = $_POST['idioma'];
        $estudios = "estudios_".$idioma;
        $idiomas = "idiomas_".$idioma;
    ?>
    <p><?=$$estudios?></p>
    <p><?=$$idiomas?></p>
    </div>
</body>
</html>