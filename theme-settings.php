<?php 

function inigui_form_system_theme_settings_alter(&$form, $form_state) {

  if (theme_get_setting('layout_enable_settings') == 'on') {
    $form['inigui']['page_layout'] = array(
      '#type' => 'fieldset',
      '#title' => t('Page Layout'),
      '#description' => t('Use these settings to set the width of the page, each sidebar, and to set the position of sidebars.'),
    );

    if (theme_get_setting('layout_enable_method') == 'on') {
      $form['at']['page_layout']['select_method'] = array(
        '#type' => 'fieldset',
        '#title' => t('Sidebar Position'),
        '#collapsible' => FALSE,
        '#collapsed' => FALSE,
      );
      $form['at']['page_layout']['select_method']['layout_method'] = array(
        '#type' => 'radios',
        '#description' => t('The sidebar layout descriptions are for LTR (left to right languages), these will flip in RTL mode.'),
        '#default_value' => theme_get_setting('layout_method'),
        '#options' => array(
          0 => t('<strong>Layout #1</strong> <span class="layout-type-0">Standard three column layout — Sidebar first | Content | Sidebar last</span>'),
          1 => t('<strong>Layout #2</strong> <span class="layout-type-1">Two columns on the right — Content | Sidebar first | Sidebar last</span>'),
          2 => t('<strong>Layout #3</strong> <span class="layout-type-2">Two columns on the left — Sidebar first | Sidebar last | Content</span>'),
        ),
      );
      $form['at']['page_layout']['layout_enable_settings'] = array(
        '#type' => 'hidden',
        '#value' => theme_get_setting('layout_enable_settings'),
      );
    } // endif layout method
  } // endif layout settings
}