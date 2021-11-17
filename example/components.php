<?php

class extExampleComponents extends AbstractPage {
	
	public static function getSiteDisplayName() {
		return 'Example Module - Style Components';
	}

	public function __construct($request = [], $extension = []) {
		parent::__construct(array( self::getSiteDisplayName() ), false, false, false, $request, $extension);
		$this->checkLogin();
	}


	public function execute() {

		//$this->getRequest();
		//$this->getAcl();


		$this->render([
			"tmpl" => "components"
		]);

	}


}
