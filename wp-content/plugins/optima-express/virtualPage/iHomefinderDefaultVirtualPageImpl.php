<?php

class iHomefinderDefaultVirtualPageImpl extends iHomefinderAbstractVirtualPage {
	
	public function getPageTemplate() {
		return get_option(iHomefinderConstants::OPTION_VIRTUAL_PAGE_TEMPLATE_DEFAULT, null);
	}
	
}