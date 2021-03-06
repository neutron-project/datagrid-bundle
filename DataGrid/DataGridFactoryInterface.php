<?php
/*
 * This file is part of NeutronDataGridBundle
 *
 * (c) Nikolay Georgiev <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Neutron\DataGridBundle\DataGrid;

/**
 * Interface implemented by the datagrid factory class to create datagrid
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
interface DataGridFactoryInterface
{

    /**
     * Create a datagrid from DataGridInterface
     *
     * @param string $name;                   
     * @return Neutron\DataGridBundle\DataGrid\DataGridInterface
     */
    public function createDataGrid ($name);

}