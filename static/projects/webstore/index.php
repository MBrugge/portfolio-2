<?php 
  require "config.php";
  require "header.php";
  require "dbconnect.php";
  require "footer.php";
?>

<main>
  <div id="cards">
    <!-- Headset -->
    <a href="<?php echo BASE_URL; ?>/categories/headsets.php" class="card">
      <div class="card-content">
        <div class="card-image">
          <i class="fa-solid fa-headset" style="color: #969696;"></i>
        </div>
        <div class="card-info-wrapper">
          <div class="card-info">
            <div class="card-info-title">
              <h3>Headsets</h3>  
              <h4>Here you can find our headsets</h4>
            </div>    
          </div>
        </div>
      </div>
    </a>
    <!-- Keyboards -->
    <a href="<?php echo BASE_URL; ?>/categories/keyboards.php" class="card">
      <div class="card-content">
        <div class="card-image">
          <i class="fa-solid fa-keyboard" style="color: #969696;"></i>
        </div>
        <div class="card-info-wrapper">
          <div class="card-info">
            <div class="card-info-title">
              <h3>Keyboards</h3>  
              <h4>Here you find our keyboards</h4>
            </div>    
          </div>
        </div>
      </div>
    </a>
    <!-- Monitors -->
    <a href="<?php echo BASE_URL; ?>/categories/monitors.php" class="card">
      <div class="card-content">
        <div class="card-image">
          <i class="fa-solid fa-desktop" style="color: #969696;"></i>
        </div>
        <div class="card-info-wrapper">
          <div class="card-info">
            <div class="card-info-title">
              <h3>Monitors</h3>  
              <h4>Here you can find our monitors</h4>
            </div>    
          </div>
        </div>
      </div>
    </a>
    <!--Mouses-->
    <a href="<?php echo BASE_URL; ?>/categories/mouses.php" class="card">
      <div class="card-content">
        <div class="card-image">
          <i class="fa-sharp fa-solid fa-computer-mouse" style="color: #969696;"></i>
        </div>
        <div class="card-info-wrapper">
          <div class="card-info">
            <div class="card-info-title">
              <h3>Mouses</h3>  
              <h4>Here you can find our mouses</h4>
            </div>    
          </div>
        </div>
      </div>
    </a>
  </div>
</main>
