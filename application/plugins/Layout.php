<?php
class LayoutPlugin extends Yaf_Plugin_Abstract {

	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

	}

	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
	    //对api模块下 关闭自动Render
        if(strtolower($request->module) == 'api'){
            Yaf_Dispatcher::getInstance()->disableView();
        }
	}

	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

	}

	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

	}



	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

	}

	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {

	}
}
