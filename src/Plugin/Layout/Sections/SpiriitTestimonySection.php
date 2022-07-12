<?php

namespace Drupal\spiriit\Plugin\Layout\Sections;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * this section comes from spiriit.com . it's its testimony section
 * 
 * @Layout(
 *  id = "spiriit_testimony_section_layout",
 *  label = @Translation(" spiriit Spiriit testimony section"),
 *  category = @Translation("spiriit"),
 *  path = "layouts/sections",
 *  template = "spiriit-testimony-section",
 *  library = "spiriit/spiriit-testimony-section",
 *  default_region = "Content",
 *  regions = {
 *      "section_title" = {
 *          "label" = @Translation("set the section title")
 *      },
 *      "testimony_intro" = {
 *          "label" = @Translation("set the testimony question")
 *      },
 *      "testimony" = {
 *          "label" = @Translation("set the testimony content")
 *      },
 *      "lutin_name" = {
 *          "label" = @Translation("set lutin name")
 *      },
 *      "lutin_role" = {
 *          "label" = @Translation("set lutin role")
 *      }
 *  }
 * )
 */

 class SpiriitTestimonySection extends FormatageModelsSection
 {
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

     public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent:: __construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'rod_mod') . "/icones/sections/spiriittestimony.jpeg");
     }
     /**
      * {@inheritdoc}
      * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
      */

      public function build(array $regions){
         //to make auto-generated mehod stub
          $build = parent::build($regions);
          FormatageModelsThemes::formatSettingValues($build);

          return $build;
      }
     /**
      * {@inheritdoc}
      */
      public function defaultConfiguration(){
         return parent::defaultConfiguration() + [
            'css' => '',
            'Content' => [
               'builder-form' => true,
               'info' => [
                  'title' => 'testimony slider section form edditor',
                  'loader' => 'static'
               ],
               'fields' => [
                  'section_title' => [
                     'text_html' => [
                        'label' => 'nom de la section',
                        'value' =>''
                     ]
                  ],
                  'testimony_intro' => [
                     'text_html' => [
                        'label' => 'configuer la question du temoignage',
                        'value' => ''
                     ]
                  ],
                  'testimony' => [
                     'text_html' => [
                        'label' => 'ecrire un temoignage',
                        'value' => ''
                     ]
                  ],
                  'lutin_nale' => [
                     'text_html' => [
                        'label' => 'configurer le nom du temoin',
                        'value' => ''
                     ]
                  ],
                  'lutin_role' => [
                     'text_html' => [
                        'label' => 'configurer le role du temoin',
                        'value' => ''
                     ]
                  ]
                  
               ]
            ]
         ];
      }
 }