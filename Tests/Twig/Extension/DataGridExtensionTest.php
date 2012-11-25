<?php
namespace Neutron\DataGridBundle\Tests\Twig\Extension;

use Neutron\ComponentBundle\Test\Tool\BaseTestCase;

use Neutron\DataGridBundle\Twig\Extension\DataGridExtension;

use Symfony\Component\DependencyInjection\Container;

class DataGridExtensionTest extends  BaseTestCase
{
    public function setUp()
    {
        if (!class_exists('Twig_Environment')) {
            $this->markTestSkipped('Twig is not available');
        }
    }
    
    public function testDataGridExtension()
    {
        
        $dataGridMock = 
            $this->getMock('Neutron\DataGridBundle\DataGrid\DataGridInterface');
        
        $templatingMock = 
            $this->getMockBuilder('Symfony\Bundle\TwigBundle\TwigEngine')
                 ->disableOriginalConstructor()->getMock();
        
        $templatingMock
            ->expects($this->once())
            ->method('render')
            ->with('NeutronDataGridBundle:DataGrid:index.html.twig', array(
                'dataGrid' => $dataGridMock, 'translationDomain' => 'messages'
            ))
            ->will($this->returnValue('<table>test</table>'))
        ;
        
        $container = new Container();
        $container->setParameter('neutron_data_grid.translation_domain', 'messages');
        $container->set('templating', $templatingMock);
        
        $this->assertEquals(
            '<table>test</table>', 
            $this->getTemplate('{{ neutron_datagrid(dataGrid) }}', $container)
                ->render(array('dataGrid' => $dataGridMock))
        );
    }
    
    private function getTemplate($template, $container)
    {
        $loader = new \Twig_Loader_Array(array('index' => $template));
        $twig = new \Twig_Environment($loader, array('debug' => true, 'cache' => false));
        $twig->addExtension(new DataGridExtension($container));
    
        return $twig->loadTemplate('index');
    }
}