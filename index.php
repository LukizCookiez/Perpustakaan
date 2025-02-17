<!DOCTYPE html>
    <html>
    <head>
        <title>Table Buku</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <img src="img/download.jpeg" width="1920" height="200">
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
              <a class="nav-link" href="#">Login</a>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Harry potter book.jpg" class="d-block w-50" alt="Harry potter book">
        </div>
        <div class="carousel-item">
          <img src="img/5 cm book.png" class="d-block w-97" alt="5 cm book">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
            <br>
            <br="post" action="index.php">
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
            </br>
            </form>
            <table class=table table-hover>
                <tr>
                    <td>NO
                    <td>TITLE
                    <td>GENRE
                    <td>PUBLISHED YEAR
                    <td>AUTHOR
                    <td>AUTHOR NATIONALY
                    <td>SOLD (MILLION EXEMPLAR)
                </tr>
                
                <?php
                include 'koneksi.php';
                if(isset($_POST['tombol_urutan']))
                {
                    $urutan=$_POST['urutan'];
                    if($urutan== 'no_asc')
                    {$kueri ="select * from buku order by no asc";}
                    else if($urutan== "no_desc")
                    {$kueri ="select * from buku order by no desc";}
                    else if($urutan== "title_asc")
                    {$kueri ="select * from buku order by title asc";}
                    else if($urutan== "title_desc")
                    {$kueri ="select * from buku order by title desc";}
                    else if($urutan== "genre_asc")
                    {$kueri ="select * from buku order by genre asc";}
                    else if($urutan== "genre_desc")
                    {$kueri ="select * from buku order by genre desc";}
                    else if($urutan== "year_asc")
                    {$kueri ="select * from buku order by year asc";}
                    else if($urutan== "year_desc")
                    {$kueri ="select * from buku order by year desc";}
                    else if($urutan== "author_asc")
                    {$kueri ="select * from buku order by author asc";}
                    else if($urutan== "author_desc")
                    {$kueri ="select * from buku order by author desc";}
                    else if($urutan== "nationality_asc")
                    {$kueri ="select * from buku order by nationality asc";}
                    else if($urutan== "nationality_desc")
                    {$kueri ="select * from buku order by nationality desc";}
                    else if($urutan== "sold_asc")
                    {$kueri ="select * from buku order by sold asc";}
                    else if($urutan== "sold_desc")
                    {$kueri ="select * from buku order by sold desc";}
                    else
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
                    echo '<td> <a href="update.php?kunci='.$kolom ['no'].' ">update</a>';
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
                    echo '<td> <a href="update.php?kunci='.$kolom ['no'].' ">update</a>';
                    echo '</tr>';
                }
                while($kolom=mysqli_fetch_array($go));
            }
                ?>
            </table>
        </center>
    </body>
    </html>
