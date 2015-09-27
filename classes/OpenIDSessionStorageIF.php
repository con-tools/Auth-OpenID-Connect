<?php

/**
 * Public interface to the OpenID Connect client's session state storage.
 * In order to support non-default storage methods (to be implemented by the
 * using application, instead of the default $_SESSION based), implement this
 * interface and pass an instance of the implementation to the OpenIDConnectClient
 * constructor.
 * 
 * @author Oded Arbel <oded@geek.co.il>
 */
interface OpenIDSessionStorageIF {
	
	/**
	 * Store the session nonce
	 * @param string $nonce Nonce to store
	 */
	public function storeNonce($nonce);
	
	/**
	 * Retrieve the stored session nonce
	 * @return string Nonce
	 */
	public function getNonce();
	
	/**
	 * Store the session state
	 * @param string $state negotiated auth session state
	 */
	public function storeState($state);
	
	/**
	 * Retreive the stored session state
	 * @return string Negotiated auth session state
	 */
	public function getState();
	
	/**
	 * Clear the stored nonce and state from the session storage
	 */
	public function clear();
}