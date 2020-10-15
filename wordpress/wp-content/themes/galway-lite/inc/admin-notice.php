<?php
if ( !class_exists('Galway_Lite_Dashboard_Notice') ):

    class Galway_Lite_Dashboard_Notice
    {
        function __construct()
        {	
            global $pagenow;

        	if( $this->galway_lite_show_hide_notice() ){

	            if( is_multisite() ){

                  add_action( 'network_admin_notices',array( $this,'galway_lite_admin_notiece' ) );

                } else {

                  add_action( 'admin_notices',array( $this,'galway_lite_admin_notiece' ) );
                }
	        }
	        add_action( 'wp_ajax_galway_lite_notice_dismiss', array( $this, 'galway_lite_notice_dismiss' ) );
			add_action( 'switch_theme', array( $this, 'galway_lite_notice_clear_cache' ) );
        }
        
        public static function galway_lite_show_hide_notice( $status = false ){

            if( $status ){

                if( (class_exists( 'Booster_Extension_Class' ) ) || get_option('twp_galway_lite_admin_notice') ){

                    return false;

                }else{

                    return true;

                }

            }

            // Check If current Page 
            if ( isset( $_GET['page'] ) && $_GET['page'] == 'galway-lite-about'  ) {
                return false;
            }

        	// Hide if dismiss notice
        	if( get_option('twp_galway_lite_admin_notice') ){
				return false;
			}
        	// Hide if all plugin active
        	if ( class_exists( 'Booster_Extension_Class' ) ) {
				return false;
			}
			// Hide On TGMPA pages
			if ( ! empty( $_GET['tgmpa-nonce'] ) ) {
				return false;
			}
			// Hide if user can't access
        	if ( current_user_can( 'manage_options' ) ) {
				return true;
			}
			
        }

        // Define Global Value
        public static function galway_lite_admin_notiece(){

            ?>
            <div class="updated notice is-dismissible welcome-panel twp-galway-lite-notice">

                <h3><?php esc_html_e('Quick Setup','galway-lite'); ?></h3>

                <strong><p><?php esc_html_e('Install required plugins just by click button.','galway-lite'); ?></p></strong>

                <p>
                    <a class="button button-primary twp-install-active" href="javascript:void(0)"><?php esc_html_e('Install and Active all required plugins.','galway-lite'); ?></a>
                    <span class="quick-loader-wrapper"><span class="quick-loader"></span></span>
                    <a class="btn-dismiss twp-custom-setup" href="javascript:void(0)"><?php esc_html_e('No Thanks, I prefer custom setup.','galway-lite'); ?></a>
                </p>

            </div>

        <?php
        }

        public function galway_lite_notice_dismiss(){

        	if ( isset( $_POST[ '_wpnonce' ] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST[ '_wpnonce' ] ) ), 'galway_lite_ajax_nonce' ) ) {

	        	update_option('twp_galway_lite_admin_notice','hide');

	        }

            die();

        }

        public function galway_lite_notice_clear_cache(){

        	update_option('twp_galway_lite_admin_notice','');

        }

    }
    new Galway_Lite_Dashboard_Notice();
endif;