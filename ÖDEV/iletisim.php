<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta http-equiv="refresh" content="iletisim.php">
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ödev";
    $connect= new mysqli($servername,$username,$password,$dbname);

    if($connect->connect_error) {
        die("bağlantı hatası olusu");
    }
    echo "bağlantı kuruldu";
    echo "<br>";

   $ekle="insert into rabia(ad,soyad,email,aciklama)values('".$_POST["ad"]."','".$_POST["soyad"]."','".$_POST["email"]."','".$_POST["aciklama"]."')";
       if ($connect->query($ekle)) {
           echo"Kayıt EKlendi";
       }
       ?>
       <table class="table table-striped">
           <tr>
               <th>id</th>
               <th>ad</th>
               <th>soyad</th>
               <th>email</th>
               <th>aciklama</th>
               
           </tr>
       <?php
       
       $bul="SELECT * FROM rabia";
       
       $kayit=$connect->query($bul);
       if ($kayit->num_rows>0) {
           while ($satir=$kayit->fetch_assoc()) {
               echo"<tr>";
               echo"<td>" . $satir["id"]."</td>";
               echo"<td>" . $satir["ad"]."</td>";
               echo"<td>" . $satir["soyad"]."</td>";
               echo"<td>" . $satir["email"]."</td>";
               echo"<td>" . $satir["aciklama"]."</td>";
               echo"</tr>";
           }
       }


       ?>