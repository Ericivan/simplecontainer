<?php

/**
 * Created by PhpStorm.
 * User: zhongzhiliang
 * Date: 2018/4/2
 * Time: 下午5:45
 */

namespace Container;

/**
 * Class Container
 * @package Container
 * 简单 ioc 容器
 */
class Container
{
    protected $binds;

    protected $instances;


    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof \Closure) {
            $this->binds[$abstract] = $concrete;
        }else{
            $this->instances = $concrete;
        }
    }

    public function make($abstract,$parameter=[])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameter, $this);

        return call_user_func_array($this->binds[$abstract], $parameter);
    }
}