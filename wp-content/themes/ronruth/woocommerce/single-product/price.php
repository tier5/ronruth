<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<div itemprop="description" class="product-descrp">
	<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
<div class="product-price">
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                        <span> &amp; free shipping</span>
                        <p>IN THE CONTINENTAL U.S..</p>
                        <div class="shipping">
                            <p>FOR INTERNATIONAL SHIPPING ONLY = ADD $10.00</p>
                            <strong>
                                NOTE: ONLY ADD $10 ONCE FOR YOUR TOTAL DVD ORDER
                            </strong>
                            <p>(Purchase Additional DVDs @ U.S. Pricing)</p>
                        </div></div>
	<meta itemprop="price" content="<?php echo esc_attr( $product->get_display_price() ); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
