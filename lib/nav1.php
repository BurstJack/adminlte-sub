       <style>
            .my-class-1 { font-size:80%; margin-left: 30px; margin-right: 5px; margin-top:5px; }
            .my-class-2 { line-height:50%; }
      </style>

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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item" style= "border-bottom: 1px solid #6d6d6d; margin-bottom: 10px; font-size:130%;">
            <div class="hover-item">
            <a href="../" class="nav-link">
              <i class="nav-icon fa fa-sitemap"></i>
              <span class="brand-text font-weight-light">
                  <b style="font-size:110%;">Private Chains </b>
              </span>
            </a>
            </div>
          </li>

          <li class="nav-item" style= "border-bottom: 1px solid #6d6d6d; margin-bottom: 10px;">
            <div class="hover-item">
            <a href="../wallet/settings.php" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p id="sidebar_acct" style="font-size:80%;display:inline;">
                BURST-XXXX-XXXX-XXXX-XXXXX
              </p>
            </a>
            </div>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                (Sidebar1.php)
              </p>
            </a>
          </li>

          <?php nav_li_item("fa fa-book", "example_1", "#"); ?>

          <li class="nav-item">
            <a href="../datatables/datatables_unconfirmed.php" class="nav-link">
              <i class="nav-icon fa fa-bell"></i>
              <p>
                Unconfirmed Txs
               <?php if(file_exists('../blocks/unconfirmed.txt'))  {  ?> 
                   <span class="right badge badge-danger"> 
                       <?php include '../blocks/unconfirmed.txt'; ?> 
                   </span>
               <?php }  ?> 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview my-class-2">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Addons
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="../wallet/addons_.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Planned Addons</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Chains
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="../datatables/datatables_genesis.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Genesis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../wallet/create_new_chain.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Create New</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Wallet
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="../wallet/wallet_blue.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Wallet Blue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../wallet/wallet_green.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Wallet Green</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../wallet/wallet_yellow.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Wallet Yellow</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../wallet/wallet_red.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Wallet Red</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://explore.burst.cryptoguru.org/transaction/14326560999750077998" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Test Message</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Network
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Sync</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../client/client.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Ping</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://burst-marketplace.binary-dev.com/pchains/curl/curl_class.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Curl</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../wallet/join_network.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Join Network</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Encode Tx</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://blockchain.info/decode-tx" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Decode Tx</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Verify Raw Tx</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Pchain Accounts
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="https://explore.burst.cryptoguru.org/account/6738958474047093549" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Genesis Txs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="https://explore.burst.cryptoguru.org/account/15783843113162002738" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Payment Txs</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Mining
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="../wallet/start_mining.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Start Mining</p>
                </a>
              </li>
             </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style= "line-height:50%;">
              <li class="nav-item">
                <a href="../wallet/settings.php" class="nav-link">
                  <i class="fa fa-angle-double-right my-class-1"></i>
                  <p>Burst Account</p>
                </a>
              </li>
             </ul>
          </li>

        </ul>
      </nav>
