<?php
/*
 * This file is part of NeutronDataGridBundle
 *
 * (c) Nikolay Georgiev <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Neutron\DataGridBundle\Twig\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface;

use Neutron\DataGridBundle\DataGrid\DataGridInterface;

/**
 * Twig Extension for rendering initial content of jqgrid
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
class DataGridExtension extends \Twig_Extension
{

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * Construct
     *
     * @param ContainerInterface $container            
     */
    public function __construct (ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions ()
    {
        return array(
            'neutron_datagrid' => new \Twig_Function_Method($this, 'dataGrid', 
                 array('is_safe' => array('html'))
            )
        );
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName ()
    {
        return 'neutron_datagrid';
    }

    /**
     * Rendering initial content of the datagrid
     *
     * @param DataGridInterface|string $dataGrid                     
     * @return string (html response)
     */
    public function dataGrid ($dataGrid)
    {   
        if (!$dataGrid instanceof DataGridInterface){
            $dataGrid = $this->container->get('neutron_data_grid.provider')->get($dataGrid);
        }

        return $this->container->get('templating')->render(
            'NeutronDataGridBundle:DataGrid:index.html.twig', 
            array(
                'dataGrid' => $dataGrid, 
                'translationDomain' => $this->container
                    ->getParameter('neutron_data_grid.translation_domain')
            )
        );
    }

}
