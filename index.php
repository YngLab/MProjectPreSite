<?php
require('logoapp/set_db.php');
$dot = mysqli_query($link, "SELECT * FROM `dot` ORDER BY `id` DESC");
$line = mysqli_query($link, "SELECT * FROM `line` ORDER BY `id` DESC");
$temp = 0;
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="robots" rel="noindex">
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="keywords" content="はこだてみらいプロジェクト,はこだてみらい館,はこだてキッズプラザ,函館,未来館,future center,kids plaza,施設">
<meta name="description" content="2016年10月15日に函館駅前にOPENするはこだてみらい館・はこだてキッズプラザの告知サイトです。">
<link rel="shortcut icon" href="img/favicon16.ico">
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/chkForm.js"></script>
<title>はこだてみらい館・はこだてキッズプラザ 告知サイト</title>

<header>
  <div class="header_top g-pcOnly">
    <span class="header_recruit"><a href="#recruit">▷スタッフ募集情報</a></span>
    <span class="header_news"><a href="https://www.facebook.com/hakodatemiraiproject/" target="_blank">▷新着情報<img src="img/sns_facebook-logo.png" alt="新着情報" class="header_newsLogo"></a></span>
  </div>
  <h1 class="header_comming"><span class="header_comming-em">2016</span>年<span class="header_comming-em">10</span>月<span class="header_comming-em">15</span>日 函館駅前に<span class="header_comming-em">OPEN</span></h1>
  <div class="header_top g-smallOnly">
    <div class="header_recruit"><a href="#recruit">▷スタッフ募集情報</a></div>
    <div class="header_news"><a href="https://www.facebook.com/hakodatemiraiproject/" target="_blank">▷新着情報<img src="img/sns_facebook-logo.png" alt="新着情報" class="header_newsLogo"></a></div>
  </div>
</header>

<div id="logos">

  <div class="header_logo header_logo-kids">
    <img src="img/kids_logo.png"alt="はこだてキッズプラザ" class="header_logoImage">
  </div>

  <div class="header_logo header_logo-future">
    <img src="img/future_logo.png" alt="はこだてみらい館" class="header_logoImage">
  </div>

</div>

<div id="about">
  <div id="about_kids" class="about_column">
    <p class="about_info about_info-kidsIntro">
      はこだてキッズプラザとは、遊びを通して子どもの体を育むことと子育て支援を目的とした全天候型のプレイグラウンドです。
    </p>

    <div class="about_intro">
      <p class="about_introTitle">雲</p>
      <img src="img/kids_contents_1.png"alt="雲" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">テラス</p>
      <img src="img/kids_contents_2.png" alt="休憩スペース" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">山</p>
      <img src="img/kids_contents_3.png" alt="山" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">池</p>
      <img src="img/kids_contents_4.png" alt="池" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">木の砂場</p>
      <img src="img/kids_contents_5.png" alt="木の砂場" class="about_introImage">
    </div>
  </div>

  <div id="about_future" class="about_column">
    <p class="about_info about_info-introFuture">
      はこだてみらい館とは、これからの函館<br class="g-pcOnly">をつくる創造力を養うことを目的とした<br class="g-pcOnly">体験型コミュニケーションスペースです。
    </p>

    <div class="about_intro">
      <p class="about_introTitle">Media Wall</p>
      <img src="img/future_contents_2.png" alt="4K Media Wall" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">Gallery & Library</p>
      <img src="img/future_contents_1.png" alt="ギャラリースペース" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">360 Studio</p>
      <img src="img/future_contents_3.png" alt="360 VR Studio" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">Theater</p>
      <img src="img/future_contents_4.png" alt="マルチシアター" class="about_introImage">
    </div>

    <div class="about_intro">
      <p class="about_introTitle">Terrace</p>
      <img src="img/future_contents_5.png" alt="コミュニケーションスペース" class="about_introImage">
    </div>
  </div>
</div>

<div id="logoApp">
  <h4>
    先行公開コンテンツ：<br class="g-smallOnly">はこだて未来大学柳研究室作「うごくロゴつくる」
  </h4>
  <p>
    はこだてみらい館と、はこだてキッズプラザのロゴをフォーマットにして8コマのシーンを作成し、ロゴアニメーションをつくることができる参加型コンテンツです。ここで作られたアニメーションは施設内でも上映される予定です。（アップロード機能は現在開発中です。もうしばらくお待ち下さい。）
  </p>
  <div class="logoApp_example">
    <div class="logoApp_kids">
      <table class="logoApp_exampleTable">
        <tr>
          <?
            $i = 0;
            while($i < 4){
              $num = mysqli_fetch_array($dot)[ID] - $temp;
              $name ="\"logoapp/upload/dot/$num.gif\"";
              if($num < 1){
                $num = 1;
              }
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 3){
              $num = mysqli_fetch_array($dot)[ID] - $temp;
              $name ="\"logoapp/upload/dot/$num.gif\"";
              if($num < 1){
                $num = 1;
              }
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              if($i == 1){
                echo "<td colspan=\"2\" rowspan=\"2\"><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\"></td>";
              }else{
                echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              }
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 2){
              $num = mysqli_fetch_array($dot)[ID] - $temp;
              $name ="\"logoapp/upload/dot/$num.gif\"";
              if($num < 1){
                $num = 1;
              }
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 4){
              $num = mysqli_fetch_array($dot)[ID] - $temp;
              $name ="\"logoapp/upload/dot/$num.gif\"";
              if($num < 1){
                $num = 1;
              }
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
      </table>
    </div>
    <div class="logoApp_future">
      <table class="logoApp_exampleTable">
        <tr>
         <?
            $i = 0;
            $temp = 0;
            while($i < 4){
              $num = mysqli_fetch_array($line)[ID];
              if($num < 1){
                $num = 1;
              }
              $name = "\"logoapp/upload/line/$num.gif\"";
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 3){
              $num = mysqli_fetch_array($line)[ID];
              if($num < 1){
                $num = 1;
              }
              $name = "\"logoapp/upload/line/$num.gif\"";
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              if($i == 1){
                echo "<td colspan=\"2\" rowspan=\"2\"><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\"></td>";
              }else{
                echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              }
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 2){
              $num = mysqli_fetch_array($line)[ID];
              if($num < 1){
                $num = 1;
              }
              $name = "\"logoapp/upload/line/$num.gif\"";
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
        <tr class="g-pcOnly">
          <?
            $i = 0;
            while($i < 4){
              $num = mysqli_fetch_array($line)[ID];
              if($num < 1){
                $num = 1;
              }
              $name = "\"logoapp/upload/line/$num.gif\"";
              if(!file_exists("logoapp/upload/line/$num.gif")){
                continue;
              }
              echo "<td><img src=$name alt=\"作品例\" class=\"logoApp_exampleImage\" style=\"cursor: pointer;\"></td>";
              $i++;
            }
          ?>
        </tr>
      </table>
    </div>
  </div>
  <a href="logoapp/select.html" target="_blank" class="logoApp_link"><p class="logoApp_linkButton">うごくロゴをつくる</p></a>
</div>

<div id="movie">
  <h4>
    先行公開コンテンツ：<br class="g-smallOnly">井上涼 作「ハコダテミュージカル」
  </h4>
  <p>
    はこだてみらい館の Media Wall で上映されるコンテンツ「ハコダテミュージカル」。函館を新しい視点から”ミュージカル仕立て”で紹介するアニメーション作品です。先行公開ではオープニング部分をご紹介します。
  </p>
  <iframe src="https://www.youtube.com/embed/Uej8Q7nc9hk?rel=0" frameborder="0" allowfullscreen class="movie_youtube"></iframe>
</div>

<div id="events">
  <h2>イベント情報</h2>
  <div class="event">
    <img src="img/event_workshop.png" alt="科学屋台 はこだてみらい館プレワークショップ" class="event_image">

    <h3 class="event_title">科学屋台 はこだてみらい館プレワークショップ</h3>

    <div class="event_info">
      <p class="event_detail event_info-left">
        日時: 8月28日(日)  10:00-15:00<br>
        会場:五稜郭タワー<br>
        対象:子どもから大人まで
      </p>
      <p class="event_detail event_info-right">
        参加費:無料<br>
        出展:はこだてみらい館
      </p>
    </div>

    <p class="event_intro">
      はこだてみらい館で行われる予定の MESH を使ったワークショップを一足先に体験していただきます！「MESH」とは、誰でも簡単に電子工作やプログラミングなどのデジタルなものづくりを楽しむことが出来るツールです。
    </p>
  </div>

  <div class="event">
    <img src="img/event_pikaki.png" alt="ぴかき ～光の魔法で絵を描こう～" class="event_image">

    <h3 class="event_title">ぴかき ～光の魔法で絵を描こう～</h3>

    <div class="event_info">
      <p class="event_detail event_info-left">
        日時: 8月28日(日)  10:00-15:00<br>
        会場:五稜郭タワー<br>
        対象:子どもから大人まで
      </p>
      <p class="event_detail event_info-right">
        参加費:無料<br>
        出展:新体験・開発プロジェクト
      </p>
    </div>

    <p class="event_intro">
      先端技術を活用して「光の魔法で絵が描けるキャンバス」を発明しました。黒いローブをまとって魔法使いになり空間に光の絵を描くワークショップを体験していただきます！出来上がった光の絵はポストカードにして差し上げます。
    </p>
  </div>
</div>

<div id="recruit">
  <h2>スタッフ募集</h2>
  <div class="recruit_2colomn">
    <h3 class="recruit_title">はこだてみらい館・はこだてキッズプラザ<br>アルバイトスタッフ募集</h3>
    <p class="recruit_info">
      はこだてみらい館と、はこだてキッズプラザでは、<br class="g-pcOnly">
      アルバイトスタッフを募集しています。<br>
      応募条件：近郊から通勤できる方。週２日以上働ける方。<br>
      待遇など詳細については下記連絡先までお問い合わせください。
    </p>
  </div>
  <div class="recruit_2colomn">
    <h3 class="recruit_title">はこだてみらい館<br>契約社員募集</h3>
    <p class="recruit_info">
      はこだてみらい館では、運営マネージャーを募集しています。<br>
      はこだて在住の方はもちろん、函館で働きたい方も応募ください！<br>
      応募条件：近郊から通勤できる方。施設運営経験者優遇。<br>
      待遇など詳細については下記連絡先までお問い合わせください。
    </p>
  </div>
</div>

<div id="info">
  <h2>施設の情報</h2>

  <p class="info_table-kids g-smallOnly">はこだてキッズプラザ</p>
  <table class="info_table">
    <tr class="g-pcOnly">
      <th class="info_table-head"></th>
      <td class="info_table-future">はこだてみらい館</td>
      <td class="info_table-kids">はこだてキッズプラザ</td>
    </tr>
    <tr>
      <th>開館時間</th>
      <td class="g-pcOnly">午前10時〜午後8時</td>
      <td>午前10時〜午後6時</td>
    </tr>
    <tr>
      <th>休館日</th>
      <td colspan="2">年末年始（12月31日~1月1日）,<br class="g-smallOnly">館内整理日（毎月第2水曜日）<br class="g-smallOnly">　※両施設共通</td>
    </tr>
    <tr>
      <th>入館料</th>
      <td class="g-pcOnly">
        大人600円, 小中高生300円<br>
        （20人以上の団体　大人480円，小中高生240円）<br>
        　※3か月券　大人1,800円、小中高生900円<br>
        　※6か月券　大人3,000円、小中高生1,500円
      </td>
      <td>
        大人100円, 小人300円（生後6か月〜小学生）<br>
        <span class="g-pcOnly">　</span>※3か月券　大人300円、小人900円<br>
        <span class="g-pcOnly">　</span>※6か月券　大人500円、小人1,500円<br class="g-pcOnly">
        　
      </td>
    </tr>
    <tr>
      <th>住所</th>
      <td class="g-pcOnly">函館市若松町20番1号 キラリス函館 3階</td>
      <td>函館市若松町20番1号<br class="g-smallOnly"> キラリス函館 4階</td>
    </tr>
    <tr>
      <th>駐車場</th>
      <td>あり（100台／1.5時間無料）<br class="g-smallOnly">　※両施設共通</td>
      <td class="g-pcOnly"></td>
    </tr>
    <tr class="info_tableMap g-pcOnly">
      <th>地図</th>
    </tr>
  </table>

  <p class="info_table-future g-smallOnly">はこだてみらい館</p>
  <table class="info_table g-smallOnly">
    <tr>
      <th>開館時間</th>
      <td>午前10時〜午後8時</td>
    </tr>
    <tr>
      <th>休館日</th>
      <td>年末年始（12月31日~1月1日）,<br class="g-smallOnly">館内整理日（毎月第2水曜日）<br class="g-smallOnly">　※両施設共通</td>
    </tr>
    <tr>
      <th>入館料</th>
      <td>
        大人600円, 小中高生300円<br>
        （20人以上の団体<br class="g-smallOnly">　　大人480円，小中高生240円）<br>
        ※3か月券　大人1,800円、小中高生900円<br>
        ※6か月券　大人3,000円、小中高生1,500円
      </td>
    </tr>
    <tr>
      <th>住所</th>
      <td>函館市若松町20番1号<br class="g-smallOnly"> キラリス函館 3階</td>
    </tr>
    <tr>
      <th>駐車場</th>
      <td>あり（100台／1.5時間無料）<br class="g-smallOnly">　※両施設共通</td>
    </tr>
  </table>

  <h3 class="g-smallOnly">地図</h3>


  <img src="img/access_map.png" alt="アクセス地図" class="info_map">

</div>

<div id="access">
  <h2>交通アクセス</h2>

  <table class="accessTable">
    <tr>
      <th>市内から</th>
      <td class="accessTableHead">
        <img src="img/access_bus.png" alt="バス" class="accessIcon">バス　：
      </td>
      <td>
        函館駅前バスターミナルから徒歩1分
      </td>
      <td class="accessTableHead g-pcOnly">
        <img src="img/access_train.png" alt="市電" class="accessIcon">市電　：
      </td>
      <td class="g-pcOnly">
        函館駅前電停から徒歩1分
      </td>
    </tr>
    <tr class="g-smallOnly">
      <th></th>
      <td>
        <img src="img/access_train.png" alt="市電" class="accessIcon">市電　：
      </td>
      <td>
        函館駅前電停から徒歩1分
      </td>
    </tr>
    <tr>
      <th></th>
      <td>
        <img src="img/access_jr.png" alt="JR" class="accessIcon">ＪＲ　：
      </td>
      <td>
        函館駅から徒歩3分
      </td>
      <td class="g-pcOnly"></td>
      <td class="g-pcOnly"></td>
    </tr>
    <tr class="accessTable-far">
      <th>遠方から</th>
      <td>
        <img src="img/access_air.png" alt="飛行機" class="accessIcon">飛行機：
      </td>
      <td>
        函館空港から車で20分
      </td>
      <td class="g-pcOnly">
        <img src="img/access_shinkansen.png" alt="新幹線" class="accessIcon">新幹線：
      </td>
      <td class="g-pcOnly">
        新函館北斗駅→函館駅下車→徒歩3分
      </td>
    </tr>
    <tr class="g-smallOnly">
      <th></th>
      <td>
        <img src="img/access_shinkansen.png" alt="新幹線" class="accessIcon">新幹線：
      </td>
      <td>
        新函館北斗駅→函館駅下車→徒歩3分
      </td>
    </tr>
  </table>
</div>

<div id="contact">
  <div class="contact_inner">
    <p class="contact_title">お問い合わせ</p>

    <form action="php/check.php" method="post">
      <table class="contact_formTable">
        <tr>
          <td class="contact_table-head">お名前</td>
          <td class="contact_table-form">
            <input id="contact_name" type="text" name="name" class="contact_inputForm">
          </td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td>
            <input id="contact_mail" type="text" name="mail" class="contact_inputForm">
          </td>
        </tr>
        <tr>
          <td>本文</td>
          <td>
            <textarea id="contact_message" name="message"class="contact_inputForm contact_inputForm-long"></textarea>
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <input id="contact_submit" type="submit" value="入力内容を確認する" class="contact_button">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

<footer>
  <div class="footer_inner">
    <a href="https://www.facebook.com/hakodatemiraiproject/" target="_blank"><img src="img/sns_facebook.png" alt="公式facebook" class="footer_snsButton"></a>
    <p class="footer_text">〒040-0063函館市若松町20番1号 キラリス函館</p>
    <p class="footer_text">TEL : 0138-23-1131（NAアーバンデベロップメント）</p>
    <p class="footer_text">E-Mail : info@<span class="contact-spamBlock">spamblock</span>hakodate-miraiproject.jp</p>
    <p class="footer_text-copyright">©2016 Hakodate Mirai Project</p>
  </div>
</footer>
