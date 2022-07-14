<?php

namespace Drupal\bca_test\Entity;

use Drupal\user\Entity\User;

/**
 * Defines a custom class to use for EntityTest.
 *
 * @Bundle(
 *   entity_type = "user",
 * )
 */
class BcaUser extends User {}
