<?php 

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
            <ul class="nav nav-treeview my-class-2">
                <!-- sub item (0) -->
                <!-- sub item (1) -->
            </ul>
        </li>

        <?php
    }

?>
