<!DOCTYPE html>

<html lang="en">

<head>

  <title>Music Player</title>

  <!-- Load FontAwesome icons -->

  <link rel="stylesheet"

        href=

"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
 

  <!-- Load the custom CSS style file -->

  <link rel="stylesheet" type="text/css" href="style.css">
<style>
.wrapper {
  background: #263238;
  height: 100%;
  width: 100%;
  position: fixed;
  .player {
    width: 320px;
    height: 568px;
    background: white;
    margin: 30px auto;
    .close {
      position: absolute;
      top: 10px;
      right: 10px;
      height: 40px;
      width: 40px;
      border-radius:40px;
      opacity:.7;
      cursor: pointer;
      color: white;
      border:2px solid white;
      &:hover{
        opacity:1;
      }
      i {
          // font-size: 28px;
        line-height: 38px;
        font-weight:100;
      }
      z-index: 1;
      text-align:center;
    }
    .image {
      display: block;
      border-top-left-radius: 2px;
      border-top-right-radius: 2px;
      height: 75%;
      position: relative;
      background: linear-gradient(to top right, rgba(126, 197, 49, 0.55), rgba(0, 140, 255, 0.7)), url('https://images.unsplash.com/photo-1461770354136-8f58567b617a?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=f0c8c34fe56f9669d1c6d129f597f895') center center;
      background-size: cover;
      .bottom-content {
        position: absolute;
        bottom: 0;
        height: 60px;
        line-height: 60px;
        color: white;
        font-weight: 100;
        width: 100%;
        .repeat {
          left: 0;
        }
        .shuffle {
          right: 0;
        }
        .title {
          width: 100%;
          padding: 0 50px;
          line-height: 15px;
          .track-name,
          .track-artist {
            font-size: 16px!important;
          }
        }
        .repeat,
        .shuffle {
          width: 50px;
          cursor: pointer;
        }
        .repeat,
        .title,
        .shuffle {
          text-align: center;
          position: absolute;
        }
      }
    }
    .controls {
      width: 100%;
      height: 15%;
      align-items: center;
      display: flex;
      align-content: center;
      border-bottom: 2px solid #b0bec5;
      .player-controls_btn {
        color: #263238;
        width: 10%;
        cursor: pointer;
        margin: 0 5%;
        text-align: center;
        i {
          font-size: 28px;
        }
      }
    }
    .next-song {
      display: flex;
      flex-wrap: no-wrap;
      justify-content: space-between;
      align-items: center;
      height: 10%;
      padding: 0 10px;
      .cover {
        background: url('https://images.unsplash.com/photo-1461770354136-8f58567b617a?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=f0c8c34fe56f9669d1c6d129f597f895') center center;
        background-size: cover;
        width: 40px;
        height: 40px;
        border-radius: 40px;
      }
      .title {
        text-align: left;
        line-height: 16px;
        min-width: calc(100% - 100px);
        .next-title {
          font-weight: bold;
          font-size: 12px;
        }
      }
      .playlist {
        font-weight: 28px;
        width: 40px;
        height: 40px;
        cursor: pointer;
        text-align: center;
        i {
          line-height: 40px;
          color: #263238;
        }
      }
    }
  }
}
</style>
</head>

<body>
<div class="wrapper">
<div class="card player">
  <div class="player">
 

    <!-- Define the section for displaying details -->

    <div class="details">

      <div class="now-playing">PLAYING x OF y</div>

      <div class="track-art"></div>

      <div class="track-name">Track Name</div>

      <div class="track-artist">Track Artist</div>

    </div>
 

    <!-- Define the section for displaying track buttons -->

    <div class="buttons">

      <div class="prev-track" onclick="prevTrack()">

        <i class="fa fa-step-backward fa-2x"></i>

      </div>

      <div class="playpause-track" onclick="playpauseTrack()">

        <i class="fa fa-play-circle fa-5x"></i>

      </div>

      <div class="next-track" onclick="nextTrack()">

        <i class="fa fa-step-forward fa-2x"></i>

      </div>

    </div>
 

    <!-- Define the section for displaying the seek slider-->

    <div class="slider_container">

      <div class="current-time">00:00</div>

      <input type="range" min="1" max="100"

        value="0" class="seek_slider" onchange="seekTo()">

      <div class="total-duration">00:00</div>

    </div>
 

    <!-- Define the section for displaying the volume slider-->

    <div class="slider_container">

      <i class="fa fa-volume-down"></i>

      <input type="range" min="1" max="100"

        value="99" class="volume_slider" onchange="setVolume()">

      <i class="fa fa-volume-up"></i>

    </div>
<div class="title">
        <span class="next-title">
          EduBharat
        </span>
        <br /> Player
      </div>
      <div class="playlist"><i class="material-icons">queue_music</i></div>
    </div>
  </div>
 </div></div>

  <!-- Load the main script for the player -->

  <script src="main.js"></script>

</body>

</html>
          
