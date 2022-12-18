<?php if (!defined('ABSPATH')) {
  die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'pearl_settings';

//
// Create customize options
//
CSF::createCustomizeOptions($prefix);

//
// Create a about
// 
CSF::createSection($prefix, array(
  'title'    => esc_html__('General Settings', 'pearl'),
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'general-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Loader', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'general-mode',
      'type'  => 'switcher',
      'title' => esc_html__('Light Mode', 'pearl'),
      'default' => false
    ),

    array(
      'id'    => 'general-googlecode',
      'type'  => 'code_editor',
      'title' => esc_html__('Google Analytics', 'pearl'),
     
    ),

 

 

  )
));


//
// Create a section
//
CSF::createSection( $prefix, array(
  'id'       => 'fields',
  'title'    => esc_html__('Home Page', 'pearl'),
  'priority' => 2,
) );
CSF::createSection($prefix, array(
  'title'    =>  esc_html__('Profile Sidebar Settings', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  'fields'   => array(


    array(
      'id'    => 'sidebar-name',
      'type'  => 'text',
      'title' =>  esc_html__('Name-Surname', 'pearl'),
      'default' => 'Linda M. Bellamy',
    ),
    array(
      'id'    => 'sidebar-career',
      'type'  => 'text',
      'title' =>  esc_html__('Career', 'pearl'),
      'default' => 'Sr. Developer',
    ),

    array(
      'id'    => 'sidebar-image',
      'type'  => 'media',
      'title' =>  esc_html__('Author Image', 'pearl'),
    ),


  array(
    'id'        => 'sidebar-social-icon',
    'type'      => 'group',
    'title'     =>  esc_html__('Social Accounts', 'pearl'),
    'fields'    => array(
      array(
        'id'    => 'icon',
        'type'  => 'icon',
        'title' =>  esc_html__('Icon Select', 'pearl'),
      ),
      array(
        'id'    => 'link',
        'type'  => 'text',
        'title' =>  esc_html__('Url Enter', 'pearl'),
      ),
      array(
        'id'    => 'color',
        'type'  => 'select',
        'placeholder' => 'Select an Color',
        'title' =>  esc_html__('Color Select', 'pearl'),
        'options' => array(
          'fac' => 'Facebook',
          'twi' => 'Twitter',
          'dri' => 'Dribbble',
          'ins' => 'instagram',
        
        ),
      ),
    ),
    'default'   => array(
      array(
        'icon'     => 'fab fa-facebook-f',
        'link'    => 'https://facebook.com',
        'color'  => 'fac'
      ),
      array(
        'icon'     => 'fab fa-twitter',
        'link'    => 'https://twitter.com',
        'color'  => 'twi'
      ),
      array(
        'icon'     => 'fab fa-dribbble',
        'link'    => 'https://dribbble.com',
        'color'  => 'dri'
      ),
      array(
        'icon'     => 'fab fa-instagram',
        'link'    => 'https://instagram.com',
        'color'  => 'ins'
      ),
    ),
  ),

  array(
    'id'        => 'sidebar-skills',
    'type'      => 'group',
    'title'     =>  esc_html__('Sidebar Skills', 'pearl'),
    'fields'    => array(
      array(
        'id'    => 'skill',
        'type'  => 'text',
        'title' =>  esc_html__('Skill Enter', 'pearl'),
      ),
      array(
        'id'    => 'number',
        'type'  => 'text',
        'title' =>  esc_html__('Ratio %', 'pearl'),
      ),
      array(
        'id'    => 'color',
        'type'  => 'select',
        'placeholder' => 'Select an Color',
        'title' =>  esc_html__('Color Select', 'pearl'),
        'options' => array(
          'gr2' => 'Gradient 1',
          'gr3' => 'Gradient 2',
        
        ),
      ),
    ),
    'default'   => array(
      array(
        'skill'     => 'Backend Development',
        'number'    => '85',
      ),
      array(
        'skill'     => 'Frontend Development',
        'number'    => '92',
        'color'  => 'gr2'
      ),
      array(
        'skill'     => 'Illustration',
        'number'    => '71',
        'color'  => 'gr3'
      ),
 
    ),
  ),


    array(
      'id'    => 'sidebar-cv',
      'type'  => 'media',
      'title' =>  esc_html__('CV ', 'pearl'),
      'default' => '/',
    ),
    array(
      'id'    => 'sidebar-button',
      'type'  => 'text',
      'title' =>  esc_html__('Contact Button Text ', 'pearl'),
      'default' => 'Hire Me ',
    ),
    array(
      'id'    => 'sidebar-button-url',
      'type'  => 'link',
      'title' =>  esc_html__('Contact Button Url ', 'pearl'),
      'default' => '/contact',
    ),

  )
));

//
// Create a about
// 
CSF::createSection($prefix, array(
  'title'    => esc_html__('About Info', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'about-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'about-title',
      'type'  => 'text',
      'title' =>  esc_html__('About Title', 'pearl'),
      'default' => 'About Info',
    ),

    array(
      'id'    => 'about-name',
      'type'  => 'text',
      'title' =>  esc_html__('Name Surname', 'pearl'),
      'default' => 'K. Melissa Caroll',
    ),
    array(
      'id'    => 'about-age',
      'type'  => 'text',
      'title' =>  esc_html__('Age', 'pearl'),
      'default' => '32 Years 241 Days',
    ),

    array(
      'id'    => 'about-email',
      'type'  => 'text',
      'title' =>  esc_html__('Email', 'pearl'),
      'default' => 'k.melissa@caroll.me',
    ),

    array(
      'id'    => 'about-phone',
      'type'  => 'text',
      'title' =>  esc_html__('Phone', 'pearl'),
      'default' => '1.800.987.6987',
    ),

    array(
      'id'    => 'about-address',
      'type'  => 'text',
      'title' =>  esc_html__('Address', 'pearl'),
      'default' => 'https://www.google.com/maps/place/Kaliforniya,+Amerika+Birle%C5%9Fik+Devletleri/@37.1929746,-123.8003363,6z/data=!3m1!4b1!4m5!3m4!1s0x808fb9fe5f285e3d:0x8b5109a227086f55!8m2!3d36.778261!4d-119.4179324',
      'desc' =>  esc_html__('Enter Google Map Url ', 'pearl'),
    ),
 

  )
));

//
// Create a sort bio
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Short Bio', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'bio-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'bio-title',
      'type'  => 'text',
      'title' =>  esc_html__('About Title', 'pearl'),
      'default' => 'Short Bio',
    ),

    array(
      'id'    => 'bio-content',
      'type'  => 'wp_editor',
      'title' => esc_html__('Content', 'pearl'),
      'default' =>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices  gravida risus commodo. Quis ipsum suspendisse ultrices gravida.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices  gravida risus commodo. Quis ipsum suspendisse ultrices gravida.</p>
      <br><img src=\' '.  get_template_directory_uri(). '/assets/images/home_01/3.png'     .    ' \'   />'
    ),
  

  )
));

//
// Create what i do 
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('What I Do?', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'what-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'what-title',
      'type'  => 'text',
      'title' =>  esc_html__('Title', 'pearl'),
      'default' => 'What I Do?',
    ),

    array(
      'id'        => 'what-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'what-opt-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),
        array(
          'id'    => 'what-opt-subtitle',
          'type'  => 'text',
          'title' => esc_html__('Sub title', 'pearl'),
        ),
        array(
          'id'    => 'what-opt-content',
          'type'  => 'textarea',
          'title' => esc_html__('Content', 'pearl'),
        ),
        array(
          'id'    => 'what-opt-icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'pearl'),
        ),
    
     
      ),
      'default'   => array(
        array(
          'what-opt-title'     => 'Web Development',
          'what-opt-subtitle'    => 'from scratch',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-cog',
        ),
        array(
          'what-opt-title'     => 'UX recherche',
          'what-opt-subtitle'    => 'data collection',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-pen-nib',
        ),

        array(
          'what-opt-title'     => 'UI design',
          'what-opt-subtitle'    => 'creativ design',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-layer-group',
        ),

        array(
          'what-opt-title'     => 'Application',
          'what-opt-subtitle'    => 'stand alone',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-mobile-alt',
        ),

        array(
          'what-opt-title'     => 'Social Media',
          'what-opt-subtitle'    => 'digital product',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-share-alt',
        ),

        array(
          'what-opt-title'     => 'Search Engine',
          'what-opt-subtitle'    => 'page rank',
          'what-opt-content' => 'Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.',
          'what-opt-icon' => 'fas fa-chart-line',
        ),
      
      ),
    ),

  )
));


//
// Create testimonials
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Testimonials', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'testimonials-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'testimonials-title',
      'type'  => 'text',
      'title' =>  esc_html__('Title', 'pearl'),
      'default' => 'What They Says?',
    ),

    array(
      'id'        => 'testimonials-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'testimonials-name',
          'type'  => 'text',
          'title' => esc_html__('Name', 'pearl'),
        ),
        array(
          'id'    => 'testimonials-url',
          'type'  => 'text',
          'title' => esc_html__('Url', 'pearl'),
        ),
        array(
          'id'    => 'testimonials-content',
          'type'  => 'textarea',
          'title' => esc_html__('Content', 'pearl'),
        ),
        array(
          'id'    => 'testimonials-image',
          'type'  => 'media',
          'title' => esc_html__('Image', 'pearl'),
        ),
    
     
      ),
      'default'   => array(

        array(
          'testimonials-name'     => 'Edward Johnson,',
          'testimonials-url'    => 'themeforest.net',
          'testimonials-content' => 'They\'ll have to make the best of things its an uphill climb. Said Californ\'y is the place you ought
          to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin\' pools movie stars.
          Maybe you and me were never meant to be.',
        ),

        array(
          'testimonials-name'     => 'Mosharof Khondoker,',
          'testimonials-url'    => 'themeforest.net',
          'testimonials-content' => 'They\'ll have to make the best of things its an uphill climb. Said Californ\'y is the place you ought
          to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin\' pools movie stars.
          Maybe you and me were never meant to be.',
        ),

        array(
          'testimonials-name'     => 'Sara Ferdoush,',
          'testimonials-url'    => 'themeforest.net',
          'testimonials-content' => 'They\'ll have to make the best of things its an uphill climb. Said Californ\'y is the place you ought
          to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin\' pools movie stars.
          Maybe you and me were never meant to be.',
        ),

      
      ),
    ),

  )
));


//
// Create price
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Price', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'price-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'price-title',
      'type'  => 'text',
      'title' =>  esc_html__('Title', 'pearl'),
      'default' => 'Fair Price',
    ),

    array(
      'id'        => 'price-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'price-package',
          'type'  => 'text',
          'title' => esc_html__('Package', 'pearl'),
        ),
        array(
          'id'    => 'price-content',
          'type'  => 'textarea',
          'title' => esc_html__('Content', 'pearl'),
        ),
        array(
          'id'    => 'price-buy',
          'type'  => 'text',
          'title' => esc_html__('Price', 'pearl'),
        ),
        array(
          'id'    => 'price-project',
          'type'  => 'text',
          'title' => esc_html__('Project', 'pearl'),
        ),
        array(
          'id'    => 'price-icon',
          'type'  => 'text',
          'title' => esc_html__('Icon', 'pearl'),
          'desc' => 'You can also use Stroke Gap Icons',
        ),
        array(
          'id'    => 'price-url-text',
          'type'  => 'text',
          'title' => esc_html__('Url Text', 'pearl'),
        ),
        array(
          'id'    => 'price-url',
          'type'  => 'link',
          'title' => esc_html__('Link', 'pearl'),
        ),
    
     
      ),
      'default'   => array(

        array(
          'price-package'     => 'STARTER PACKAGE',
          'price-content'    => 'Suitable for small business or Organizations',
          'price-buy'    => '$27.00',
          'price-project'    => 'per project',
          'price-icon'    => 'icon icon-Car',
          'price-url-text'    => 'LET\'S START',
          'price-url'    => '/contact',
        ),
        array(
          'price-package'     => 'BUSİNESS PACKAGE',
          'price-content'    => 'Suitable for small business or Organizations',
          'price-buy'    => '$47.00',
          'price-project'    => 'per project',
          'price-icon'    => 'icon icon-Truck',
          'price-url-text'    => 'LET\'S START',
          'price-url'    => '/contact',
        ),
        array(
          'price-package'     => 'PRO  PACKAGE',
          'price-content'    => 'Suitable for small business or Organizations',
          'price-buy'    => '$97.00',
          'price-project'    => 'per project',
          'price-icon'    => 'icon icon-BigTruck',
          'price-url-text'    => 'LET\'S START',
          'price-url'    => '/contact',
        ),


      
      ),
    ),

  )
));



//
// Create languages and hobbies
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Hobbies and Languages', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'H-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Hobbies Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'L-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Languages Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'H-title',
      'type'  => 'text',
      'title' =>  esc_html__('Hobbies Title', 'pearl'),
      'default' => 'Love To',
    ),

    array(
      'id'    => 'L-title',
      'type'  => 'text',
      'title' =>  esc_html__('Languages Title', 'pearl'),
      'default' => 'Languages',
    ),

    array(
      'id'        => 'H-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Hobbies Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'hobbies-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),
        array(
          'id'    => 'hobbies-icon',
          'type'  => 'icon',
          'title' => esc_html__('Content', 'pearl'),
        ),

     
      ),
      'default'   => array(

        array(
          'hobbies-title'     => 'Tennis',
          'hobbies-icon'     => 'fas fa-table-tennis',
        ),
        array(
          'hobbies-title'     => 'Chase',
          'hobbies-icon'     => 'fas fa-chess-knight',
        ),
        array(
          'hobbies-title'     => 'Chase',
          'hobbies-icon'     => 'fas fa-basketball-ball',
        ),
        
      ),
    ),


     //languages
    array(
      'id'        => 'L-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Languages Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'languages-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),
        array(
          'id'    => 'languages-level',
          'type'  => 'text',
          'title' => esc_html__('Level', 'pearl'),
        ),

     
      ),
      'default'   => array(

        array(
          'languages-title'     => 'English',
          'languages-level'     => '7',
        ),
        array(
          'languages-title'     => 'German',
          'languages-level'     => '6',
        ),
        array(
          'languages-title'     => 'Spanish',
          'languages-level'     => '4',
        ),
        array(
          'languages-title'     => 'Bangla',
          'languages-level'     => '9',
        ),
        array(
          'languages-title'     => 'Hindi',
          'languages-level'     => '7',
        ),
 
        
      ),
    ),

  )
));

//
// Create client
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Client', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'client-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),


    array(
      'id'        => 'client-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'client-image',
          'type'  => 'media',
          'title' => esc_html__('Image', 'pearl'),
        ),
     
      ),

    ),

  )
));


//
// Create counter
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Interesting Facts', 'pearl'),
  'parent'      => 'fields',
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'counter-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'counter-title',
      'type'  => 'text',
      'title' => esc_html__('Title', 'pearl'),
      'default' => 'Interesting Facts',
    ),


    array(
      'id'        => 'counter-group-options',
      'type'      => 'group',
      'title'     => esc_html__('Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'counter-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),

        array(
          'id'    => 'counter-number',
          'type'  => 'text',
          'title' => esc_html__('Number', 'pearl'),
        ),
     
      ),

      'default'   => array(

        array(
          'counter-title'     => 'Years Experience',
          'counter-number'     => '10',
        ),
        array(
          'counter-title'     => 'Projects Done',
          'counter-number'     => '198',
        ),
        array(
          'counter-title'     => 'Happy Customers',
          'counter-number'     => '2000',
        ),
       
      ),

    ),

  )
));

CSF::createSection( $prefix, array(
  'title'  => esc_html__('Home Page Sorter', 'pearl'),
  'priority' => 4,
  'parent'      => 'fields',
  'fields' => array(
    array(
      'id'         => 'home-sorter-setting1',
      'type'       => 'sorter',
      'title'      => esc_html__('Sorter', 'pearl'),
      'subtitle'       => esc_html__('change by dragging', 'pearl'),
      'default'    => array(
        'enabled'  => array(
          'about'      => 'About',
          'bio'     => 'Biography',
          'what-i-do'     => 'What i do',
          'testimonials'       => 'Testimonials',
          'price'     => 'Price',
          'hobbies-languages' => 'Hobbies and Languages ',
			    'client' => 'Client ',
          'interesting-facts'         => 'Interesting Facts',
       
        ),

      ),
    ),


  )
)
);


//
// Create footer
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Resume Page', 'pearl'),
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(
    array(
      'id'    => 'education-general-title',
      'type'  => 'text',
      'title' => esc_html__('Education Page Title', 'pearl'),
      'default' => 'Education',
    ),
    array(
      'id'    => 'experience-general-title',
      'type'  => 'text',
      'title' => esc_html__('Experience Page Title', 'pearl'),
      'default' => 'Experience',
    ),
    array(
      'id'        => 'education-group',
      'type'      => 'group',
      'title'     => esc_html__('Education Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'education-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),
        array(
          'id'    => 'education-icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'pearl'),
        ),
        array(
          'id'    => 'education-content',
          'type'  => 'textarea',
          'title' => esc_html__('Content', 'pearl'),
        ),
        array(
          'id'    => 'education-year',
          'type'  => 'text',
          'title' => esc_html__('Year', 'pearl'),
        ),
        array(
          'id'    => 'education-grade',
          'type'  => 'text',
          'title' => esc_html__('Grade', 'pearl'),
        ),
      ),
      'default'   => array(
        array(
          'education-title'     => 'Secondary School Certificate',
          'education-icon'    => 'fas fa-medal',
          'education-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'education-year' => 'PASSING YEAR: 2008',
          'education-grade' => 'GRADE: 3.92',
        ),
        array(
          'education-title'     => 'Higher Secondary School Certificate',
          'education-icon'    => 'fas fa-medal',
          'education-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'education-year' => 'PASSING YEAR: 2008',
          'education-grade' => 'GRADE: 3.92',
        ),
        array(
          'education-title'     => 'Computer Science & Engeneering',
          'education-icon'    => 'fas fa-medal',
          'education-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'education-year' => 'PASSING YEAR: 2008',
          'education-grade' => 'GRADE: 3.92',
        ),
        array(
          'education-title'     => 'Programming Course',
          'education-icon'    => 'fas fa-medal',
          'education-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'education-year' => 'PASSING YEAR: 2008',
          'education-grade' => 'GRADE: 3.92',
        ),
   
      ),
    ),


    array(
      'id'        => 'experience-group',
      'type'      => 'group',
      'title'     => esc_html__('Experience Add', 'pearl'),
      'fields'    => array(
        array(
          'id'    => 'experience-title',
          'type'  => 'text',
          'title' => esc_html__('Title', 'pearl'),
        ),
        array(
          'id'    => 'experience-icon',
          'type'  => 'icon',
          'title' => esc_html__('Icon', 'pearl'),
        ),
        array(
          'id'    => 'experience-content',
          'type'  => 'textarea',
          'title' => esc_html__('Content', 'pearl'),
        ),
        array(
          'id'    => 'experience-year',
          'type'  => 'text',
          'title' => esc_html__('Year', 'pearl'),
        ),
        array(
          'id'    => 'experience-grade',
          'type'  => 'text',
          'title' => esc_html__('Job', 'pearl'),
        ),
      ),
      'default'   => array(
        array(
          'experience-title'     => 'ABC Software Ltd.',
          'experience-icon'    => 'fas fa-trophy',
          'experience-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'experience-year' => 'PASSING YEAR: 2008',
          'experience-grade' => 'JR. DEVELOPER',
        ),
        array(
          'experience-title'     => 'XYZ Company Ltd.',
          'experience-icon'    => 'fas fa-trophy',
          'experience-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'experience-year' => 'PASSING YEAR: 2008',
          'experience-grade' => 'SR. DEVELOPER',
        ),
        array(
          'experience-title'     => 'LCC Softwar Ltd.',
          'experience-icon'    => 'fas fa-trophy',
          'experience-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'experience-year' => 'PASSING YEAR: 2008',
          'experience-grade' => 'LEAD DEVELOPER',
        ),
        array(
          'experience-title'     => 'Envato Ltd.',
          'experience-icon'    => 'fas fa-trophy',
          'experience-content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.',
          'experience-year' => 'PASSING YEAR: 2008',
          'experience-grade' => 'LEAD DEVELOPER',
        ),
   
      ),
    ),



  )
));

//
// Create Contact
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Contact Page', 'pearl'),
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(
    array(
      'id'    => 'contact-title',
      'type'  => 'text',
      'title' => esc_html__('Contact Title', 'pearl'),
      'default' => 'Contact Me',
    ),

    array(
      'id'    => 'contact-api',
      'type'  => 'switcher',
      'title' => esc_html__('Active/passive', 'pearl'),
      'desc'  => 'no google map api code'
    ),

    array(
      'id'    => 'contact-api-text',
      'type'  => 'text',
      'title' => esc_html__('Google Map Api', 'pearl'),
      'dependency' => array( 'contact-api', '==', 'false' ),
    ),

    array(
      'id'    => 'contact-map',
      'type'  => 'textarea',
      'title' => esc_html__('Map', 'pearl'),
      'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361414.2634!2d-113.75849480805297!3d36.24080384347217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sAmerika%20Birle%C5%9Fik%20Devletleri!5e0!3m2!1str!2str!4v1631658419536!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
      'dependency' => array( 'contact-api', '==', 'true' ),
    ),

    array(
      'id'    => 'contact-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/passive', 'pearl'),
      'desc'  => 'Are you going to use a plugin for the contact form?'
    ),

    array(
      'id'    => 'contact-form-shortcode',
      'type'  => 'text',
      'title' => esc_html__('Shortcode', 'pearl'),
      'dependency' => array( 'contact-switcher', '==', 'true' ),
    ),
    array(
      'id'    => 'contact-sendmail',
      'type'  => 'text',
      'title' => esc_html__('E-mail Address to be Sent', 'pearl'),
      'dependency' => array( 'contact-switcher', '==', 'false' ),
    ),

    array(
      'id'    => 'contact-email',
      'type'  => 'text',
      'title' => esc_html__('Email', 'pearl'),
      'default' => 'k.melissa@caroll.me',
    ),
    array(
      'id'    => 'contact-phone',
      'type'  => 'text',
      'title' => esc_html__('Phone', 'pearl'),
      'default' => '1.800.987.6987',
    ),
    array(
      'id'    => 'contact-address',
      'type'  => 'textarea',
      'title' => esc_html__('Address', 'pearl'),
      'default' => '189 Lodge Avenue, Dagenham, RM8 2HQ, United Kingdom',
    ),


  )
));

//
// Create footer
// 

CSF::createSection($prefix, array(
  'title'    => esc_html__('Footer', 'pearl'),
  'priority' => 2,
  //'description' => esc_html__('If you do not enter the text, it will not appear', 'pearl'),
  'fields'   => array(

    array(
      'id'    => 'footer-switcher',
      'type'  => 'switcher',
      'title' => esc_html__('Active/Passive', 'pearl'),
      'default' => true
    ),

    array(
      'id'    => 'footer-content',
      'type'  => 'textarea',
      'title' => esc_html__('Content', 'pearl'),
      'default' => '&copy; 2021 All Rights Reserved By <a href="http://themeforest.net" target="_blank">Themeforest</a>',
    ),


  )
));




//
// Create a Reset 
//
CSF::createSection($prefix, array(
  'title'    => 'Reset & Backup',
  'priority' => 3,
  'fields'   => array(

    array(
      'type'  => 'backup',
    ),

  ),
));
