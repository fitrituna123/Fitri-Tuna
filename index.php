<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?apikey=b893c632&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-primary bg-success">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>FILM KARTUN</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jpg" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">UPIN & IPIN </h5>
        <p class="card-text">Upin dan Ipin merupakan sepasang kembar yang berusia 5 tahun (Upin lebih tua 5 menit dari pada Ipin) yang tinggal bersama Kak Ros dan Mak Uda (biasa dipanggil Opah) di Kampung Durian Runtuh setelah kematian kedua orang tua mereka sewaktu masih bayi. Upin dan Ipin bersekolah di Tadika Mesra yang terletak dalam kawasan kampung,</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar2.jpg" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">PORORO</h5>
        <p class="card-text">Pororo adalah sebuah serial animasi televisi Korea yang diproduksi oleh Iconix Entertainment, SK Broadband, Ocon dan Channel One bersama dengan perusahaan asal Korea Utara Samchŏlli di Kaesong. Animasi ini diproduksi pertama kali pada tahun 2002 dan mulai ditayangkan di Korea Selatan di saluran EBS pada tahun 2003.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.jpg" class="card-img-top" height="300px">
      <div class="card-body">
        <h5 class="card-title">NARUTO</h5>
        <p class="card-text">Naruto adalah sebuah serial manga karya Masashi Kishimoto yang diadaptasi menjadi serial anime. Manga Naruto bercerita seputar kehidupan tokoh utamanya, Naruto Uzumaki, seorang ninja yang hiperaktif, periang, dan ambisius yang ingin mewujudkan keinginannya untuk mendapatkan gelar Hokage, pemimpin dan ninja terkuat. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar4.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">SHIVA</h5>
        <p class="card-text">Shiva adalah seorang anak kecil yang tinggal bersama kakek dan neneknya di sebuah kota fiksi bernama Kota Vedas, kota yang setiap hari ada penjahat di India. Walau dirinya masih kecil, Shiva sudah menjadi superhero yang banyak mengalahkan penjahat yang ingin menghancurkan kedamaian di kotanya. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">MASHA AND THE BEAR</h5>
        <p class="card-text">Masha adalah anak yang tinggal di pinggiran hutan bersama neneknya. Suatu hari, ia mengejar kupu-kupu yang hinggap di rumahnya. Ia terus mengejar kupu-kupu itu tanpa mempedulikan lingkungan sekitar, sampai-sampai ia pergi sangat jauh dan tiba di sebuah rumah kayu.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">THOMAS & Friends</h5>
        <p class="card-text">Thomas and Friends adalah salah satu kartun yang paling digemari anak-anak. Serial ini bercerita tentang petualangan kereta Thomas dan teman-teman keretanya di Pulau Sodor. Thomas adalah kereta yang sangat ceria dan tidak mudah bersedih hati. Thomas juga selalu ingin bermanfaat bagi siapa saja.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar7.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">TOY STORY</h5>
        <p class="card-text">Toy Story adalah film komedi teman animasi komputer Amerika 1995 yang diproduksi oleh Pixar Animation Studios dan dirilis oleh Walt Disney Pictures. Film debut sutradara fitur John Lasseter, ini adalah film fitur sepenuhnya animasi komputer pertama, serta film fitur pertama dari Pixar. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar8.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">RANGO</h5>
        <p class="card-text">Rango adalah film animasi yang dirilis pada tahun 2011. Film ini disutradarai oleh Gore Verbinski. pengisi suara dalam film in di antaranya adalah Johnny Depp, Isla Fisher, Abigail Breslin dan Alfred Molina. Film ini diproduksi oleh Nickelodeon Movies dan didistribusikan oleh Paramount Pictures.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar9.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">MOANA</h5>
        <p class="card-text">Moana adalah sebuah film petualangan fantasi musikal animasi komputer 3D Amerika 2016 yang diproduksi oleh Walt Disney Animation Studios dan film ke-56 dalam kanon fitur animasi Disney. Film tersebut disutradarai oleh Ron Clements, John Musker.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
