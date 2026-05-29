<?php

require_once __DIR__ . '/helper.php';

use app\common\Helper;

echo Helper::formatTime(time()) . "\n";
echo Helper::validateEmail('test@example.com') ? "valid\n" : "invalid\n";
echo Helper::generateToken(16) . "\n";
echo "All include tests passed\n";
