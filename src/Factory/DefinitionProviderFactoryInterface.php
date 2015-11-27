<?php

namespace Interop\Container\Definition\Factory;

use Interop\Container\Definition\DefinitionProviderInterface;
use Puli\Discovery\Api\Discovery;

/**
 * Classes implementing this interface are factories that can be used to create definition providers.
 */
interface DefinitionProviderFactoryInterface
{
    /**
     * Creates a definition provider.
     *
     * @param Discovery $discovery
     *
     * @return DefinitionProviderInterface
     */
    public static function buildDefinitionProvider(Discovery $discovery);
}
