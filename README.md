# Bundle Class Attributes

Allows bundle classes to be configured using attributes. This removes the need
to implement `hook_entity_bundle_info_alter()`.

## Example

```php
<?php

declare(strict_types=1);

namespace Drupal\my_module\Entity\Node;

use Drupal\bca\Attribute\Bundle;
use Drupal\Core\StringTranslation\TranslatableMarkup;

#[Bundle(
  entityType: 'node',
  bundle: 'article',
  label: new TranslatableMarkup('Article'),
)]
class Article extends Node { }
```

## Requirements

* PHP 8.1
* Drupal 10 patched with
  [Use PHP attributes instead of doctrine annotations](https://www.drupal.org/project/drupal/issues/3252386)
