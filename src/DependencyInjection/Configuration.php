<?php
namespace Ethsam\SymfonyDropzone\DependencyInjection;
use Ethsam\SymfonyDropzone\Form\DropzoneType;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{



    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('symfony-dropzone');
        return $treeBuilder;
    }




}
