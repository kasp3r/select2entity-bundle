<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Tetranz\Select2EntityBundle\Form\Type\Select2EntityType;
use Tetranz\Select2EntityBundle\Service\AutocompleteService;
use Symfony\Component\Asset\Context\RequestStackContext;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    // Service : tetranz_select2entity.select2entity_type
    $services->set('tetranz_select2entity.select2entity_type', Select2EntityType::class)
        ->tag('form.type', ['alias' => 'tetranz_select2entity'])
        ->args([
            service('doctrine'),
            service('router'),
            param('tetranz_select2_entity.config'),
        ]);

    // Service : tetranz_select2entity.autocomplete_service
    $services->set('tetranz_select2entity.autocomplete_service', AutocompleteService::class)
        ->args([
            service('form.factory'),
            service('doctrine'),
        ]);
};