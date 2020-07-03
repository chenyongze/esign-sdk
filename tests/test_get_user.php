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
// 个人账户创建, 有唯一标志, 需要记录返回的 accountId
$accountInfo = $eSign->account->queryPersonByThirdId($thirdPartyUserId);
print_r($accountInfo);
