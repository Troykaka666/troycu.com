<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php 
  echo "<h1>Task1</h1>";
  //Task1
  function fareEstimator($ride_time,$ride_distance,$cost_per_minute,$cost_per_mile){
    $j = sizeof($cost_per_mile);
    $result = array();
    for ($i=0; $i < $j; $i++) { 
        $price = $ride_time * $cost_per_minute[$i] + $ride_distance * $cost_per_mile[$i];
        array_push($result,$price);
    }
   echo print_r($result);
  }

  $ride_time = 30;
  $ride_distance = 7;
  $cost_per_minute = array(0.2, 0.35, 0.4, 0.45);
  $cost_per_mile = array(1.1, 1.8, 2.3, 3.5);
  fareEstimator($ride_time,$ride_distance,$cost_per_minute,$cost_per_mile);

  echo '<br>------------------------------------------<br>';


//Task2
echo "<h1>Task2</h1>";
$requests = array("add : milk",
                  "remove: milk",
                  "add : pickles",
                  "add : milk",
                  "quantity_upd : pickles : +4",
                  "quantity_upd : pickles : -2"
                  );

$requests1 = array("add : rock",
            "add : paper",
            "add : scissors",
            "checkout",
            "add : golden medal");

$request_option = "add : remove : checkout : quantity_upd";
$request_option_split = explode(":",$request_option);
function shoppingCart($requests,$option){
  $j = count($requests);
  $basket = array();
  for ($i=0 ; $i < $j ; $i++) { 
    $temp = explode(":",$requests[$i]);
    switch (trim($temp[0])) {
      case "add"://add
        $basket[trim($temp[1])] = 1;
      break;

      case "remove"://remove
      unset($basket[trim($temp[1])]);
      break;

      case "quantity_upd"://quantity_upd
      $basket[trim($temp[1])] = $basket[trim($temp[1])] + intval(trim($temp[2]));
      break;

      case "checkout"://checkout.
      $basketcopy = $basket;
      foreach ($basketcopy as $key => $value) {
        unset($basket[$key]);
      }
      break;

      default:
        echo "hello world";
        break;
    }
  }
  print_r($basket);
}
echo '<h3>First Request</h3>';
shoppingCart($requests, $request_option_split);
echo '<br>';
echo '<h3>Second Request</h3>';
shoppingCart($requests1, $request_option_split);







  ?>
</body>
</html>