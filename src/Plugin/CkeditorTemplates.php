<?php

/**
 * @file
 * Definition of \Drupal\ckeditor_templates\Plugin\CKEditorPlugin\CkeditorTemplates.
 */

namespace Drupal\ckeditor_templates\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CkeditorTemplates" plugin.
 *
 * @CKEditorPlugin(
 *   id = "ckeditor_templates",
 *   label = @Translation("CkeditorTemplates")
 * )
 */
class CkeditorTemplates extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return ['dialog'];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'ckeditor_templates') . '/js/plugins/templates/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  function getButtons() {
    return [
      'TextColor' => [
        'label' => t('Text Color'),
        'image' => drupal_get_path('module', 'ckeditor_templates') . '/js/plugins/templates/icons/templates.png',
      ],
    ];
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}
