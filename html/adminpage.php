<?php
include("../html/adminheader.php");
?>




<div class="col-sm-8">
  <nav>
    <ul class="nav my-5">
      <li class="nav-item">
        <?php

        if (isset($_SESSION["admin_login"])) {
          echo "<h1>you are loged in </h1>";
        } else {
          echo "<h1>you are logout  </h1>";
        }

        ?> </li>
    </ul>
  </nav>
</div>



<?php 

include("../html/adminfooter.php");
?>