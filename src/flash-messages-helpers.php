<?php

if ( ! function_exists('hasFlashMessages') ) {
    function hasFlashMessages() {
        return \wadeshuler\FlashMessages\Facades\FlashMessages::hasFlashMessages();
    }
}
