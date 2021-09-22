<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$imail="sergeykozin1@gmail.com"; //Email (можно через запятую - email1, email2, email3)
$ireply=""; //Email для ответа (нажимая на ''отправить'' клиент отправит сообщение на этот email)
$tiny_text="спасибо за вашу заявку, мы свяжемся с вами в ближайшее время."; //Благодарность
$ntimer=""; //Таймер возврата на главную, в секундах - после успешного заказа, по истичению заданного времени заказчика перекинет на главную страницу
$kod_kod=""; //Скрипты
?>
<!DOCTYPE HTML>
<html style="height: 100%; font-family: 'Lato', Calibri, Arial, sans-serif;">
<head>
  <meta http-equiv="content-type" content="text/html" />
  <meta name="author" content="smok003" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=false"/>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-49181294-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-49181294-1');
  </script>
  <!-- Google Tag Manager -->

  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

  })(window,document,'script','dataLayer','GTM-TMM24SV');</script>

  <!-- End Google Tag Manager -->
  <?=$ntimer > ' ' ? '<meta http-equiv="refresh" content="' . $ntimer . '; url=/">' : ''?>

<?php
if (
    (isset($_POST['tel'])   && strlen($_POST['tel']) > 9) 
    
) {

  $message = '';
  $message_2 = '';
  $client = '';


  $post = array(
    'имя'     => 'Имя: ',           'name'   => 'Имя: ',
    'tel'     => 'Телефон: ',       'phone'  => 'Телефон: ',       'contact'    => 'Контакты: ',
    'skype'   => 'Скайп: ',         'fb'     => 'Фейсбук: ',       'vk'         => 'Вконтакте: ',
    'mail'    => 'Email: ',         'email'  => 'Email: ',

    /* стандартные доп поля */
    'notes'   => 'Комментарий: ',   'note'   => 'Комментарий: ',   'comment'    => 'Комментарий: ',
    'object' => 'Объекты, где будет проводиться инвентаризация: ',
    'adres'   => 'Адрес: ',         'adress' => 'Адрес: ',         'address'    => 'Адрес: ',     'addr'  => 'Адрес: ',
    'shipping'=> 'Отправка: ',
    'add'     => 'Дополнительно: ', 'dop'    => 'Дополнительно: ', 'additional' => 'Дополнительно: ',
    'cena'    => 'Цена: ',          'cost'   => 'Цена: ',          'price'      => 'Стоимость: ', 'total_price' => 'Итого: ',
    'subject' => 'Тема: ',          'theme'  => 'Тема: ',
    'tovar'   => 'Товар: ',
    'count'   => 'Количество: ',
    'message' => 'Сообщение: ',
    'inn'     => 'ИНН: ',
    'birthdate' => 'Дата рождения: ',
    'placing_own_variable' => 'Где находятся объекты (свой вариант): ',

    /* свойства обьектов */
    'size'      => 'Размер: ',      'width'   => 'Ширина: ',       'height'     => 'Высота: ',    'length'  => 'Длинна: ',
    'amount'     => 'Количество объектов необходимо посчитать: ',        'format'  => 'Формат: ',
    'view'      => 'Вид: ',         'kind'    => 'Вид: ',      
    'utm_source'    => 'источник: ',         'veight'  => 'Вес: ',          'wt'         => 'Вес: ',
    'placing'    => 'Где находятся объекты: ',      'shape'   => 'Фигура: ',
    'chto_schitat' => 'Что нужно посчитать: ',   'pattern' => 'Структура: ',    'texture'    => 'Структура: ',
    'how_much'    => 'Сколько единиц ОС и/или ТМЦ нужно посчитать: ',      'styling' => 'Дизайн: ',
    'spravochnik'    => 'Есть номенклатурный справочник: ',    'img'     => 'Картинка: ',
    'rab_sila'  => 'Рабочая сила: ',     'ref'     => 'Реферал: ',
    'title'     => 'Заголовок (название): ',
    'type'      => 'Тип: ',
    'day'     => 'Нерабочий день: ',
    'object_own_variable'  => 'Свой вариант объекта: ',
    'date'      => 'Дата: '
  );

function frarr($arr){
  global $post;

  $r = '';
  foreach ($arr as $k => $v) {
    if (is_array($v))
      $r .= frarr($v);
    else
        $r .= ( $post[$k] ? $post[$k] : ($k . ': ') ) . $v . PHP_EOL;
  }

  return $r;
}

  foreach ($_POST as $key => $value) {
    if (is_array($value)) {
      $message .= ( $post[$key] ? $post[$key] : ($key . ': ') )  . PHP_EOL;
      $message .= frarr($value);
      $message .= PHP_EOL;
    } else
      $message .= ( $post[$key] ? $post[$key] : ($key . ': ') ) . $value . PHP_EOL;
  }

  //unset($_POST["name"]);
  //unset($_POST["tel"]);
  //unset($_POST["email"]);

  foreach ($_POST as $key => $value) {
    if (is_array($value)) {
      $message_2 .= ( $post[$key] ? $post[$key] : ($key . ': ') )  . PHP_EOL;
      $message_2 .= frarr($value);
      $message_2 .= PHP_EOL;
    } else
      $message_2 .= ( $post[$key] ? $post[$key] : ($key . ': ') ) . $value . PHP_EOL;
  }

  $header = 'Content-type: text/plain; charset=UTF-8' . PHP_EOL . 
            'From: ' . $imail . PHP_EOL . 
            'MIME-Version: 1.0'. PHP_EOL;

  $title = 'Заказ с сайта ' . $_SERVER['HTTP_HOST'];
  
  mail($imail, $title, $message, $header);
  mail("oleg@rosinvent.com", $title, $message, $header);
  mail("r.makhmudov@rosinvent.com", $title, $message, $header);


  //mail($imail, $title, $message, $header);

  if (!$imail) { 
// сообщение не отправилось
    $thisfile = pathinfo($_SERVER['PHP_SELF']); ?>

      <title>Ошибка отправки</title>
    </head>
    <body>
      <div style="width:980px;max-width:100%;margin:0 auto;text-align:center;">
        <h1> Ошибка отправки! </h1> 
        <h2>Email не задан, некуда отправить заявку</h2>

        Вверху файла <strong><?= $thisfile['basename'] ?></strong> найдите строку <strong>$imail=""</strong> и впишите ваш email в кавычках<br/>
        пример: <strong>$imail="<b>email@mail.ru</b>"</strong>
        <br/>
        <br/>

        <h2>Содержимое текущей заявки:</h2>
        <div class="mail"><?= (preg_replace("/\n/i", "<br>", $message)) ?></div>
      </div>
      <style>
        html{background-color: #EAC5C5;} b{color:#f00;}
        .mail{display: inline-block; margin: 0 auto; text-align: left; border: 3px solid #fff9; padding: 10px 25px;}
    h2{margin-bottom: 10px;}
      </style>
    </body>
    </html>

  <?php die; }

  //if (mail($imail, $title, $message, $header) == 1) {
  if (true) {
//Успешная заявка 
  ?> 

    <title>Спасибо за заявку!</title></head><body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TMM24SV"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      
      <section id="thank">
      	<div class="wrap">
      		<h2 class="h2">Спасибо за обращение!</h2>
      		<p class="sub">Мы свяжемся с Вами в ближайшее время</p>
      		<a href="index.php" class="btn">Вернуться на сайт</a>

      		<img src="assets/img/1.png" class="man">
      	</div>
      </section>
    <style>
      html{background: #000;}
      #info::first-letter{text-transform: uppercase;}
    </style> 

  <?php } else {
// Ошибка отправки ф-цией mail() 
  ?>

    <title>Ошибка отправки!</title></head><body>
      <div class="outer-wrap">
        <div class="container">
          <p id="info">Ошибка отправки заказа!<br/><span>Если вы видите это сообщение при попытке оформить заказ - свяжитесь с нами, для уточнения статуса заказа.</span><br /><br /><a href=".">На главную</a></p>
        </div>
      </div>
    <style>
      html{background-image: linear-gradient(to top, #EAC5C5 0%, #FFF 50%, #EAC5C5 100%); background-color: #EAC5C5;}
    </style>

  <?php }

} else {
// Не указан обязательный парамерт отправки (напр. телефон) 
?>

  <title>Спасибо за заявку!</title></head><body>
      <section id="thank">
      	<div class="wrap">
      		<h2 class="h2">Спасибо за обращение!</h2>
      		<p class="sub">Мы свяжемся с Вами в ближайшее время</p>
      		<a href="index.php" class="btn">Вернуться на сайт</a>

      		<img src="assets/img/1.png" class="man">
      	</div>
      </section>
    <style>
      html{background: #000;}
      #info::first-letter{text-transform: uppercase;}
    </style> 
<?php } ?>
<!-- метрика, аналитика -->
<?=$kod_kod?>

<style>
  #info {font-size: 1em; vertical-align: middle;}
  #info span {color: gray; font-size:0.8em;}
  .container{width: 95%;}
  body{margin: 0;}
  .container{margin: 0px auto; text-align: center; display: block; bottom: 0%; left: 0%;}
  .outer-wrap{top: 40%; position: absolute; width:100%;}
  @media (min-width: 1920px){body{font-size:24px;}}
  @media (max-width: 1920px){body{font-size:22px;}}
  @media (max-width: 1366px){body{font-size:20px;}}
  @media (max-width: 1024px){body{font-size:18px;}}
</style>

<?php if ( isset($_POST['tel'])  ): ?>
  
  <?php 
    


    function sendCurl ($link, $data) {
      $curl=curl_init();
      curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-API-client/1.0');
      curl_setopt($curl,CURLOPT_URL,$link);
      curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
      curl_setopt($curl,CURLOPT_POSTFIELDS,json_encode($data));
      curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
      curl_setopt($curl,CURLOPT_HEADER,false);
      curl_setopt($curl,CURLOPT_COOKIEFILE,dirname(__FILE__).'/cookie.txt');
      curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__).'/cookie.txt');
      curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
      curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
      $out=curl_exec($curl);
      $code=curl_getinfo($curl,CURLINFO_HTTP_CODE);
      $code=(int)$code;
      
      //setLog ([$email], $error, $id);  //отлавливаем ошибки и записываем в log

      return $out;
    }

    // API AMO
    $subdomain           = 'glavinvent';
    $responsible_user_id = 2650162; // ответственный в amo
    $status_id           = 21024688; // этап воронки
    $pipeline_id         = 3131266; // ID и воронки

    $fio = 'Новый клиент';
    if ( isset($_POST['name']) ) {
      $fio = $_POST['name'];
    }


    // поля 

    $name     = 'Заявка с сайта rosinvent.com';
    $phone    = $_POST['tel'];
    $email    = $_POST['email'];
    //$message  = $_POST["products"]; 
    //$comment  = $_POST["msg"]; 
    //$sale     = $_POST["sale"];

    if ( isset($_POST["comment"]) ) {
      $name     =  $_POST["comment"] . ' rosinvent.com';
    }


    if(!$fio){
      $fio = $phone ? $phone : $email;
    }
    
    // АвторизациЯ
    $user=array(
      'USER_LOGIN'=>'glavinvent@yandex.ru', //данные для входа в amocrm
      'USER_HASH'=>'c5fbada1830df7292a683fa11a66c5a4d29bd79f' // в личном кабинете в профиле пользователя
    );
    $link='https://'.$subdomain.'.amocrm.ru/private/api/auth.php?type=json';
    $out = sendCurl($link,$user);
    $Response = json_decode($out,true);
    $authResponse = $Response['response'];

    ////////$amoAllFields = $account['custom_fields']; //Все поля
   //////// $amoConactsFields = $account['custom_fields']['contacts']; //Поля контактов
    //echo '<b>Поля из амо:</b>'; echo '<pre>'; print_r($amoConactsFields); echo '</pre>';
    //ФОРМИРУЕМ МАССИВ С ЗАПОЛНЕННЫМИ ПОЛЯМИ КОНТАКТА
    //Стандартные поля амо:
    $sFields = array_flip(array(
        'PHONE', //Телефон. Варианты: WORK, WORKDD, MOB, FAX, HOME, OTHER
        'EMAIL' //Email. Варианты: WORK, PRIV, OTHER
      )
    );
    //Проставляем id этих полей из базы амо
    ////////foreach($amoConactsFields as $afield) {
      ////////if(isset($sFields[$afield['code']])) {
        ////////$sFields[$afield['code']] = $afield['id'];
      ////////}
    ////////}

    //if(isset($authResponse['auth'])) {
    $leads['request']['leads']['add'] = array(
      array(
        'name'=> $name,
        'responsible_user_id'=> $responsible_user_id,
        'status_id'=>$status_id,
        //'pipeline_id' => $pipeline_id,
        //'price' => $sale,
        'tags'=>['rosinvent.com'], // тег для сделки
        'custom_fields'=>array(
          array(
            'id' => 279641,
            'values' => array(
              array(
                'value' => $phone,
              )
            )
          ),
         array(
            'id' => 279643,
            'values' => array(
              array(
                'value' => $email,
              )
            )
          ),   
        ) // custom_fields
      )
    );
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
    $out = sendCurl($link,$leads);

    $Response=json_decode($out,true);
    if(is_array($Response['response']['leads']['add'])) {
        foreach($Response['response']['leads']['add'] as $lead) {
            $lead_id = $lead["id"];
        };
    }
    $lead_id_message = substr($lead_id, 2);
          
    $contact = array(
      'name' => $fio,
      'linked_leads_id' => array($lead_id),
      'responsible_user_id' => $responsible_user_id,
      'custom_fields'=>array(
        array(
          'id' => 687473,
          'values' => array(
            array(
              'value' => $phone,
            )
          )
        ),
       array(
          'id' => 687475,
          'values' => array(
            array(
              'value' => $email,
            )
          )
        ),   
      ) // custom_fields
    );

    $set['request']['contacts']['add'][]=$contact;
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
    sendCurl($link,$set);

    //new task
    $task = array(
        'element_id' => $lead_id,
        'element_type' => 2,
        'date_create' => time(),
        'status' => 0,
        'task_type' => 1,
        'text' => 'Cвязаться по заявке с сайта '.$_SERVER['HTTP_HOST'],
        'responsible_user_id' => $responsible_user_id,
        //'complete_till' => '20:59',
    );
    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/tasks/set';
    $set['request']['tasks']['add'][]=$task;
    sendCurl($link,$set);

    $note = array(
        'element_id' => $lead_id,
        'element_type' => 2, //1 - контакт 2-сделка 3-компания
        'note_type' => 4, //обычное примечание
        'text' => $message_2,
    );

    $link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/notes/set';
    $set['request']['notes']['add'][]=$note;
    sendCurl($link,$set);

?>
<?php endif ?>

</body>
</html>