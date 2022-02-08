<?php declare(strict_types=1);

require_once __DIR__.'/vendor/autoload.php';

use PhpCsFixer\Config;

$config = new Config();

return $config
    ->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,
        'date_time_immutable' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
        'list_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => false,
        'native_function_invocation' => false,
        'non_printable_character' => false,
        'mb_str_functions' => true,
        'declare_strict_types' => true,
        'heredoc_indentation' => true,
        'self_static_accessor' => true,
        'linebreak_after_opening_tag' => false,
        'no_extra_blank_lines' => true,
        'phpdoc_to_comment' => false,
        'global_namespace_import' => ['import_classes' => true],
        'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],
        'trailing_comma_in_multiline' => ['after_heredoc' => true, 'elements' => ['arrays', 'arguments', 'parameters']],
        'PedroTroller/order_behat_steps' => true,
        'PedroTroller/ordered_with_getter_and_setter_first' => true,
        'PedroTroller/line_break_between_method_arguments' => ['max-args' => false, 'max-length' => 120, 'automatic-argument-merge' => false],
        'PedroTroller/line_break_between_statements' => true,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__.'/src')
    )
    ->registerCustomFixers(new PedroTroller\CS\Fixer\Fixers())
    ;
