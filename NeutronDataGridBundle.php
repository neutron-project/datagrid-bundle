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

use Neutron\DataGridBundle\DependencyInjection\Compiler\DataGridCompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Short description
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
class NeutronDataGridBundle extends Bundle
{
    public function build (ContainerBuilder $container)
    {
        parent::build($container);
    
        $container->addCompilerPass(new DataGridCompilerPass());
    }
}
