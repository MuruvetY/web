<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

   
echo "1- Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız.  ";
echo "<br>" . "<br>";

$rastgleSayi = rand(0, 100);

echo "Rastgele üretilen sayı =" . $rastgleSayi;
echo "<br>";
if ($rastgleSayi % 2 == 0) {
    echo "Sayi Çifttir";
} else {
    echo "Sayi Tektir";
}
echo "<br>";
echo "<br>";


echo "2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız. ";
echo "<br>" . "<br>";


$rastgleSayi2 = rand(0, 100);
echo "Rastgele üretilen sayı =" . $rastgleSayi2;
echo "<br>";
echo "<br>";

if ($rastgleSayi2 <= 50) {
    echo "KALDINIZ.";
} else {
    echo "GEÇTİNİZ.";
}

echo "<br>";
echo "<br>";


echo "3-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız. ";
        echo "<br>" . "<br>";

        $rastgeleKisiYasi  = rand(5, 70);

        echo "Ehliyet almak isteyenin Yaşı = " . $rastgeleKisiYasi;
        echo "<br>";

        if ($rastgeleKisiYasi <= 18) {
            echo "Ehliyet almak için yeterli yaşta değil !";
        } else {
            echo "Ehliyet alabilir";
        }
        

    $doğumyili=rand(1990,2012);
    echo "Doğum yılı : $doğumyili";
    
    if((2022 - $doğumyili) >= 18) {
        echo "Ehliyet Alabilir";
    }  else {
        echo "Ehliyet Alamazsınız";
    }


   /* Uygulama:Öğrenci Detayları dizisindeki her öğrencinin detaylarını alt alta yazdırınız.
   Uygulama:Öğrenci Detayları dizisindeki her öğrencinin detaylarını alt alta yazdırınız.*/

   $ogrenciDetaylari = array(
   "ogrenci1" => array (
       "id" => 1,
       "adi" =>"Mürüvet",
       "soyadi"=>"YOLUK",
       "bolum" => "Bilgisayar Prog.",
       "yas" => "20",
       "dersler" =>array(
           "ders1" => "veri tabanı",
           "ders2" => "web proglama",
           "ders3" => "web editörü"
       ),
       "sinif" => "2"
    ),
    "ogrenci2" => array (
       "id" =>2 ,
       "adi" => "Oğuz" ,
       "soyadi" => "DEMİR",
       "bolum" => "Elektrik",
       "yas" => "21",
       "dersler" => array (
           "ders1" => "Matematik",
           "ders2" => "Temel Devre",
       ),
       "sinif" => "3"
    )
    );

    echo "<h3> 1. ve 2. Öğrencinin Bilgileri:</h3>";
    foreach ($ogrenciDetaylari  as $key => $value )
    { 
        foreach($value as $key1 => $value2)
        {
            if(gettype($value2)=="array")
         {
             foreach($value2 as $key2 => $value3)
             echo "$key2 - $value3 <br>";
             continue;
         }
         echo "$key1 - $value2 <br>";
        }
    
    }






?>

</body>
</html>