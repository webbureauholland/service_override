<?php

/**
 * @file
 * Contains Drupal\service_override\ServiceOverrideMaintenanceMode
 */

namespace Drupal\service_override;

use Drupal\Core\Site\MaintenanceMode;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\State\StateInterface;

class ServiceOverrideMaintenanceMode extends MaintenanceMode{

	public function __construct(StateInterface $state) {
		parent::__construct($state);
    }

	public function exempt(AccountInterface $account) {
		
		if($account->id() == 2) {
			return TRUE;
		}
		
		return $account->hasPermission('access site in maintenance mode');		
	}
}