<?php

if (!class_exists('Kirki')) {
    return;
}

/* These are panels, you can look up Panels & Sections  on kirki.org. Panels group sections and sections group controls which are different types of fields like inputs, text inputs toggles and checkboxes and things */
/*To get this working, a user using this theme must install the Kirki plugin then activate it in the plugins list. To access your inputs, go to themes > customize your theme, you should see in the sidebar whatever tital you gave to your Panel. */
new \Kirki\Panel(
    'b2w_theme_option_panel',
    //This string is called the "ID"
    [
        'priority' => 10,
        //All 3 of these are required
        'title' => esc_html__('B2W Theme Options', 'bootstrap2wordpress'),
        'description' => esc_html__('Use this to customize ur theme.', 'bootstrap2wordpress'),
    ]
);

/*Sections*/

new \Kirki\Section(
    'b2w_subscribe_bar',
    [
        'title' => esc_html__('Subscribe', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the subscribe bar.', 'bootstrap2wordpress'),
        'panel' => 'b2w_theme_option_panel', //The panel to which it belongs, you can see this in the panel ID up above.
        'priority' => 160,
    ]
);

//Section Subscribe bar fields

new \Kirki\Field\Textarea(
    [
        'settings' => 'subscribe_text', //This is the "theme mod" of this section in banner-title.php
        'label' => esc_html__('Subscribe Bar Text', 'bootstrap2wordpress'),
        'section' => 'b2w_subscribe_bar', //The id of the section this control is in
        'default' => esc_html__('Enter ur text here!', 'bootstrap2wordpress'),
    ]
);

new \Kirki\Field\Code( //Its code so the user can insert their own html or php form here from an email service provivider
    [
        'settings' => 'subscribe_form',
        'label' => esc_html__('Subscribe form html', 'bootstrap2wordpress'),
        'description' => esc_html__('Please enter some html code here for you opt-in form plz', 'bootstrap2wordpress'),
        'section' => 'b2w_subscribe_bar',
        'default' => '',
        'choices' => [
            'language' => 'html',
            //controls the language the user can input
        ],
    ]
);

//The footer section

new \Kirki\Section(
    'b2w_footer_section',
    [
        'title' => esc_html__('Footer', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the footer section.', 'bootstrap2wordpress'),
        'panel' => 'b2w_theme_option_panel',
        'priority' => 160,
    ]
);

//footer section fields

new \Kirki\Field\Textarea(
    [
        'settings' => 'footer_copyright',
        //This is the "theme mod" of this section in it's html
        'label' => esc_html__('SFooter copyright text', 'bootstrap2wordpress'),
        'section' => 'b2w_footer_section',
        //The id of the section this control is in
        'default' => 'Enter ur footer text here!',
        'partial_refresh' => array(
            //Partial refresh is what allows you to place a small blue pencil icon next to the element you want to edit in the theme customer interface. 
            'footer_copyright' => array(
                'selector' => 'footer .copyright p',
                //This is the element this customizer code is targetting
                'render_callback' => function () {
                    return get_theme_mode('footer_copyright');
                }
            ),
        ),
    ]
);

//footer call to action section

new \Kirki\Section(
    'footer_call_to_action',
    [
        'title' => esc_html__('Call to Action', 'bootstrap2wordpress'),
        'description' => esc_html__('This is the Call to Action Section.', 'bootstrap2wordpress'),
        'panel' => 'b2w_theme_option_panel',
        'priority' => 160,
    ]
);

//Section - call to action fields

new \Kirki\Field\Checkbox_Switch(
    [
        'settings' => 'footer_calltoaction_visibility',
        'label' => esc_html__('Call to action section', 'bootstrap2wordpress'),
		'description' => esc_html__('Toggle this section on or off', 'bootstrap2wordpress'),
        'section' => 'footer_call_to_action',
        'default' => 'on', //Set to on by default, it will display by default.
        'choices' => [
          'on' => esc_html__('Enable', 'bootstrap2wordpress'),
           'on' => esc_html__('Disable', 'bootstrap2wordpress'),
        ],
    ]
);

new \Kirki\Field\Text(
    [
      'settings'        => 'footer_sub_heading',
      'label'           => esc_html__('Sub Heading', 'bootstrap2wordpress'),
      'tooltip'         => esc_html__('Call to Action Section Sub Heading Text', 'bootstrap2wordpress'), //Gives you some kind of hint on what this does?
      'section'         => 'footer_call_to_action',
      'default'         => esc_html__('Placeholder text here', 'bootstrap2wordpress'),
      'partial_refresh' => array(
        'footer_sub_heading' => array(
          'selector'          => '.footer-calltoaction p.sub-title', //This is the exact element this is influencing.
          'render_callback'   => function() {
            return get_theme_mod( 'footer_sub_heading' );
          }
        ),
      ),
    ]
  );
  
  new \Kirki\Field\Text(
    [
      'settings'        => 'footer_calltoaction_heading',
      'label'           => esc_html__('Heading', 'bootstrap2wordpress'),
      'tooltip'         => esc_html__('Call to Action Section Heading Text', 'bootstrap2wordpress'),
      'section'         => 'footer_call_to_action',
      'default'         => esc_html__('Bootstrap to WordPress', 'bootstrap2wordpress'),
      'partial_refresh' => array(
        'footer_calltoaction_heading' => array(
          'selector'          => '.footer-calltoaction h2',
          'render_callback'   => function() {
            return get_theme_mod( 'footer_calltoaction_heading' );
          }
        ),
      ),
    ]
  );
  
new \Kirki\Field\Textarea(
	[
		'settings'    => 'footer_calltoaction_desc',
		'label'       => esc_html__( 'Description', 'bootstrap2wordpress' ),
		'section'     => 'footer_call_to_action',
		'default'     => esc_html__('Learn how to design and build custom, beautiful & responsive WordPress websites and themes for beginners in 2022', 'bootstrap2wordpress'),
		'partial_refresh' => array(
			'footer_calltoaction_desc' => array(
				'selector'        => '.footer-calltoaction p.fcta-desc',
				'render_callback' => function() {
					return get_theme_mod( 'footer_calltoaction_desc' );
				},
			),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'footer_calltoaction_button', //Controls the text on the button
		'label'       => esc_html__( 'Button text', 'bootstrap2wordpress' ),
		'section'     => 'footer_call_to_action',
		'default'     => 'Join =>',
		'priority' => 10,
        'partial_refresh' => array(
			'footer_calltoaction_button' => array(
				'selector'        => '.footer-calltoaction .btn',
				'render_callback' => function() {
					return get_theme_mod( 'footer_calltoaction_button' );
				},
			),
		),
	]
);

new \Kirki\Field\URL( //Url 
	[
		'settings' => 'footer_calltoaction_link',
		'label'    => esc_html__( 'Button Link', 'bootstrap2wordpress' ),
		'tooltip'  => esc_html__( 'Button URL Goes Here', 'bootstrap2wordpress' ),
		'section'  => 'footer_call_to_action',
		'default'  => '#',
		'priority' => 10,
	]
);
