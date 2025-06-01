<?php
namespace Framework;

use ReflectionClass;

class Container{
    public function getObject(string $class_name): object{
        $reflector = new ReflectionClass($class_name);

        $constructor = $reflector->getConstructor(); 

        $dependencies = [];
        
        if($constructor === null){
            return new $class_name;
        }

        foreach($constructor->getParameters() as $parameters){
            $type = (string) $parameter->getType();
            $dependencies[] =  $this->getObject($type); 
        }
        
        return new $class_name(...$dependencies);
    }
}