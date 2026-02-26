<?php

use OscarTeam\ElenaPhp\ElenaApi;

describe('ElenaApi', function () {
    it('resolves prod base URL when environment is prod', function () {
        $api = new ElenaApi('prod');
        expect($api->resolveBaseUrl())->toBe('https://api.elena.nl/24');
    });

    it('resolves prod base URL when environment is null', function () {
        $api = new ElenaApi();
        expect($api->resolveBaseUrl())->toBe('https://api.elena.nl/24');
    });

    it('resolves test base URL when environment is test', function () {
        $api = new ElenaApi('test');
        expect($api->resolveBaseUrl())->toBe('https://api.test.elena.nl/24');
    });

    it('returns correct default headers', function () {
        $api = new ElenaApi();
        $reflection = new ReflectionClass($api);
        $method = $reflection->getMethod('defaultHeaders');
        $method->setAccessible(true);
        $headers = $method->invoke($api);
        expect($headers)->toBe([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ]);
    });
});
