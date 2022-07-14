<?php

namespace Drupal\bca_test\Entity\EntityTest;

use Drupal\bca\Attribute\Bundle;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\entity_test\Entity\EntityTest;

#[Bundle(
  entityType: 'entity_test',
  bundle: 'bca_subdir_test_bundle',
  label: new TranslatableMarkup('BCA Subdirectory Test Bundle'),
)]
class BcaSubdirTestBundle extends EntityTest {}
