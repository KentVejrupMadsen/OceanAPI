<?php 
    namespace IOJaegers\OceanApi\environment\configuration;

    abstract class ConfigurationTemplate
    {
        public abstract function get_definitions(): array;
        
        public abstract function set_definitions(
            array $definitions
        ): void;
    }
?>