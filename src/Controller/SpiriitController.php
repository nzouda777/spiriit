<?php

namespace Drupal\spiriit\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for spiriit routes.
 */
class SpiriitController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
