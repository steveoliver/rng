<?php

/**
 * @file
 * Definition of Drupal\rng\Tests\RNGTestBase.
 */

namespace Drupal\rng\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Sets up page and article content types.
 */
abstract class RNGSitePreConfigured extends RNGTestBase {

  public static $modules = array('rng', 'node');

  /**
   * @var \Drupal\rng\RegistrationTypeInterface
   */
  var $registration_type;

  /**
   * @var \Drupal\rng\Entity\EventTypeConfig
   */
  var $event_bundle;

  /**
   * @var \Drupal\rng\Entity\EventTypeConfig
   */
  var $event_type;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    $this->event_bundle = $this->drupalCreateContentType();
    $this->event_type = $this->createEventType($this->event_bundle);
    $this->registration_type = $this->createRegistrationType();
  }

}