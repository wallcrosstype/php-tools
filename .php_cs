<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        'concat_space' => ['spacing' => 'one'],
        'no_unused_imports' => true,
        'method_argument_space' => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()->in(__DIR__)
    )
;

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__)
;
