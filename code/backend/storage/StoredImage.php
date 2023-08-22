<?php 
    namespace IOJaegers\OceanApi\backend\storage;

    class StoredImage
    {
        public function __construct(
            string $value
        )
        {
            $this->set_location(
                $value
            );
        }

        private string | null $location = null;

        public function get_location(): string
        {
            return $this->location;
        }

        public function set_location(
            string $value
        ): void 
        {
            $this->location = $value;
        }
    }
?>