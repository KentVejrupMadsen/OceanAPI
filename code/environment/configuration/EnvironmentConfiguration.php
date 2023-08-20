<?php 
    namespace IOJaegers\OceanApi\environment\configuration;

    use IOJaegers\OceanApi\environment\configuration\ConfigurationTemplate 
        as Template;

    class EnvironmentConfiguration 
        extends Template
    {
        public function __construct() 
        {
            $this->set_definitions(
                array()
            );
        }

        private $definitions;

        public function get_definitions(): array
        {
            return $this->definitions;
        }

        public function set_definitions(
            array $definitions
        ): void
        {
            $this->definitions = $definitions;
        }
    }
?>