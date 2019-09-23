
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<style>
@font-face {
   font-family: myFirst;
   src: url(GOTHAM-MEDIUM1.TTF);
}

* {
   font-family: myFirst;
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  bottom:40%;
  width: auto;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}
@media screen and (max-width: 600px){
  #video_here{
    width: 100%;
    height:200px;
  }
}

@media screen and (min-width: 900px){
  #video_here{
    width: 100%;
    height:400px;
  }
}
</style>

<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPLv3)
 * Copyright 2001 - 2017 Ampache.org
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

require_once 'lib/init.php';

UI::show_header();

?>
<div id="demo123" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo123" data-slide-to="0" class="active"></li>
    <li data-target="#demo123" data-slide-to="1"></li>
    <li data-target="#demo123" data-slide-to="2"></li>
    <li data-target="#demo123" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div id="video_here" class="carousel-item active">
      <img style="width:100%;height:100%;" src="car.png" alt="image1" width="1100" height="500">
    </div>
    <div id="video_here" class="carousel-item">
      <img style="width:100%;height:100%;" src="car.png" alt="image2" width="1100" height="500">
    </div>
    <div id="video_here" class="carousel-item">
      <img style="width:100%;height:100%;" src="car.png" alt="image3" width="1100" height="500">
    </div>
    <div id="video_here" class="carousel-item">
      <img style="width:100%;height:100%;" src="car.png" alt="image4" width="1100" height="500">
    </div>
  </div>
  <a1 class="carousel-control-prev prev" href="#demo123" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a1>
  <a1 class="carousel-control-next next" href="#demo123" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a1>
     </div>
<div>&nbsp;</div>
<center><h2>Featured</h2></center>
<div>&nbsp;</div>
<div style="color:black;" class="container-fluid">
  <div class="card-deck">
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>  
  </div>
  <div>&nbsp;</div>
   <div class="card-deck">
    <div class="card bg-light">
      <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
            <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
            <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>
    <div class="card bg-light">
           <div class="card-body text-center">
        <p class="card-text">Will keep matter and images here</p>
        <p class="card-text">Will keep matter and images here</p>
      </div>
    </div>  
  </div>
</div>

<?PHP

$action = isset($_REQUEST['action']) ? scrub_in($_REQUEST['action']) : null;

if (!Core::is_session_started()) {
    session_start();
}
$_SESSION['catalog'] = 0;

/**
 * Check for the refresh mojo, if it's there then require the
 * refresh_javascript include. Must be greater then 5, I'm not
 * going to let them break their servers
 */
if (AmpConfig::get('refresh_limit') > 5 && AmpConfig::get('home_now_playing')) {
    $refresh_limit = AmpConfig::get('refresh_limit');
    $ajax_url      = '?page=index&action=reloadnp';
    require_once AmpConfig::get('prefix') . UI::find_template('javascript_refresh.inc.php');
}

require_once AmpConfig::get('prefix') . UI::find_template('show_index.inc.php');

UI::show_footer();

