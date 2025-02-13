<!DOCTYPE html>
<html>
<head>
    <title>Table Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
    <body>
    <img src="download.jpeg" width="1920" height="200">
    <center>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <form method="post" action="search.php">
        <select name="urutan">
            <option>Urutkan Berdasarkan
            <option value="no_asc">No (naik) 
            <option value="no_desc">No (turun) 
            <option value="title_asc">Title (A - Z) 
            <option value="title_desc">Title (Z - A) 
            <option value="genre_asc">Genre (A - Z) 
            <option value="genre_desc">Genre (Z - A) 
            <option value="year_asc">Year (naik) 
            <option value="year_desc">Year (turun) 
            <option value="author_asc">Author (A - Z)
            <option value="author_desc">Author (Z - A)
            <option value="nationality_asc">Nationality (A - Z) 
            <option value="nationality_desc">Nationality (Z - A)
            <option value="sold_asc">Sold (naik)
            <option value="sold_desc">Sold (turun)
        </select>
    <input type="submit" name="tombol_urutan" value="Urutkan" class="btn btn-info btn-sm">
    </form>
    <br>
    <form method='POST' action="search.php">
        <input name="cari" placeholder="Keywords...">
        <input type="submit" name="tombol_cari" value="Cari!!"> 
    </form>
    <br>
    <table class=table table-hover>
        <tr>
            <td>NO</td>
            <td>TITLE</td>
            <td>GENRE</td>
            <td>PUBLISHED YEAR</td>
            <td>AUTHOR</td>
            <td>AUTHOR NATIONALITY</td>
            <td>SOLD (MILLION EXEMPLAR)</td>
        </tr>
        <?php
            include 'koneksi.php';
            if(isset($_POST['tombol_cari'])) //jika teken tombol cari
            {
                $cari=$_POST['cari'];
                $kueri= "select * from buku where
                    no = '$cari' or
                    title like '%$cari%' or
                    genre like '%$cari%' or
                    year = '$cari' or
                    author like '%$cari%' or
                    nationality like '%$cari%' or
                    sold = '$cari' ";
            $go=mysqli_query($koneksi,$kueri); 
            $kolom=mysqli_fetch_array($go);
            do
            {
                echo '<tr>';
                echo '<td>'.$kolom ['no'];
                echo '<td>'.$kolom ['title'];
                echo '<td>'.$kolom ['genre'];
                echo '<td>'.$kolom ['year'];
                echo '<td>'.$kolom ['author'];
                echo '<td>'.$kolom ['nationality'];
                echo '<td>'.$kolom ['sold'];
                echo '</tr>';
            }
            while($kolom=mysqli_fetch_array($go));
        }
            else 
            {
                $kueri="select * from buku";
                $go=mysqli_query($koneksi,$kueri); 
                $kolom=mysqli_fetch_array($go);
                do
                {
                    echo '<tr>';
                    echo '<td>'.$kolom ['no'];
                    echo '<td>'.$kolom ['title'];
                    echo '<td>'.$kolom ['genre'];
                    echo '<td>'.$kolom ['year'];
                    echo '<td>'.$kolom ['author'];
                    echo '<td>'.$kolom ['nationality'];
                    echo '<td>'.$kolom ['sold'];
                    echo '</tr>';
                }
                while($kolom=mysqli_fetch_array($go));
            }
            ?>