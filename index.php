<?php

use FVCode\FlagsBrasilStates\Flags;

require __DIR__ . '/vendor/autoload.php';

print(Flags::uf('AC'));

print_r(Flags::ufInfo('AC'));
