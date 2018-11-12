<?php 

    /***********************************
     - nav_li_item(icon, title, irl)
     - nav_li_item_sub(icon, title, url)
     ***********************************/

    // ex: nav_li_item("fa fa-book", "title", "#")
    function nav_li_item($icon, $title, $url) {
        ?>

        <li class="nav-item">
            <a href="<?php echo $url; ?>" class="nav-link">
                <i class="nav-icon <?php echo $icon; ?>"></i>
                <p>
                   <?php echo $title; ?>
                </p>
            </a>
            <?php /****
            <ul class="nav nav-treeview my-class-2">
                <!-- nav_li_item_sub(icon, title, url) -->
                <!-- nav_li_item_sub(icon, title, url) -->
            </ul>
            ****/ ?>
        </li>

        <?php
    }


    // ex: nav_li_item("fa fa-book", "title", "#")
    function nav_li_item_sub($icon, $title, $url) {
        ?>
     
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-angle-double-right my-class-1"></i>
                <p>Dashboard v1</p>
            </a>
        </li>
        
        ?>
     }

?>
