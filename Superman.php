<?php
/**
 * Created by PhpStorm.
 * User: zhongzhiliang
 * Date: 2018/4/2
 * Time: 下午5:59
 */

namespace Container;


use Container\Contracts\SupermamInterface;

class Superman
{
    protected $module;

    public function __construct(SupermamInterface $module)
    {
        $this->module = $module;
    }
}