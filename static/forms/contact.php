<!-- <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// PHPMailer 라이브러리 로드
require 'static/vendor/PHPMailer/src/Exception.php';
require 'static/vendor/PHPMailer/src/PHPMailer.php';
require 'static/vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SMTP 설정
    $mail->isSMTP();
    $mail->Host = 'smtp.naver.com'; // SMTP 서버
    $mail->SMTPAuth = true;
    $mail->Username = getenv("MAIL"); // SMTP 사용자명
    $mail->Password = getenv("MAILPWD"); // SMTP 비밀번호
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS 보안
    $mail->Port = 587; // SMTP 포트

    // 수신자 및 발신자 설정
    $mail->setFrom(getenv("MAIL"), $_POST['name']); // 본인의 이메일 주소를 사용
    $mail->addAddress($_POST['email']); // 상대방의 이메일 주소를 수신자로 설정

    // 이메일 내용 설정
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = nl2br($_POST['message']); // 줄바꿈 처리

    // 이메일 전송
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> -->
