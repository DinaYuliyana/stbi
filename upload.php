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
          <li class="selected"><a href="upload.php">Upload</a></li>
          <li><a href="stemming.php">Stemming</a></li>
          <li><a href="tokenisasi.php">Tokenisasi</a></li>
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
        <center>
        <form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
        File yang di upload : <input type="file" name="fupload" class="form-control"><br>
        Deskripsi File : <br>
        <textarea name="deskripsi" rows="8" cols="40"></textarea><br>
        <input type=submit value=Upload>
        </form>
        </center>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p>Ivan Nur Iqbal 15.01.53.0098 | Dicky Pratama 15.01.53.0104</a> | Dina Yuliyana 15.01.53.0157</a></p>
    </div>
  </div>
</body>
</html>
