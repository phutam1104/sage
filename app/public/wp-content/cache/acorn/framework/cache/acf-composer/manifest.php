<?php return array (
  'App\\Options\\ThemeOptions' => 
  array (
    'key' => 'group_theme_options',
    'title' => 'Theme Options',
    'fields' => 
    array (
      0 => 
      array (
        'type' => 'image',
        'name' => 'logo',
        'label' => 'Logo',
        'key' => 'field_theme_options_logo',
        'return_format' => 'id',
      ),
    ),
    'location' => NULL,
  ),
  'App\\Blocks\\ExampleBlock' => 
  array (
    'key' => 'group_example_block',
    'title' => 'Example Block',
    'fields' => 
    array (
      0 => 
      array (
        'type' => 'repeater',
        'name' => 'items',
        'label' => 'Items',
        'key' => 'field_example_block_items',
        'button_label' => 'Add Item',
        'sub_fields' => 
        array (
          0 => 
          array (
            'type' => 'text',
            'name' => 'item',
            'label' => 'Item',
            'key' => 'field_example_block_items_item',
          ),
        ),
      ),
    ),
    'location' => NULL,
  ),
);