<?php

namespace ThomasBrillion\Module\Support;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Contracts\Container\Container;

class ModelHandler
{
    public ?string $model = null;

    public Container $container;

    protected static ?self $instance = null;

    protected static function getInstance(): static
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public static function registerContainer(Container $container): void
    {
        static::getInstance()->container = $container;
    }

    /**
     * @throws \Exception
     */
    public static function registerModel(string $model): void
    {
        if (!class_exists($model)) {
            throw new \Exception("Class $model doesn't exist", 404);
        }
        $model = new $model;
        if (!$model instanceof Model) {
            throw new \Exception("Model should be instance of Illuminate\Database\Eloquent\Model");
        }

        static::getInstance()->model = get_class($model);
    }

    public static function query(): Builder
    {
        $model = static::getInstance()->model;
        if (empty($model)) {
            $class = get_class(static::getInstance());
            throw new \Exception("Please register model with $class::registerModel", 404);
        }
        return (new $model)->newQuery();
    }


    public static function container(): Container
    {
        return static::getInstance()->container;
    }
}
