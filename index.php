<?php
function getVisitorIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // 检查是否设置了 HTTP_CLIENT_IP
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // 检查是否设置了 HTTP_X_FORWARDED_FOR
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // 默认使用 REMOTE_ADDR
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo "访问者 IP 地址为：" . getVisitorIP();
?>
