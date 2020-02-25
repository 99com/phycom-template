<?php

namespace console\controllers;

use yii\console\ExitCode;

class ApplicationController extends \phycom\console\controllers\ApplicationController
{
    public $languages = ['et','en'];

    public $systemEmail = 'info@phycom.local.com';

    public $vendorName = 'Phycom';
    public $vendorLegalName = 'Some company name';
    public $vendorRegNo = '14123455';
    public $vendorEmail = 'info@phycom.local.com';
    public $vendorPhone = '6372400';
    public $vendorPhoneCode = '372';

    public $vendorAddress = [
        'country' => 'EE',
        'province' => 'Harjumaa',
        'city' => 'Tallinn',
        'district' => 'Kesklinn',
        'street' => 'Tartu 000',
        'postcode' => '10344'
    ];
}
