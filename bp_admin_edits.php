<?php

if ( is_admin() ) :

        class BP_AdminEditProfile {

                function bpEditProfile() {

                    __construct();

                }

                function __construct() {

                    add_action( 'init' , array( &$this, 'init' ) );

                }

                function init() {

                    if ( function_exists( 'bp_core_get_user_domain' ) && is_admin() )
                        add_filter( 'user_row_actions' , array( &$this , 'add_edit_profile' ) , 20 , 2 );

                }

                function add_edit_profile( $actions , $user_object ) {

                    if( current_user_can( 'delete_users' ) )
                            $actions['edit_profiles'] = '<a href="' . bp_core_get_user_domain( $user_object->ID ) . 'profile/edit/">BuddyPress</a>';

                    return $actions;
                }
        }
        $bp_edit_profile = new BP_AdminEditProfile();

endif;