<?php

print 'Starting ...';
print 'Fetching http://example.com ...';
$exampleComHtml = file_get_contents('http://example.com');
print 'Searching for <h1> tag contents ...';
preg_match_all('/<h1>(.*?)<\/h1>/', $exampleComHtml, $matches);
print 'Found: ' . $matches[1];
print 'I am done!';