<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Campaign;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;

$access_token = 'EAAMoGjxvJZAUBAPhns0En30cZA1CfIX9ZAqMJfxNNc9Cn25vEgpNG0RN0Gb30T9cGZAXyjFdoBPK0JzpEcGmP5x8338N15Ndw9E0aWAg7al1Yi7k0eEh7eMzkHYDwnFe6BF5UitTzVmLEUP5P58ZCZBmScaGsvySm2knw2iiPG76wxmwZADfYZCyZBuRos9gBpWi124moBtYaMs6G6S0SwJJOYKWUpkazdMgsCbh5wxd87AZDZD';
$app_secret = '23392245e3f5ab26bff25226f56c4167';
$app_id = '888518078309781';
$id = 'act_548632589419134';

$api = Api::init($app_id, $app_secret, $access_token);
$account_id = 'act_548632589419134';
$campaign_id = '23845019999200300';

$account = new AdAccount($account_id);
$adset = $account->createAdSet(
    array(),
    array(
        AdSetFields::NAME => 'My Test AdSet',
        AdSetFields::CAMPAIGN_ID => $campaign_id,
        AdSetFields::DAILY_BUDGET => 150,
        AdSetFields::START_TIME => (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
        AdSetFields::END_TIME => (new \DateTime("+2 week"))->format(\DateTime::ISO8601),
        AdSetFields::BILLING_EVENT => 'IMPRESSIONS',
        AdSetFields::TARGETING => array('geo_locations' => array('countries' => array('US'))),
        AdSetFields::BID_AMOUNT => '1000',
    )
);

echo $adset->id;
