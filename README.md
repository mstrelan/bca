# Bundle Class Annotations

Allows bundle classes to be configured using annotations. This removes the need
to implement `hook_entity_bundle_info_alter()`.

## Example

```php
<?php

declare(strict_types=1);

namespace Drupal\my_module\Entity\Node;

use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\node\Entity\Node;

/**
 * @Bundle(
 *   entity_type = "node",
 *   bundle = "article",
 *   label = @Translation("Article"),
 * )
 */
class Article extends Node { }
```
