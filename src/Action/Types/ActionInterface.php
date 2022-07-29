<?php
namespace Debuqer\TikaFormBuilder\Action\Types;

use Debuqer\TikaFormBuilder\DataStructure\Contracts\ConfigContainerInterface;
use Debuqer\TikaFormBuilder\Form;

interface ActionInterface
{
    /**
     * BaseAction constructor.
     * @param $name
     * @param ConfigContainerInterface $config
     */
    public function __construct($name,
                                ConfigContainerInterface $config
    );
    public function run(Form &$form);


    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getEvent();

    /**
     * @return ConfigContainerInterface
     */
    public function getConditions();

    /**
     * @return ConfigContainerInterface
     */
    public function getParameters();

    public function isRunnable(Form &$form);
}