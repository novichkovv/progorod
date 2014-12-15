<?
define('DEFAULT_CHARSET', 'utf-8');
function Post($mail, $name, $reply, $subj, $text, $html, $img)
{
    $CRLF = substr(PHP_OS, 0, 3) != "WIN" ? "\n" : "\r\n";
    $body = "";
    $sender = "=?windows-1251?B?" . base64_encode($name) . "?= <" .$reply. ">";
    $subj = "=?windows-1251?B?" . base64_encode($subj) . "?=";
    $headers = "From: " . $sender . $CRLF;
    $headers .= "Reply-To: " . $reply . $CRLF;
    $headers .= "Return-path: " . $reply . $CRLF;
    $headers .= "Mime-Version: 1.0" . $CRLF;
    if ($html) {
        $headers .= "Content-Type: multipart/alternative; boundary=\"partbody-1\"" . $CRLF . $CRLF;
        $body .= "--partbody-1" . $CRLF . $CRLF;
        $body .= "Content-type: text/plain; charset=\"" . DEFAULT_CHARSET . "\"" . $CRLF;
        $body .= "Content-Transfer-Encoding: 8bit" . $CRLF . $CRLF;
        $body .= $text . $CRLF;
        $body .= "--partbody-1" . $CRLF;
        $body .= "Content-Type: multipart/related; boundary=\"partbody-2\"; type=\"text/html\"" . $CRLF . $CRLF;
        $body .= "--partbody-2" . $CRLF;
        $body .= "Content-type: text/html; charset=\"" . DEFAULT_CHARSET . "\"" . $CRLF;
        $body .= "Content-Transfer-Encoding: base64" . $CRLF . $CRLF;
        $body .= chunk_split(base64_encode($html)) . $CRLF . $CRLF;
        $body .= $img ? "--partbody-2" . $CRLF : "--partbody-2--" . $CRLF;
        if ($img) {
            $i = count($img);
            foreach($img as $key) {
                $i--;
                $body .= "Content-Type: image/jpeg" . $CRLF;
                $body .= "Content-ID: <pic_" . $key["id"] . ">" . $CRLF;
                $body .= "Content-Transfer-Encoding: base64" . $CRLF;
                $body .= "Content-Disposition: inline; filename=\"" . basename($key["img"]) . "\"" . $CRLF . $CRLF;
                $file = $key["img"];
                $f = fopen($file, "rb");
                $body .= chunk_split(base64_encode(fread($f, filesize($file))));
                $body .= $i ? "--partbody-2" . $CRLF : "--partbody-2--" . $CRLF;
            }
        }
        $body .= "--partbody-1--" . $CRLF;
    } else {
        $headers .= "Content-type: text/plain; charset=\"" . DEFAULT_CHARSET . "\"" . $CRLF;
        $headers .= "Content-Transfer-Encoding: 8bit" . $CRLF . $CRLF;
        $body = $text . $CRLF;
    }
    mail($mail, $subj, $body, $headers);
}
$mail = 'krav4.300@yandex.com';
$name = 'ddd';
$reply = 'enov300@gmail.com';
$subj = '21 DAY DETOX';
$text = 'sss';
$html = '
';
$img[0] = array(
    'id' => '0',
    'img' => 'mail' . DIRECTORY_SEPARATOR . 'video.png');

$html.='
<!doctype HTML>
<html>
<head></head>
<body>
<div style=\"margin-left: 10%; width: 460px;\">
    <div style=\"text-align: center;color: #245269;\"><h1>DAY 1</h1></div>
<div style=\"text-align: center;\">
    <h2 style=\"color: #245269\">Removing Negative Emotions While You Eat</h2>
    <a href=\"https://www.youtube.com/watch?v=Oa4wm2ftna4&list=UUxObFUbx4nYwWVCelOUQtKA\" target=\"_blank\">
    <img src=\"cid:pic_0\" style="width: 460px;"><img src=\"http://lonty.ru/detox/mail/video.png" style="width: 460px;"></a>
    <br><br>
    <img src=\"pic_1\" style=\"width: 460px;\">
<br>
    <div style=\"width: 460px;\">
        <div style=\"float: left\">
            <br><br>
            <span style=\"font-weight: 400; color: #0782C1;\">Each 21 Day Detox Package Includes:</span>
            <ul style=\"color: #175373; list-style: none; text-align: left; padding: 8px;\">
                <li><img src=\"pic_3\">Maxone</li>
                <li><img src=\"pic_3\">Fiber Formula</li>
                <li><img src=\"pic_3\">Plant Protein</li>
                <li><img src=\"\">Green Supremefood</li>
            </ul>
        </div>
        <a href=\"http://www.drcolbert.com/21-day-detox-package-809.html\"><img src=\"pic_4\"  style=\"width: 200px; float: left\"></a>
    </div>';
Post($mail, $name, $reply, $subj, $text, $html, $img);
?>
