<?php

namespace App\Services;

class LicenseService
{
    protected string $secret;

    public function __construct()
    {
        $this->secret = (string) env('LICENSE_SECRET', 'YOUR_SUPER_SECRET_KEY');
    }

    public function generateLicense(string $machineId): string
    {
        $machineId = $this->normalizeMachineId($machineId);
        $hash = hash_hmac('sha256', $machineId, $this->secret);
        $license = strtoupper(substr($hash, 0, 20));

        return implode('-', str_split($license, 4));
    }

    public function verifyLicense(string $machineId, string $license): bool
    {
        return hash_equals($this->generateLicense($machineId), strtoupper(trim($license)));
    }

    public function normalizeMachineId(string $machineId): string
    {
        return strtoupper(trim($machineId));
    }
}
