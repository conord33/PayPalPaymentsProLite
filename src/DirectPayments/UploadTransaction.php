<?php
namespace PayPalPaymentsProLite;
include_once(__DIR__.'/../PayFlowAPI.php');
class UploadTransaction extends PayFlowAPI{

	protected $validation_parameters;
	
	public function __construct()
	{
		$this->validation_parameters = array(

			'ACCT',
			'EXPDATE',
			'TRXTYPE',
			'TENDER',	
		);
		
		$this->call_variables['TRXTYPE'] = 'L';
		$this->call_variables['TENDER'] = 'C';
		
		
		parent::__construct();
	}
	
}
