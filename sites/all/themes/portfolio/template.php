<?php

/**
 * @file
 * template.php
 */
function test_preprocess_page(&$vars, $hook)
{
 	drupal_add_js(drupal_get_path('theme', 'test') . '/js/script.js');
}
