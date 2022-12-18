<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.




// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {
  //
    // Set a unique slug-like ID
    $prefix = 'metabox_options';

 
    //
    // Create a metabox
    CSF::createMetabox( $prefix, array(
      'title'     => esc_html__('Portfolio Options', 'pearl'),
      'post_type' => 'portfolio',
      'context'   => 'normal', // The context within the screen where the boxes should display. `normal`, `side`, `advanced`
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
     //'title'  => 'Tab Title 1',
      'fields' => array(

        array(
            'type'    => 'subheading',
            'content' => 'Gallery',
          ),
  
        array(
          'id'    => 'portfolio-gallery',
          'type'  => 'gallery',
          'title' => esc_html__('Gallery', 'pearl'),
        ),

        array(
            'type'    => 'subheading',
            'content' => 'Information',
          ),

          
    array(
        'id'        => 'information-group',
        'type'      => 'group',
        'title'     => esc_html__('Information Add', 'pearl'),
        'fields'    => array(
          array(
            'id'    => 'information-title',
            'type'  => 'text',
            'title' => esc_html__('Title', 'pearl'),
          ),
          array(
            'id'    => 'information-icon',
            'type'  => 'icon',
            'title' => esc_html__('Icon', 'pearl'),
          ),
          array(
            'id'    => 'information-content',
            'type'  => 'textarea',
            'title' => esc_html__('Content', 'pearl'),
          ),
       
        ),
        'default'   => array(
          array(
            'information-title'     => 'Client',
            'information-icon'    => 'fas fa-user',
            'information-content' => 'John Doe',
          ),
          array(
            'information-title'     => 'Date',
            'information-icon'    => 'fas fa-calculator',
            'information-content' => '20th March, 2021',
          ),
          array(
            'information-title'     => 'Tools',
            'information-icon'    => 'fas fa-tools',
            'information-content' => 'Photoshop, Netbeans',
          ),
          array(
            'information-title'     => 'Category',
            'information-icon'    => 'fas fa-cog',
            'information-content' => 'Graphic, Development',
          ),
    

     
        ),
      ),

      array(
        'id'    => 'portfolio-view-project',
        'type'  => 'link',
        'title' => esc_html__('Url', 'pearl'),
      ),

      array(
        'type'    => 'subheading',
        'content' => 'The Challenges',
      ),

      array(
        'id'    => 'challenges-big-title',
        'type'  => 'text',
        'title' => esc_html__('Challenges Big Title', 'pearl'),
        'default' => 'The Challenges',
      ),

      array(
        'id'        => 'challenges-group',
        'type'      => 'group',
        'title'     => esc_html__('Challenges Add', 'pearl'),
        'fields'    => array(
          array(
            'id'    => 'challenges-title',
            'type'  => 'text',
            'title' => esc_html__('Title', 'pearl'),
          ),
          array(
            'id'    => 'challenges-content',
            'type'  => 'textarea',
            'title' => esc_html__('Content', 'pearl'),
          ),
   
       
        ),
        'default'   => array(
          array(
            'challenges-title'     => 'Illustration',
            'challenges-content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
          ),
          array(
            'challenges-title'     => 'User Experience',
            'challenges-content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
          ),
          array(
            'challenges-title'     => 'Unit Test',
            'challenges-content' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
          ),
      

        ),
      ),

      array(
        'type'    => 'subheading',
        'content' => 'Client Review',
      ),

      array(
        'id'    => 'cr-big-title',
        'type'  => 'text',
        'title' => esc_html__('Client Review Big Title', 'pearl'),
        'default' => 'Client Review',
      ),

      array(
        'id'    => 'cr-content',
        'type'  => 'textarea',
        'title' => esc_html__('Content', 'pearl'),
        'default' => 'I would recommend "Linda M. Bellamy" to anyone who wants to have a creative portfolio sorting application, either design studio or freelancer.',
      ),

      array(
        'id'    => 'cr-title',
        'type'  => 'text',
        'title' => esc_html__('Client Name', 'pearl'),
        'default' => 'Jhon Doe',
      ),
      
  
      )
    ) );

    
  
    //
    // Create a section
  /*  CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
  
      )
    ) );  */
  
  } 

