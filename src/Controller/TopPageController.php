<?php

namespace Drupal\devel_explorer\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\views\Analyzer;

/**
 * Class DefaultController.
 */
class TopPageController extends ControllerBase {

  /**
   * Drupal\views\Analyzer definition.
   *
   * @var \Drupal\views\Analyzer
   */
  protected $viewsAnalyzer;

  /**
   * Constructs a new DefaultController object.
   */
  public function __construct(Analyzer $views_analyzer) {
    $this->viewsAnalyzer = $views_analyzer;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.analyzer')
    );
  }

  /**
   * Page.
   *
   * @return string
   *   Return Hello string.
   */
  public function page() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: page')
    ];
  }

}
