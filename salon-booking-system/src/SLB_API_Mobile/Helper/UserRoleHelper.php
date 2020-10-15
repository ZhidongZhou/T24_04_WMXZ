<?php

namespace SLB_API_Mobile\Helper;

use WP_User;
use SLN_Plugin;

class UserRoleHelper {

    protected $allowed_roles;

    public function __construct() {
	$this->allowed_roles = apply_filters('sln_api_user_role_helper_allowed_roles', array(
	    'administrator',
	    SLN_Plugin::USER_ROLE_STAFF,
	));
    }

    public function is_allowed_user(WP_User $user) {
	return array_intersect($user->roles, $this->allowed_roles);
    }

}