<?php

namespace GeekBrains\Factories;

use GeekBrains\Person\Name;
use GeekBrains\Services\NameGeneratorService;
use GeekBrains\Services\NameGeneratorServiceInterface;

final class NameFactory implements NameFactoryInterface
{
    private static NameFactory $instance;
    private static NameGeneratorService|NameGeneratorServiceInterface|null $nameGeneratorService = null;

    private function __construct(NameGeneratorServiceInterface $nameGeneratorService = null)
    {
        self::$nameGeneratorService = $nameGeneratorService ?? new NameGeneratorService();
    }

    public static function getInstance(): NameFactory
    {
        if (!isset(self::$instance)) {
            self::$instance = new NameFactory();
        }

        return self::$instance;
    }

    public function createName(): Name
    {
        return self::$nameGeneratorService->generateName();
    }
}