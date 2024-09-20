<!DOCTYPE html>
<html lang="es">
<head>
    <title>Curriculum</title>
</head>
<body>
    <h3>Curriculum</h3>
    <hr>
    <?php
        $estudios_es = "He estudiado el grado superior de Animacion 3D, juegos y entornos interactivos y el grado medio de Sistemas micrcinformáticos y redes.";
        $estudios_en = "I have studied the higher vocational training in 3D Animation, Games, and Interactive Environments and the intermediate vocational training in Microcomputer Systems and Networks.";
        $estudios_va = "He estudiat el grau superior d'Animació 3D, jocs i entorns interactius i el grau mitjà de Sistemes microinformàtics i xarxes.";

        $lang_es = "Hablo castellano, valenciano e inglés.";
        $lang_en = "I speak Spanish, Valencian, and English.";
        $lang_va = "Parle castellà, valencià i anglès.";

        $idioma = "es";
        $estudios = "estudios_".$idioma;
        $idiomas = "lang_".$idioma;
    ?>

    <p><?=$$estudios?></p>
    <p><?=$$idiomas?></p>
</body>
</html>