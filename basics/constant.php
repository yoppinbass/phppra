<?php
// 定数
const TAX = 0.1; // $必要無し、constで宣言する(>PHP5.3)
print 1000 * TAX;
print '定義済み定数'."\n";
print '__FILE__: ' . __FILE__."\n";
print '__DIR__: ' . __DIR__."\n";
print '__LINE__:' . __LINE__."\n";
print '__FUNCTION__: '. __FUNCTION__."\n";
print '__CLASS__: ' . __CLASS__."\n";
print '__METHOD__: ' . __METHOD__."\n";
print '__TRAIT__: ' . __TRAIT__."\n";
print '__NAMESPACE__: ' . __NAMESPACE__."\n";
print 'DIRECTORY_SEPARATOR: ' . DIRECTORY_SEPARATOR."\n";
print 'PATH_SEPARATOR: ' . PATH_SEPARATOR."\n";
print 'PHP_VERSION: ' . PHP_VERSION."\n";
