<?php

use \Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Monkey_DatadogLogger',
    __DIR__
);
