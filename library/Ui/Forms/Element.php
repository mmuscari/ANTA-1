<?php/** * @package Ui_Forms */ /** * Base class for form element (input, select, etc..); * Every subclass should have his own constructor method. * as usually, use the __toString method to display the object. */class Ui_Forms_Element {	/**	 * an identifier, html 'id' attribute	 * @var string	 */	public $id;		/**	 * a form value identifier, html 'name' attribute	 * @var string	 */	public $name;		/**	 * his validator, if any	 * @var Ui_forms_Validator	 */	public $validator;		/**	 * @var string	 */	public $label;		/**	 * @var array	 */	public $attr;		/**	 * @var string	 */	protected $_value;		/**	 * @var array	 */	public $atts = array();		/**	 * It contains saved error message thrown by the validator (if any)	 * @var array	 */ 	public $messages = array();		/**	 * check if is already evaluated (cache validator result )	 * @var boolean	 */ 	protected $_evaluated = false;		/**	 * last validator output (cache validator result )	 * @var boolean	 */  	protected $_result = false;		/**	 * add a validator to be used with this element	 * @param Zend_Validate_Abstract validator	 * @param array properties	- a list of key / value pairs to set the validator properties	 */	public function setValidator( Zend_Validate_Abstract $validator, $properties=array() ){				$this->validator = $validator;				foreach( $properties as $key=>$value )			$this->validator->$key = $value;	}		public function getValidator( ){		return $this->validator;	}		/**	 * validate current value	 */	public function isValid(){		return true;	}		/**	 * @param string value	- the element value	 */	public function setDefaultValue( $value ){		$this->_value = $value;	}		/**	 * Css helper. Chain a css class selector to the $atts[ 'class' ] attribute.	 * Add a space char just before each new selector.	 */	public function addClass( $class ){		if( !isset( $this->atts[ 'class' ] ) ){			$this->atts[  'class' ] = $class;			return;		}		$this->atts[ 'class' ] .= ' '.(string)$class;	}}?>