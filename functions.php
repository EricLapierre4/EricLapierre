<?php

function remove_singular_body_class( $classes ) {

  foreach($classes as &$str){
    if(strpos($str, "singular") !== false){
      $str = "";
    }
  }

}
add_filter( 'body_class', 'remove_singular_body_class', 100 );

?>
