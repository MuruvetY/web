<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3> Php'de Diziler Devam</h3>

<?php 
 $isimler = array();

 $isimler[0] = "Ahmet";
 $isimler[0] = "Mehmet";
 $isimler[0] = "Ayşe";
 $isimler[0] = "Nur";

 echo"<pre>";
 print_r($isimler);
 echo"</pre>";
 
 $isimler2 = array();

 $isimler2["isim1"] = "Kerim";
 $isimler2["isim2"] = "Hatice";
 $isimler2["isim3"] = "Burcu";
 $isimler2[""] = "Hüseyin";
 $isimler2[""] = "Gülcan";

 echo"<pre>";
 print_r($isimler2);
 echo"</pre>";
 
$ogrenciDetay=array(
    "id"  => 1,
    "adi" => "Nurulah",
    "soyadi" => "Yıldız",
    "bolum" => "Bilgisayar",
    "yas" => "25",

    "dersler" => array(
      "ders1" => "Veri Tabanı",
      "ders2" => "Web Programlama",
      "ders3" => "Mobil Programlama"
    ),
    "sinif" => "2"
);

/* Uygulama : Öğrenci Detaylı Dizisini Alt Alta döngüleri kullanarak yazdırınz. */

echo"<pre>";
 print_r($ogrenciDetay);
 echo"</pre>";

 echo "Öğrencinin Dersleri: <br>";
 echo $ogrenciDetay["dersler"]["ders1"] . "<br>";
 echo $ogrenciDetay["dersler"]["ders2"] . "<br>";
 echo $ogrenciDetay["dersler"]["ders3"] . "<br>";
  
 /* Uygulama : Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta Yazdırınız. */

 $ogrenciDetaylari = array(
    "ogrenci1" => array(
        "id"        => 1,
        "adi"       => "Nurullah",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => "25",
        "dersler"   => array(
            "ders1" => "Veri Tabanı",
            "ders2" => "Web Programlama",
            "ders3" => "Mobil Programlama"
        ),
        "sinif"     => "2"
    ),
    "ogrenci2" => array(
        "id"        => 1,
        "adi"       => "Ayşen",
        "soyadi"    => "Güler",
        "bolum"     => "Makine",
        "yas"       => "22",
        "dersler"   => array(
            "ders1" => "Matematik",
            "ders2" => "Sayı Teorileri",
            "ders3" => "Model Geliştirme"
        ),
        "sinif"     => "4"
    )
);


?>

<hr>
<h3>Koşul İfadeleri(if-else)</h3>
<p>İf-Else bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>
   <h5>Karşılaştırma Operatörleri</h5>
 <ol>
     <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
     <li> === ($a === $b) Denk ise. (Genellikle string bir karşılaştırma yapılır.</li>
     <li> != ($a!= $b) Eşit değil ise.(Genellikle Matematiksel bir karşılaştırma yapılır.) </li>
     <li> !== ($a !== $b) Denk değil ise. (Genellikle string bir karşılaştırma yapılır.) </li>
     <li> > ($a > $b) Büyük ise.</li>
     <li> >= ($a >= $b) Büyük veya eşit ise</li>
     <li> < ($a < $b) Küçük ise.</li>
     <li> <= ($a <= $b) Küçük veya eşit ise </li>
 </ol>

 <h5>Mantıksal Operatörler</h5>
 <ol>
     <li>! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. </li>
     <li> && -AND  (ve) ($a && $b) --> $a ve $b 'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır.
     Koşullardan bir tanesi False dönerse genel değer False olur. </li>
     <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. 
     Herhangi birisinin koşulu sağlaması genel dönüşü True yapar.</li>
 </ol>

 <h4>NOT:</h4>
 <ol>
     <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
     <li>Else son kapanış koşuludur (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak 
        son koşulu ifade eder.)</li> 
   
 </ol>
 <?php
 /*   if (condition) {
     #code...
 } elseif (condition){
     #code...
 }elseif (condition){
     #code...
 }else (condition){
     #code...
 } */ 

 $sayi1 =123;
 $sayi2 =345;
 $metin = "Adü";

 /* Değer Varsa */
  if ($sayi1) {
      echo "<br> If bloğu çalıştı : $sayi1";
  } else {
      echo "<br> Else bloğu çalıştı : $sayi1";
  }
 
 /* Değer Yoksa */
  if (!$sayi1) {
      echo "<br> If bloğu çalıştı : $sayi1";
  } else {
      echo "<br> Else bloğu çalıştı :";
  }

  /* Eşitlik Varsa */
  if ($sayi1 == $sayi2) {
      echo "<br> Sayılar eşit : $sayi1 = $sayi2";
  } else {
      echo "<br> Sayılar eşit değil : $sayi1 != $sayi2";
  }

  /* Eşitlik Yoksa Varsa */
  if ($sayi1 != $sayi2) {
      echo "<br> Sayılar eşit değil : $sayi1 != $sayi2";
  } else {
      echo "<br> Sayılar eşit : $sayi1 = $sayi2";
  }

  /* Denklik Varsa */
  if("ogrenci"==="ogrenci") {
      echo "<br> Girilen değerler aynı :";
  } else {
      echo "<br> Girilen değerler aynı değil.";
  }

  /* Denklik Varsa */
  if ($metin === "Adü") {
      echo "<br>Girilen değerler aynı :  $metin";
  } else {
      echo "<br> Girilen değerler aynı değil.";
  }

 /* And Örneği */
  if (($sayi1 < $sayi2) and ("ogrenci")) {
      echo "<br> Koşullar Sağlandı";
  } else {
      echo "<br> Koşullar bağlanmadı.";
  }

  /* OR Örneği */
  if (($sayi1 < $sayi2) or (15<25)) {
      echo "<br>Koşullar sağlandı";
  } else {
      echo "<br>Koşullar sağlanmadı";
  }


  if ($sayi1 > $sayi2) {
      echo "<br> \$sayi1 Değişkeni \$sayi2 Değişkeninden büyüktür. $sayi1>$sayi2";      
  } else {
      echo "<br> \$sayi1 Değişkeni \$sayi2 Değişkeninden küçüktür. $sayi1<$sayi2";
  }

  if ($sayi1 >= $sayi2) {
      echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
  } else {
      echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
  }


  /* Uygulama :
  1-Rastgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız.
  2-Rastgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçti yazdırınız.
  3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.*/
 
 
 ?>


</body>
</html>