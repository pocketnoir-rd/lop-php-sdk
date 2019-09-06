<?php
/**
 * Created by PhpStorm.
 * User: wanyong
 * Date: 2017/12/1
 * Time: 14:19
 */

namespace Jd\WebSocket\Sync;

use Jd\WebSocket\MessageProcessor;

interface MessageSyncProcessor extends MessageProcessor
{
    /**
     * Set a callback to execute every few milliseconds.
     * If it returns boolean 'false' the client will stop listening.
     * @param $client  type:/Jd/WebSocket/Sync/Textalk/Client
     * @return bool
     */
    public function onTick($client);
}