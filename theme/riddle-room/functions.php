<?php
/*
Riddle Room Theme Functions
By: Aakash Bhatia
http://www.thebrauxelcode.com/
*/

// Register Main Menu
register_nav_menus( array(
	'main' => 'Main Menu',
) );

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['order']['order_comments']);
	
	$fields['billing']['billing_phone']['custom_attributes'] = array( "minlength" => "10" );
    return $fields;
}

//Mark Virtual Orders as Complete
add_filter( 'woocommerce_payment_complete_order_status', 'virtual_order_payment_complete_order_status', 10, 2 );

function virtual_order_payment_complete_order_status( $order_status, $order_id ) {
  $order = new WC_Order( $order_id );

  if ( $order_status == 'processing' &&
       ( $order->status == 'on-hold' || $order->status == 'pending' || $order->status == 'failed' ) ) {
    $virtual_order = true;

    if ( count( $order->get_items() ) > 0 ) {
      foreach( $order->get_items() as $item ) {

        if ( $item['id'] > 0 ) {

          $_product = $order->get_product_from_item( $item );

          if ( ! $_product->is_virtual() ) {
            $virtual_order = false;
            break;
          }

        }
      }
    }

    // virtual order, mark as completed
    if ( $virtual_order ) {
      return 'completed';
    }
  }

  // non-virtual order, return original status
  return $order_status;
}
?>