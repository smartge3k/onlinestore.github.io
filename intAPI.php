<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OpenAPI
 */
class OpenAPI {

    function  inquireTransaction() {
        $client = new SoapClient("https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl");
		$client->__setLocation("https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService");

		$inquireResponse = $client->__soapCall("inquireTransaction", array("inquireTransactionRequestType" => array(
			"username"=>"shaheenadventures@gmail.com", 
			"password"=>"123@abc@ABC$", 
			"orderId"=>"1008", 
			"accountNum"=>"56605507"
		)));

		var_dump($inquireResponse);
    }

    function  initiateTransaction() {
        $client = new SoapClient("https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService/META-INF/wsdl/partner/transaction/PartnerBusinessService.wsdl");
		$client->__setLocation("https://easypay.easypaisa.com.pk/easypay-service/PartnerBusinessService");

		$initiateResponse = $client->__soapCall("initiateTransaction", array("initiateTransactionRequestType" => array(
			"username"=>"shaheenadventures", 
			"password"=>"85ef52b04195c8e583a3a37de9de8ba", 
			"orderId"=>"1008", 
			"storeId"=>"6318", 
			"transactionAmount"=>"5.00", 
			"transactionType"=>"OTC", 
			"mobileAccountNo"=>"03475259212", 
			"emailAddress"=>"info@shaheenadventures.com"
		)));

        var_dump($initiateResponse);
    }
}
