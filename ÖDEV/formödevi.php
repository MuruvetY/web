<html>
<head>
      <title>İletişimFormu</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="description" content="Dinamik Form Uygulaması. Php,Html ve CSS Dillerini Kullanarak Dinamik Form Oluşturma."/>
      <meta name="keywords" content="dinamik form , php html, css"/>

      <link rel="shortcut icon" href="icon.png"/>

      <!-- Web Sitesi Stil Kodları -->
      <style>
           .anaFormAlani{
               max-width:450px;
               height: auto;
               border:6px solid #B7E5DD;
               padding: 30px;
               margin: 0px auto 0px auto;
               display: table;
               background: #eee;
               -webkit-border-radius: 10px;
               -moz-border-radius: 10px;
               border-radius: 10px;
           }

           #iletisimFormu input[type=text]{
               width: 100%;
               margin: 0 0 15px 0;
               padding: 5px 2% 5px 2%;               
           }

           #iletisimFormu textarea{
               width:100px;
               height: 100px;
               margin: 0 0 15px 0;
               padding: 5px 2% 5px 2%;
           }

           #iletisimFormu input[type=submit]{
               width :100;
               height :30px;
               text-align: center;
               padding: 5px 2% 5px 2%;
           }
           
           






      </style>
      <!-- Web Sitesi Stil Kodları -->

</head>
<body>
    <?php
     $adSoyadVerisi = $_POST["adsoyad"];
     $cinsiyetVerisi = $_POST["cinsiyet"];
     $telefonVerisi = $_POST["telefon"];
     $e_mailVerisi = $_POST["e_mail"];
     $derslerVerisi = $_POST["dersler"];
     $konuVerisi = $_POST["konu"];

     
     
    
    
    
    
    ?>



   <div class="anaFormAlani">
       <h2>İletişim Formu</h2>
     <form name="iletisimFormu" id="İletisimFormu" action="/" method="POST">
         <input type="text" placeholder="Ad,Soyad" name="adsoyad" id="adsoyad"/>       
         <input type="text" placeholder="Cinsiyet" name="cinsiyet" id="cinsiyet"/>
         <input type="text" placeholder="Telefon Numarası" name="telefon" id="telefon"/>
         <input type="text" placeholder="E-mail" name="e-mail" id="e-mail"/>
         <input type="text" placeholder="Dersler" name="dersler" id="dersler"/>
         <input type="text" placeholder="Konu" name="konu" id="konu"/>
         <textarea name="mesajbolumu" id="mesajbolumu" placeholder="Mesajınız"></textarea>
         <input type="submit" value="Gönder" name="gonder" id="gonder"/>
     </form> 
   </div>
</body>

</html>