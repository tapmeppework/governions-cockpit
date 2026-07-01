<?php
 declare(strict_types=1); if (!isset($cli, $app) || PHP_SAPI !== 'cli') return; $cli->add(new \tapmeppe\composer\summons\Abcd($app)); 