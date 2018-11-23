<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/11/23
 * Time: 20:49
 */

namespace TaskAPI\Api;


use TaskAPI\Core\AbstractAPI;

class Sys extends AbstractAPI
{

    const DEL_TASK = 'sys/deltask'; //  删除系统任务接口

    const ADD_TASK = 'sys/addtask'; //  添加系统任务接口

    public function delTask(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::DEL_TASK, $params]);
    }

    public function addTask(array $params = [])
    {
        return $this->parseJSON(static::POST, [self::ADD_TASK, $params]);
    }
}
