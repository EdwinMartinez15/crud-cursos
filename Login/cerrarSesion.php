<?php
    session_start();
    session_destroy();
    header('Location: /crud-cursos/index.php')
?>