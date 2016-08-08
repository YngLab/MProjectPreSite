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

$contents = <<<END
送信が完了しました。<br>
5秒後に <a href="../">元のページ</a> に移動します。<br>
<script type="text/javascript">
<!--
setTimeout(function(){
  location.replace('../');
}, 5000);
-->
</script>
END;

}
echo $contents;
session_destroy();
