<?php

class OpenIDSessionStorageDefault implements OpenIDSessionStorageIF {
	
	/**
	 * {@inheritDoc}
	 * @see OpenIDSessionStorageIF::storeNonce()
	 */
	public function storeNonce($nonce) {
		return $_SESSION['openid_connect_nonce'] = $nonce;
	}

	/**
	 * {@inheritDoc}
	 * @see OpenIDSessionStorageIF::getNonce()
	 */
	public function getNonce() {
		return $_SESSION['openid_connect_nonce'];
	}

	/**
	 * {@inheritDoc}
	 * @see OpenIDSessionStorageIF::storeState()
	 */
	public function storeState($state) {
		return $_SESSION['openid_connect_state'] = $state;
	}

	/**
	 * {@inheritDoc}
	 * @see OpenIDSessionStorageIF::getState()
	 */
	public function getState() {
		return $_SESSION['openid_connect_state'];
	}

}
