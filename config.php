<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51N6XzZSHdKRzyVRLiR3bqKTPOX3uEjTyHQNjsaVlvWXpoVkWpJd4SLlMLUpN01NokNnM9ML9tApXZ5WaQdlo4vjL00lF2uuzGR";

$secretKey="sk_test_51N6XzZSHdKRzyVRLc1HzXPMkML09znKbA64gj9bFBjkF5R9NUyODpRE2GQWDyAeTeMj0D0dZWhd0sFT8HsrTuoE6006glllLqm";

\Stripe\Stripe::setApiKey($secretKey);
?>