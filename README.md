# Sample Zoom Meeting SDK PHP Signature Generator

This is a sample PHP code that generates an encrypted SDK JSON Web Token (JWT) for Zoom Meeting SDK. This helps developers to quickly generate JWT token using the [SDK App Type](https://marketplace.zoom.us/docs/guides/build/sdk-app/) credentials.

JWT is generated based on the following core parts as stated in the [documentation](https://marketplace.zoom.us/docs/sdk/native-sdks/auth#generate-the-sdk-jwt). Please create an environment file to store your SDK Key and Secret.

For JWT Token generation, [PHP-JWT](https://github.com/firebase/php-jwt) library is used to encode and decode JSON Web Tokens (JWT) in PHP, conforming to RFC 7519.