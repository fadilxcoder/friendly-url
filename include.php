<?php

    # REQUIREMENT
    require 'functions.php';
    require 'vendor/autoload.php';

    # CONSTANT
    define('EMAIL', 'fadil@xcoder.dev');

    # NAMESPACE
    use Faker\Factory as FakerFactory;
    use Tracy\Debugger as Debugger;

    $faker = FakerFactory::create();
    Debugger::enable(Debugger::DEVELOPMENT);