<?php
$finder = (new PhpCsFixer\Finder())->in(__DIR__);

$config = [
    'array_syntax' => ['syntax' => 'short'],
    'echo_tag_syntax' => ['format' => 'short', 'shorten_simple_statements_only' => false],
    'php_unit_method_casing' => ['case' => 'camel_case'],
    'cast_spaces' => ['space' => 'single'],
    'explicit_string_variable' => true,
    'ternary_to_null_coalescing' => true,
    'ternary_operator_spaces' => true,
    'no_extra_blank_lines' => ['tokens' => [
        'attribute',
        'break',
        'case',
        'continue',
        'curly_brace_block',
        'default',
        'extra',
        'parenthesis_brace_block',
        'return',
        'square_brace_block',
        'switch',
        'throw',
        'use',
        'use_trait',
    ]],
];

return (new PhpCsFixer\Config())
    ->setRules($config)
    ->setFinder($finder);