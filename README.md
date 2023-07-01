This plugin adds the modified timestamp of asset files to their respective link tag URLs when using CSS/JS helper functions.

It requires a modification of your `.htaccess` file to resolve the new asset links:

```
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)\.(\d+)\.(js|css)$ $1.$3 [L]
```
