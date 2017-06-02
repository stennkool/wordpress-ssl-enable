# SSL enable

## What does this plugin do?

This plugin forces wordpress to detect the SSL protocol being enabled and in use, there are cases where SSL detection fails with a stock wordpress or you just want plugins to behave like SSL has been enabled (for in development and testing enviroments for example).

## When is this plugin needed?

This plugin is useful when your website is behind a load balancer and the SSL encryption is handled by the loadbalancer itself.
There are scenarios where you want wordpress or plugins to behave like SSL is enabled for developmment purposes, think of the WooCommerce API for example where you different authentication methods are used depending if you us a SSL connection or not.

#### Info
[Website](http://www.stennmedia.nl)