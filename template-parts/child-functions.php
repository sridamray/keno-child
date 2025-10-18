<?php
// Header Action Function
function keno_child_check_header()
{

    get_template_part('template-parts/header/header');
}
add_action('keno_child_header_style', 'keno_child_check_header', 10);
