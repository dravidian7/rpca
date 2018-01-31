<?php

/**
 * Staff Member Class
 *
 * @file               cpt-staff-members.php
 * @package            Recruitment Partners
 * @author             Suniel Sambasivan
 * @copyright          2018 Suniel Sambasivan
 * @description        Creates a staff-member object by staff-member post id
 */

/* require_once('nt-staff-member-fields.php');
require_once('nt-staff-member-actions.php');
require_once('nt-staff-member-add-buttons.php');
 */
/**
* Declare Staff Member custom content type
*/

$labels = array(
  'singular_name'      => _x('Staff Member', 'staff-member'),
  'add_new'            => _x('Add New', 'staff-member'),
  'add_new_item'       => __('Add Staff Member'),
  'edit_item'          => __('Edit Staff Member'),
  'new_item'           => __('New Staff Member'),
  'all_items'          => __('All Staff Members'),
  'view_item'          => __('View Staff Member'),
  'search_items'       => __('Search Staff Member types'),
  'not_found'          => __('No Staff Member found'),
  'not_found_in_trash' => __('No Staff Member found in the Trash'),
);

$capabilities = array(
  'edit_post' => 'edit_staff_member',
  'read_post' => 'read_staff_member',
  'delete_post' => 'delete_staff_member',
  'publish_post' => 'publish_staff_member'
);

$args = array(
  'description'   => 'Staff Member',
  'menu_position' => 8,
  'supports'      => array('title', 'thumbnail', 'revisions'), //turns off the text-editor and the excerpts
  'has_archive'   => false,
  'rewrite' => array( 'slug' => '/staff-members', 'with_front' => false ),
  'exclude_from_search' => false
);

$roles = array(
  'administrator',
  'editor',
  'author',
);

$permissions = array('read');

//uncomment to refresh perms and permalink rules

add_action( 'init', function() {
  flush_rewrite_rules();
  global $wp_post_types;
    if ( isset( $wp_post_types[ 'staff-member' ] ) ) {
      unset( $wp_post_types[ 'staff-member' ] );
        return true;
    }
    return false;
}, 0 );


$staff_member = new Custom_Post_Type('staff-member', $args, $roles, $capabilities, $permissions, $labels);
