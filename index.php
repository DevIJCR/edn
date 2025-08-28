<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/output.css">
    <title>Escuela de Dietética y Nutrición</title>
</head>
<body class="w-full h-screen">
    <?php
        if(!isset($_GET['view']) || $_GET['view'] === ''){
            require_once './views/inicio.php';
            echo "<script src=./js/inicio.js></script>";
        }else{
            switch ($_GET['view']) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    ?>
</body>
</html>