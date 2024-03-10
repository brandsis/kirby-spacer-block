<?php

Kirby::plugin('brandsistency/spacer-block', [
  'blueprints' => [
    'blocks/spacer' => __DIR__ . '/blueprints/blocks/spacer.yml'
  ],
  'snippets' => [
    'blocks/spacer' => __DIR__ . '/snippets/blocks/spacer.php'
  ]
]);