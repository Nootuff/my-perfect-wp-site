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
        'panel' => 'b2w_theme_option_panel',
        //The panel to which it belongs, you can see this in the panel ID up above.
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

new \Kirki\Field\Code(
    [
        'settings' => 'subscribe_form',
        'label' => esc_html__('Subscribe form html', 'bootstrap2wordpress'),
        'description' => esc_html__('Please enter some html code here for you opt-in form plz', 'bootstrap2wordpress'),
        'section' => 'b2w_subscribe_bar',
        'default' => '',
        'choices' => [
            'language' => 'html',  //controls the language the user can input
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
        'settings' => 'footer_copyright', //This is the "theme mod" of this section in it's html
        'label' => esc_html__('SFooter copyright text', 'bootstrap2wordpress'),
        'section' => 'b2w_footer_section', //The id of the section this control is in
        'default' => 'Enter ur footer text here!',
        'partial_refresh' => array(  //Partial refresh is what allows you to place a small blue pencil icon next to the element you want to edit in the theme customer interface. 
            'footer_copyright' => array(
                'selector' => 'footer .copyright p', //This is the element this customizer code is targetting
                'render_callback' => function () {
                    return get_theme_mode('footer_copyright');
                }
            ),
        ),
    ]
);