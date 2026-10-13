<?php
/**
 * Test harness for the generated Azion PHP SDK packages.
 *
 * Every package uses the same OpenAPI\Client namespace, so each run loads one
 * package only: its lib/ directory is autoloaded (PSR-4, as in the package
 * composer.json) on top of the shared dependencies installed in vendor/.
 * Generated code is never modified.
 *
 * Usage:
 *   php probe.php inspect <package_dir>
 *   php probe.php call <package_dir> <host> <api_key> <ApiClass> <method> <args_json>
 */

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

function load_package(string $dir): string
{
    $lib = rtrim(realpath($dir) ?: $dir, '/') . '/lib/';
    spl_autoload_register(static function (string $class) use ($lib): void {
        $prefix = 'OpenAPI\\Client\\';
        if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
            return;
        }
        $file = $lib . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) {
            require $file;
        }
    });
    return $lib;
}

function inspect_package(string $dir): array
{
    $lib = load_package($dir);
    $config = OpenAPI\Client\Configuration::getDefaultConfiguration();
    $apis = [];
    foreach (glob($lib . 'Api/*Api.php') as $file) {
        $class = 'OpenAPI\\Client\\Api\\' . basename($file, '.php');
        $instance = new $class(new GuzzleHttp\Client(), $config);
        $methods = array_values(array_filter(
            get_class_methods($instance),
            static fn (string $m): bool => $m[0] !== '_'
        ));
        sort($methods);
        $apis[basename($file, '.php')] = $methods;
    }
    return ['package' => basename(realpath($dir) ?: $dir), 'host' => $config->getHost(), 'apis' => $apis];
}

function call_api(string $dir, string $host, string $apiKey, string $api, string $method, string $argsJson): array
{
    load_package($dir);
    $config = (new OpenAPI\Client\Configuration())
        ->setHost($host)
        ->setApiKey('Authorization', $apiKey)
        ->setApiKeyPrefix('Authorization', 'Token');
    $class = 'OpenAPI\\Client\\Api\\' . $api;
    $instance = new $class(new GuzzleHttp\Client(), $config);
    $result = $instance->$method(...json_decode($argsJson, true, 512, JSON_THROW_ON_ERROR));
    return [
        'type' => is_object($result) ? (new ReflectionClass($result))->getShortName() : gettype($result),
        'data' => OpenAPI\Client\ObjectSerializer::sanitizeForSerialization($result),
    ];
}

$argv = $_SERVER['argv'];
try {
    if (($argv[1] ?? '') === 'inspect' && isset($argv[2])) {
        $out = inspect_package($argv[2]);
    } elseif (($argv[1] ?? '') === 'call' && count($argv) === 8) {
        $out = call_api(...array_slice($argv, 2));
    } else {
        fwrite(STDERR, "usage: probe.php inspect <dir> | call <dir> <host> <key> <Api> <method> <args_json>\n");
        exit(2);
    }
} catch (Throwable $e) {
    fwrite(STDERR, get_class($e) . ': ' . $e->getMessage() . "\n");
    exit(1);
}
echo json_encode($out, JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
