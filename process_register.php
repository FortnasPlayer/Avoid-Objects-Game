<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pobranie danych z formularza
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Tutaj można dodać dodatkowe weryfikacje, takie jak sprawdzenie, czy hasło ma odpowiedni format itp.

    if ($password === $confirm_password) {
        // Hasła się zgadzają, można kontynuować proces rejestracji

        // Tutaj można dodać kod do zapisania danych do bazy danych lub innego miejsca

        // Przykładowa odpowiedź
        echo "Registration completed successfully!";
    } else {
        // Hasła się nie zgadzają
        echo "The passwords do not match. try again.";
    }

} else {
    // Jeśli ktoś próbuje uzyskać dostęp do tego pliku bez wysłania formularza, przekieruj go na stronę rejestracji
    header("Location: register.html");
    exit();
}

?>
