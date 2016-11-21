<?php

namespace Application;

use ManaPHP\Cli\Application;
use ManaPHP\Db\Adapter\Mysql;
use ManaPHP\DbInterface;

class Cli extends Application
{
    public function registerServices()
    {
        $self = $this;

        $this->_dependencyInjector->remove('url');

        $this->_dependencyInjector->setShared('configure', function () {
            return new Configure();
        });

        $this->_dependencyInjector->set('db', function () use ($self) {
            $mysql = new Mysql((array) $self->configure->database);
            $mysql->attachEvent('db:beforeQuery', function (Dbinterface $source) use ($self) {
                $self->logger->debug('SQL:'.$source->getSQL());
            });

            return $mysql;
        });

        $this->_dependencyInjector->setShared('redis', function () {
            $redis = new \Redis();
            $redis->connect('localhost');

            return $redis;
        });
    }

    public function main()
    {
        date_default_timezone_set('PRC');

        $this->registerServices();
        $this->debugger->start();

        exit($this->handle());
    }
}
