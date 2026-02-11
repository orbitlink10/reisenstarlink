<?php

declare(strict_types=1);

/**
 * Load .env1 as a fallback when .env is not present.
 * This prevents production boot failures when only .env1 is deployed.
 */
$basePath = dirname(__DIR__);

if (file_exists($basePath.'/.env') || ! file_exists($basePath.'/.env1')) {
    return;
}

if (class_exists(\Dotenv\Dotenv::class)) {
    \Dotenv\Dotenv::createImmutable($basePath, '.env1')->safeLoad();
}
