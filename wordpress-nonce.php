<?php
/*
 * Class WordpressNonce:  for managing Wordpress Nonce functions
 */
class WordpressNonce
{

    /**
     * @param int|string $action  Optional. Action name. Default -1.
     * @param string     $name    Optional. Nonce name. Default '_wpnonce'.
     * @param bool       $referer Optional. Whether to set the referer field for validation. Default true.
     * @param bool       $echo    Optional. Whether to display or return hidden form field. Default true.
     * @return string Nonce field HTML markup.
     */
    public static function wp_nonce_field($action = -1, $name = "_wpnonce", $referer = true , $echo = true)
    {
        return wp_nonce_field($action, $name, $referer, $echo);
    }

    /**
     * @param string     $actionurl URL to add nonce action.
     * @param int|string $action    Optional. Nonce action name. Default -1.
     * @param string     $name      Optional. Nonce name. Default '_wpnonce'.
     * @return string Escaped URL with nonce action added.
     */
    public static function wp_nonce_url($actionurl, $action = -1, $name = '_wpnonce')
    {
        return wp_nonce_url($actionurl, $action, $name);
    }

    /**
     * @param string|int $action Scalar value to add context to the nonce.
     * @return string The token.
     */
    public static function wp_create_nonce($action = -1)
    {
        return wp_create_nonce($action);
    }

    /**
     * @param string     $nonce  Nonce that was used in the form to verify
     * @param string|int $action Should give context to what is taking place and be the same when nonce was created.
     * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
     *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
     */
    public static function wp_verify_nonce($nonce, $action = -1)
    {
        return wp_verify_nonce($nonce, $action);
    }

    /**
     * @param int|string $action    Action nonce.
     * @param string     $query_arg Optional. Key to check for nonce in `$_REQUEST` (since 2.5).
     *                              Default '_wpnonce'.
     * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
     *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
     */
    public static function check_admin_referer($action = -1, $query_arg = '_wpnonce')
    {
        return check_admin_referer($action, $query_arg);
    }

    /**
     * @param int|string   $action    Action nonce.
     * @param false|string $query_arg Optional. Key to check for the nonce in `$_REQUEST` (since 2.5). If false,
     *                                `$_REQUEST` values will be evaluated for '_ajax_nonce', and '_wpnonce'
     *                                (in that order). Default false.
     * @param bool         $die       Optional. Whether to die early when the nonce cannot be verified.
     *                                Default true.
     * @return false|int False if the nonce is invalid, 1 if the nonce is valid and generated between
     *                   0-12 hours ago, 2 if the nonce is valid and generated between 12-24 hours ago.
     */
    public static function check_ajax_referer($action = -1, $query_arg = false, $die = true)
    {
        return check_ajax_referer($action, $query_arg, $die);
    }

    /**
     * @param string $action The nonce action.
     */
    public static function wp_nonce_ays($action )
    {
        wp_nonce_ays($action );
    }
}
