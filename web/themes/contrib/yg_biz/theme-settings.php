<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function yg_biz_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['yg_biz_settings']= array(
    '#type' => 'details',
    '#title' => t('YG Biz Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'bootstrap',
    '#weight' => 10,
  );

#social links    
  $form['yg_biz_settings']['social_links'] = array(
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_biz_settings']['social_links']['facebook_url'] = array(
    '#type' => 'url',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
  );
   $form['yg_biz_settings']['social_links']['twitter_url'] = array(
    '#type' => 'url',
    '#title' => t('Twitter'),
    '#description' => t('Please enter your twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
  );
  $form['yg_biz_settings']['social_links']['google_plus'] = array(
    '#type' => 'url',
    '#title' => t('Google Plus'),
    '#description' => t('Please enter your google-plus url'),
    '#default_value' => theme_get_setting('google_plus'),
  );
  $form['yg_biz_settings']['social_links']['instagram_url'] = array(
    '#type' => 'url',
    '#title' => t('Instagram'),
    '#description' => t('Please enter your Instagram url'),
    '#default_value' => theme_get_setting('instagram_url'),
  ); 
  $form['yg_biz_settings']['social_links']['pinterest_url'] = array(
    '#type' => 'url',
    '#title' => t('Pinterest'),
    '#description' => t('Please enter your Pinterest url'),
    '#default_value' => theme_get_setting('pinterest_url'),
  );

#contact details
  $form['yg_biz_settings']['contact_info'] = array(
    '#type' => 'details',
    '#title' => t('Contact Info'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $address = theme_get_setting('address');
    $form['yg_biz_settings']['contact_info']['address'] = array(
    '#type' => 'text_format',
    '#title' => t('Left-Footer Description'),
    '#description' => t('Please enter left side footer description...'),
    '#default_value' => $address['value'],
    '#foramt'        => $address['format'],
  );
  $form['yg_biz_settings']['contact_info']['phone_no'] = array(
    '#type' => 'textfield',
    '#title' => t('Phone Number'),
    '#description' => t('Please enter your phone number'),
    '#default_value' => theme_get_setting('phone_no'),
    );
  $form['yg_biz_settings']['contact_info']['email'] = array(
    '#type' => 'email',
    '#title' => t('Email Id'),
    '#description' => t('Please enter your email-id'),
    '#default_value' => theme_get_setting('email'),
    );
  $form['yg_biz_settings']['contact_info']['time'] = array(
    '#type' => 'textfield',
    '#title' => t('Office Time'),
    '#description' => t('Please enter your office-time'),
    '#default_value' => theme_get_setting('time'),
    );

// call-to-action
 $form['yg_biz_settings']['call_to_action'] = array(
    '#type' => 'details',
    '#title' => t('Call-to-action'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['yg_biz_settings']['call_to_action']['cta_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Call-to-action Url'),
    '#description' => t('Please enter call-to-action url'),
    '#default_value' => theme_get_setting('cta_link'),
    );  
    $cta_desc = theme_get_setting('cta_desc');
    $form['yg_biz_settings']['call_to_action']['cta_desc'] = array(
    '#type' => 'text_format',
    '#title' => t('Call-to-action Description'),
    '#description' => t('Please enter the footer description...'),
    '#default_value' => $cta_desc['value'],
    '#foramt'        => $cta_desc['format'],
    );

//footer custom text
$form['yg_biz_settings']['footer'] = array(
    '#type' => 'details',
    '#title' => t('Footer Section'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $sub_footer = theme_get_setting('sub_footer');
    $form['yg_biz_settings']['footer']['sub_footer'] = array(
    '#type' => 'text_format',
    '#title' => t('Footer Description'),
    '#description' => t('Please enter left side footer description...'),
    '#default_value' => $sub_footer['value'],
    '#foramt'        => $sub_footer['format'],
    );
    
}
 
