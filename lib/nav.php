<?php 

    /******************************************************
     - nav_li_header(icon, title, url, arr)
     - nav_li_item(icon, title, url)
     - nav_li_item_sub(icon, title, url)
     - nav_li_item_bottom_border(icon, title, url, arr)
     ******************************************************/

     function nav_li_header($icon, $title, $url, $arr) {
          ?>

          <li class="nav-item" style= "border-bottom: 1px solid #6d6d6d; margin-bottom: 10px; font-size:130%;">
            <div class="hover-item">
            <a href="<?php echo $url; ?>" class="nav-link">
              <i class="nav-icon <?php echo $icon; ?>"></i>
              <span class="brand-text font-weight-light">
                  <b style="font-size:110%;"><?php echo $title; ?></b>
              </span>
            </a>
            </div>
          </li>

        <?php
     }

     function nav_li_item_bottom_border($icon, $title, $url, $arr) {
        ?>

        <li class="nav-item" style= "border-bottom: 1px solid #6d6d6d; margin-bottom: 10px;">
            <a href="<?php echo $url; ?>" class="nav-link">
                <i class="nav-icon <?php echo $icon; ?>"></i>
                <p>
                   <?php echo $title; ?>
                   <?php if (is_array($arr)) { ?>
                       <i class="right fa fa-angle-left"></i>
                   <?php } ?>
                </p>
            </a>

            <?php if (is_array($arr)) { ?>
                <ul class="nav nav-treeview" style= "line-height:50%;">
                    <?php foreach ($arr as $sub) { ?>
                        <?php nav_li_item_sub($sub["icon"], $sub["title"], $sub["url"]); ?>
                    <?php } ?>
                </ul>
            <?php } ?>

        </li>

        <?php
    }

     function nav_li_item($icon, $title, $url, $arr) {
        ?>

        <li class="nav-item">
            <a href="<?php echo $url; ?>" class="nav-link">
                <i class="nav-icon <?php echo $icon; ?>"></i>
                <p>
                   <?php echo $title; ?>
                   <?php if (is_array($arr)) { ?>
                       <i class="right fa fa-angle-left"></i>
                   <?php } ?>
                </p>
            </a>

            <?php if (is_array($arr)) { ?>
                <ul class="nav nav-treeview" style= "line-height:50%;">
                    <?php foreach ($arr as $sub) { ?>
                        <?php nav_li_item_sub($sub["icon"], $sub["title"], $sub["url"]); ?>
                    <?php } ?>
                </ul>
            <?php } ?>

        </li>

        <?php
    }


    function nav_li_item_sub($icon, $title, $url) {
        ?>
              <li class="nav-item">
                  <a href="<?php echo $url; ?>" class="nav-link">
                      <i class="<?php echo $icon; ?> my-class-1"></i>
                      <p> <?php echo $title; ?> </p>
                  </a>
              </li>
        <?php
    }



?>
