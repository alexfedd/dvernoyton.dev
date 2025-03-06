<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alexandrfedorov508@gmail.com";
    $subject = "Обращение по форме!";

    $name = $_POST["name"] ?? "Не указан";
    $phoneNumber = $_POST["phone"] ?? "Не указан";
    $email = $_POST["email"] ?? "Не указан";

    $message = "Название компании: $name\nНомер телефона: $phoneNumber\nEmail: $email\n";
    
    $headers = ""; // Инициализируем переменную
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo json_encode([
            'success' => true,
            'message' => 'Письмо успешно отправлено!'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Ошибка при отправке письма.'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Неверный метод запроса.'
    ]);
}
?>
