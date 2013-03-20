<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];
if ( 'content' != $current_layout ) :
?>
<div style="overflow:visible;" class="sidebar catSidebar right">
        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

                <aside id="archives" class="widget">
                        <span><?php _e( 'Archives', 'twentyeleven' ); ?></span>
                        <ul>
                                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                </aside>

                <aside id="meta" class="widget">
                        <span><?php _e( 'Meta', 'twentyeleven' ); ?></span>
                        <ul>
                                <?php wp_register(); ?>
                                <li><?php wp_loginout(); ?></li>
                                <?php wp_meta(); ?>
                        </ul>
                </aside>

        <?php endif; // end sidebar widget area ?>
</div> <!-- end catSidebar -->
<?php endif; ?>