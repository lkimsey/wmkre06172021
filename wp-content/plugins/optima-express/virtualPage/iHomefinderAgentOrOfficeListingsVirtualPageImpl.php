<?php

class iHomefinderAgentOrOfficeListingsVirtualPageImpl extends iHomefinderAbstractVirtualPage {
			
	public function getContent() {
		iHomefinderStateManager::getInstance()->setLastSearchUrl();
		$this->remoteRequest
			->addParameter("requestType", "agent-or-office-listings")
		;
		if(!$this->remoteRequest->hasParameter("agentId")) {
			$agentId = iHomefinderUtility::getInstance()->getRequestVar("agentId");
			$this->remoteRequest->addParameter("agentId", $agentId);
		}
		if(!$this->remoteRequest->hasParameter("officeId")) {
			$officeId = iHomefinderUtility::getInstance()->getRequestVar("officeId");
			$this->remoteRequest->addParameter("officeId", $officeId);
		}
		$this->remoteResponse = $this->remoteRequest->remoteGetRequest();
	}
	
}