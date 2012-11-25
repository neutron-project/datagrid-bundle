<?php
/*
 * This file is part of NeutronDataGridBundle
 *
 * (c) Nikolay Georgiev <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Neutron\DataGridBundle;

/**
 * This class describes all events in DataGridBundle
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
class DataGridEvents
{    
    /**
     * Event is dispatched when mass action is triggered
     */
    const onMassAction = 'neutron_datagrid.onMassAction';
    
    /**
     * Event is dispatched when row position is changed
     */
    const onRowPositionChange = 'neutron_datagrid.onRowPositionChange';

    /**
     * Event is dispatched when adding new record
     */
    const onRowAdd = 'neutron_datagrid.onRowAdd';

    /**
     * Event is dispatched when editing record
     */
    const onRowEdit = 'neutron_datagrid.onRowEdit';

    /**
     * Event is dispatched when adding deleting record
     */
    const onRowDel = 'neutron_datagrid.onRowDel';
    
    /**
     * Event is dispatched after query is ready
     */
    const onQueryReady = 'neutron_datagrid.onQueryReady';
    
    /**
     * Event is dispatched right after data is ready
     */
    const onDataReady = 'neutron_datagrid.onDataReady';
}
