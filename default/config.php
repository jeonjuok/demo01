<?php
/**
 * JOYKOREA PHP Project Configuration
 */

// 접속 URI 또는 SCRIPT_NAME에 '/work3'이 포함되어 있으면 로컬 개발 경로로 설정, 그렇지 않으면 실서버 경로로 설정
if ((isset($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '/work3') !== false) ||
    (isset($_SERVER['SCRIPT_NAME']) && strpos($_SERVER['SCRIPT_NAME'], '/work3') !== false)) {
    $default_path = "/work3/default";
    $demo_path = "/work3/demo01";
} else {
    $default_path = "/default";
    $demo_path = "/demo01";
}
?>
