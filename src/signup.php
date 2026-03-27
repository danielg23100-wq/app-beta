<?php
include('../config/database.php');

// 1. Recepción de datos
$f_name  = $_POST['fname'];
$l_name  = $_POST['lname'];
$e_mail  = $_POST['email'];
$m_phone = $_POST['mphone'];
$p_sswd  = $_POST['password'];


$enc_pass = md5($p_sswd);

// --- INICIO DE VALIDACIONES ---

// Funcionalidad 1: Validar unicidad del correo electrónico
$check_email = "SELECT email FROM users_model WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email); // Asumiendo que $db_connection viene de database.php

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo electrónico ya se encuentra registrado.";
    exit; // Detiene la ejecución
}

$sql = "INSERT INTO users_model (firstname, lastname, email, mobile_phone, password)
        VALUES ('$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_pass')";

$result = pg_query($local_conn, $sql);

if ($result) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar el usuario.";
}