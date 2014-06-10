<?php

/** Coloring and exclamations by item price
 * 
 * $item_type_class is added as a css class
 * $costs_greeting is an exclamation label in the interface 
 */
class Finded_Item {

  public function LoadFindedItem() {

    global $row_items;
    global $db;
    global $item_value;
    global $user_id;

    // Name of the finded item
    $finded_item = $row_items[0]['item_name'];

// Value price of the item
    $item_value = $row_items[0]['item_value'];



// Coloring and exclamations
    switch ($item_value) {
      case ($item_value >= 1 && $item_value <= 10):
        $costs_greeting = "Hmmm!";
        $item_type_class = "low-item";
        break;
      case ($item_value > 10 && $item_value <= 20):
        $costs_greeting = "Yeaahh!";
        $item_type_class = "medium-item";
        break;
      case ($item_value > 20 && $item_value <= 30):
        $costs_greeting = "WOW!";
        $item_type_class = "high-item";
        break;
      case ($item_value > 30 && $item_value < 100):
        $costs_greeting = "Amazing Oh, Lord!";
        $item_type_class = "amazing-item";
        break;

      default:
        break;
    }
    
    // Randomizing finding items
    $findable_rating = rand(1, 10);

    if ($findable_rating > 5) {

      try {
        $stmt = $db->prepare("UPDATE users SET collected_items = collected_items + 1, total_coins = total_coins + $item_value WHERE user_id=:user_id");
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
      } catch (PDOException $ex) {
        print "<h3>Error updating `collected_items` and `total_coins` values in database</h3>";
        print $ex->getMessage();
      }
      include VIEWS_PATH . 'finded_item.php';
    } else {
      include VIEWS_PATH . "nothing_found.php";
    }
  }

}

$initiate_finded_item = new Finded_Item();
$initiate_finded_item->LoadFindedItem();
?>