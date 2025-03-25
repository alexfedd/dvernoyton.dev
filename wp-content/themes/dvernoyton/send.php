<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alexandrfedorov508@gmail.com";
    
    // Стандартные поля
    $name = $_POST["name"] ?? "Не указан";
    $phoneNumber = $_POST["phone"] ?? "Не указан";
    $email = $_POST["email"] ?? "Не указан";
    
    // Формируем базовое сообщение
    $message = "Название компании: $name\nНомер телефона: $phoneNumber\nEmail: $email\n";
    
    // Дополнительные поля (для заказа)
    $productName   = $_POST["productName"] ?? "";
    $productCounter = $_POST["count"] ?? "";
    $productSize   = $_POST["size"] ?? "";
    $productNal    = $_POST["nalichnik"] ?? "";
    $productSeria    = $_POST["seria"] ?? "";
    
    // Если указано название товара, считаем, что это заказ и доп. данные должны быть включены
    if (!empty($productName)) {
        $subject = "Новый Заказ на сайте";
        $message .= "Название товара: $productName\n";
        if (!empty($productCounter)) {
            $message .= "Количество: $productCounter\n";
        }
        if (!empty($productSize)) {
            $message .= "Размер: $productSize\n";
        }
        if (!empty($productSeria)) {
            $message .= "Серия: $productSeria\n";
        }
        if (!empty($productNal)) {
            $message .= "Наличник: $productNal\n";
        }
    } else {
        $subject = "Обращение по форме!";
    }
    
    // Формируем заголовки
    $headers = "";
    $headers .= "From: $to\r\n";
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
