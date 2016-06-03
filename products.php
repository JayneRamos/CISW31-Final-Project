<?php


	require('header.php');
  require('inc/products.php');


?>




	<!-- page content -->

<div class="container">
  <h2>Products</h2><br />
<?php
  $products = get_products();
  $item = 0;

  foreach($products as $product) {
    if($item == 0) {
      echo "<div class=\"row\">\n";
    }
    echo "<div class=\"col-sm-4 text-center\">\n";
    echo "<img src=\"".$product['prod_image']."\" alt=\"Product\" width=\"250\" height=\"180\">\n";
    echo "<p><span style=\"font-weight: bold;\">".htmlspecialchars($product['prod_name'])."</span><br>\n";
    echo $product['prod_desc']."<br>\n".$product['prod_notes']."<br>\n";
    echo "<b>$".$product['prod_price']."</b><br>\n";
    echo "<button type=\"button\" class=\"btn btn-primary btn-md\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Add to Cart</button>\n";
    echo "</p>\n</div>\n";
    $item++;
    if($item == 3) {
      echo "</div>\n";
      $item = 0;
    }
  }
?>
</div>



<?php


	require('footer.php');


?>
