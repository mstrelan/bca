<?php

namespace Drupal\bca_test\Entity;

use Drupal\bca\Attribute\Bundle;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\entity_test\Entity\EntityTest;

#[Bundle(
  entityType: 'entity_test',
  bundle: 'bca_test_bundle',
  label: new TranslatableMarkup('BCA Test Bundle'),
)]
class BcaTestBundle extends EntityTest {}
