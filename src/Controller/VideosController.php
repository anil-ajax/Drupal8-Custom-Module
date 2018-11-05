<?php
/**
 * @file
 * @author Anil Kumar
 * Contains \Drupal\example\Controller\ExampleController.
 */
namespace Drupal\videos\Controller;
/**
 * Provides route responses for the Example module.
 */
class VideosController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function videos() {
    $element = array(
      '#markup' => 'Hello world!',
    );
    return $element;
  }
}
?>