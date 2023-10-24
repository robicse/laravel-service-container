<?php
    namespace App\Services;

    class PaymentGateway
    {
        protected $secretKey;

        public function __construct(string $secretKey2){
            $this->secretKey = $secretKey2;
        }

        public function execute()
        {
            return 'payment gateway';
        }
    }
?>
