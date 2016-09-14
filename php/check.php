<?php
if(!$_POST){
  header('Location: ../');
}

session_start();
$_SESSION = $_POST;
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<link rel="shortcut icon" href="../img/favicon16.ico">
<link rel="stylesheet" href="../css/style.css">
<title>はこだてみらい館・はこだてキッズプラザ 告知サイト</title>

<div id="contact" class="contact-confirm">
  <h2>お問い合わせ内容は<br class="g-dmsllOnly">こちらでよろしいですか？</h2>
  <div class="contact_inner">
    <p class="contact_title">お問い合わせ</p>

    <form action="mail.php" method="post">
      <table class="contact_formTable">
        <tr>
          <td class="contact_table-head">お名前</td>
          <td class="contact_table-form">
            <input type="text" name="name" class="contact_inputForm" value=<?php echo htmlspecialchars($_POST['name']);?> readonly>
          </td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td>
            <input type="text" name="mail" class="contact_inputForm" value=<?php echo htmlspecialchars($_POST['mail']);?> readonly>
          </td>
        </tr>
        <tr>
          <td>本文</td>
          <td>
            <textarea name="message"class="contact_inputForm contact_inputForm-long" readonly><?php echo htmlspecialchars($_POST['message']);?></textarea>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <a href="javascript:history.back();"><input type="button" value="修正する" class="contact_button contact_button-confirm contact_button-fix" disable></a>
            <input type="submit" value="送信する" class="contact_button contact_button-confirm" name="submit">
          </td>
        </tr>
      </table>
    </form>
  </div>
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
