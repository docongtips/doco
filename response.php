<?php

session_start();
$post["ip"] = @$_SERVER["HTTP_CF_CONNECTING_IP"]? @$_SERVER["HTTP_CF_CONNECTING_IP"] : $_SERVER["REMOTE_ADDR"];
$post["domain"] = $_SERVER["HTTP_HOST"];
$post["referer"] = @$_SERVER["HTTP_REFERER"];
$post["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
$post["headers"] = json_encode(apache_request_headers());
// $post["land"] = 1; //раскомментировать на в индексном файле лендинга

if($_GET)foreach($_GET as $key => $value) $_SESSION[$key] = $value;
$post["utm"] = json_encode($_SESSION);

$curl = curl_init("http://insigh.online/api/check_ip");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
curl_setopt($curl, CURLOPT_ENCODING, "");
curl_setopt($curl, CURLOPT_TIMEOUT, 5);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

$json_reqest = curl_exec($curl);
curl_close($curl);
$api_reqest = json_decode($json_reqest);

if($api_reqest)foreach($api_reqest as $key => $value) $_SESSION[$key] = $value;

if(!@$api_reqest || @$api_reqest->white_link || @$api_reqest->result == 0){
   //require_once("wi.php");
}else{

  $json = json_encode(['result' => 'ok',
                       'resp' => '<!DOCTYPE html>
                       <html>
                          <head>
                             <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                             <meta charset="utf-8"/>
                             <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
                             <meta content="width=device-width, initial-scale=1" name="viewport"/>
                             <title>git Medikal na Portal</title>
                             <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet"/>
                             <link href="assets/content/lfzZGMc6x6jOnYf/css/style.css" rel="stylesheet" type="text/css"/>
                             <link href="assets/content/lfzZGMc6x6jOnYf/css/font-awesome.css" rel="stylesheet"/>
                             <link href="assets/content/lfzZGMc6x6jOnYf/css/main.css" rel="stylesheet"/>
                             <!-- Global site tag (gtag.js) - Google Analytics -->
                       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109026122-27"></script>
                       <script>
                         window.dataLayer = window.dataLayer || [];
                         function gtag(){dataLayer.push(arguments);}
                         gtag("js", new Date());

                         gtag("config", "UA-109026122-27");
                       </script>

                          </head>
                          <body class="page page--inner breakpoint-900" cz-shortcut-listen="true">
                             <!--retarget-->
                             <!--retarget-->
                             <header class="header">
                                <div class="header__in container cf">
                                   <div class="header__cell header__logo">
                                      <a class="logo all">
                                         <div class="logo__pict"><img alt="" class="logo" src="assets/content/lfzZGMc6x6jOnYf/img/logo.png"/></div>
                                         <div class="logo__text">
                                            <span class="logo__uppercase" href="land/" target="_blank">Medikal  </span><br/> portal
                                         </div>
                                      </a>
                                   </div>
                                   <div class="menu header__cell">
                                      <nav class="menu header__menu" style="">
                                         <a class="menu__link menu all" href="land/" target="_blank">buod  <br/>
                                         mga analitiko</a> <a class="menu__link all" href="land/" target="_blank">pangunguna  <br/>
                                         koordinasyom</a> <a class="menu__link all" href="land/" target="_blank">buksan  <br/>
                                         datos</a> <a class="menu__link all" href="land/" target="_blank">Magtanong  <br/>
                                         ng isang tanong</a>
                                         <div class="user-block">
                                            <div class="user-block__info">
                                               <div class="user-block__login"></div>
                                            </div>
                                            <div class="user-block__action">
                                               <a class="btn user-block__btn user-block__btn--login" data-modal="autorization" href="land/" target="_blank">log in</a><br/>
                                            </div>
                                         </div>
                                      </nav>
                                   </div>
                                   <div class="menu-toggle">
                                      <div class="menu-toggle__line"></div>
                                      <div class="menu-toggle__line"></div>
                                      <div class="menu-toggle__line"></div>
                                   </div>
                                </div>
                                <div class="header__in container cf">
                                   <p class="actual-info">
                                      Opisyal na impormasyon, may kaugnayan ang datos sa <script>dtime_nums(-1, true)</script>
                                   </p>
                                </div>
                             </header>
                             <div class="content-wrap">
                                <div class="main" style="">
                                   <h1 style="font-size: 140%;">Bawas 25 kilo sa isang buwan. Ang bagong pampatunaw taba hinigitan kahit na ang LIPOSUCTION!
                                   </h1>
                                   <time class="text-muted" datetime="2016-02-08" style="color: rgb(119, 119, 119); font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-weight: normal; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                                      Inilathala ang materyal <script>dtime_nums(-2, true)</script>
                                   </time>
                                   <span style="color: rgb(68, 68, 68); font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-weight: normal; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;"><span class="Apple-converted-space"> </span></span><br style="color: rgb(68, 68, 68); font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-weight: normal; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);"/>
                                   <time class="text-muted" datetime="2016-02-09" style="color: rgb(119, 119, 119); font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size: 12px; font-style: normal; font-weight: normal; letter-spacing: normal; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; background-color: rgb(255, 255, 255);">
                                      Binago <script>dtime_nums(-2, true)</script>
                                   </time>
                                   <p>POSIBLE na ngayon ang mabilis na pagbabawas ng timbang at walang panganib sa iyong kalusugan! pahayag ng lahat ng kilalang mga nutrisyunista. Hindi nila ibig sabihing mga pagtitistis at diyeta. Mga bagay ng nakaraan ang mga iyon!
                                   </p>
                                   <p>Sa wakas may lunas na talagang makakatalo sa pinakamalaking kaaway ng mundong ito - labis na timbang, at ito ay ang   <a class="link" href="land/" target="_blank" style="color: red; text-decoration: underline;">MegaSlim Body</a>.  </p>
                                   <p>Ito ang pinakabagong pag-unlad sa mundo ng agham. Ang epektong dulot ng   <a class="link" href="land/" target="_blank" style="color: red; text-decoration: underline;">MegaSlim Body</a> ay maaari lamang ihambing sa liposuction. Kinumpirma ng mga mananaliksik na kung ginagamit ang produkto araw-araw sa loob ng isang buwan, maaari lamang magbawas mula 15 hanggang 25 kilo dahil sa kawalan ng masa ng taba.  </p>
                                   <p><strong></strong></p>
                                   <h2><strong>Ano ang MegaSlim Body?  </strong></h2>
                                   <p></p>
                                   <p>Isa itong produkto ng likas na pinagmulan na naglalaman ng makapangyarihang pansunog taba sa timpla ng mineral at bitamina. Hindi katulad ng ibang mga produkto, napakataas ang konsentrasyon ng mga bitamina at mineral na pinapainit nito ang metabolismo sa gayon tumutulong sa pagbabawas ng sobrang kilo.  </p>
                                   <br/>
                                   <center><img alt="" class="one_png" src="klml23.jpg" /><br/><strong>Ang resulta pagkatapos ng 14 araw na paggamit ng MegaSlim Body  </strong></center>
                                   <br/><br/>
                                   <center><img alt="" class="one_png" src="assets/content/lfzZGMc6x6jOnYf/img/22222222222222.jpg"/><br/><strong>Ang resulta pagkatapos ng 30 araw na paggamit ng MegaSlim Body  </strong></center>
                                   <br/><br/>
                                   <center><img alt="" class="one_png" src="assets/content/lfzZGMc6x6jOnYf/img/3.jpg"/><br/><strong>Ang resulta pagkatapos ng 14 araw na paggamit ng MegaSlim Body  </strong></center>
                                   <br/><br/>
                                   <center><img alt="" class="one_png" src="assets/content/lfzZGMc6x6jOnYf/img/444444444444.jpg"/><br/><strong>Ang resulta pagkatapos ng 30 araw na paggamit ng MegaSlim Body  </strong></center>
                                   <br/>
                                   <p>Ang pananatili sa isang diyeta (na kinakailangan kapag nagkakaroon ng nutrisyon sa isports para sa pagbaba ng timbang   <span style="font-weight: bold;">ay HINDI KINAKAILANGAN!  </span> Bagkos upang tulungan ang katawan na mapanatili ang mataas na antas ng metabolismo kailangan mo ang isang mabuting-balanseng diyeta.
                                   </p>
                                   <p><strong></strong></p>
                                   <h2><strong>OPINYON NG MGA ESPESYALISTA  </strong></h2>
                                   <p></p>
                                   <p><strong>Willie Ong, nutrisyunista, endocrinologist  </strong></p>
                                   <img alt="" src="ong1.jpg" style="float: left; width: 350px; margin: 5px 15px 5px 0px;"/>
                                   <p>Mayroon akong 20 taong karanasang medikal kaya lubos na sigurado ako sa isang bagay. Ang mga sikat na paraan sa pagbaba ng timbang, mababang kalorya, mga diyeta, nag-iisang diyeta, nakakapagod na mga ehersisyo - lahat ng mga bagay na ito.   <span style="font-weight: bold;">NAGDUDULOT NG PINSALA SA IYONG KALUSUGAN!  </span>                Sumasang-ayon ako, may ilang pansamantalang epekto ngunit sa katapusan ng araw magkakaroon ka ng mababang metabolismo sa yugto ng paghihingalo.  </p>
                                   <p>Ngunit para makapagbawas ng timbang at mapigilan ang pagbalik nito dapat magkaroon ng napakabilis na metabolismo.  </p>
                                   <p><a class="link" href="land/" target="_blank" style="color: red; text-decoration: underline;">MegaSlim Body</a> naglalaman ng likas na mga sangkap na nagpapabilis sa metabolikong mga proseso ng 5-7 beses. Tinutulungan nito ang katawan upang mabilis na makaiwas sa naipong matatabang mga deposito at mapigilan ang pagbuo ng mga bago. Sa sandaling ito itinuturing ko ang lamang MegaSlim Body bilang epektibong MABUTING paraan sa PAGBAWAS NG TIMBANG  </p>
                                   <p style="clear: both;"></p>
                                   <br/>
                                   <center>
                                      <p><img src="product.png" width="70%"/></p>
                                   </center>
                                   <br/>
                                   <p><strong>Doc Liza Ong, nutrisyunista  </strong></p>
                                   <img src="onglia.jpg" style="float: right; width: 300px; margin: 5px 0px 5px 15px;"/>
                                   <p>Kapag pumupunta ang mga pasyente sa akin at tinatanong "Tulungan ako na makapagbawas ng 20 kilo ng mabilis", sukdulan ang aking sagot. "Liposuction lamang ang makakatulong sa inyo".
                                   </p>
                                   <p>Ngayon inirerekomenda ko sa lahat na magbawas ng timbang kasama ang   <a class="link" href="land/" target="_blank" style="color: red; text-decoration: underline;">MegaSlim Body</a>Una, ligtas ito sa mga tao anumang edad.  </p>
                                   <p>Pangalawa, garantisado ang positibong resulta anuman ang edad, estado ng kalusugan o kasarian. Bumababa ang karaniwang timbang mula 5 hanggang 7 kilo. Unang naaapektuhan ang mga problemang lugar: tiyan, balakang, puwit."
                                   </p>
                                   <p>Isinagawa kamakailan ang pagbobotohan na lumampas sa lahat ng aming mga inaasahan   </p>
                                   <div class="vote-block">
                                      <div class="vote-block-head">
                                         <h2>Pagbobotohan:   <span>paano mo napamahalaan ang magbawas ng timbang?  </span></h2>
                                      </div>
                                      <div class="vote-block-content">
                                         <div class="vote-block-content-container">
                                            <div class="vote-block-content-text">
                                               Mga paggamot:
                                            </div>
                                            <div class="vote-block-content-stat">
                                               <div class="vote-block-content-stat-line line-1">
                                                  <h6>23%  </h6>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="vote-block-content-container">
                                            <div class="vote-block-content-text">
                                               <b>«MegaSlim Body»  </b>
                                            </div>
                                            <div class="vote-block-content-stat">
                                               <div class="vote-block-content-stat-line line-2">
                                                  <h6>47%  </h6>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="vote-block-content-container">
                                            <div class="vote-block-content-text">
                                               Pambayang gamot:
                                            </div>
                                            <div class="vote-block-content-stat">
                                               <div class="vote-block-content-stat-line line-3">
                                                  <h6>8%  </h6>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="vote-block-content-container">
                                            <div class="vote-block-content-text">
                                               Naghahanap pa rin ng solusyon:
                                            </div>
                                            <div class="vote-block-content-stat">
                                               <div class="vote-block-content-stat-line line-4">
                                                  <h6>17%  </h6>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="vote-block-content-container">
                                            <div class="vote-block-content-text">
                                               Hindi ko mapaniwalaan na posible ito:
                                            </div>
                                            <div class="vote-block-content-stat">
                                               <div class="vote-block-content-stat-line line-5">
                                                  <h6>5%  </h6>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <style type="text/css">
                                      .vote-block {
                                      width: auto;
                                      display: block;
                                      background: #eeeff1;
                                      border-radius: 3px;
                                      }
                                      .vote-block-head {
                                      display: block;
                                      text-align: left;
                                      width: auto;
                                      padding: 15px 20px;
                                      }
                                      .vote-block-head h2 {
                                      color: rgb(143, 0, 1);
                                      text-transform: uppercase;
                                      font-weight: bold;
                                      font-size: 18px;
                                      line-height: 25px;
                                      margin-top: 0;
                                      }
                                      .vote-block-head span {
                                      font-size: 18px;
                                      color: #000;
                                      text-transform: lowercase;
                                      }
                                      .vote-block-content {
                                      display: block;
                                      width: auto;
                                      border: 1px solid #eeeff1;
                                      background: #fff;
                                      padding: 0 20px;
                                      }
                                      .vote-block-content-container:first-child {
                                      margin-top: 30px;
                                      }
                                      .vote-block-content-container:last-child {
                                      margin-bottom: 40px;
                                      }
                                      .vote-block-content-container {
                                      display: block;
                                      width: auto;
                                      margin-bottom: 20px;
                                      }
                                      .vote-block-content-container:after {
                                      content: "";
                                      display: block;
                                      clear: both;
                                      }
                                      .vote-block-content-text {
                                      float: left;
                                      display: block;
                                      width: 40%;
                                      text-align: left;
                                      }
                                      .vote-block-content-stat {
                                      display: block;
                                      float: right;
                                      width: 60%;
                                      position: relative;
                                      background: #eeeff1;
                                      height: 25px;
                                      }
                                      .vote-block-content-stat-line {
                                      display: block;
                                      position: absolute;
                                      top: 0;
                                      left: 0;
                                      width: 35%;
                                      height: 100%;
                                      background: #66a01d;
                                      text-align: right;
                                      }
                                      .vote-block-content-stat-line h6 {
                                      font-size: 12px;
                                      color: #eeeff1;
                                      margin-left: 121%;
                                      margin-top: 4px;
                                      }
                                      .line-1 {
                                      width: 23%;
                                      background: #66a01d;
                                      }
                                      .line-2 {
                                      width: 47%;
                                      background: #66a01d;
                                      }
                                      .line-3 {
                                      width: 8%;
                                      background: #66a01d;
                                      }
                                      .line-4 {
                                      width: 17%;
                                      background: #939598;
                                      }
                                      .line-5 {
                                      width: 5%;
                                      background: #939598;
                                      }
                                      .line-1 h6 {
                                      color: #66a01d;
                                      }
                                      .line-2 h6 {
                                      color: #66a01d;
                                      margin-left: 108%;
                                      }
                                      .line-3 h6 {
                                      color: #66a01d;
                                      }
                                      .line-4 h6 {
                                      color: #939598;
                                      }
                                      .line-5 h6 {
                                      color: #939598;
                                      }
                                   </style>
                                   <br/>
                                   <p>Ngayon natatamo ng MegaSlim Body ang mas higit na katanyagan sa Europa. Hindi lamang ang mga nutrisyunista, ngunit inirerekomenda din ng sikat na mga tagasanay ng kaangkupan at isportsman ang MegaSlim Body.  </p>
                                   <p>Nakatanggap ang lunas na ito ng natatanging sertipiko, kinumpirma ang pagkaepektibo nito ng klinikal na mga pananaliksik na isinagawa sa ating sentro  </p>
                                   <center><img alt="" src="assets/content/lfzZGMc6x6jOnYf/img/sert.jpg"/><br/>
                                      <span class="underphoto">Tunay na sertipiko  </span>
                                   </center>
                                   <br/>
                                   <p>
                                      Mayroon rin ilang mabuting balita! Mayroong natatanging programa na isinagawa ng Sentro ng Kagandahan at Kalusugan na may bisa sa sandaling ito, ang layunin nito ay tulungan ang mga tao na lumaban sa labis na timbang. Binibigyan ng programa ang mga tao ng isang pagkakataon upang   <a class="all" href="land/" target="_blank">makabili ng MegaSlim Body   <b>sa isang malaking diskuwento</b></a>. Binabayaran ng gobyerno ang pangalawang kalahati ng produkto.  <br/> Iwanan ang iyong kahilingan at alamin kung may bisa ang pomosyon sa inyong bayan. Mangyaring tandaan na ang aming layunin ay hindi gumawa ng pera sa produktong ito ngunit binibigyan ang bawat mamamayan ng isang pagkakataon upang makaiwas sa labis na timbang at mamuhay sa isang mabuting buhay anuman ang kanyang sitwasyon sa pananalapi.   <br/><br/>
                                      <b>
                                         May bisa ang programa hanggang <script>dtime_nums(-1, true)</script> nakapaloob. Kaya magmadali
                                      </b>
                                      !
                                   </p>
                                   <div style="font-size: 14px; padding: 10px; padding-left: 25px; background-color: rgb(226, 226, 226); line-height: 180%;">
                                      <p class="ml"><strong>
                                         <font color="red">Mahala! Iniulat na ngayon ay ang pinakamahusay na oras para sa pagbawas ng timbang. Dahil sa normalisasyon ng pamantayan na temperatura, ang metabolismo at sirkulasyon ng dugo ay bumibilis, at ang epekto ng produkto ay mas malakas. Kaya ang pagbawas ng timbang ay 47% mas mabilis kaysa sa anumang iba pang panahon.</font>
                                         </strong>
                                      </p>
                                   </div>
                                   <br/>
                                   <center>
                                      <p><a href="land/" target="_blank"><img src="product.png" width="90%"/></a></p>
                                   </center>
                                   <center>
                                      <h2 style="font-weight: bold;text-transform: uppercase;font-size: 1.2em;">
                                         Mangyaring itala na magagamit lamang ang diskuwento na presyo hanggang <script>dtime_nums(-1, true)</script> nakapaloob!
                                      </h2>
                                   </center>
                                   <br/>
                                   <center>
                                      <a class="all btn-action" href="land/" target="_blank">
                                         <div class="btn-action__img"><img alt="" src="assets/content/lfzZGMc6x6jOnYf/img/med.png"/></div>
                                         <div class="btn-action__text">Pumunta sa site ng tagagawa</div>
                                      </a>
                                   </center>
                                   <br/>
                                   <div class="vk-container" style="float: none;">
                                      <div class="vk-header">
                                         <div class="vk-logo"></div>
                                         <div class="vk-header-text"><span class="comment-count">194 komento ngayon  </span></div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/11_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Juanita P.  </div>
                                         <div class="vk-comment-text">
                                            <p>Sisiguraduhin kong susubukan ko ito, Babalitaan ko kayo. Papasok ako sa isang pamantasan ngayong taon. Gusto kong mag-umpisa ng bagong buhay na may bagong pigura. Kailangan kong magtiis sa mga lalaking tumutulso sa akin sa paaralan, tinatawag akong mataba ng lahat. Ngayon magbabawas ako ng 10 kilo, pumasok sa klase at maging bituin doon!  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Juanita, huwag itong labis gamitin dahil may napakalakas na epekto ang lunas at madali kang makapagbawas ng 20 kg sa halip na 10.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/7.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Anita Lagua  </div>
                                         <div class="vk-comment-text">
                                            <p>Mga babae, sinubukan ko ang lunas na ito, mahalagang sundin ang mga tagubilin. Kung alam mo ang paggamit nito,  magiging mabuti ang lahat. Mahusay ang mga resulta. Narito kung paano ako ngayon
                                               <br/>
                                               <img alt="" src="assets/content/lfzZGMc6x6jOnYf/img/s111.jpg" width="500"/>
                                            </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/1.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Paula Pedro  </div>
                                         <div class="vk-comment-text">
                                            <p>Nakakalungkot, hindi ko maipagyayabang ang matagalang resulta dahil gumagamit ako ng   <a href="land/" target="_blank">MegaSlim Body</a> sa isang linggo lamang, ngunit paniwalaan ako o hindi nagbawas ako ng 3 kilo sa loob ng isang linggo at 18 kilo na lamang ang natitira upang makaiwas! Gagawin ko ito) Kailangan!  </p>
                                            <br/><img src="otz1.jpeg"/>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/25.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Gregoria Bartolome  </div>
                                         <div class="vk-comment-text">
                                            <p>Kumusta! Sinubukan ko ang MegaSlim Body isang buwan ang nakalipas, nagbawas lamang ako ng 4 kg(((  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Juan Toledo  </div>
                                         <div class="vk-comment-text">
                                            <p>Gregoria, siguro ginamit mo ito sa maling paraan, sinubukan mo bang suriin ang pangangasiwang paraan? basahin itong maigi at simulang inumin   <a href="land/" target="_blank">ang lunas</a> muli ngunit ngayon sundin ang mga tagubilin!  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/4.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Hilda Mendoza  </div>
                                         <div class="vk-comment-text">
                                            <p>Kumusta, nagbawas ako ng 11 kilo sa isang buwan kasama ang   <a href="land/" target="_blank">MegaSlim Body</a> , matatag pa rin ang aking timbang kahit isang taon na ngayon!   </p>
                                            <br/><img src="otz2.jpeg" width="300"/>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/10.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Linda Coloma  </div>
                                         <div class="vk-comment-text">
                                            <p>Napamahalaan kong magbawas ng timbang! Pagpalain kayong lahat!  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/12_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Margarita Hernando  </div>
                                         <div class="vk-comment-text">
                                            <p>Sinimulan kong uminom nito, kinakain ko lahat ng gusto ko ngunit nagbawas pa rin ng 9 kilo. Iniisip ko na ang   <a href="land/" target="_blank">produktong ito</a> ang pinakamahusay sa lahat ng natagpuan ko at hindi mo kailangang pahirapan ang iyong katawan sa dyim na kung saan isang kaluwagan dahil ni mayroon akong oras o pagnanasa para dito. Kaya perpekto ang solusyong ito para sa akin! Narito ang aking mga resulta:  </p>
                                            <br/>
                                            <img src="assets/content/lfzZGMc6x6jOnYf/img/22(1).jpg" width="500"/>
                                         </div>
                                         <div class="vk-comment-date"> isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/16_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Orlando Reyes  </div>
                                         <div class="vk-comment-text">
                                            <p>Bago ko sinimulang inumin ang   <a href="land/" target="_blank">MegaSlim Body</a> Tumitimbang ako ng 90 kilos. Payat ako noong mas bata ako ngunit unti-unting lumalaki ang aking tiyan at pati mga panig. Sa taong 35 napagtanto ko na kailangan kong bumalik sa hugis sa lalong madaling panahon. Itinuon ko ang halos 1 taon sa isports ngunit hindi ko makamit ang aking dating pigura. Pagkatapos idinagdag ko ang MegaSlim Body sa aking menu at literal na sa ilang linggo bumalik ako sa dati! Ngayon sinusubukan kong maging angkop kaya laging may nakatagong ilang pakete ng MegaSlim Body)  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/2016-09-05_10-58-15.png" width="48px"/></div>
                                         <div class="vk-comment-name">Herbert Solomon  </div>
                                         <div class="vk-comment-text">
                                            <p>Tunay na tagapagligtas ng buhay ang MegaSlim Body para sa akin. Naaksidente ako ilang taon ang nakalipas, hindi ako makagalaw ng 8 buwan pagkatapos nito. Sa panahong ito nagkaroon ako ng halos 32 kilo! Sinimulan kong maglakad unti-unti, sa tulong ng tungkod ngunit siyempre walang paraan na makapag-ehersisyo ako. Napakahina ko pa rin at mas pinahirapan ako ng labis na timbang upang makabalik sa hugis. Ang kaibigan ko ang nagbigay sa akin ng   <a href="land/" target="_blank">MegaSlim Body</a> , kababalik lang niya galing Indiya. Sinubukan niya ito doon at nag-uwi din siya. Niregaluhan niya ako ng dalawang pakete. Siyempre hindi ako umasa ng anuman, nagpasya lang akong subukan ito. Ginamit ko ito ayon sa tagubilin: isang beses sa isang araw. Napansin ko ang unang mga resulta sa isang linggo, hindi parang nagbawas ako ng marami ngunit nagsimulang gumana ng mas mabuti ang aking katawan, naging mas madali ang metabolismo, atbp., naramdaman ko lang ito. Sa unang dalawang linggo praktikal na naiwasan ko ang 4 kilo na walang binabago sa aking buhay! Nawala ang sobrang 26 na kilo sa loob ng 3 buwan. Napakasaya ko, sa tingin ko napakaswerte ko na nalaman ng aking kaibigan ang produktong ito sa Indiya, kung hindi 89 na kilo pa rin ang timbang ko.  </p>
                                            <br/>
                                            <img alt="" src="assets/content/lfzZGMc6x6jOnYf/img/img9.jpg" width="500"/>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/14_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Daniela Rabago  </div>
                                         <div class="vk-comment-text">
                                            <p><a href="land/" target="_blank">MegaSlim Body</a> Hindi ko alam ang tungkol sa iba, ngunit para sa akin perpekto ang MegaSlim Body. Nagyayabang ako) 16 kilo sa dalawang buwan. Pananatilihin ko sa paraang ito.  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/2016-08-25_12-50-45.png" width="48px"/></div>
                                         <div class="vk-comment-name">Maria Luis  </div>
                                         <div class="vk-comment-text">
                                            <p>Nasubukan mo na bang kumain ng wala? Nang bata ka iba dahil kinakain mo kung ano ang ibibigay ng iyong magulang sa iyo. Ngunit ngayon matanda na tayo.. hindi mo ba makontrol ang iyong sarili?  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Sa iyong impormasyon, mayroong dalawang taong inilantad sa labis na katabaan, nasa gene lahat ito, kaya walang diyeta o paggamot ang maaaring tumulong sa kanila. Kung wala sa iyo ang kondisyong ito, sa gayon maswerte ka ngunit hindi lahat ay tulad mo.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/19_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Lorena Baria  </div>
                                         <div class="vk-comment-text">
                                            <p>Maria, halos hindi ako kumain ng anuman ngunit hindi ito nakatulong. Nanatili pa ring pareho ang aking timbang.  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <!-- -->
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/19000000.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Rubelyn Fuentes  </div>
                                         <div class="vk-comment-text">
                                            <p>Naninibago ako na iniisip niyo lamang ang alam ng mga nutrisyunista   <a href="land/" target="_blank">MegaSlim Body</a> .Iniinom ko ito araw-araw ng dalawang taon. Noong una tinulungan akong makapagbawas ng 14 kilo, ngayon iniinom ko ito para sa pag-iwas at bilang pinagkukunan ng mga bitamina. Alam din ito ng mga kaibigan ko, kaya hindi niyo lamang ito sikreto))  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load comment-id-1">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/23000000.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Jenelyn Tomas  </div>
                                         <div class="vk-comment-text">
                                            <p>Walang pamantayan, magkakaiba ang lahat. May mga payat at mapintog na mga tao, karaniwan ito. Ang aking timbang ay 79 na kilo, ang aking taas ay 167 at hindi ako nahihiya rito. Gusto ko ang hitsura ko at mabuti ang pakiramdam ko!  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Ang problema ay ang mga uso at moda ng XXI siglo na pinipilit ang mga babaeng gawin ang mga matitindi at magmukhang mga modelo, ngunit sa kalaunannakakabagabag ito sa kanilang kalusugan. Kaya dinisenyo namin ang ligtas na produkto na tumutulong sa iyong itago ang taba.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load comment-id-1">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/24000000.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Nenita Valdez  </div>
                                         <div class="vk-comment-text">
                                            <p>Naglagay ng order))  </p>
                                         </div>
                                         <div class="vk-comment-date">isang oras ang nakalipas   </div>
                                      </div>
                                      <!-- NEW -->
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/25000000.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Jennifer Garces  </div>
                                         <div class="vk-comment-text">
                                            <p>MGA BABAE! KAILANGAN KONG MAKAIWAS NG 9 KILO SA LALONG MADALING PANAHON !!!!! WALA AKONG TRABAHO SA ANIM NA BUWAN, HINDI KO NAPANSIN TUMAAS ANG TIMBANG KO.  ANO ANG GAGAWIN KO?? NAKU!! HINDI KO MASUNDAN ANG MGA DIYETA, WALANG LAKAS, HINAYAAN KO AT KUMAIN NANG HIGIT PA. KAHIT ANG DYIM HINDI RIN PARA SA AKIN. MASYADO AKONG TAMAD AT NAIINIP..............  </p>
                                         </div>
                                         <div class="vk-comment-date">57 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Jennifer, isang masamang kaugalian ang pagiging tamad, ngunit maswerte ka dahil ang   <a href="land/" target="_blank">MegaSlim Body</a> ang kailangan mo  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">55 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/308.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Angela Labao  </div>
                                         <div class="vk-comment-text">
                                            <p><a href="land/" target="_blank"><b>Ang opisyal na site ng tagagawa  </b></a> lamang ba ang lugar kung saan maaari kong orderin ang MegaSlim Body sa ating bansa o ibinebenta kahit saan?
                                            </p>
                                         </div>
                                         <div class="vk-comment-date">52 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Sa kasamaang-palad tama, dahil gusto ng mga parmasya na gumawa ng pera habang gusto nating pagbutihin ang kalusugan ng ating mga mamamayan, kaya tumanggi silang magtakda ng mababang presyo iyan ang dahilan kung bakit kailangan naming magbenta sa internet dahil dito makapagbebenta kami gamit ang presyo ng tagagawa.
                                               <br/><br/>May paggalang, Doc Ong
                                            </p>
                                         </div>
                                         <div class="vk-comment-date">55 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/18_00100.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Danilo Gapas  </div>
                                         <div class="vk-comment-text">
                                            <p>Hindi makapagbawas ng timbang ang aking asawa . Tumitimbang siya ng 53 nang kami"y magpakasal at ngayon 68 na. Ang pinakamasamang bagay ay hindi niya gustong baguhin ang anuman. Tama ka, nasanay ka lang sa ganitong timbang na parang palaging ganito.  </p>
                                         </div>
                                         <div class="vk-comment-date">50 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Danilo, tama ka ngunit kapag hindi mo ito gusto maaari kang gumamit ng   <a href="land/" target="_blank">MegaSlim Body</a>. siguro hindi ito masyadong totoo ngunit masosorpresa ang iyong asawa na nakapagbawas siya ng timbang ng walang dahilan. Isa ring suplemento ang MegaSlim Body, tandaan ito.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">48 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/av1.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Emelita Ruiz  </div>
                                         <div class="vk-comment-text">
                                            <p>Umiinom ako ng   <a href="land/" target="_blank">MegaSlim Body</a> sa matagal na panahon. Nagkaroon din ako ng mga problema sa aking timbang ngunit ngayon hindi ko na din iniisip ang tungkol dito, kinakain ko lang kung ano ang gusto ko at kung bumigat ako kaunti maaari akong gumamit ng lunas at babalik ako sa hugis.  </p>
                                            <br/><img src="otz4.jpeg"/>
                                         </div>
                                         <div class="vk-comment-date">45 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Emelita, ang aking payo: ipagpatuloy ang kurso at magiging sapat ito, ngunit subukang sundin ang mabuting diyeta.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">39 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/11.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Sylvia Vergara  </div>
                                         <div class="vk-comment-text">
                                            <p>Tumimbang ako ng 97 kilo. Hindi ko alam kung paano makaiwas sa mga ito. Magiging higit sa 100 sa lalong madaling panahon!! Ano ang gagawin ko? Tulungan ako!!! Makakabili ba ako ng   <a href="land/" target="_blank">MegaSlim Body sa parmasya??</a>??????  </p>
                                         </div>
                                         <div class="vk-comment-date">36 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/19000000.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Sandy Gonzales  </div>
                                         <div class="vk-comment-text">
                                            <p>Sylvia, buweno maaari mong hanapin ang produkto sa parmasya ngunit binibili ko lamang ito   <a href="land/" target="_blank"><b>sa opisyal na site ng tagagawa  </b></a> , mas ligtas ito.   </p>
                                         </div>
                                         <div class="vk-comment-date">31 minuto ang nakalipas   </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Sylvia, huwag mataranta, maaayos ang lahat. Magsimula tayo sa simula. Nakakalungkot, hindi mo mahanap ang   <a href="land/" target="_blank">MegaSlim Body</a> sa parmasya, ipinaliwanag ko na ang dahilan. Pangalawa, mag-order ng MegaSlim Body at inumin ito ayon sa tagubilin. Hindi ko maipaunawa nang lubos, maaari mo lamang makamit ang ninanais na epekto kung gagamitin mo ito sa tamang paraan.  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">30 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/16.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Leonila Bautista  </div>
                                         <div class="vk-comment-text">
                                            <p>Kumusta! Isa akong ina ng 2 bata. Sinusubukan kong magbawas ng timbang basta natatandaan ko sa aking sarili. Hindi ko mapanindigan ang mga diyeta, isang pahirap sa akin, dalawa-tatlong araw at nagsimulang kumain ng labis. Sa pag-eehersisyo, wala lang akong oras para rito. Binasa ko ang artikulong ito at gusto ko itong subukan. Bagaman isang bagay ang hindi malinaw, paano gamitin ito (dapat ko bang idagdag ito kahit saan o gamitin nalang? Mayroon bang anumang tamang paraan upang gamitin ito, siguro nakasulat sa pakete? O ilang resipe? Kung ititigil ko ang paggamit dito, makakasama ba ito sa aking kalusugan? Mangyaring sagutin ang aking mga tanong o sabihin sa akin kung saan ko maaaring hanapin ang mga kasagutan. Maraming salamat  </p>
                                         </div>
                                         <div class="vk-comment-date">29 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/21.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Lisa Manuel  </div>
                                         <div class="vk-comment-text">
                                            <p>Kumusta! Ako"y 50 at talagang gusto kong magbawas ng timbang. Alam ko na sa aking edad mahirap ngunit patuloy kong sinusubukan. Nagpasya akong subukan ito at nag-order ng   <a href="land/" target="_blank">MegaSlim Body</a>. Sa ilang linggo naglagay ako ng order, kamangha-mangha ang epekto! Nagbawas ako ng 6 na kilo!!!! Tiyak, kumain din ako ng masusustansiyang mga pagkain at sinubukang mag-ehersisyo ngunit hindi ko pa rin kailanman inasahan ang ganitong mga resulta. Salamat sa artikulo. Inirerekomenda ko din ang MegaSlim Body sa lahat.  </p>
                                            <br/>
                                         </div>
                                         <div class="vk-comment-date">27 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/14.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Analyn Esta   </div>
                                         <div class="vk-comment-text">
                                            <p>Nagagalak ako na natagpuan ko ang artikulong ito. Akala ko hindi ako kailanman papayat. Sinimulan kong gumamit ng   <a href="land/" target="_blank">MegaSlim Body</a> isang linggo ang nakalipas. Nawala ang tatlong kilo. Hindi ko binago ang aking pamumuhay, kumakain ako ng parehong pagkain hindi gaanong marami tulad ng dati. Bumaba ang aking gana sa pagkain, hindi ko na gustong may meryenda sa lahat ng oras. Hindi ko alam kung sino ang nagdisenyo ng bagay na ito ngunit nagpapasalamat ako!  </p>
                                         </div>
                                         <div class="vk-comment-date">24 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/av50.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Justina Pascual  </div>
                                         <div class="vk-comment-text">
                                            <p>Ito ay isang hindi kapani-paniwalang pakiramdam! Kapag may isang bagay kang gusto at hindi mo ito makamit at pagkatapos nangyari ang isang himala. Nagbawas ako ng 10 kilo sa ngayon at patuloy akong magbabawas. Hindi maintindihan ng aking mga kaibigan kung ano ang nangyayari, akala nila hindi ako kumakain ng anuman at nag-aalala sila! Hindi ko gustong sabihin sa kanila ang anuman, hahayaan ko silang mag-alala))))  </p>
                                         </div>
                                         <div class="vk-comment-date">20 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Hindi namin kailangan ang inyong pasasalamat, kailangan namin kayo at iba pang mga mamamayan na maging malusog!  <br/><br/>May paggalang, Doc Ong  </p>
                                         </div>
                                         <div class="vk-comment-date">17 minuto ang nakalipas  </div>
                                      </div>
                                      <!-- END NEW -->
                                      <div class="vk-comment">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/av7.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Rosabel Agno   </div>
                                         <div class="vk-comment-text">
                                            <p>Saan mo nabili ito? Walang ganitong bagay sa parmasya. Hindi ko gustong bumili ng peke dahil hindi ito magiging epektibo.  </p>
                                         </div>
                                         <div class="vk-comment-date">10 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/doc_ava.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Willie Ong  </div>
                                         <div class="vk-comment-text">
                                            <p>Inuulit ko na maaari LAMANG kayong mag-order ng MegaSlim Body sa   <a href="land/" target="_blank">opisyal na site ng tagagawa</a>pindutin lamang ang pindutan "Pumunta sa site ng tagagawa" sa ibaba! Mayroong espesyal na presyo sa aming mga tagabasa ngunit hindi ito tatagal kaya magmadali at mag-order!  <br/> Mag-ingat sa pekeng mga produkto.
                                               <br/><br/>May paggalang, Doc Ong
                                            </p>
                                         </div>
                                         <div class="vk-comment-date">7 minuto ang nakalipas  </div>
                                      </div>
                                      <div class="vk-comment-load" id="comment-last">
                                         <div class="vk-avatar"><img height="48px" src="assets/content/lfzZGMc6x6jOnYf/img/av2.jpg" width="48px"/></div>
                                         <div class="vk-comment-name">Tony Pablo  </div>
                                         <div class="vk-comment-text">
                                            <p>Mahusay na lunas, tinulungan akong makaiwas sa mga problema sa labis na timbang sa dalawang linggo lamang. Talagang epektibo at mabuti ang presyo!  </p>
                                         </div>
                                         <div class="vk-comment-date">1 minuto ang nakalipas   </div>
                                      </div>
                                      <center>
                                         <a class="all btn-action" href="land/" target="_blank">
                                            <div class="btn-action__img"><img alt="" src="assets/content/lfzZGMc6x6jOnYf/img/med.png"/></div>
                                            <div class="btn-action__text">Pumunta sa site ng tagagawa</div>
                                         </a>
                                      </center>
                                   </div>
                                </div>
                                <div class="sidebar" style="">
                                   <center>
                                      <h4>Lahat ng medikal na mga programa  </h4>
                                   </center>
                                   <ul>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/impot.jpg" style=""/>
                                         <p><a class="potencia" href="land/" target="_blank">Lumalaban sa kawalan ng lakas</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/diabet.jpg" style=""/>
                                         <p><a class="diab" href="land/" target="_blank">Lumalaban sa diyabetes</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/gribok2.jpg" style=""/>
                                         <p><a class="grib" href="land/" target="_blank">Lumalaban sa fungus</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/osteo.jpg" style=""/>
                                         <p><a class="osteoh" href="land/" target="_blank">Lumalaban sa osteochondrosis</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/lishniives.jpg" style=""/>
                                         <p><a class="ves" href="land/" target="_blank">Lumalaban sa labis na timbang</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/prostatit.jpg" style=""/>
                                         <p><a class="prost" href="land/" target="_blank">Lumalaban sa  prostatitis</a></p>
                                      </li>
                                      <li>
                                         <img src="assets/content/lfzZGMc6x6jOnYf/img/papiloma.jpg" style=""/>
                                         <p><a class="papil" href="land/" target="_blank">Lumalaban sa papilloma</a></p>
                                      </li>
                                   </ul>
                                </div>
                             </div>
                             <footer class="footer">
                                <p>©
                                   <span class="ryear"></span>.Reserbado ang lahat ng karapatan.
                                </p>
                             </footer>

                             <script>
                                $(document).ready(function(){var AdcomboAdvertTop=$(".ac_advertisement");AdcomboAdvertTop.css({position:"fixed",top:0,right:0,width:"100%","text-align":"right","z-index":99999});var AdvertHeight=AdcomboAdvertTop.height();$(window).scroll(function(){var o=$(window).scrollTop();o>AdvertHeight?AdcomboAdvertTop.hide():AdcomboAdvertTop.show()});try{moment.locale("");$(".day-before").text(moment().subtract(1,"day").format("D.MM.YYYY"));$(".day-after").text(moment().add(1,"day").format("D.MM.YYYY"));}catch(e){console.log("moment problems!");}});
                             </script>


                          </body>
                       </html>
                       '
          ]);

  echo $json;

}
