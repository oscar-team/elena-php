<?php
require __DIR__ . '/vendor/autoload.php';

$connector = new \OscarTeam\ElenaPhp\ElenaApi('test');
//$connector->withBasicAuth('wouter@oscar.nl', 'Alex2022!');

//$request = new \OscarTeam\ElenaPhp\Requests\GetRegistration('cf80899a-e7fe-661c-4e2c-20aa7aeabc79');
$request = new \OscarTeam\ElenaPhp\Requests\GetBusinessAccounts();
/*$registration = new \OscarTeam\ElenaPhp\DataObjects\Registration(
    checkProcess:'default',
    lessee: \OscarTeam\ElenaPhp\DataObjects\Lessee::from([
        "first_name" => "Alexandru",
        "last_name"=> "Nedelcu",
        "date_of_birth"=> "1990-02-12",
        "email_address"=> "alexnedelcu03@gmail.com",
        "mobile_phone_number"=> "+40-727808126",
        "street_name"=> "Georg-Reismüller-Str.",
        "house_number"=> "32",
        "house_number_extension"=> "a",
        "postal_code"=> "80999",
        "city"=> "München",
        "country"=> "DE",
        "documents"=> [
            [
                "type"=> "drivers_license",
                "country"=> "RO",
                "number"=> "B02102693",
                "expiration_date"=> "2029-03-18",
                "images"=> [
                    [
                        "content"=> "{{frontLicense}}",
                        "side"=> "front"
                ], [
                        "content"=> "{{backLicense}}",
                        "side"=> "back"
                    ]
                ]
            ]]
    ])
);*/
//$payload = new \OscarTeam\ElenaPhp\Requests\DataObjects\CreateRegistrationRequestData(registration: $registration);
//$payload->toArray();
$request->withBasicAuth('wouter@oscar.nl', 'Alex2022!');
var_dump($connector->send($request)->dto());