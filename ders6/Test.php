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
// $dizi = [1,2,3];
// $dizi[] = 4;


// foreach($dizi as $deger){
//     echo $deger.'<br>';
// }

//$dizi1 = ["a","b","c"];
//$dizi1[] = "s";
//$dizi1[] = "m";

/*foreach($dizi1 as $harf){
    echo $harf . " - ";
}*/

//echo $dizi1[0];

/*for ($i =0 ; $i < count($dizi1) -1; $i++){
   echo $dizi1[$i] . " - ";
}
echo $dizi1[count($dizi1) -1];

for ($i = count($dizi1) -1; $i >= 0; $i--){
    echo $dizi1[$i] . " - ";
 }*/

 /*$yas = 24;
 $yas1 = 24;
 
 if ($yas<$yas1){
    echo "Küçüktür"; 
 }
 else if ($yas>$yas1){
     echo "Büyüktür";
 }
 else{
     echo "Eşittir";
 }*/


/* $isim = implode("-", $dizi1);
echo $isim;
 /* $dizi2 = explode("-",$isim);
  for ($i =0 ; $i < count($dizi2) ; $i++){
    echo $dizi2[$i] . " - ";
 }

 /*$ad="MURUVET";
 echo $ad . "<br>"; 
 echo strtolower($ad);*/

/* $soyad = "yoluk";
 echo $soyad . "<br>";
 echo strtoupper($soyad);  */ 


/* $x =15.315;
$y = 15.385;
echo "<br>$x Bir ondalık basamak yuvarlaması " . round($x , 1);
echo "<br>$y Bir ondalık basamak yuvarlaması " . round($y , 1);
echo "<br>$x Bir ondalık basamak yuvarlaması " . round($x , 2);
echo "<br>$y Bir ondalık basamak yuvarlaması " . round($y , 3);
*/
/* Girilen Sayının Tek mi Çift mi Olduğunu Gösterir */
/*echo "<h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";
    /* Değişken İsminin Yazdırılması 
    echo "1-Kazandığınız Üniversite: \$uni";
    echo "<br>";
    echo "2-Kazandığınız Üniversite:" . ' $uni';
    echo "<br>";
    echo '3-Kazandığınız Üniversite: $uni';
    /* Değişken İçeriğinin Yazdırılması */
   /* echo "<br>";
    echo "1-Kazandığınız Üniversite: $uni";
    echo "<br>";
    echo "2-Kazandığınız Üniversite:" . $uni;
    echo "<br>";
    echo "3-Kazandığınız Üniversite:" . "$uni";
    echo "<br>";
    echo '4-Kazandığınız Üniversite:' . "$uni";
    echo "<br>";
    $yazi = "Aydın Adnan Menderes Üniversitesi";
    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = strtoupper($yazi);
    echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması: " . $buyuk_yazi = mb_strtoupper($yazi);
    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = strtolower($buyuk_yazi);
    echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması: " . $kucuk_yazi = mb_strtolower($buyuk_yazi);
    echo "<br> \$yazi İlk Harfinin, Büyük Harfle Yazılması: " . $ilk_yazi = ucfirst($kucuk_yazi);
    echo "<br> \$yazi Tüm Kelimelerinin İlk Harfinin, Büyük Harfle Yazılması: " . $kelime = ucwords($kucuk_yazi);
    echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);
    echo "<br>Karakter Karşılığı: " . chr(108);
    echo "<br>Karakter Karşılığı: " . chr(64);
    echo "<br>Ascii Karakterleri: ";
    for ($i = 32; $i <= 127; $i++) {
        echo  chr($i) . "-";
    }echo "<br>";
    echo "<br>";

    $dizi = explode(" ", $yazi);
    echo "<br>";
    print_r($dizi);

    echo "<br>";
    $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit rerum voluptas odio amet fugiat nam numquam. Soluta fugiat quam perspiciatis, maiores ad non amet inventore officiis quibusdam totam ducimus adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illo, repellendus maxime ut dolores quam esse quas ipsum eveniet quasi. Voluptatem, delectus aliquam praesentium atque quo adipisci illum voluptatibus minus?";

    $kelimelerDizisi = explode(" ", $metin);
    $cumlelerDizisi = explode(".", $metin);

    echo "<br>Kelime Sayısı: " . count($kelimelerDizisi);
    echo "<br>Cümle Sayısı: " . count($cumlelerDizisi);
    echo "<br>";
    $tarih = "2021-12-25";
    $yenitarih = explode("-", $tarih);
    echo $yenitarih[2] . "-" . $yenitarih[1] . "-" . $yenitarih[0];
        echo "<br>";
    $aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs"];
    print_r($aylar);
    $aylarString = implode(" ", $aylar);
    echo "<br>String: $aylarString";

    echo "<br>";
    $iban = "TR0010002000300040005000";
    $yeniIban = str_split($iban, 4);
    echo "<pre>";
    print_r($yeniIban);
    
    echo "<br>İmplode IBan: " . implode("-", $yeniIban);

    echo "<br> Foreach Iban: ";
    foreach ($yeniIban as $parca) {
        echo $parca . " ";
    }

    echo "<br> For Iban: ";
    for ($i = 0; $i < count($yeniIban); $i++) {
        echo $yeniIban[$i] . " ";
    }

    $dizi1 = array(1, 2, 3, 4, "kemal", "arıca", 130.5);
    $dizi2 = [1, "tarık", "koca", 227.5];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";


    echo "Dizinin 5. Elemanı: $dizi1[5]";
    echo "<br>Dizinin 1. Elemanı:" . gettype($dizi1[1]);

    echo "<br>Dizinin 0. Elemanı: $dizi1[0]";
    echo "<br>Dizinin 1. Elemanı: $dizi1[1]";
    echo "<br>Dizinin 2. Elemanı: $dizi1[2]";
    echo "<br>Dizinin 3. Elemanı: $dizi1[3]";
    echo "<br>Dizinin 4. Elemanı: $dizi1[4]";
    echo "<br>Dizinin 5. Elemanı: $dizi1[5]";
    echo "<br>Dizinin 6. Elemanı: $dizi1[6]";


    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-1</h3>";

    foreach ($dizi1 as $value) {
        echo $value . "<br>";
    }

    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";

    foreach ($dizi1 as $key => $value) {
        echo "$key - $value  <br>";
    }

    echo "<h3> Dizinin İçeriğinin For Döngüsü İle Yazdırılması</h3>";

    for ($i = 0; $i < count($dizi1); $i++) {
        echo $dizi1[$i] . "<br>";
    }
    $sayilar = array(1, 2, 3, 4, 5, 6);

    $sayilar = array(
        array(1, 3, 5, 7, 9),
        array(2, 4, 6, 8, 10)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizinisinin İçerisindeki 2. Dizinin 3 İndisli Elemanı: " .  $sayilar[1][3];

    echo "<br>Sayılar Dizinisinin İçerisindeki 1. Dizinin 4 İndisli Elemanı: " .  $sayilar[0][4];

    echo "<br>-------------";

    $sayilar = array(
        "integer" => array(55, 23, 15, 24),
        "double"   => array(13.5, 2.5, 1.36)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizinisinin İçerisindeki 1. Dizinin 1 İndisli Elemanı: " .  $sayilar["integer"][1];

    echo "<br>Sayılar Dizinisinin İçerisindeki 1. Dizinin 2 İndisli Elemanı: " .  $sayilar["double"][2];

    $bilgiler = array(
        "id"     => "0",
        "adi"    => "Neslihan",
        "soyadi" => "Gülmez",
        "gsm"    => "555 666 55 44",
        "yas"    => 32
    );
    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";


    echo "$bilgiler[adi] $bilgiler[soyadi]  hoşgeldiniz.";
    $kullanicilar = array(
        "kullanici1"    => array(
            "id"     => "0",
            "adi"    => "Neslihan",
            "soyadi" => "Gülmez",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        ),
        "kullanici2"    => array(
            "id"     => "1",
            "adi"    => "Ahmet",
            "soyadi" => "Keskin",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        )
    );

  

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

    echo "<pre>";
    print_r($ogrenciDetaylari);
    echo "</pre>";
*/
$sayi1 = 123;
$sayi2 = 345;
$metin = "Adü";
if ($sayi1) {
    echo "<br>If bloğu çalıştı : $sayi1";
} else {
    echo "<br>Else bloğu çalıştı : $sayi1";
}

 /* Değer Yoksa */
 if (!$sayi1) {
    echo "<br>If bloğu çalıştı : $sayi1";
} else {
    echo "<br>Else bloğu çalıştı";
}

/* eşitlik Varsa */
if ($sayi1 == $sayi2) {
    echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
} else {
    echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
}

 /* eşitlik Yoksa Varsa */
 if ($sayi1 != $sayi2) {
    echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
} else {
    echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
}

 /* Denklik Varsa */
 if ("ogrenci" === "ogrenci") {
    echo "<br>Girilen değerler aynı";
} else {
    echo "<br>Girilen değerler aynı değil.";
}

if ($metin === "Adü") {
    echo "<br>Girilen değerler aynı : $metin";
} else {
    echo "<br>Girilen değerler aynı değil.";
}

/* And Örneği */
if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
    echo "<br>Koşullar Sağlandı";
} else {
    echo "<br>Koşullar sağlanmadı.";
}

if (($sayi1 > $sayi2) || (23 > 25)) {
    echo "<br>Koşullar Sağlandı  . ";
} else {
    echo "<br>Koşullar sağlanmadı.";
}

if ($sayi1 > $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
} else {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
}



if ($sayi1 >= $sayi2) {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
} else {
    echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
}



?>












</body>
</html>