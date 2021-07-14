# Friendly URLs

- `<any.domain.com>/display/ab-dolorem-quo-aperiam-et-voluptates-voluptatem`
- - In .htaccess **RewriteRule ^display/(.*)$ _show.php?uri=$1 [QSA]**
- - Passing 1 variable
- `<any.domain.com>/mutiple-data/1/ab-dolorem-quo-aperiam-et-voluptates-voluptatem`
- - In .htaccess **RewriteRule ^mutiple-data/(.*)/(.*)$ _get.php?id=$1&uri=$2 [QSA]**
- - Passing more tha 1 variable