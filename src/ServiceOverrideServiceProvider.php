<?php

namespace Drupal\service_override;

use Drupal\Core\DependencyInjection\ServiceProviderBase;
use Drupal\Core\DependencyInjection\ContainerBuilder;

class ServiceOverrideServiceProvider extends ServiceProviderBase{
	
	public function alter(ContainerBuilder $container) {
		
		$definition = $container->getDefinition('maintenance_mode');
		$definition->setClass('Drupal\service_override\ServiceOverrideMaintenanceMode');
	}
}
