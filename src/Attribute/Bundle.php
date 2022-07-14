<?php

declare(strict_types=1);

namespace Drupal\bca\Attribute;

use Drupal\Component\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines bundle attribute object.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Bundle extends Plugin {

  public function __construct(
    public readonly string $entityType,
    public ?string $bundle = NULL,
    public ?TranslatableMarkup $label = NULL,
  ) {
    $this->bundle ??= $this->entityType;
    $this->label ??= new TranslatableMarkup($this->bundle);
    parent::__construct($this->entityType . ':' . $this->bundle);
  }

}
