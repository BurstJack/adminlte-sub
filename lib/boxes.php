<?php

    // ** small box in column 0..3, each column with own color
    function small_box($no, $header, $txt, $subtxt) {
        $n = intval($no);
        $colors = array("bg-info", "bg-success", "bg-warning", "bg-danger");
        $mod = $n % 4;
        $color = $colors[$mod];

        ?>
            <div class="col-lg-3 col-6"> 

            <div class="small-box <?php echo $color; ?>">
              <div class="inner">
                <h3> <?php echo $header; ?> </h3>
                <p><?php echo $txt; ?></p>
              </div>

              <div class="icon">
                <i class="fa fa-sitemap" style="font-size:48px;margin: 0 5px 0 0;"></i>
              </div>

               <a href="#" class="small-box-footer">
                   <?php echo $subtxt; ?> <i class="fa fa-arrow-circle-right"></i>
               </a>
            </div>

            </div>

      <?php  
      } 


?>
