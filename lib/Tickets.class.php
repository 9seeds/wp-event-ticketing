<?php

/**
 * @since 2.0 
 */
class Tickets {

    /**
     * @since 2.0 
     */
    public function __construct() {
        add_filter( 'wpet_admin_menu', array( &$this, 'adminMenu' ) );
    }
    
    /**
     * Add Tickets links to the Tickets menu
     * 
     * @since 2.0
     * @param type $menu
     * @return array 
     */
    public function adminMenu( $menu ) {
        $menu[] = array( 'Tickets', 'Tickets', 'add_users', 'tickets', array( &$this, 'vtTickets' ) );
        return $menu;
    }
} // end class