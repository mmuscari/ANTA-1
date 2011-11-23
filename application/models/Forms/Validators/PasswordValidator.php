<?php /**  * @package Forms_Validators  */  /**   * Validate password entries  */ class Application_Model_Forms_Validators_PasswordValidator extends Application_Model_Forms_Validators_JsValidator {    	const LENGTH = 'length';    const UPPER  = 'upper';    const LOWER  = 'lower';    const DIGIT  = 'digit';    			protected $_messageTemplates = array(				self::UPPER  => "'*******' must contain at least one uppercase letter",		self::LOWER  => "'*******' must contain at least one lowercase letter",		self::DIGIT  => "'*******' must contain at least one digit character"    );    	public function generateCryptedValue( $value ){		return str_repeat( "*", strlen( $value ) ); 	}		public function isValid($value){		$this->_setValue( $value );				if ( strlen( $value ) < $this->minLength ) {			$this->_error( "'".$this->generateCryptedValue( $value )."' must be at least " .$this->minLength. " characters in length" );						return false;		}        return true;				if (!preg_match('/\d/', $value)) {			$this->_error(self::DIGIT);			return false;		}        return true;	}		}