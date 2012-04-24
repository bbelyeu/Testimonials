<?php

Router::connect('/admin/testimonials', array(
    'plugin' => 'Testimonials',
    'controller' => 'Testimonials',
    'action' => 'index',
    'prefix' => 'admin'
));

Router::connect('/admin/testimonials/:action', array(
    'plugin' => 'Testimonials',
    'controller' => 'Testimonials',
    'prefix' => 'admin'
));

Router::connect('/admin/testimonials/:action/:id', array(
    'plugin' => 'Testimonials',
    'controller' => 'Testimonials',
    'prefix' => 'admin'
), array(
    'pass' => array('id'),
    'id' => '[0-9]+'
));
