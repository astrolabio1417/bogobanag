<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
	  <?php include 'header.php' ?>
  </head>

  <body>
    <div class="menu">
        <?php include 'navbar.php' ?>
    </div>

    <div class="container-proj">
      <div class="row">
        <div class="leftside col">
          <p>leftside col</p>
          <?php echo fread("text.txt", "r");
            include 'navbar.php';?>
        </div>

        <div class="contents col-8">
          <p>contents col-8</p>

        </div>

        <div class="rightside col">
          <p>rightside col</p>
          <?php echo fread("text.txt", "r");?>
        </div>
      </div>
    </div>


    <div class="footer">
      <?php include 'footer.php' ?>
    </div>
  </body>
</html>
