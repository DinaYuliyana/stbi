<!DOCTYPE HTML>
<html>
<head>
  <title>STBI</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Sistem Temu Kembali Informasi</a></h1>
          <h2>Perfection Belongs only to God</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="stemming.php">Stemming</a></li>
          <li class="selected"><a href="tokenisasi.php">Tokenisasi</a></li>
          <li><a href="download.php">Download</a></li>
          <li><a href="search.php">Search</a></li>
          <li><a href="query.php">Query</a></li>
          <li><a href="awalquery.php">Querytf2</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content ul li">
        <!-- insert the page content here -->
        <?php
        //membuat koneksi ke database
        $host = 'localhost';
          $user = 'id7635605_megumin';      
          $password = 'megumin123';      
          $database = 'id7635605_dbstbi';  
            
          $konek_db = mysql_connect($host, $user, $password);    
          $find_db = mysql_select_db($database) ;
        ?>
        <br>
        <a>Kosongkan Tabel : </a> <a href="empty.php" color="red"> KOSONGKAN </a> 

        <center> 
        HASIL TOKENISASI DAN STEMMING
        <br>
        <br>

        <!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

        <table  border='1' Width='500'>  
        <tr>
            <th> Nama File </th>
            <th> Tokenisasi </th>
            <th> Stemming Porter </th>
            
        </tr>

        <?php  
        // Perintah untuk menampilkan data
        $queri="Select * From dokumen" ;  //menampikan SEMUA

        $hasil=MySQL_query ($queri);    //fungsi untuk SQL

        // perintah untuk membaca dan mengambil data dalam bentuk array
        while ($data = mysql_fetch_array ($hasil)){
        $id = $data['dokid'];
         echo "    
                <tr>
                <td>".$data['nama_file']."</td>
                <td>".$data['token']."</td>
                <td>".$data['tokenstem']."</td>
                
                </tr> 
                ";
                
        }

        ?>

        </table>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Ivan Nur Iqbal 15.01.53.0098 | Dicky Pratama 15.01.53.0104</a> | Dina Yuliyana 15.01.53.0157</a></p>
    </div>
  </div>
</body>
</html>
