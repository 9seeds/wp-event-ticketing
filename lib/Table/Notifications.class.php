<?php

require_once WPET_PLUGIN_DIR . 'lib/Table.class.php';

class WPET_Table_Notifications extends WPET_Table {

	public function __construct( $args = array() ) {
		$defaults = array( 'post_type' => 'wpet_notifications' );
		$args = wp_parse_args( $args, $defaults );
		parent::__construct( $args );
	}

	public function get_columns() {
		$columns = array(
			//'cb'        => '<input type="checkbox" />',
			'title' => __( 'Subject', 'wpet' ),
			'wpet_to' => __( 'To', 'wpet' ),
			'post_date' => __( 'Sent Date', 'wpet' )
		);

		return $columns;
	}

	public function column_title( $item ) {
	    return $item->wpet_subject;
	}

	public function get_sortable_columns() {
		return array(
			'title' => array( 'title', true ),
		);
	}
}