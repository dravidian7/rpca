<?php

/*
Declare fields for restaurant content type
*/

add_action( 'custom_metadata_manager_init_metadata', function() {

  $post_types = array( 'staff-member' );

  $staff_form = new Custom_Metadata_Form( 'staff-member-form', $post_types );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_staff_members',
    'item_type' => 'metabox',
    'fields' => array(
      'label' => 'Staff Member Details',
      )
  ) );
  
  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_city',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'field_type' => 'select',
      'label' => 'City',
      'values' => array(
        'yyc' => 'Calgary',
        'yeg' => 'Edmonton'
      )
    )
  ) );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_member_sector',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'label' => 'Sector',
    )
  ) );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_member_position',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'label' => 'Position',
    )
  ) );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_info',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'field_type' => 'textarea',
      'label' => 'Profile',
    )
  ) );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_member_linkedin',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'label' => 'LinkedIn',
    )
  ) );

  $staff_form->set_form_item( array(
    'name' => 'rp_cpt_member_email',
    'item_type' => 'field',
    'fields' => array(
      'group' => 'rp_cpt_staff_members',
      'field_type' => 'email',
      'label' => 'Email',
    )
  ) );

  $staff_form->print_form();
});