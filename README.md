# Kirby Mailchimp

This plugin uses the cleanest Mailchimp embed code (as of Oct 2019) to build a clean signup field.

### Composer

```
composer require visualdialogue/kirby-mailchimp
```
<!-- 
****

## Commerical Usage

This plugin is free but if you use it in a commercial project please consider to
- [make a donation 🍻](https://paypal.me/hashandsalt?locale.x=en_GB) or
- [buy a Kirby license using this affiliate link](https://a.paddle.com/v2/click/1129/36141?link=1170)

****
 -->

## Usage

1. Set the two requried plugin options in your `site/config/config.php`, based on your embed form in your Mailchimp account.

```
'visualdialogue.mailchimp.formaction' => 'xxxxxxx',
'visualdialogue.mailchimp.botinputname' => 'xxxxxxx',
```

2. Add the snippet to your site.

```
<?php snippet('mailchimp-form') ?>
```