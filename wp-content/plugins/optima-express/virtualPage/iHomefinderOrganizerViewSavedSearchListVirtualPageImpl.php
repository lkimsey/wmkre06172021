<?php

class iHomefinderOrganizerViewSavedSearchListVirtualPageImpl extends iHomefinderAbstractPropertyOrganizerVirtualPage {
	
	public function getTitle() {
		return "Saved Search List";
	}
	
	public function getPermalink() {
		return "property-organizer-view-saved-search-list";
	}
			
	public function getContent() {
		$this->remoteRequest
			->addParameter("requestType", "property-organizer-view-saved-search-list")
		;
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}