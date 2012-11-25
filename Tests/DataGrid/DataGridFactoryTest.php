<?php
namespace Neutron\DataGridBundle\Tests\DataGrid\DataGridFactoryTest;

class DataGridFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreateDataGrid()
    {
        $factory = new \Neutron\DataGridBundle\DataGrid\DataGridFactory();
        $dataGrid = $factory->createDataGrid('test');
        
        $this->assertInstanceOf('\Neutron\DataGridBundle\DataGrid\DataGridInterface', $dataGrid);
        $this->assertSame('test', $dataGrid->getName());

    }
    
}
