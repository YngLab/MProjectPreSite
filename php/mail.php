<?php
session_start();

$add_header = "From:bysk.333@gmail.com\n";//送信者の情報(メールヘッダー)
$add_header .= "Reply-to: bysk.333@gmail.com\n";//送信者の情報(メールヘッダー)
$add_header .= "X-Mailer: PHP/". phpversion();
$opt = '-f'.'bysk.333@gmail.com'; //-fすると迷惑メールになりにくいとか、そんなことだったと思う。送信エラーの時にエラーメールを返す先

$message =<<<HTML
お問い合わせ内容の確認です。
お名前
{$_SESSION['name']}
E_mail
{$_SESSION['mail']}
お問い合わせ内容
{$_SESSION['message']}
内容確認後、担当者より折り返しご連絡をさせていただきます。
HTML;

mb_language("ja");
if(mb_send_mail($_SESSION['mail'],"【お問い合わせ】確認メール",$message,$add_header)&&mb_send_mail('bys.k333@gmail.com',"問い合わせがありました",$message,$add_header)){

$contents = <<<END
5秒後に <a href="../">元のページ</a> に移動します。<br />
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
