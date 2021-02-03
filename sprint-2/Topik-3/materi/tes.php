<?php

try {
    echo "Halo bro! <br>";

    selamatPagi(); # fungsi tidak pernah didefinisikan
} catch (Exception $error) {
    echo "Error: {$error->getMessage()}";
}