<?php 
    require_once "./clases/Conexion.php";
    // Preparar la consulta SQL
    $sql = "SELECT * FROM songs";

    // Ejecutar la consulta
    $result = $conn->query($sql);
    // Ejecutar la consulta
    $result1 = $conn->query($sql);

session_start();
include('conexion/config.php');
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
  </head>
  <body>
    <header>
      <div class="menu_side"> 
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
          <h4  id="last">
            <span></span><i class="bi bi-music-note-beamed"></i>Last Listening
          </h4>
          <h4>
            <span></span><i class="bi bi-music-note-beamed"></i>Recommended
          </h4>
        </div>
        <div class="menu_song">
          <?php 
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo '<li class="song-item">';
              echo '<span>' . $row['id'] . '</span>';
              echo '<img src="' . $row['Poster'] . '" alt="" />';
              echo '<h5>' . $row['SongName'] . '</h5>';
              echo '<i class="bi playListPlay bi-play-circle-fill song-play" id="' . $row['id'] . '"></i>';
              echo '</li>';
            }
          }
            ?>
        </div>
      </div>
      <div class="song_side">
        <nav>
          <ul>
            <li>Discover <span></span></li>
            <li>MY LIBRARY</li>
            <li>RADIO</li>
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
          <h1>Alan Walker -Fade</h1>
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
        <div class="popular_song">
          <div class="h4">
            <h4>Popular Song</h4>
            <div class="btn_s">
              <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
              <i class="bi bi-arrow-right-short"id ="pop_song_right"></i>
            </div>
          </div>
          <div class="pop_song">
              <?php
              if ($result->num_rows > 0) {
                  $counter = 0;
                  while ($row = $result1->fetch_assoc()) {
                      if ($counter >= 12) {
                          break; // Salir del bucle después de 8 iteraciones
                      }
                      echo '<li class="song-item">';
                      echo '<div class="img_play">';
                      echo '<img src="' . $row['Poster'] . '" alt="" />';
                      echo '<i class="bi playListPlay bi-play-circle-fill song-play" id="' . $row['id'] . '"></i>';
                      echo '</div>';
                      echo '<h5>';
                      echo $row['SongName'].'</h5>';
                      echo '</li>';
                      $counter++;
                  }
              }
              ?>
          </div>
        </div>
        <div class="popular_artists">
          <div class="h4">
            <h4>Popular Artists</h4>
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
               <a href="alan.php"><img src="img/alan.jpg" alt=""></a> 
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
              <a href="diljit.html"><img src="img/Diljit_Dosanjh.jpg" alt=""></a>
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
        <img src="img/1.jpg" alt="" id="poster_master_play" />
        <h5 id="Title">
            On My Way
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
    <script src="index.js"></script>
  </body>
</html>
