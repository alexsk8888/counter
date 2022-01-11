<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', __( 'Таймер скидки' ) )
        ->set_icon('dashicons-backup')
        ->add_fields( array(
            Field::make('date_time', 'date_and_time', 'Дата и время')
        ) );
