<?php

class iHomefinderOrganizerLogoutVirtualPageImpl extends iHomefinderAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Organizer Login";
	}
	
	public function getPermalink() {
		return "property-organizer-logout";
	}
	
	public function getContent() {
		iHomefinderStateManager::getInstance()->removeRememberMe();
		$this->remoteRequest
			->addParameter("requestType", "property-organizer-logout")
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
	public function getBody() {
		return $this->remoteResponse->getBody();
	}

}