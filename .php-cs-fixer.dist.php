<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src') // Répertoire source du projet
    ->name('*.php')
    ->exclude('vendor') // Exclusion du répertoire vendor
;

$config = new Config();

return $config->setRules([
        '@PSR12' => true, // Utilisation de la norme de codage PSR-12
        'array_syntax' => ['syntax' => 'short'], // Utilisation de la syntaxe courte pour les tableaux
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal'
        ],
        'blank_line_after_namespace' => true, // S'assurer qu'il y a une ligne vide après la déclaration du namespace
        'blank_line_after_opening_tag' => true, // S'assurer qu'il y a une ligne vide après la balise d'ouverture PHP
        'blank_line_before_statement' => [
            'statements' => ['return']
        ],
        'braces' => [
            'allow_single_line_closure' => true,
        ],
        'cast_spaces' => ['space' => 'single'], // S'assurer qu'il y a un espace unique entre le cast et la variable
        'class_attributes_separation' => [
            'elements' => ['method' => 'one']
        ],
        'concat_space' => ['spacing' => 'one'], // S'assurer qu'il y a un espace autour de l'opérateur de concaténation
        'declare_equal_normalize' => ['space' => 'single'], // Normaliser les espaces autour du signe égal dans les déclarations
        'function_declaration' => ['closure_function_spacing' => 'one'], // S'assurer qu'il y a un espace après le mot-clé function dans les closures
        'include' => true, // S'assurer que les instructions include/require sont correctes
        'lowercase_cast' => true, // S'assurer que les mots-clés de cast sont en minuscules
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'], // S'assurer que les arguments sur plusieurs lignes sont correctement alignés
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'throw',
                'use'
            ]
        ],
        'no_trailing_whitespace' => true, // Supprimer les espaces blancs en fin de ligne
        'no_trailing_whitespace_in_comment' => true, // Supprimer les espaces blancs en fin de ligne dans les commentaires
        'no_whitespace_in_blank_line' => true, // Supprimer les espaces blancs dans les lignes vides
        'ordered_imports' => ['sort_algorithm' => 'alpha'], // Trier les imports par ordre alphabétique
        'single_blank_line_at_eof' => true, // S'assurer qu'il y a une seule ligne vide à la fin du fichier
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(false) // Autoriser les règles risquées si nécessaire
    ->setUsingCache(true); // Activer la mise en cache pour de meilleures performances
