<?php

namespace Drupal\spiriit\Plugin\Layout\Teasers;

use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;

/**
 * new module intergration
 * @Layout(
 *  id = "spiriit_card_srvice_teaser",
 *  label = @Translation("spiriit Card Service Teaser"),
 *  category = @Translation("spiriit"),
 *  path = "layouts/teasers",
 *  template = "spiriit-card-service-teaser",
 *  library = "spiriit/spiriit-card-service-teaser",
 *  default_region = "Content",
 *  regions = {
 *      "card_title" = {
 *          "label" = @Translation("set the service name")
 *      },
 *      "card_desc" = {
 *          "label" = @Translation("set the service description")
 *      }
 *  }
 * )
 */

 class RodModSpiriitCardService extends FormatageModelsTeasers{
    /**
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */

    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $style_group_manager){
        parent::__construct($configuration, $plugin_id, $plugin_definition, $style_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'spiriit') . "/icons/teasers/card-teaser.jpeg");
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
                    'title' => 'card service teaser form editor',
                    'loader' => 'static'
                ],
                'fields' => [
                    'card_title' => [
                        'text_html' => [
                            'label' => 'definir le nom du service',
                            'value' => ''
                        ]
                    ],
                    'card_desc' => [
                        'text_html' => [
                            'label' => 'breve description du service',
                            'value' => ''
                        ]
                    ]
                ]
            ]
        ];
      }
 }