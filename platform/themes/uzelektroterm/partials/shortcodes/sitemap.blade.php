{!!
                     Menu::generateMenu([
                         'slug'    => $config['menu_id'],
                         'options' => ['class' => ($config['menu_id'] == 'social' ? 'social social--simple social--widget' : '') . ($sidebar == 'footer_sidebar_2' ? ' list' : '') ]
                     ])
                 !!}
