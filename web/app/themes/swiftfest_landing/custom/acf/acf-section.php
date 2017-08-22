<?php
  // Hero
  //include __DIR__ . "/section/section-hero.php";


  // SECTION
  acf_add_local_field_group(array (
    'key' => 'group_56e034de70fe7',
    'title' => 'Section',
    'fields' => array (
      array (
        'key' => 'field_56e03504a7c60',
        'label' => 'Section',
        'name' => 'section',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array (
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'button_label' => 'Add Section',
        'min' => '',
        'max' => '',
        'layouts' => array (
          // Hero
          //$sectionHero,
        ),
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'template/template-section.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array (
      0 => 'the_content',
    ),
    'active' => 1,
    'description' => '',
  ));