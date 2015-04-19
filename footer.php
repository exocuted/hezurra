<?php //wp_footer(); ?>
<div class="peu">
  <div class="container">
    <div class="row">
      <div class="four columns colpeu">
        <?php dynamic_sidebar( 'footer_1' ); ?>
      </div>
      <div class="four columns colpeu">
        <?php dynamic_sidebar( 'footer_2' ); ?>
      </div>
      <div class="four columns colpeu">
        <?php dynamic_sidebar( 'footer_3' ); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
var menuState = 1;
function toggleMenu() {
  if(menuState == 1) {
    document.getElementById("menu-responsive").style.display = "block";
    menuState = 0;
  } else if(menuState == 0) {
    document.getElementById("menu-responsive").style.display = "none";
    menuState = 1;
  } else {
    console.log("Error menu responsive");
  }
  console.log("Menu toggled");
}
</script>
</body>
</html>
