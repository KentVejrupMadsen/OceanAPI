<?php
    namespace IOJaegers\OceanApi;

    use IOJaegers\OceanApi\configuration\ConfigurationDriver 
        as Configuration;
    
        
    class OceanAPIFramework
    {
        private $configuration = null;

        public function __construct()
        {
            
        }

        public function initialise()
        {

        }

        public function execute()
        {
            
        }

        public function has_none_configuration(): bool 
        {
            return $this->configuration == null;
        }

        public function get_configuration(): Configuration
        {
            if(
                $this->has_none_configuration()
            ){
                $this->set_configuration(
                    new Configuration()
                );
            }

            return $this->configuration;
        }

        public function set_configuration(
            Configuration $with_configuration
        ){
            $this->configuration = $with_configuration;
        }
    }
?>