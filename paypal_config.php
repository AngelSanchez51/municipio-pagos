<?php
require 'vendor/autoload.php';

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

class PayPalClient {
    public static function client() {
        return new PayPalHttpClient(self::environment());
    }

    public static function environment() {
        $clientId = 'AfOEtRsjCVhQQ5GQYjRC33U_3T0LUD1yhTz6JyViDbKabh9ALvlGwlaehITdXk3_UBY6cTo-nz20RNpb';
        $clientSecret = 'EI-gwYUoFaBuKTybYDo5XatLXkRAh_O93m3hiTr0HVnxdH3E6O7eyliVvNFtGQNRY3DCwRHlc9pjyD1t';
        return new SandboxEnvironment($clientId, $clientSecret);
    }
}
?>
