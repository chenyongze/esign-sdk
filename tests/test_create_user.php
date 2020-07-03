<?php
include  __DIR__ . '/../vendor/autoload.php';
// 配置信息
$config = [
    'debug' => true, // 是否开启调试
    'app_id' => "4438771971", // 请替换成自己的 AppId
    'secret' => 'e46a745a671f03b1158ab78092e9b076', // 请替换成自己的 Secret
    'production' => false, // 是否正式环境

    'log' => [
        'level'      => 'debug',
        'permission' => 0777,
        'file'       => '/tmp/esign.log', // 开启调试时有效, 可指定日志文件地址
    ],
];

$eSign = new \Yongze\ESign\Application($config);

$thirdPartyUserId = 'your_party_user_id'; // 用户唯一标识，可传入第三方平台的个人用户id、证件号、手机号、邮箱等，如果设置则作为账号唯一性字段，相同信息不可重复创建。
$name = 'yongze'; // 姓名
$idType = 'CRED_PSN_CH_IDCARD'; // 证件类型
$idNumber = '340823199003051213'; // 证件号
$mobile = '18514823010'; // 手机号, 签署流程开始时对应的签署人会收到短信通知
$email = 'sapphire.php@gmail.com'; // 邮箱地址, 签署流程开始时对应的签署人会收到邮件通知

// 个人账户创建, 有唯一标志, 需要记录返回的 accountId
$accountInfo = $eSign->account->createPersonAccount($thirdPartyUserId, $name, $idType, $idNumber, $mobile, $email);
$accountId = $accountInfo['accountId'];
print_r($accountInfo);
