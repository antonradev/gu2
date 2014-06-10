<div class="profile">
  <div class="name box">
    <?php print "Hello, " . $row_user['name'] . "!"; ?>
  </div><!-- end div.name -->
  <div class="level box">
    You are <span class="level-name"> <?php print $row_current_levels['level_name'] ?></span>
    Level: <span class="number"><?php print $row_user['level_number'] ?></span>
  </div><!-- end div.level -->
  <div class="total-xp box">
    Your gained XP is: 
    <span class="number"><span class="static-xp-number"><?php print $row_user['xp_total_gained'] ?></span></span>  
  </div><!-- end div.total-xp -->
  <div class="vip-membership box open-modal <?php
  if (isset($vip_button)) {
    print $vip_button;
  }
  ?>">
    <a><?php
  if (isset($vip_button_label)) {
    print $vip_button_label;
  }
  ?></a>
  </div><!-- end div.total-xp -->
  <div class="clearfix"></div>
  <div class="additional-info">
      Your Mastered Pages Views are <span class="number mastered-views"><?php print $row_user['pages_views'] ?></span> &nbsp; For this session: <span class="number"><?php print $_SESSION['current_pages_views'] ?></span>  
    <div class="finded-items">
      Founded items: <span class="number"><?php print $row_user['collected_items'] ?></span>
      Total Money: <span class="number money"><?php print $row_user['total_coins'] ?></span>
    </div><!-- end div.finded-items -->
    <div class="clearfix"></div>
  </div><!-- end div.additional-info -->

</div><!-- end div.profile -->