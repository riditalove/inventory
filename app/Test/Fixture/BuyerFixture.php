<?php
/**
 * Buyer Fixture
* Owner: Abdul Jalil
* http://www.softwareend.com
 */
class BuyerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'buyer_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ownership' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'acceptable_payment_terms' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'tolerance_level_plus' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'tolerance_level_minus' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'country_id' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'major_markets' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'establishment_year' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reference' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_number' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bank_account_title' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bank_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'branch_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'certifications_third_party_audit' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'social_audit_requirement' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'competitor_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'competitor_type' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'industry_type' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'technical_audit_requirement' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'number_of_stores' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'unsigned' => true),
		'buyers_product_categories' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'buyer_and_ess_pvt' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price_level' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'quality_level' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'general_profile' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'keybcs2_general_ci', 'charset' => 'keybcs2'),
		'current_business_potential' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fututure_business_potential' => array('type' => 'string', 'null' => true, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'any_cradit_rating_available' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ecgc_cover_available' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'any_adverse' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'commission_from_client' => array('type' => 'tinyinteger', 'null' => false, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_from_supplier' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_percentage_buyer' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'commission_percentage_supplier' => array('type' => 'tinyinteger', 'null' => true, 'default' => null, 'length' => 3, 'unsigned' => true),
		'contract_signed' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'local_lang' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'courier' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'courier_acc' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'booking_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sales' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'shipping' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'envelop_contactlist_preview' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'entry_by' => array('type' => 'smallinteger', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => true),
		'edit_by' => array('type' => 'smallinteger', 'null' => true, 'default' => null, 'length' => 5, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'buyer_code' => 'Lorem ipsum dolor ',
			'ownership' => 'Lorem ipsum dolor sit amet',
			'acceptable_payment_terms' => 1,
			'tolerance_level_plus' => 1,
			'tolerance_level_minus' => 1,
			'country_id' => 'Lorem ipsum dolor sit amet',
			'major_markets' => 'Lorem ipsum dolor sit amet',
			'establishment_year' => 'Lo',
			'reference' => 'Lorem ipsum dolor sit amet',
			'contact_number' => 'Lorem ipsum dolor sit amet',
			'bank_account_title' => 'Lorem ipsum dolor sit amet',
			'bank_name' => 'Lorem ipsum dolor sit amet',
			'account_no' => 'Lorem ipsum dolor sit amet',
			'branch_name' => 'Lorem ipsum dolor sit amet',
			'certifications_third_party_audit' => 'Lorem ipsum dolor sit amet',
			'social_audit_requirement' => 'Lorem ipsum dolor sit amet',
			'competitor_name' => 'Lorem ipsum dolor sit amet',
			'competitor_type' => 1,
			'industry_type' => 'Lorem ipsum dolor sit amet',
			'technical_audit_requirement' => 'Lorem ipsum dolor sit amet',
			'number_of_stores' => 1,
			'buyers_product_categories' => 'Lorem ipsum dolor sit amet',
			'buyer_and_ess_pvt' => 'Lorem ipsum dolor sit amet',
			'price_level' => 1,
			'quality_level' => 'Lorem ipsum dolor sit amet',
			'general_profile' => 'Lorem ipsum dolor sit amet',
			'current_business_potential' => 'Lorem ipsum dolor sit amet',
			'fututure_business_potential' => 'Lorem ipsum dolor sit amet',
			'any_cradit_rating_available' => 'Lorem ipsum dolor sit amet',
			'ecgc_cover_available' => 1,
			'any_adverse' => 'Lorem ipsum dolor sit amet',
			'commission_from_client' => 1,
			'commission_from_supplier' => 1,
			'commission_percentage_buyer' => 1,
			'commission_percentage_supplier' => 1,
			'contract_signed' => 1,
			'local_lang' => 'Lorem ipsum dolor sit amet',
			'telephone' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'courier' => 'Lorem ipsum dolor sit amet',
			'courier_acc' => 'Lorem ipsum dolor sit amet',
			'booking_no' => 'Lorem ipsum dolor sit amet',
			'sales' => 'Lorem ipsum dolor sit amet',
			'account' => 'Lorem ipsum dolor sit amet',
			'shipping' => 'Lorem ipsum dolor sit amet',
			'envelop_contactlist_preview' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2019-10-31 11:23:57',
			'modified' => '2019-10-31 11:23:57',
			'entry_by' => 1,
			'edit_by' => 1
		),
	);

}
