<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Proglama - I</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    //Açıklama Satırı
    /* Açıklma Satırı Bloğu
    Shift + Alt + a
    */
    /* Kullanılan komutlar
    echo : Ekrana yazdırma işlemi yapar.
    İçerisinde html etiketleri kullanılabilir.
    Çift veya tek tırnak ile kullanılabilir.
    Çift tırnak içersinde değişken içerikleri gösterilir.
    Nokta işareti(.) ile birleştirme yapılabilir.
    \ Kaçış karakteridir. Özel ifadelerden önce kullanılır
    */
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo '<h4>Aydın Meslek Yüksekokulu</h4>';
    echo " Bilgisayar programcılığı " . " Web Teknolojileri" . "<br>";
    echo " Bilgisayar programcılığı" . "<br>" . "Web Teknolojileri";

    echo "<hr> <hr4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
             <li> Değişken isimleri $ ile başlar.</li>
             <li>Değişken isimleri sayısal bir ifade ile başlayamaz.</li>
             <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime
             varsa birinci_sinif birinciSinif birinci-sinif örneklerdeki
             kullanımlar önerilir.</li>
             <li> Değişken ve dosya isimlerinde Türkçe karakter
             kullanılmamalıdır. </li>
             <li>Değişken isimlerinde büyük-küçük harf kullanımına 
             duyarlıdır. \$sayi != \$Sayi  </li>
             <li> Değişken içerisinde eğer metinsel bir ifade varsa  çift tırnak(\") 
             veya tek tırnak(2) kullanılır .</li>
             <li>Değişken içersinde eğer sayısal bir ifade varsa tırnak 
             kullanılmadan yazılır. </li>
             <li>Değişken ismi, değişkenin içeriğini ifade etmeli.</li>
             <li>Değişkenler ekrana echo komutu ile yazdırılır.</li>
             <li> </li>
    
    </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 34;

    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";

    /* Uygulama:
        Üniversite-Myo-Ad-Soyad-numara değişkenlerini oluşturup içeriğini
        uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
    
    */



    ?>
    <form action="">
        <label for="uni"> Universite </label>
        <input type="text" name="" disabled value="" <?php echo $isim; ?> id="">

        <label for="uni"> MYO </label>
        <input type="text" name="" disabled value="" <?php echo $isim; ?> id="">

        <label for="uni"> Ad </label>
        <input type="text" name="" disabled value="" <?php echo $isim; ?> id="">

        <label for="uni"> Soyad </label>
        <input type="text" name="" disabled value="" <?php echo $isim; ?> id="">

        <label for="uni"> No </label>
        <input type="text" name="" disabled value="" <?php echo $isim; ?> id="">



        ?>


</body>

</html>