<?php
    namespace App\Services;

    class CustomPaymentGateway implements PaymentServiceContract
    {
        protected $secretKey;

        public function __construct(string $secretKey2){
            $this->secretKey = $secretKey2;
        }

        public function execute()
        {
            return 'custom payment gateway';
        }
    }
?>
