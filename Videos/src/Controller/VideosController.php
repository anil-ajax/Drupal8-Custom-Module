<?php
die('here');
/**
 * @file
 * @author Rakesh James
 * Contains \Drupal\example\Controller\ExampleController.
 * Please place this file under your example(module_root_folder)/src/Controller/
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