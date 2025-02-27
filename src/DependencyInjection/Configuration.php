<?php

declare(strict_types=1);

namespace Dridialaa\SyliusSiteParserPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('dridi_alaa_sylius_site_parser_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
