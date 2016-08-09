<?php
session_start();

$add_header = "From: info@hakodate-miraiproject.jp\n";//送信者の情報(メールヘッダー)
$add_header .= "Reply-to: info@hakodate-miraiproject.jp\n";//送信者の情報(メールヘッダー)
$add_header .= "X-Mailer: PHP/". phpversion();

$return =<<<HTML
お問い合わせありがとうございます。

お名前：
{$_SESSION['name']}

E_mail：
{$_SESSION['mail']}

お問い合わせ内容：
{$_SESSION['message']}

内容確認後、担当者より折り返しご連絡をさせていただきます。

-----
はこだてみらいプロジェクト（はこだてみらい館・はこだてキッズプラザ）

〒040-0063函館市若松町20番1号 キラリス函館
TEL : 0138-23-1131(NAアーバンデベロップメント)
E-Mail : info@hakodate-miraiproject.jp
HTML;

$message =<<<HTML
お問い合わせ内容は以下の通りです。

お名前：
{$_SESSION['name']}

E_mail：
{$_SESSION['mail']}

お問い合わせ内容：
{$_SESSION['message']}

内容確認後、折り返し連絡をお願いします。
HTML;

mb_language("ja");
mb_internal_encoding("UTF-8");

if(mb_send_mail($_SESSION['mail'],"【お問い合わせ】確認メール",$return,$add_header)&&mb_send_mail('info@hakodate-miraiproject.jp',"問い合わせがありました",$message,$add_header)){

$content =<<<HTML
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="shortcut icon" href="img/favicon16.ico">
<link rel="stylesheet" href="../css/style.css">
<title>はこだてキッズプラザ・はこだてみらい館 告知サイト</title>

<div id="contact" class="contact-confirm">
  <h2>送信が完了しました。</h2>

  <p>5秒後に <a href="../index.html#contact">元のページ</a> に移動します。<br>
  </p>

  <script type="text/javascript">
  <!--
  setTimeout(function(){
    location.replace('../index.html#contact');
  }, 5000);
  -->
  </script>
</div>

<footer class="footer-confirm">
  <div class="footer_inner">
    <a href="https://www.facebook.com/hakodatemiraiproject/" target="_blank"><img src="../img/sns_facebook.png" alt="公式facebook" class="footer_snsButton"></a>
    <p class="footer_text">〒040-0063函館市若松町20番1号 キラリス函館</p>
    <p class="footer_text">TEL : 0138-23-1131（NAアーバンデベロップメント）</p>
    <p class="footer_text">E-Mail : info@<span class="contact-spamBlock">spamblock</span>hakodate-miraiproject.jp</p>
    <p class="footer_text-copyright">©2016 Hakodate Mirai Project</p>
  </div>
</footer>

HTML;

echo $content;
session_destroy();
}else{
  echo "error";
  session_destroy();
}
?>
