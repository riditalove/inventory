<?php

App::uses('AppModel', 'Model');

/**
 * Supplier Model
 * Owner: Abdul Jalil
 * http://www.softwareend.com
 *
 * @property Development $Development
 * @property Developmentnegotiation $Developmentnegotiation
 * @property Developmentorder $Developmentorder
 * @property Supplieraudit $Supplieraudit
 * @property Suppliercontact $Suppliercontact
 * @property Supplierdocument $Supplierdocument
 * @property Supplierimage $Supplierimage
 */
class Supplier extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'no_of_employee' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'minimum_order_value' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'status' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'entry_by' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     * 
     */


    public $hasMany = array(
        'Merchandisingfabric' => array(
            'className' => 'Merchandisingfabric',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Developmentnegotiation' => array(
            'className' => 'Developmentnegotiation',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Developmentorder' => array(
            'className' => 'Developmentorder',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Supplieraudit' => array(
            'className' => 'Supplieraudit',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Suppliercontact' => array(
            'className' => 'Suppliercontact',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Supplierdocument' => array(
            'className' => 'Supplierdocument',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Supplierimage' => array(
            'className' => 'Supplierimage',
            'foreignKey' => 'supplier_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
