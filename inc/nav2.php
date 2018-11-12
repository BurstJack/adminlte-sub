      <style>
            .my-class-1 { font-size:80%; margin-left: 30px; margin-right: 5px; margin-top:5px; }
            .my-class-2 { line-height:50%; }
      </style>

      <?php include "../lib/nav.php"; ?>

      <?php

          $s1["icon"] = "fa fa-angle-double-right";
          $s1["title"] = "Hello 1";
          $s1["url"] = "#";

          $s2["icon"] = "fa fa-angle-double-right";
          $s2["title"] = "Hello 2";
          $s2["url"] = "#";

          $s3["icon"] = "fa fa-angle-double-right";
          $s3["title"] = "Sample 1";
          $s3["url"] = "../sample1/sample_1.php";

          $s4["icon"] = "fa fa-angle-double-right";
          $s4["title"] = "Sample 2";
          $s4["url"] = "../sample2/sample_2.php";

          $s5["icon"] = "fa fa-angle-double-right";
          $s5["title"] = "Sample 3";
          $s5["url"] = "../sample3/sample_3.php";

          $s6["icon"] = "fa fa-angle-double-right";
          $s6["title"] = "Sample 4";
          $s6["url"] = "../sample4/sample_4.php";


          $res2[] = $s1;
          $res2[] = $s2;

          $res3[] = $s3;
          $res3[] = $s4;
          $res3[] = $s5;
          $res3[] = $s6;

      ?>


      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <?php nav_li_header("nav-icon fa fa-sitemap", "Sample 2", "#", ""); ?>
              <?php nav_li_item("nav-icon fa fa-book", "title1", "#", ""); ?>
              <?php nav_li_item("nav-icon fa fa-th", "title2", "#", ""); ?>
              <?php nav_li_item("nav-icon fa fa-th", "title3", "#", $res2); ?>
              <?php nav_li_item_bottom_border("nav-icon fa fa-th", "title4", "#", ""); ?>
              <?php nav_li_item_bottom_border("nav-icon fa fa-th", "Samples", "#", $res3); ?>
              <?php nav_li_item("nav-icon fa fa-th", "title6", "#", ""); ?>
          </ul>
      </nav>
