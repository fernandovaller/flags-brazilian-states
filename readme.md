[![Latest Stable Version](http://poser.pugx.org/fernandovaller/flags-brasil-states/v)](https://packagist.org/packages/fernandovaller/flags-brasil-states) [![Total Downloads](http://poser.pugx.org/fernandovaller/flags-brasil-states/downloads)](https://packagist.org/packages/fernandovaller/flags-brasil-states)  [![License](http://poser.pugx.org/fernandovaller/flags-brasil-states/license)](https://packagist.org/packages/fernandovaller/flags-brasil-states)

# Bandeiras dos estados brasileiros

Bandeiras dos estados brasileiros em formato `base64` e tamanho `21x14`

## Instalação
Faça a instalação no seu projeto via `require`

```sh
$ composer require fernandovaller/flags-brasil-states
```

## Obter a bandeira do estado
```php
<?php

use FVCode\FlagsBrasilStates\Flags;

require __DIR__ . '/vendor/autoload.php';

echo Flags::uf('AC');

/**
 * Out (string):
 * data:image/webp;base64,UklGRrYAAABXRUJQVlA4TKoAAAAvE0ADANegJgAIhs8pgnaii7BHDbYBAJYJt/x/oW2ViiFJkvqcUVh/l/VZgH3Mf1g74YeH8If2yLHv5Jpmaaui3SPlI1WFKeejcnS0GfYf3Ja/4T8ifQk1BKDyYSxgGElSosPh3eYt/1CxECL6PwHS0c4iz9sQN+T+/7vGTBeI/j5dEVYAcc/jCmo8ydT6hXxN2mmyM5WFuNFkpoumsNIoosaTJr/QPhx0BA==
 */
```

## Obter informações sobre o estado
```php
<?php

use FVCode\FlagsBrasilStates\Flags;

require __DIR__ . '/vendor/autoload.php';

echo Flags::info('AC');

/**
 * Out (array):
 * [
 *   [id] => AC,
 *   [stage] => Acre,
 *   [capital] => Rio Branco,
 *   [flag] => data:image/webp;base64,UklGRrYAAABXRUJQVlA4TKoAAAAvE0ADANegJgAIhs8pgnaii7BHDbYBAJYJt/x/oW2ViiFJkvqcUVh/l/VZgH3Mf1g74YeH8If2yLHv5Jpmaaui3SPlI1WFKeejcnS0GfYf3Ja/4T8ifQk1BKDyYSxgGElSosPh3eYt/1CxECL6PwHS0c4iz9sQN+T+/7vGTBeI/j5dEVYAcc/jCmo8ydT6hXxN2mmyM5WFuNFkpoumsNIoosaTJr/QPhx0BA==
 * ]
 */
```

Licença
-
[![License](https://poser.pugx.org/germanoricardi/brazilian-helper/license)](https://packagist.org/packages/germanoricardi/brazilian-helper)
