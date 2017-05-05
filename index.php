<?php
/**
 * Created by PhpStorm.
 * User: yg
 * Date: 5/4/17
 * Time: 4:51 PM
 */

require_once "vendor/autoload.php";
use Monolog\Logger;

$logger = new Logger("default");

/**
 * {
 * "ok": true,
 * "access_token": "xoxp-178796779717-178135058545-179510000118-369aa3e39408ff35ec06f4a712eda81c",
 * "scope": "identify,bot,chat:write:bot",
 * "user_id": "U583Z1QG1",
 * "team_name": "ExtreApp",
 * "team_id": "T58PENXM3"
 * }
 *
 * https://github.com/Seldaek/monolog/issues/743
 */
$slackHandler = new \Monolog\Handler\SlackHandler('xoxp-178796779717-178135058545-179510000118-369aa3e39408ff35ec06f4a712eda81c', '#random', 'SonsuratExtreAppLog');
$slackHandler->setLevel(\Monolog\Logger::ERROR);

$logger->pushHandler($slackHandler);

$logger->error("Hello from monolog with slack integration!Banzaiiii !!! Banzaiii!!!", ['wasd' => 'wdawdawd']);


