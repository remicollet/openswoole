<?php
/*
 +----------------------------------------------------------------------+
 | Open Swoole                                                          |
 +----------------------------------------------------------------------+
 | Copyright (c) 2021-now Open Swoole Group                             |
 +----------------------------------------------------------------------+
 | This source file is subject to version 2.0 of the Apache license,    |
 | that is bundled with this package in the file LICENSE, and is        |
 | available through the world-wide-web at the following url:           |
 | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 | If you did not receive a copy of the Apache2.0 license and are unable|
 | to obtain it through the world-wide-web, please send a note to       |
 | hello@swoole.co.uk so we can mail you a copy immediately.            |
 +----------------------------------------------------------------------+
*/

/** @not-serializable */
namespace Swoole\Process {
    class Pool {
        public function __construct(int $worker_num, int $ipc_type = 0, int $msgqueue_key = 0, bool $enable_coroutine = false) {}
        public function set(array $settings): void|bool {}
        public function on(string $event, callable $callback): bool {}
        public function listen(string $host, int $port = 0, int $backlog = 2048): bool {}
        public function write(string $data): bool {}
        public function detach(): bool {}
        public function getProcess(int $worker_id = -1): mixed {}
        public function start(): bool|void {}
        public function stop(): void {}
        public function shutdown(): bool {}
        public function __destruct() {}
    }
}