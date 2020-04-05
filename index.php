<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");
  
  if($_SERVER['REQUEST_METHOD'] != 'POST'){
    $name = "";
    $email = "";
    $message = "";
  } else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
  }
  
  if(($name != "") && ($email != "") && ($message != "")){
    $header = "MIME-Version: 1.0\n";
  	$header .= "From: {$email}";
  	$header .= "Reply-To: GRAYCODE <noreply@sample.jp>\n";
  	
  	$content = "";
    $content .= 'コンタクトフォームよりお問い合せがありました\n\n';
    $content .= '【お名前】\n';
    $content .= $name.'\n\n';
    $content .= '【メールアドレス】\n';
    $content .= $email.'\n\n';
    $content .= '【お問い合せ内容】\n';
    $content .= $message.'\n\n';
    
    $email_to = "i_am_yuna@outlook.com";
    $email_subject = 'コンタクトフォームよりお問い合せがありました。';
    $email_body = $content;
    
    $alert_message = '<script type="text/javascript">alert("お問い合せありがとうございました。");</script>';
    
    if(mb_send_mail($email_to, $email_subject, $email_body, $header)){
      echo $alert_message;
      $name = '';
      $email = '';
      $message = '';
    }
  }
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yuna's portfolio</title>
    <!--favicon-->
    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png" /> 
    <link rel="icon" href="images/favicon.png" sizes="32x32" type="image/png" />  
    <link rel="icon" href="images/favicon.png" sizes="48x48" type="image/png" /> 
    <link rel="icon" href="images/favicon.png" sizes="62x62" type="image/png" />
    <!--stylesheets-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/normalize.css"/>
    <link rel="stylesheet" href="stylesheets/style.css"/>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <div class="header__bg">
        <h1>yuna's portfolio</h1>
      </div>
    </header>
    <main class="container">
      <section class="section profile">
        <p class="section__title">Profile</p>
        <div class="flex-box">
          <div class="profile__imagebox flex-box__left"></div>
          <div class="profile__textbox flex-box__right">
            <p class="profile__textbox__row">
              東京都在住、25歳。オリジナルサービスを開発するため、毎日デザイン・プログラミングを勉強中！オンラインスクールにて、プログラミング・デザインを学びました。
            </p>
            <p class="profile__textbox__row">
              教えることが大好きなので、プログラミング × 教育にも携わっていきたいです！
            </p>
            <p class="profile__textbox__row">
              <span class="bold-text marker">(初心者向けブログ更新中)</span>
            </p>
          </div>
        </div>
      </section>
      <section class="section skill">
        <p class="section__title">Skill</p>
        <div class="question-wrapper">
          <i class="far fa-question-circle question-icon"></i>
          <ul class="question-box">
            <li>
              <span class="skill__block__lists__row__stars">
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </span>
              <span>触ったことがある程度</span>
            </li>
            <li>
              <span class="skill__block__lists__row__stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </span>
              <span>基本的な文法など理解している</span>
            </li>
            <li>
              <span class="skill__block__lists__row__stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </span>
              <span>詰まりながらも開発できる</span>
            </li>
            <li>
              <span class="skill__block__lists__row__stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </span>
              <span>比較的スムーズに開発できる</span>
            </li>
            <li>
              <span class="skill__block__lists__row__stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
              <span>問題なく開発レベル</span>
            </li>
          </ul>
        </div>
        <div class="skill-wrapper">
          <div class="skill__block fadein">
            <i class="fas fa-code skill__block__topicon"></i>
            <p class="skill__block__title">WEBサイト制作</p>
            <ul class="skill__block__lists">
              <li class="skill__block__lists__row">
                <span>HTML/CSS</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>jQuery</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
            </ul>
            <div class="skill__block__lists">
              <span class="skill__block__lists__row">
                Bootstrap, skelton
              </span>
              <span class="skill__block__lists__row">
                Sass / Compass
              </span>
              <span class="skill__block__lists__row">
                アニメーション
              </span>
              <span class="skill__block__lists__row">
                レスポンシブ対応OK
              </span>
            </div>
          </div>
          <div class="skill__block fadein">
            <i class="fas fa-laptop-code skill__block__topicon"></i>
            <p class="skill__block__title">アプリケーション制作</p>
            <ul class="skill__block__lists">
              <li class="skill__block__lists__row">
                <span>Ruby on Rails</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>PHP / Laravel</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>Swift</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>Kotlin</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
            </ul>
          </div>
          <div class="skill__block fadein">
            <i class="fab fa-github skill__block__topicon"></i>
            <p class="skill__block__title">その他</p>
            <ul class="skill__block__lists">
              <li class="skill__block__lists__row">
                <span>Github</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>Slack</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>MySQL</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>Photoshop</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>illustrator</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
              <li class="skill__block__lists__row">
                <span>Adobe XD</span>
                <span class="skill__block__lists__row__stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star empty-star"></i>
                  <i class="fas fa-star empty-star"></i>
                </span>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section works">
        <p class="section__title">Works</p>
        <div class="works-wrapper">
          <div class="works__block">
            <div class="works__block__image" id="corporate-site__bg">
              <a href="http://corporate.iamyuna.work" class="site-link"></a>
              <img src="images/corporate-site.png" alt="image">
              <div class="masks sp-view"></div>
            </div>
            <div class="works__block__textbox">
              <div class="works__block__textbox__inner">
                <p class="works__block__textbox__upper"><a href="http://corporate.iamyuna.work">架空コーポレートサイト</a></p>
                <ul class="works__block__textbox__lower">
                  <li>ページ&コンテンツ　追加予定</li>
                </ul>
                <p class="tagbox">
                  <span class="tagbox__tag"><span class="hashtag">#</span>HTML/CSS</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>jQuery</span>
                </p>
              </div>
            </div>
          </div>
          <div class="works__block">
            <div class="works__block__image" id="smacam__bg">
              <a href="https://smacam.iamyuna.work" class="site-link"></a>
              <img src="images/smacam.png" alt="image">
              <div class="masks sp-view"></div>
            </div>
            <div class="works__block__textbox">
              <div class="works__block__textbox__inner">
                <p class="works__block__textbox__upper"><a href="https://smacam.iamyuna.work">架空WEBサイト</a></p>
                <ul class="works__block__textbox__lower">
                  <li>ページ&コンテンツ　追加予定</li>
                  <li>Ruby on RailsまたはLaravelにて開発予定</li>
                </ul>
                <p class="tagbox">
                  <span class="tagbox__tag"><span class="hashtag">#</span>HTML/CSS</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>jQuery</span>
                </p>
              </div>
            </div>
          </div>
          <div class="works__block">
            <div class="works__block__image" id="weblog__bg">
              <a href="https://weblog.iamyuna.work" class="site-link"></a>
              <img src="images/weblog.png" alt="image">
              <div class="masks sp-view"></div>
            </div>
            <div class="works__block__textbox">
              <div class="works__block__textbox__inner">
                <p class="works__block__textbox__upper"><a href="https://weblog.iamyuna.work">ブログサイト</a></p>
                <ul class="works__block__textbox__lower">
                  <li>WordPressにてデザインカスタマイズ予定</li>
                  <li>投稿継続予定</li>
                </ul>
                <p class="tagbox">
                  <span class="tagbox__tag"><span class="hashtag">#</span>HTML/CSS</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>jQuery</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>Bootstrap</span>
                </p>
              </div>
            </div>
          </div>
          <div class="works__block">
            <div class="works__block__image" id="animal__bg">
              <img src="images/circle-petit.png" alt="image">
              <div class="masks sp-view"></div>
            </div>
            <div class="works__block__textbox">
              <div class="works__block__textbox__inner">
                <p class="works__block__textbox__upper">架空スマホアプリデザイン</p>
                <ul class="works__block__textbox__lower">
                  <li>ページ&コンテンツ　追加予定</li>
                  <li>SwiftまたはKotlinにて開発予定</li>
                </ul>
                <p class="tagbox">
                  <span class="tagbox__tag"><span class="hashtag">#</span>HTML/CSS</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>jQuery</span>
                </p>
              </div>
            </div>
          </div>
          <div class="works__block">
            <div class="works__block__image" id="webrary__bg">
              <a href="http://webrary.iamyuna.work" class="site-link"></a>
              <img src="images/webrary.png" alt="image">
              <div class="masks sp-view"></div>
            </div>
            <div class="works__block__textbox">
              <div class="works__block__textbox__inner">
                <p class="works__block__textbox__upper"><a href="http://webrary.iamyuna.work">架空WEBサイト</a></p>
                <ul class="works__block__textbox__lower">
                  <li>ページ&コンテンツ&機能　追加予定</li>
                  <li>Ruby on RailsまたはLaravelにて開発予定</li>
                </ul>
                <p class="tagbox">
                  <span class="tagbox__tag"><span class="hashtag">#</span>HTML/CSS</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>jQuery</span>
                  <span class="tagbox__tag"><span class="hashtag">#</span>skelton</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section sns">
        <p class="section__title">SNS , Blog</p>
        <ul class="iconbox">
          <li class="icon-bg"><a href="https://twitter.com/____b_progineer"><img src="images/twitter.png" id="twitter_icon" alt="twitter"></a></li>
          <li class="icon-bg alert"><img src="images/instagram.png" alt="instagram"></li>
          <li class="icon-bg"><a href="https://kamekame-walking.hatenablog.com"><img src="images/pen.png" alt="blog"></a></li>
        </ul>
      </section>
      <section class="section contact">
        <p class="section__title">Contact</p>
        <div class="contact-wrapper">
          <form action="/" method="POST">
            <div class="row form-group">
              <label for="name" class="col-sm-3 col-form-label">お名前*</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" required/>
              </div>
            </div>
            <div class="row form-group">
              <label for="email" class="col-sm-3 col-form-label">メールアドレス*</label>
              <div class="col-sm-9">
                <input type="text" name="email" class="form-control" required/>
              </div>
            </div>
            <div class="row form-group">
              <label for="message" class="col-sm-3 col-form-label">お問い合せ内容*</label>
              <div class="col-sm-9">
                <textarea name="message" class="form-control" rows="8" required/></textarea>
              </div>
            </div>
            <div class="row">
              <div class="mx-auto col-sm-4 ">
                  <input type="submit" value="Submit" class="btn btn-primary btn-block" />
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
    <footer class="footer">
      <span class="footer__text">All rights reserved.</span>
    </footer>
    
    <!--jQuery-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
  </body>
    
</html>