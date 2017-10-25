Example Apify act that uses PHP.

## Dockerfile

```
FROM php:7.0-cli

COPY ./* ./

CMD [ "php", "./main.php" ]
```

## main.php

```
<?php
print "Starting ...\n";
print "ENV vars:\n";
print_r($_ENV);
print "Fetching http://example.com ...\n";
$exampleComHtml = file_get_contents('http://example.com');
print "Searching for <h1> tag contents ...\n";
preg_match_all('/<h1>(.*?)<\/h1>/', $exampleComHtml, $matches);
print "Found: " . $matches[1][0] . "\n";
print "I am done!\n";
```
