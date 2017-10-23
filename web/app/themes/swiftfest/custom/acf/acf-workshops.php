<?php
  acf_add_local_field_group(array (
    'key' => 'group_59ed30ca50c76',
    'title' => 'Workshop',
    'fields' => array (
      array (
        'key' => 'field_59ed31ae4bad1',
        'label' => 'Date and Time',
        'name' => 'date_and_time',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array (
        'key' => 'field_59ed304b4bacf',
        'label' => 'Short Description',
        'name' => 'short_description',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => 'wpautop',
      ),
      array (
        'key' => 'field_59ed30634bad0',
        'label' => 'Related Speaker',
        'name' => 'related_speaker',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array (
          0 => 'speaker',
        ),
        'taxonomy' => array (
        ),
        'filters' => array (
          0 => 'search',
        ),
        'elements' => '',
        'min' => '',
        'max' => 1,
        'return_format' => 'object',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'workshop',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
  ));

