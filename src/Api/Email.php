<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/11/23
 * Time: 20:49
 */

namespace TaskAPI\Api;


use TaskAPI\Core\AbstractAPI;

class Email extends AbstractAPI
{

    const EMAIL_SEND = 'email/send'; // 发送邮件API


    public function emailSend(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::EMAIL_SEND, $params]);
    }

}
