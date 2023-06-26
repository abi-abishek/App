<?php
include "libs/load.php";
?>

<!doctype html>
<html lang="en">
  
  <? load_template('_head');?>

<body>    
  <header>
    <div class="collapse bg-dark" id="navbarheader">
    </div>
    <? load_template('_header');?>
  </header>

  <main>

    <?load_template('_calltoaction');?>

    <?load_template('_electrogram');?>

  </main>

    <?load_template('_footer');?>


    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
