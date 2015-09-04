PHP OpenID Connect Client
=========================
A relatively simple library that allows an application to authenticate a user through the basic OpenID Connect flow.
This is a fork of the OpenID-ConnectP-PHP library by Michael Jett, but extends it to allow finer manipulation of the
protocol to allow the HTTP rediret to be handled differently then throwing a 302 Redirect from within the library.

# Requirements #
 1. PHP 5.6 or greater 
 2. CURL extension
 3. JSON extension

## Example 1: Basic Client ##

```php
$oidc = new OpenIDConnectClient('https://id.provider.com/',
                                'ClientIDHere',
                                'ClientSecretHere');

$url = $oidc->getAuthorizationURL();
// send the client to complete the login
// ...
// capture the authentication token from the callback into $code
$oidc->complete($code);
$name = $oidc->requestUserInfo('given_name');
```
