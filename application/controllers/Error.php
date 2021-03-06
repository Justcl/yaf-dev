<?php

/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author dce\cpr007
 */
class ErrorController extends BaseController {

    public function errorAction($exception) {
        $this->writeLog($exception->getMessage(), 1);
        Yaf_Dispatcher::getInstance()->disableView();
    }
}
