<?php
    require_once '../Models/city.php';

    $action = $_POST['a'] ?? $_GET['a'] ?? '';

    if ($action != '') {
        $cityM = new city();

        switch ($action) {
            case 'Ingresar':
                $cityM->city = $_POST['city'];
                $cityM->country = $_POST['country'];
                $cityM->population = $_POST['population'];
                $cityM->surface = $_POST['surface'];
                $cityM->subway = $_POST['subway'];
                $cityM->create();
                break;

            case 'Actualizar':
                $cityM->id= base64_decode($_POST['id']);
                $cityM->city = $_POST['city'];
                $cityM->country = $_POST['country'];
                $cityM->population = $_POST['population'];
                $cityM->surface = $_POST['surface'];
                $cityM->subway = $_POST['subway'];
                $cityM->update();
                break;
            
            case 'delete':
                $cityM->id= base64_decode($_GET['id']);
                $cityM->delete();
                break;

            default:
                header('Location: ../views/read.php');
                break;
        }
    }
    header('Location: ../views/read.php');
?>