<?php 
    require_once "./clases/Conexion.php";
    // Preparar la consulta SQL
    $sql = "SELECT * FROM songs";

    // Ejecutar la consulta
    $result = $conn->query($sql);
    // Ejecutar la consulta
    $result1 = $conn->query($sql);

session_start();
include('clases/Conexion.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="shortcut icon" href="#">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      header .song_side .popular_song  .pop_song li{
  min-width:100px;
  background:rgb(105,105,170,1)
}
header .song_side .popular_song  .pop_song li:hover{
  min-width:100px;
  background:rgb(105,105,170,.6)
}
</style>
  </head>
  <body>
    <header>
      <div class="menu_side" >
        <div class="home">
          <h1>PlayList</h1>
          <a href="home.php">
            <h2>
              <button type="button" id="hom">
           Home
          </h2></a>
          </div>
        <div class="playlist">
          <h4 class="active">
            <span></span><i class="bi bi-music-note-beamed"></i>Playlist
          </h4>
          <h4 id="last">
            <span></span><i class="bi bi-music-note-beamed"></i>Last Listening
          </h4>
          <h4>
            <span></span><i class="bi bi-music-note-beamed"></i>Recommended
          </h4>
        </div>
        <div class="menu_song">
          <li class="song-item">
            <span>01</span>
            <img src="img/1.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
          </li>
          <li class="song-item">
            <span>02</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
          </li>
          <li class="song-item">
            <span>03</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
          </li>
          <li class="song-item">
            <span>04</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
          </li>
          <li class="song-item">
            <span>05</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
          </li>
          <li class="song-item">
            <span>06</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
          </li>
          <li class="song-item">
            <span>07</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
          </li>
          <li class="song-item">
            <span>08</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
          </li>
        </div>
      </div>
      <style>#song_side:before{background:url('bg/alan-walker-bg.jpg')no-repeat;background-size:100%;height:100%; z-index:-1; color:black;}</style>
      <div class="song_side" id="song_side" style="color:black ;transition:0.3s; z-index:5;">
        <nav >
          <ul>
            <li onMouseOver="this.style.color='red'" style="color:black">Discover <span></span></li>
            <li onMouseOver="this.style.color='red'">MY LIBRARY</li>
            <li onMouseOver="this.style.color='red'">RADIO</li>
          </ul>
          <div class="search">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search Music" />
            <div class="search_results">
              <!-- <a href="#" class="card">
                <img src="img/1.jpg" alt="">
                <div class="content">
                  On My Way
                  <div class="subtitle">Alan Walker</div>
                </div>
              </a> -->
            </div>
          </div>
          <div class="user">
            <img src="img/Shikhar.jpg" alt="user-image" />
            <span><a href="closedSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>
          </div>
        </nav>
        <div class="content">
          <h1>Alan -Walker</h1>
          <p>
            You are the shadow to my light did you feel us Another start you
            fade
            <br />
            Away afraid our aim is out of sight wanna see us Alive
          </p>
          <div class="buttons">
            <button>Play</button>
            <button>Follow</button>
          </div>
        </div>
        <div class="popular_song" >
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Song</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
              <i class="bi bi-arrow-right-short"id ="pop_song_right"></i>
            </div>
          </div>
          <div class="pop_song">
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>

            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
          </div>
        </div>
        <div class="popular_artists">
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Artists</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_artists_left"></i>
              <i class="bi bi-arrow-right-short" id="pop_artists-right"></i>
            </div>
          </div>
          <div class="item">
            <li>
              <a href ="arjit.html"><img src="img/arjit.jpg" alt=""></a>
          </li>
          <li>
             <a href="alan.html"><img src="img/alan.jpg" alt=""></a> 
          </li>
          <li>
            <a href="honey.html"><img src="img/honey.jpg" alt=""></a>
          </li>
          <li>
            <a href="guru.html"><img src="img/guru.jpg" alt=""></a>
          </li>
          <li>
            <a href="dhvani.html"><img src="img/dhvani.jpg" alt=""></a>
          </li>
          <li>
            <a href="Diljit.html"><img src="img/Diljit_Dosanjh.jpg" alt=""></a>
          </li>
          <li>
            <a href="jubain.html"><img src="img/jubin Nautiyal.jpg" alt=""></a>
          </li>
          <li>
            <a href="neha.html"><img src="img/neha.jpg" alt=""></a>
          </li>
          <li>
            <a href="justin.html"><img src="img/justin-bieber-lede.jpg" alt=""></a>
          </li>
          <li>
            <a href="atif.html"><img src="img/atif.jpg" alt=""></a>
        </li>            
        <li>
          <a href="akhil.html"><img src="img/akhil.jpg" alt=""></a>
      </li>
          </div>
        </div>
        </div>
      </div>

      <div class="master_play">
        <div class="song_Title">
        <div class="wave" id="wave">
          <div class="wave1"></div>
          <div class="wave1"></div>
          <div class="wave1"></div>
        </div>
        <img src="alan I/1.jpg" alt="" id="poster_master_play" />
        <h5 id="Title">
            On my way
          <div class="subtitle">Alan Walker</div>
        </h5>
        </div>
        <div class="icon">
          <i class="bi shuffle bi-music-note-beamed">next</i>
          <i class="bi bi-skip-start-fill" id="back"></i>
          <i class="bi bi-play-fill" id="masterPlay"></i>
          <i class="bi bi-skip-end-fill" id="next"></i>
          <a href="" id="download_music" download="" ><i class="bi bi-cloud-arrow-down-fill"></i></a>
        </div>
        <div class="time">
        <span id="current_start">0:00</span>
        <div class="bar">
          <input type="range" id="seek" min="0" max="100" />
          <div class="bar2" id="bar2"></div>
          <div class="dot"></div>
        </div>
        <span id="current_end">0:30</span>
        </div>
        <div class="vol">
          <i class="bi bi-volume-up-fill" id="vol_icon"></i>
          <input type="range" id="vol" min="0" max="100" />
          <div class="vol_bar"id='vol_bar'></div>
          <div class="dot" id="vol_dot"></div>
        </div>
      </div>
    </header>
    <script src="alan.js"></script>
  </body>
</html>
<?php 
} else { ?>
<script type="text/javascript">
    location.href="salir.php";
</script>
<?php }   
?><?php 
    require_once "./clases/Conexion.php";
    // Preparar la consulta SQL
    $sql = "SELECT * FROM songs";

    // Ejecutar la consulta
    $result = $conn->query($sql);
    // Ejecutar la consulta
    $result1 = $conn->query($sql);

session_start();
include('clases/Conexion.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="shortcut icon" href="#">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      header .song_side .popular_song  .pop_song li{
  min-width:100px;
  background:rgb(105,105,170,1)
}
header .song_side .popular_song  .pop_song li:hover{
  min-width:100px;
  background:rgb(105,105,170,.6)
}
</style>
  </head>
  <body>
    <header>
      <div class="menu_side" >
        <div class="home">
          <h1>PlayList</h1>
          <a href="index.php">
            <h2>
              <button type="button" id="hom">
           Home
          </h2></a>
          </div>
        <div class="playlist">
          <h4 class="active">
            <span></span><i class="bi bi-music-note-beamed"></i>Playlist
          </h4>
          <h4 id="last">
            <span></span><i class="bi bi-music-note-beamed"></i>Last Listening
          </h4>
          <h4>
            <span></span><i class="bi bi-music-note-beamed"></i>Recommended
          </h4>
        </div>
        <div class="menu_song">
          <li class="song-item">
            <span>01</span>
            <img src="img/1.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
          </li>
          <li class="song-item">
            <span>02</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
          </li>
          <li class="song-item">
            <span>03</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
          </li>
          <li class="song-item">
            <span>04</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
          </li>
          <li class="song-item">
            <span>05</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
          </li>
          <li class="song-item">
            <span>06</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
          </li>
          <li class="song-item">
            <span>07</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
          </li>
          <li class="song-item">
            <span>08</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
          </li>
        </div>
      </div>
      <style>#song_side:before{background:url('bg/alan-walker-bg.jpg')no-repeat;background-size:100%;height:100%; z-index:-1; color:black;}</style>
      <div class="song_side" id="song_side" style="color:black ;transition:0.3s; z-index:5;">
        <nav >
          <ul>
            <li onMouseOver="this.style.color='red'" style="color:black">Discover <span></span></li>
            <li onMouseOver="this.style.color='red'">MY LIBRARY</li>
            <li onMouseOver="this.style.color='red'">RADIO</li>
          </ul>
          <div class="search">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search Music" />
            <div class="search_results">
              <!-- <a href="#" class="card">
                <img src="img/1.jpg" alt="">
                <div class="content">
                  On My Way
                  <div class="subtitle">Alan Walker</div>
                </div>
              </a> -->
            </div>
          </div>
          <div class="user">
            <img src="img/Shikhar.jpg" alt="user-image" />
            <span><a href="closedSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>
          </div>
        </nav>
        <div class="content">
          <h1>Alan -Walker</h1>
          <p>
            You are the shadow to my light did you feel us Another start you
            fade
            <br />
            Away afraid our aim is out of sight wanna see us Alive
          </p>
          <div class="buttons">
            <button>Play</button>
            <button>Follow</button>
          </div>
        </div>
        <div class="popular_song" >
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Song</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
              <i class="bi bi-arrow-right-short"id ="pop_song_right"></i>
            </div>
          </div>
          <div class="pop_song">
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>

            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
          </div>
        </div>
        <div class="popular_artists">
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Artists</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_artists_left"></i>
              <i class="bi bi-arrow-right-short" id="pop_artists-right"></i>
            </div>
          </div>
          <div class="item">
            <li>
              <a href ="arjit.html"><img src="img/arjit.jpg" alt=""></a>
          </li>
          <li>
             <a href="alan.html"><img src="img/alan.jpg" alt=""></a> 
          </li>
          <li>
            <a href="honey.html"><img src="img/honey.jpg" alt=""></a>
          </li>
          <li>
            <a href="guru.html"><img src="img/guru.jpg" alt=""></a>
          </li>
          <li>
            <a href="dhvani.html"><img src="img/dhvani.jpg" alt=""></a>
          </li>
          <li>
            <a href="Diljit.html"><img src="img/Diljit_Dosanjh.jpg" alt=""></a>
          </li>
          <li>
            <a href="jubain.html"><img src="img/jubin Nautiyal.jpg" alt=""></a>
          </li>
          <li>
            <a href="neha.html"><img src="img/neha.jpg" alt=""></a>
          </li>
          <li>
            <a href="justin.html"><img src="img/justin-bieber-lede.jpg" alt=""></a>
          </li>
          <li>
            <a href="atif.html"><img src="img/atif.jpg" alt=""></a>
        </li>            
        <li>
          <a href="akhil.html"><img src="img/akhil.jpg" alt=""></a>
      </li>
          </div>
        </div>
        </div>
      </div>

      <div class="master_play">
        <div class="song_Title">
        <div class="wave" id="wave">
          <div class="wave1"></div>
          <div class="wave1"></div>
          <div class="wave1"></div>
        </div>
        <img src="alan I/1.jpg" alt="" id="poster_master_play" />
        <h5 id="Title">
            On my way
          <div class="subtitle">Alan Walker</div>
        </h5>
        </div>
        <div class="icon">
          <i class="bi shuffle bi-music-note-beamed">next</i>
          <i class="bi bi-skip-start-fill" id="back"></i>
          <i class="bi bi-play-fill" id="masterPlay"></i>
          <i class="bi bi-skip-end-fill" id="next"></i>
          <a href="" id="download_music" download="" ><i class="bi bi-cloud-arrow-down-fill"></i></a>
        </div>
        <div class="time">
        <span id="current_start">0:00</span>
        <div class="bar">
          <input type="range" id="seek" min="0" max="100" />
          <div class="bar2" id="bar2"></div>
          <div class="dot"></div>
        </div>
        <span id="current_end">0:30</span>
        </div>
        <div class="vol">
          <i class="bi bi-volume-up-fill" id="vol_icon"></i>
          <input type="range" id="vol" min="0" max="100" />
          <div class="vol_bar"id='vol_bar'></div>
          <div class="dot" id="vol_dot"></div>
        </div>
      </div>
    </header>
    <script src="alan.js"></script>
  </body>
</html>
<?php 
} else { ?>
<script type="text/javascript">
    location.href="salir.php";
</script>
<?php }   
?><?php 
    require_once "./clases/Conexion.php";
    // Preparar la consulta SQL
    $sql = "SELECT * FROM songs";

    // Ejecutar la consulta
    $result = $conn->query($sql);
    // Ejecutar la consulta
    $result1 = $conn->query($sql);

session_start();
include('clases/Conexion.php');
if (isset($_SESSION['emailUser']) != "") {
    $nameUser      = $_SESSION['nameUser'];
    $emailUser     = $_SESSION['emailUser'];
    $email         = $_SESSION['emailUser'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="shortcut icon" href="#">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      header .song_side .popular_song  .pop_song li{
  min-width:100px;
  background:rgb(105,105,170,1)
}
header .song_side .popular_song  .pop_song li:hover{
  min-width:100px;
  background:rgb(105,105,170,.6)
}
</style>
  </head>
  <body>
    <header>
      <div class="menu_side" >
        <div class="home">
          <h1>PlayList</h1>
          <a href="index.php">
            <h2>
              <button type="button" id="hom">
           Home
          </h2></a>
          </div>
        <div class="playlist">
          <h4 class="active">
            <span></span><i class="bi bi-music-note-beamed"></i>Playlist
          </h4>
          <h4 id="last">
            <span></span><i class="bi bi-music-note-beamed"></i>Last Listening
          </h4>
          <h4>
            <span></span><i class="bi bi-music-note-beamed"></i>Recommended
          </h4>
        </div>
        <div class="menu_song">
          <li class="song-item">
            <span>01</span>
            <img src="img/1.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
          </li>
          <li class="song-item">
            <span>02</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
          </li>
          <li class="song-item">
            <span>03</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
          </li>
          <li class="song-item">
            <span>04</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
          </li>
          <li class="song-item">
            <span>05</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
          </li>
          <li class="song-item">
            <span>06</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
          </li>
          <li class="song-item">
            <span>07</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
          </li>
          <li class="song-item">
            <span>08</span>
            <img src="img/2.jpg" alt="" />
            <h5>
              On My Way <br />
              <div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
          </li>
        </div>
      </div>
      <style>#song_side:before{background:url('bg/alan-walker-bg.jpg')no-repeat;background-size:100%;height:100%; z-index:-1; color:black;}</style>
      <div class="song_side" id="song_side" style="color:black ;transition:0.3s; z-index:5;">
        <nav >
          <ul>
            <li onMouseOver="this.style.color='red'" style="color:black">Discover <span></span></li>
            <li onMouseOver="this.style.color='red'">MY LIBRARY</li>
            <li onMouseOver="this.style.color='red'">RADIO</li>
          </ul>
          <div class="search">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search Music" />
            <div class="search_results">
              <!-- <a href="#" class="card">
                <img src="img/1.jpg" alt="">
                <div class="content">
                  On My Way
                  <div class="subtitle">Alan Walker</div>
                </div>
              </a> -->
            </div>
          </div>
          <div class="user">
            <img src="img/Shikhar.jpg" alt="user-image" />
            <span><a href="closedSesion.php?email=<?php echo $email; ?>" style="color: #333; font-weight: bold;">Salir</a></span>
          </div>
        </nav>
        <div class="content">
          <h1>Alan -Walker</h1>
          <p>
            You are the shadow to my light did you feel us Another start you
            fade
            <br />
            Away afraid our aim is out of sight wanna see us Alive
          </p>
          <div class="buttons">
            <button>Play</button>
            <button>Follow</button>
          </div>
        </div>
        <div class="popular_song" >
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Song</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
              <i class="bi bi-arrow-right-short"id ="pop_song_right"></i>
            </div>
          </div>
          <div class="pop_song">
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>

            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
            <li class="song-item">
              <div class="img_play">
                <img src="img/2.jpg" alt="" />
                <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
              </div>
              <h5>
                On My Way <br />
                <div class="subtitle">Alan Walker</div>
              </h5>
            </li>
          </div>
        </div>
        <div class="popular_artists">
          <div class="h4">
            <h4 style="color:rgb(4, 155, 249)">Popular Artists</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_artists_left"></i>
              <i class="bi bi-arrow-right-short" id="pop_artists-right"></i>
            </div>
          </div>
          <div class="item">
            <li>
              <a href ="arjit.html"><img src="img/arjit.jpg" alt=""></a>
          </li>
          <li>
             <a href="alan.html"><img src="img/alan.jpg" alt=""></a> 
          </li>
          <li>
            <a href="honey.html"><img src="img/honey.jpg" alt=""></a>
          </li>
          <li>
            <a href="guru.html"><img src="img/guru.jpg" alt=""></a>
          </li>
          <li>
            <a href="dhvani.html"><img src="img/dhvani.jpg" alt=""></a>
          </li>
          <li>
            <a href="Diljit.html"><img src="img/Diljit_Dosanjh.jpg" alt=""></a>
          </li>
          <li>
            <a href="jubain.html"><img src="img/jubin Nautiyal.jpg" alt=""></a>
          </li>
          <li>
            <a href="neha.html"><img src="img/neha.jpg" alt=""></a>
          </li>
          <li>
            <a href="justin.html"><img src="img/justin-bieber-lede.jpg" alt=""></a>
          </li>
          <li>
            <a href="atif.html"><img src="img/atif.jpg" alt=""></a>
        </li>            
        <li>
          <a href="akhil.html"><img src="img/akhil.jpg" alt=""></a>
      </li>
          </div>
        </div>
        </div>
      </div>

      <div class="master_play">
        <div class="song_Title">
        <div class="wave" id="wave">
          <div class="wave1"></div>
          <div class="wave1"></div>
          <div class="wave1"></div>
        </div>
        <img src="alan I/1.jpg" alt="" id="poster_master_play" />
        <h5 id="Title">
            On my way
          <div class="subtitle">Alan Walker</div>
        </h5>
        </div>
        <div class="icon">
          <i class="bi shuffle bi-music-note-beamed">next</i>
          <i class="bi bi-skip-start-fill" id="back"></i>
          <i class="bi bi-play-fill" id="masterPlay"></i>
          <i class="bi bi-skip-end-fill" id="next"></i>
          <a href="" id="download_music" download="" ><i class="bi bi-cloud-arrow-down-fill"></i></a>
        </div>
        <div class="time">
        <span id="current_start">0:00</span>
        <div class="bar">
          <input type="range" id="seek" min="0" max="100" />
          <div class="bar2" id="bar2"></div>
          <div class="dot"></div>
        </div>
        <span id="current_end">0:30</span>
        </div>
        <div class="vol">
          <i class="bi bi-volume-up-fill" id="vol_icon"></i>
          <input type="range" id="vol" min="0" max="100" />
          <div class="vol_bar"id='vol_bar'></div>
          <div class="dot" id="vol_dot"></div>
        </div>
      </div>
    </header>
    <script src="alan.js"></script>
  </body>
</html>
<?php 
} else { ?>
<script type="text/javascript">
    location.href="salir.php";
</script>
<?php }   
?>