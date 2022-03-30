<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>

<body>

<?php
  /* Uygulama Ödevi
 Kuyruk ve yığın veri yapılarının php üzerinde dizileri
  kullanılarak örneklendirilmesini gerçekleştiriniz.*/

  /* Uygulama : Rastgele üretilen sayı 
  50'den büyükse
    Geçtiniz:  Notunuz: xx
  50'den küçükse
    Kaldınız: Notunuz: xx
    Uygulamasını gerçekleştiriniz.  */

   $not = rand(10,100); 
    if ($not>50) {
      echo "Geçtiniz $not";
    }
      else{
        echo "Kaldınız $not";
      }
    
echo "<h3>Sık kullanılan string fonksiyonlar </h3>";

$yazi = "Aydın Adnan Menderes Üniversitesi";
echo "\$yazi Değişkenin İçeriği: $yazi ";
echo "<br>\$yazi Değişkenin Türü:" . gettype($yazi);


/* İçeriğinin Büyük Harfe Dönüştürülmesi*/
echo "<br>\$yazi'nin  Değişkenin Büyük Harfle Yazılması :" . $byazi= strtoupper ($yazi); 
echo "<br>\$yazi'nin  Değişkenin Büyük Harfle Yazılması :" . $byazi= mb_strtoupper ($yazi); 
echo "<br>";

/* İçeriğinin Küçük Harfe Dönüştürülmesi*/
echo "<br>\$yazi'nin  Değişkenin Küçük Harfle Yazılması :" . $kyazi= strtolower ($byazi); 
echo "<br>\$yazi'nin  Değişkenin Küçük Harfle Yazılması :" . $kyazi= mb_strtolower ($byazi); 
echo "<br>";

/* İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi */
echo "<br> \$yazinin ilk harfi büyük :". $yazi = ucfirst ($kyazi);
echo"<br>";

/* İçerikteki Her  Kelimenin İlk Harfinin Büyük Harfe Dönüştürülmesi */
echo "<br> \$yazinin her kelimesinin ilk harfi büyük :". $yazi = ucwords($kyazi);
echo"<br>";

/* İçeriğin Harf Sayısı */
echo "<br> \$yazinin harf sayısı:". strlen ($kyazi);
echo"<br>";

/* Ascıı Char Dönüşümü */
echo "Karakter Karşılığı (65):" . chr(65);
echo "<br>";
echo "Karakter Karşılığı (100):" . chr (100);
echo "<br>";

/* 0-255 arasındaki değerleri chr fonksiyonuna sokarak satır satır yazdırınız. */

for ($i=0; $i <=255 ; $i++) { 
 echo "$i:" . chr ($i) . " " ;
}

/* Metnin Parçalanarak Diziye Dönüştürülmesi  */
echo "<br>";
echo $yazi . "<br>";
$dizi=explode(" ",$yazi);
echo "<pre>";
print_r($dizi);
echo "</pre>";

/* Uygulama : Metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız. */
 
 $metin ="Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
 Delectus eaque temporibus ipsam alias, nostrum reprehenderit enim 
 veritatis similique minus ad aliquid libero sunt accusantium velit modi dolorem nulla error esse.";

$kelimeDizisi =explode (" ",$metin);
$cumleDizisi =explode(".", $metin);

echo "Kelime Sayısı: ". count ($kelimeDizisi);
echo "<br>";
echo "Cümle Sayısı: ". count($cumleDizisi);

/* Uygulama : Veri tabanından 2022-11-20 şeklinde gelen tarihi 20.11.2022 şeklinde gösteriniz. */

$tarih = "2022-11-20";
$tarihDizisi = explode("-", $tarih);
echo "<pre>";
print_r($tarihDizisi);
echo "</pre>";
 
echo "Tarih: $tarihDizisi[2].$tarihDizisi[1].$tarihDizisi[0]";

/* Dizinin Metine Dönüştürülmesi (implode) */
echo "<br>";
$aylarDizisi = array(
"Ocak",
"Şubat",
"Mart",
"Kasım"
);
  
echo "<pre>";
print_r($aylarDizisi);
echo"</pre>";

$aylarString = implode("-",$aylarDizisi);

/* str_split String parçalama işlemi yapar. */
echo "<br>";
$iban="TR0000000000111122223333";
$yeniİban= str_split($iban,4);
echo "<pre>";
print_r($yeniİban);
echo "</pre>";

echo "<br>İmplode IBAN: ". implode("-",$yeniİban);

echo "<br> Foreach Iban:";


foreach ($yeniİban as $parca) {
  echo $parca . " ";
}

echo "<br> For Iban:";


for ($i=0; $i < count($yeniİban); $i++) { 
  echo $yeniİban[$i] . " ";
  
}






echo "<br><br><br><br><br><br><br><br><br><br><br><br><br>";
?>
    
</body>
</html>