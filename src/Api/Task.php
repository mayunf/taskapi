<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/11/23
 * Time: 20:49
 */

namespace TaskAPI\Api;


use TaskAPI\Core\AbstractAPI;

class Task extends AbstractAPI
{

    const SET = 'task/set'; //  设置单个任务

    const SET_LIST = 'task/setlist'; //  设置多个任务

    const GET = 'task/get'; //  获取任务

    const LEN = 'task/len'; //  获取任务数量

    const FINISH = 'task/finish'; //  提交完成任务

    const U_KEY = 'task/ukey'; //  生成唯一的Key

    public function set(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::SET, $params]);
    }

    public function setList(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::SET_LIST, $params]);
    }

    public function get(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::GET, $params]);
    }

    public function len(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::LEN, $params]);
    }

    public function finish(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::FINISH, $params]);
    }

    public function uKey(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::U_KEY, $params]);
    }
}
