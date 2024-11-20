<?php

    $lampu = "";

    switch ($lampu) {
        case "hijau":
            echo"Maju";
            break;

            case "kuning":
                echo"Siap Siaga";
                break;

                case "merah":
                    echo"Berhenti";
                    break;
        
        default:
            echo"Lampu Sedang Eror";
            break;
    }




?>