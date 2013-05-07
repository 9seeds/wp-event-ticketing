<div class="wrap">
	<h2><?php _e('Reports', 'wpet' ); ?></h2>

	<div class="report-column-1">
		<?php
			// if registration is closed, include link to settings page			
			if( get_post_meta( WPET::getInstance()->events->getWorkingEvent()->ID ) && ( get_post_meta( WPET::getInstance()->events->getWorkingEvent()->ID, 'wpet_event_status', TRUE ) == 'closed' ) ) {
				echo '<div id="message" class="updated"><p>Registration is currently closed. <a href="admin.php?page=wpet_settings">Open registration</a></p></div>';
			}
		?>

		<h2><?php _e( 'Sales by Package', 'wpet' ); ?></h2>
		<table class='widefat'>
			<thead>
				<tr>
					<th><?php _e( 'Packages', 'wpet' ); ?></th>
					<th><?php _e( 'Sold', 'wpet' ); ?></th>
					<th><?php _e( 'Remaining', 'wpet' ); ?></th>
					<th><?php _e( 'Revenue', 'wpet' ); ?></th>
					<th><?php _e( 'Coupons', 'wpet' ); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
				/**
				 * @todo Replace with proper data values
				 *
				 */
				?>
				<tr>
					<td><?php _e( 'General Admission', 'wpet' ); ?></td>
					<td>229</td>
					<td>31</td>
					<td>$2,220.00</td>
					<td>($50.00)</td>
				</tr>
				<tr>
					<td><?php _e( 'Earlybirds', 'wpet' ); ?></td>
					<td>26</td>
					<td>24</td>
					<td>$260.00</td>
					<td>($0.00)</td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Totals', 'wpet' ); ?></strong></td>
					<td><strong>255</strong></td>
					<td><strong>55</strong></td>
					<td><strong>$2,480.00</strong></td>
					<td><strong>($50.00)</strong></td>
				</tr>
			</tbody>
		</table>
		<h2><?php _e( 'Sales by Ticket Type', 'wpet' ); ?></h2>
		<table class='widefat'>
			<thead>
				<tr>
					<th><?php _e( 'Ticket', 'wpet' ); ?></th>
					<th><?php _e( 'Sold', 'wpet' ); ?></th>
					<th><?php _e( 'Remaining', 'wpet' ); ?></th>
				</tr>
				<?php
				/**
				 * @todo replace these with actual data
				 */
				?>
				<tr>
					<td><?php _e( 'General Admission', 'wpet' ); ?></td>
					<td>255</td>
					<td>145</td>
				</tr>
				<tr>
					<td><?php _e( 'Special Admission', 'wpet' ); ?></td>
					<td>5</td>
					<td>15</td>
				</tr>
				<tr>
					<td><strong><?php _e( 'Totals', 'wpet' ); ?></strong></td>
					<td><strong>260</strong></td>
					<td><strong>160</strong></td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
		<div id="pie_chart_div"></div>
		<div id="line_chart_rev"></div>
		<div id="line_chart_sales"></div>
		
	</div>

	<div class="report-column-2">
		<div class="seeds-sidebar-box">
			<h3><?php _e( 'Need Support?', 'wpet' ); ?></h3>
			<p><?php echo sprintf( __( 'If you are having problems with the WP Event Ticketing plugin, please post them in the <a href="%s">support forums</a>.', 'wpet' ), 'http://support.9seeds.com/forum/wp-event-ticketing/' ); ?></p>
		</div>
		<div class="seeds-sidebar-box-2">
			<h3><?php _e( 'Spread the Love', 'wpet' ); ?></h3>
			<p><?php _e( 'Did WP Event Ticketing help you run a kick ass event? Consider helping us out in one of the following ways:', 'wpet' ); ?></p>
			<ul>
				<?php
				if (!function_exists( 'wpet_pro' )) {
					// display donate link
					?>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="N7ETDY3ZASAS6">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="<?php _e( 'PayPal - The safer, easier way to pay online!', 'wpet' ); ?>">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<p><?php _e( 'or maybe...', 'wpet' ); ?></p>
					<?php
				}
				?>
				<li><a href="http://wordpress.org/extend/plugins/wpeventticketing/" target="_blank"><?php _e( 'Give a 5-Star review', 'wpet' ); ?></a></li>
				<li><a href="https://twitter.com/intent/tweet?text=I%20love%20the%20WP%20Event%20Ticketing%20plugin%20by%20%409seeds%20http%3A%2F%2F9seeds.com%2Fplugins%2F" target="_blank"><?php _e( 'Tweet about it', 'wpet' ); ?></a></li>
				<li><a href="http://facebook.com/9seeds/" target="_blank"><?php _e( 'Like our page on Facebook', 'wpet' ); ?></a></li>
				<li>
					<form action="http://9seeds.us1.list-manage.com/subscribe/post?u=dee783b6d4761d6fe1a5529f8&amp;id=99eb075029" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<label for="mce-EMAIL"><?php _e( 'Subscribe to our mailing list', 'wpet' ); ?></label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="<?php _e( 'email address', 'wpet' ); ?>" required>
						<div class="clear"><input type="submit" value="<?php _e( 'Subscribe', 'wpet' ); ?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
				</li>
			</ul>
		</div>
		<?php
		/**
		 * @todo At some point, add a box to pull in RSS feed from 9seeds.com but just for wpet category
		 */
		?>
	</div>
</div>