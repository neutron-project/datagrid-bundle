<?php
namespace Neutron\DataGridBundle\Tests\DependancyInjection;

use Neutron\ComponentBundle\Test\Tool\BaseTestCase;

use Neutron\DataGridBundle\DependencyInjection\NeutronDataGridExtension;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class NeutronDataGridExtensionTest extends BaseTestCase
{
    public function testDefault ()
    {
        $container = new ContainerBuilder();
        $loader = new NeutronDataGridExtension();
        $loader->load(array(array()), $container);
        
        $this->assertTrue($container->hasDefinition('neutron_data_grid.provider'));
        
        $this->assertTrue($container->hasDefinition('neutron_data_grid.factory.datagrid'));
        
        $this->assertTrue($container->hasDefinition('neutron_data_grid.doctrine.orm.handler.datagrid'));
        
        $this->assertTrue($container->hasAlias('neutron_data_grid.handler.datagrid'));  
        
        $this->assertTrue($container->hasParameter('neutron_data_grid.translation_domain'));
                
        $this->assertTrue($container->hasDefinition('neutron_data_grid.twig.extension.datagrid'));
        
        $this->assertTrue($container->getDefinition('neutron_data_grid.twig.extension.datagrid')
             ->hasTag('twig.extension')
        );
    
    }
}