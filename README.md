# wordpress-nonce
This class is created to using wordpress nonce functions as an object

Installation
------------
#### With composer

1. Add to your `composer.json`:

    ```json
    "require": {
        "Omoh128/wordpress-nonce": "dev"
    }
    ```

2. Now tell composer to download wordpress-nonce by running the command:

    ```bash
    $ php composer.phar update
    ```


#### Utilisation

    # WordpressNonce::wp_create_nonce() like wp_create_nonce()
    # WordpressNonce::wp_nonce_field() like wp_nonce_field()
    # WordpressNonce::wp_nonce_url() like wp_nonce_url()
    # WordpressNonce::wp_create_nonce() like wp_verify_nonce()
    # WordpressNonce::check_admin_referer() like check_admin_referer()
    # WordpressNonce::check_ajax_referer() like check_ajax_referer()
    # WordpressNonce::wp_nonce_ays() like wp_nonce_ays()
    
