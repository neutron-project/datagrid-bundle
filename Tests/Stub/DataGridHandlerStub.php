<?php
namespace Neutron\DataGridBundle\Tests\Stub;

use Neutron\DataGridBundle\DataGrid\AbstractDataGridHandler;

class DataGridHandlerStub extends AbstractDataGridHandler
{
    public function buildQuery()
    {
   
        $this->getResolvedRule(array('field' => 'a.name', 'op' => 'eq', 'data' => 'test1'));
        
        $this->setQuery(new \stdClass());
        $this->setCount(2);
        return $this;
    }
    
    public function getResult()
    {
        return array(
            array(
                'id' => 1,
                'name' => 'test1'        
            ),
            array(
                'id' => 2,
                'name' => 'test2'        
            ),
        );
    }
}