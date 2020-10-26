<?php

class BaseUpdaterTest extends BaseTestSetup
{



    protected function setUp() {
        parent::setUp();

        $this->em = $this->container->get('doctrine.orm.default_entity_manager');
        $this->entityHydrator = $this->container->get('System\Service\EntityHydrator');

    }


}
