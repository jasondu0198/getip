说明：
$_SERVER['HTTP_CLIENT_IP']：获取客户端的 IP（如果客户端使用代理）。
$_SERVER['HTTP_X_FORWARDED_FOR']：获取通过代理服务器的 IP（可能存在多个 IP，通常第一个是原始用户的 IP）。
$_SERVER['REMOTE_ADDR']：获取连接服务器的 IP（通常是用户的真实 IP 或代理服务器的 IP）。
在实际应用中，REMOTE_ADDR 最可靠，其他值可能被伪造。
