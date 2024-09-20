<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen bilgileri al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Hedef e-posta adresi
    $to = "ayitkisakir@gmail.com";

    // E-posta başlıkları
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // E-posta içeriği
    $body = "
        <h2>Yeni İletişim Formu Mesajı</h2>
        <p><strong>Ad:</strong> $name</p>
        <p><strong>E-mail:</strong> $email</p>
        <p><strong>Konu:</strong> $subject</p>
        <p><strong>Mesaj:</strong><br>$message</p>
    ";

    // E-postayı gönder
    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajınız başarıyla gönderildi.";
    } else {
        echo "Mesaj gönderilirken bir hata oluştu.";
    }
}
?>
