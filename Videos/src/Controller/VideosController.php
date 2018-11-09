<?php

/**
 * @file
 * @author Anil Kumar https://github.com/anil-ajax
 * Contains \Drupal\videos\Controller\VideosController
 */

namespace Drupal\videos\Controller;

class VideosController 
{
  public function videos() {
    $element = array(
      '#markup' => 'Hello world!',
    );
    return $element;
  }
}
?>
