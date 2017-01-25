<?php

if(is_404()): header('Location: http://radius.ee'); endif;
if(is_front_page()): get_template_part('content-home'); endif;
if(!is_home() && !is_front_page()): get_template_part('content-page'); endif;
if(is_home()): get_template_part('content-news'); endif;