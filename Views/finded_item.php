<div class="findable-items">

  <?php
  if (isset($costs_greeting)) {
    print $costs_greeting;
  }
  ?>
  You just found: 
  <strong class="<?php
  if (isset($item_type_class)) {
    print $item_type_class;
  }
  ?>"><?php
            if (isset($finded_item)) {
              print $finded_item;
            }
            ?></strong>
  It costs: <?php
  if (isset($item_value)) {
    print $item_value;
  }
  ?>
</div><!-- end div.findable-items -->