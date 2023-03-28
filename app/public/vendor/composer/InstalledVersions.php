<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => 'cc7ba11c18d04a7da5623a754ffd6c0b6e188684',
    'name' => 'nette/web-project',
  ),
  'versions' => 
  array (
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.5',
      'version' => '6.5.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.8.3',
      'version' => '1.8.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1afdd860a2566ed3c2b0b4a3de6e23434a79ec85',
    ),
    'ircmaxell/password-compat' => 
    array (
      'pretty_version' => 'v1.0.4',
      'version' => '1.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c5cde8822a69545767f7c7f3058cb15ff84614c',
    ),
    'latte/latte' => 
    array (
      'pretty_version' => 'v2.4.8',
      'version' => '2.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '95ca6bab6caaa3efa3b5d7d4537f9a45cb89ed90',
    ),
    'nette/application' => 
    array (
      'pretty_version' => 'v2.4.13',
      'version' => '2.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '023acd964383de11fbc32cae8f4dfd8043643a0f',
    ),
    'nette/bootstrap' => 
    array (
      'pretty_version' => 'v2.4.6',
      'version' => '2.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '268816e3f1bb7426c3a4ceec2bd38a036b532543',
    ),
    'nette/caching' => 
    array (
      'pretty_version' => 'v2.5.8',
      'version' => '2.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '7fba7c7ab2585fafb7b31152f2595e1551120555',
    ),
    'nette/component-model' => 
    array (
      'pretty_version' => 'v2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e7980f5ddec31f68a39e767799b1b0be9dd1014',
    ),
    'nette/database' => 
    array (
      'pretty_version' => 'v2.4.8',
      'version' => '2.4.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '388b172536f49e93c4b775c0adb1db2233a42c9f',
    ),
    'nette/di' => 
    array (
      'pretty_version' => 'v2.4.15',
      'version' => '2.4.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd0561b8f77e8ef2ed6d83328860e16c81a5a8649',
    ),
    'nette/finder' => 
    array (
      'pretty_version' => 'v2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ee951a656cb8ac622e5dd33474a01fd2470505a0',
    ),
    'nette/forms' => 
    array (
      'pretty_version' => 'v2.4.9',
      'version' => '2.4.9.0',
      'aliases' => 
      array (
      ),
      'reference' => '787a924d09f507c44ead60f3822c31d61d909b65',
    ),
    'nette/http' => 
    array (
      'pretty_version' => 'v2.4.11',
      'version' => '2.4.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '3d75d11a880fe223bfa6bc7ca9822bdfe789e5a6',
    ),
    'nette/mail' => 
    array (
      'pretty_version' => 'v2.4.6',
      'version' => '2.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '431f1774034cc14ee6a795b6514fe6343f75a68e',
    ),
    'nette/neon' => 
    array (
      'pretty_version' => 'v2.4.3',
      'version' => '2.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e72b1dd3e2d34f0863c5561139a19df6a1ef398',
    ),
    'nette/php-generator' => 
    array (
      'pretty_version' => 'v2.6.4',
      'version' => '2.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1f6b2163c5471c4d94cd94b93362f12bceef183',
    ),
    'nette/reflection' => 
    array (
      'pretty_version' => 'v2.4.2',
      'version' => '2.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b12327e98ead74e87a1315e0d48182a702adf901',
    ),
    'nette/robot-loader' => 
    array (
      'pretty_version' => 'v3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e8d75d6d976e191bdf46752ca40a286671219d2',
    ),
    'nette/security' => 
    array (
      'pretty_version' => 'v2.4.4',
      'version' => '2.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '7b8ac90c9ec405bb3b4dab9214bf122d3620fc65',
    ),
    'nette/tester' => 
    array (
      'pretty_version' => 'v2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3f273cf0ef82939e5ed07baaa5cf21ea6f657fc2',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v2.5.3',
      'version' => '2.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '17b9f76f2abd0c943adfb556e56f2165460b15ce',
    ),
    'nette/web-project' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => 'cc7ba11c18d04a7da5623a754ffd6c0b6e188684',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v2.0.20',
      'version' => '2.0.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f1f60250fccffeaf5dda91eea1c018aed1adc2a',
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'da3d9da2ce0026771f5fe64cb332158f1bd2bc33',
    ),
    'symfony/intl' => 
    array (
      'pretty_version' => 'v3.4.47',
      'version' => '3.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c0e22a40039977f11dc4de03a853ab9450c2b4cd',
    ),
    'symfony/polyfill' => 
    array (
      'pretty_version' => 'v1.19.0',
      'version' => '1.19.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac41071c7ef43e26e1231100fa9a316cebecdec7',
    ),
    'symfony/polyfill-apcu' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-ctype' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-iconv' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-intl-icu' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-intl-messageformatter' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php54' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php55' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php56' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php70' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php71' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php72' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php73' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php74' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-php80' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-util' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-uuid' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'symfony/polyfill-xml' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.19.0',
      ),
    ),
    'tracy/tracy' => 
    array (
      'pretty_version' => 'v2.5.8',
      'version' => '2.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '3c874946fc403f728af9118cd602cac56bd493d3',
    ),
    'voku/portable-utf8' => 
    array (
      'pretty_version' => '3.1.30',
      'version' => '3.1.30.0',
      'aliases' => 
      array (
      ),
      'reference' => '162de9c40d8a7dff84697296f375b424aef53df8',
    ),
    'voku/simple_html_dom' => 
    array (
      'pretty_version' => '3.1.2',
      'version' => '3.1.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a20311174675c9e8c3c10f3c8d3439f8457e9eec',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {

foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
