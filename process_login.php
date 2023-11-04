<?php

// Sprawdzenie, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Pobranie danych z formularza
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Tutaj można umieścić weryfikację danych logowania
    // Przykładowa weryfikacja: Sprawdzenie, czy użytkownik to "admin" i hasło to "admin123"
    if ($username === "admin" && $password === "admin123") {
        // Pomyślne logowanie - możesz przekierować użytkownika na inną stronę lub wykonać inne operacje
        header("Location: welcome.php");
        exit();
    } else {
        // Błąd logowania - możesz wyświetlić komunikat lub przekierować użytkownika na stronę logowania z błędem
        header("Location: login.html?error=1");
        exit();
    }
} else {
    // Jeśli ktoś próbuje uzyskać dostęp do tego pliku bez wysłania formularza, przekieruj go na stronę logowania
    header("Location: login.html");
    exit();
}

?>
