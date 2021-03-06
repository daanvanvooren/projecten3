<?php

namespace Drupal\odata_client\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines a Odata auth plugin item annotation object.
 *
 * @see \Drupal\odata_client\Plugin\OdataAuthPluginManager
 * @see plugin_api
 *
 * @Annotation
 */
class OdataAuthPlugin extends Plugin {


  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The label of the plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public $label;

}
