<?php

/**
 * @file
 * Provides an additional config form for theme settings.
 */

use Drupal\Core\Form\FormStateInterface;

function yg_business_form_system_theme_settings_alter(array &$form, FormStateInterface $form_state) {
  $form['visibility'] = [
    '#type' => 'vertical_tabs',
    '#title' => t('YG Business Settings'),
    '#weight' => -999,
  ];

  $form['social']= [
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#weight' => -999,
    '#group' => 'visibility',
    '#open' => FALSE,
  ];
#social links    
  $form['social']['social_links'] = [
    '#type' => 'details',
    '#title' => t('Social Links'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['social']['social_links']['facebook_url'] = [
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Please enter your facebook url'),
    '#default_value' => theme_get_setting('facebook_url'),
  ];
  $form['social']['social_links']['twitter_url'] = [
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#description' => t('Please enter your twitter url'),
    '#default_value' => theme_get_setting('twitter_url'),
  ]; 
  $form['social']['social_links']['pinterest_url'] = [
    '#type' => 'textfield',
    '#title' => t('Pinterest'),
    '#description' => t('Please enter your pinterest url'),
    '#default_value' => theme_get_setting('pinterest_url'),
  ]; 
  $form['social']['social_links']['linkedin_url'] = [
    '#type' => 'textfield',
    '#title' => t('Linkedin url'),
    '#description' => t('Please enter your linkedin url'),
    '#default_value' => theme_get_setting('linkedin_url'),
  ];
  $form['social']['social_links']['instagram_url'] = [
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#description' => t('Please enter your instagram url'),
    '#default_value' => theme_get_setting('instagram_url'),
  ];
  $form['social']['social_links']['youtube_url'] = [
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#description' => t('Please enter your youtube url'),
    '#default_value' => theme_get_setting('youtube_url'),
  ];

// About-us
  $form['footer']= [
    '#type' => 'details',
    '#title' => t('Footer'),
    '#weight' => -999,
    '#group' => 'visibility',
    '#open' => FALSE,
  ];
  $form['footer']['about_us'] = [
    '#type' => 'details',
    '#title' => t('About Us'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['footer']['about_us']['about_us_title'] = [
    '#type' => 'textfield',
    '#title' => t('About Us Title'),
    '#description' => t('Please enter about-us title'),
    '#default_value' => theme_get_setting('about_us_title'),
  ];
  $form['footer']['about_us']['about_desc'] = [
    '#type' => 'textarea',
    '#title' => t('About Description'),
    '#description' => t('Please enter footer about-description'),
    '#default_value' => theme_get_setting('about_desc'),
  ];

  // Contact-us
  $form['footer']['contact_us'] = [
    '#type' => 'details',
    '#title' => t('Contact Us'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  ];
  $form['footer']['contact_us']['title'] = [
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#description' => t('Please enter contact-us title'),
    '#default_value' => theme_get_setting('title'),
  ];
  $form['footer']['contact_us']['address'] = [
    '#type' => 'textarea',
    '#title' => t('Address'),
    '#description' => t('Please enter footer address'),
    '#default_value' => theme_get_setting('address'),
  ];
  $form['footer']['contact_us']['contact_number'] = [
    '#type' => 'textfield',
    '#title' => t('Contact Number'),
    '#description' => t('Please enter contact-number'),
    '#default_value' => theme_get_setting('contact_number'),
  ];
  $form['footer']['contact_us']['mail'] = [
    '#type' => 'textfield',
    '#title' => t('Email Id'),
    '#description' => t('Please enter contact mail-id'),
    '#default_value' => theme_get_setting('mail'),
  ];
}
 
