<?php
declare(strict_types=1);
use fhnw\gii\generators\game\GameModuleGenerator;
use fhnw\gii\helpers\PhpPreset;

/** @var GameModuleGenerator $generator  */

?>
<?= PhpPreset::startTag() ?>
/**
 * Configuration file for `yii message/extract` command.
 * This file is automatically generated by 'yii message/config' command.
 * It contains parameters for source code messages extraction.
 * You may modify this file to suit your needs.
 * You can use 'yii message/config-template' command to create template configuration file with detailed description for each parameter.
 * ```sh
 * yii message/extract translate.php
 * ```
 */
return [
  'color'            => true,
  'languages'        => ['de', 'en-UK',],
  'messagePath'      => '<?= $generator->getAlias('messages') ?>',
  'sourceLanguage'   => 'en-UK',
  'sourcePath'       => '<?= $generator->getAlias() ?>',
  'translator'       => ['<?= $generator->getModuleName() ?>::t'],
  'overwrite'        => true,
  'removeUnused'     => false,
  'markUnused'       => true,
  'format'           => 'php',
  'catalog'          => 'messages',
  'ignoreCategories' => [],
  'fileMap'          => []
];
