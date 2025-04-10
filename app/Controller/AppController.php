<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Component', 'Controller');
// require_once(ROOT . DS . 'vendor' . DS . 'autoload.php');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('Auth', 'Session', 'Cookie', 'Paginator', 'Flash');
    public $perms = null;
    private $seasons = array(E_ERROR => 'Pre-Fall', E_WARNING => 'Winter', E_PARSE => 'Summer');
    private $units = array(1 => 'Piece', 2 => 'Throw Box', 3 => 'Dozen', 4 => 'Lbs', 5 => 'Rim');
    private $currencies = array(1 => 'USD', 2 => 'EURO', 3 => 'BDT', 4 => 'RMB', 5 => 'INR');
    private $shipmodes = array(1 => 'Air', 2 => 'Sea');
    
    private $prod_steps = array('productionstyles' => 'Style',
        'production1stsewingthreads' => '1st sewing thread',
        'production2ndsewingthreads' => '2nd sewing thread',
        'production1stlabdips' => '1st lab dip',
        'production2ndlabdips' => '2nd lab dip',
        'production1stwashes' => '1st wash',
        'production2ndwashes' => '2nd wash',
        'production1stpocketinglabdips' => '1st pocketing lab dip',
        'production2ndpocketinglabdips' => '2nd pocketing lab dip',
        'production1stpocketingaopes' => '1st pocketing AOP',
        'production2ndpocketingaopes' => '2nd pocketing AOP',
        'production1stpocketingydces' => '1st pocketing YDC',
        'production2ndpocketingydces' => '2nd pocketing YDC',
        'production1stzippers' => '1st zipper',
        'production2ndzippers' => '2nd zipper',
        'production1sttapes' => '1st tape',
        'production2ndtapes' => '2nd tape',
        'production1stbuttons' => '1st button',
        'production2ndbuttons' => '2nd button',
        'production1steyelets' => '1st eyelet',
        'production2ndeyelets' => '2nd eyelet',
        'production1strivets' => '1st rivet',
        'production2ndrivets' => '2nd rivet',
        'production1stfancyrivets' => '1st fancy rivet',
        'production2ndfancyrivets' => '2nd fancy rivet',
        'production1stembroideries' => '1st embroidery',
        'production2ndembroideries' => '2nd embroidery',
        'production1stprints' => '1st print',
        'production2ndprints' => '2nd print',
        'production1stherringbones' => '1st Herringbone',
        'production2ndherringbones' => '2nd Herringbone',
        'production1stjacrons' => '1st Jacron ',
        'production2ndjacrons' => '2nd Jacron',
        'production1stwovens' => '1st Woven',
        'production2ndwovens' => '2nd Woven',
        'production1stprotos' => '1st Proto',
        'production2ndprotos' => '2nd Proto',
        'production1stsmses' => '1st SMS',
        'production2ndsmses' => '2nd SMS',
        'production1stsizes' => '1st Size',
        'production2ndsizes' => '2nd Size',
        'production1stppssamples' => '1st PPS Sample',
        'production2ndppssamples' => '2nd PPS Sample',
        'productionwarehousesamples' => 'Warehouse Sample',
        'production1stcarelables' => '1st Care Lable',
        'production2ndcarelables' => '2nd Care Lable');
    private $commercialItems = array('commercialcuttings' => 'Cutting',
        'commercialembroideries' => 'Embroideries',
        'commercialfabricstatuses' => 'Fabic Status',
        'commercialfinalinspections' => 'Final Inspection',
        'commercialfinishings' => 'Finishing',
        'commercialfullgarmenttests' => 'Full Garment Test',
        'commerciallcs' => 'LCS',
        'commercialpackings' => 'Packing',
        'commercialppmeetings' => 'PP Meeting',
        'commercialprefinalinspections' => 'Pre-final Inspection',
        'commercialprintings' => 'Printing',
        'commercialproductionpermissions' => 'Production Permission',
        'commercialsewingiteminhousestatuses' => 'Swewing Item Inhouse status',
        'commercialshipments' => 'Shipments',
        'commercialshipmodes' => 'Ship Modes',
        'commercialswewings' => 'Swewings',
        'commercialwashings' => 'Washings',
    );
    private $followUpItems = array('followupbuttons' => 'Button',
        'followupcarelables' => 'Care Label',
        'followupembroideries' => 'Embroideries',
        'followupeyelets' => 'Eyelet',
        'followupfancyrivets' => 'Fancy Rivet',
        'followupherringbones' => 'Herring Bone',
        'followupjacrons' => 'Jacron',
        'followuplabdips' => 'Labdip',
        'followuppocketingaopes' => 'Pocketing AOP',
        'followuppocketinglabdips' => 'Pocketing Labdip',
        'followuppocketingydces' => 'Pocketing YDC',
        'followupppssamples' => 'PPS Sample',
        'followupprints' => 'Print',
        'followupprotos' => 'Proto',
        'followuprivets' => 'Rivet',
        'followupsewingthreads' => 'Swewingthread',
        'followupsizes' => 'Size',
        'followupsmses' => 'SMS',
        'followuptapes' => 'Tape',
        'followupwashes' => 'Wash',
        'followupwovens' => 'woven',
        'followupzippers' => 'Zipper',
    );
    private $testItems = array('test1stfabrics' => '1st Fabric',
        'test2ndfabrics' => '2nd Fabric',
        'test3rdfabrics' => '3rd Fabric',
        'test1stgarments' => '1st Garment',
        'test2ndgarments' => '2nd Garment',
        'test3rdgarments' => '3rd Garment',
    );
    private $validationItems = array('validation1stprotosamples' => '1st Proto Sample',
        'validation2ndprotosamples' => '2nd Proto Sample',
        'validation3rdprotosamples' => '3rd Proto Sample',
        'validation1stsmssamples' => '1st Sms Sample',
        'validation2ndsmssamples' => '2nd Sms Sample',
        'validation3rdsmssamples' => '3rd Sms Sample',
    );

    public function beforeFilter() {
        $this->getSiteSetting();

        if ($this->Auth->loggedIn()) {
            $this->perms = json_decode($this->Auth->user('Role.roles'), true);
            $this->set('perms', $this->perms);
            $this->isAuthorized();
            $this->getSiteNotify();

            $this->set('current_user', $this->Auth->user());
            $this->set('units', $this->units);
            $this->set('currencies', $this->currencies);
            $this->set('shipmodes', $this->shipmodes);

            $this->set('prod_steps', $this->prod_steps);
            $this->set('followUpItems', $this->followUpItems);
            $this->set('validationItems', $this->validationItems);
            $this->set('testItems', $this->testItems);
            $this->set('commercialItems', $this->commercialItems);
            $this->set('seasons', $this->seasons);
            $this->set('status', array(E_ERROR => '<span class="label label-success">Active</span>', PHP_DEBUG => '<span class="label label-danger">Inactive</span>'));
            $this->set('genders', array(E_ERROR => 'Male', E_WARNING => 'Female', E_PARSE => 'Neuter'));
            $this->set('rounds', array('0' => 'info', '1' => 'warning', '2' => 'danger', '3' => 'success', '4' => 'primary'));
            $this->set('pstatus',  array('0' => 'Allocated','1' => 'Checkout', '2' => 'Reallocate', '3' => 'Broken - Not Fixable', '4' => 'Lost/Stolen', '5' => 'Out for Repair', '6' => 'Archived'));
        }

        $this->saveLog();
    }

    private function isAuthorized() {
        if (in_array($this->params['action'], $this->Auth->allowedActions)) {
            return true;
        }
        if (!isset($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']]) || is_numeric($this->perms[Inflector::camelize($this->params['controller']) . "Controller"][$this->params['action']])) {
            //throw new UnauthorizedException(__('You are not authorized to access this page.'));
        } else {
            //echo Router::url(['controller' => $this->params['controller'], 'action' => 'index']);
            return true;
        }
    }

    private function saveLog() {
        $log = array();
        $log['Log']['id'] = null;
        $log['Log']['user_id'] = $this->Auth->user('id');
        $log['Log']['ip'] = $_SERVER['REMOTE_ADDR'];
        $log['Log']['port'] = $_SERVER['REMOTE_PORT'];
        $log['Log']['controller'] = $this->params['controller'];
        $log['Log']['action'] = $this->here;

        ClassRegistry::init('Log')->save($log);
    }

    /**
     * function saveNotification
     * @param Int $user_id
     * @param Text $type2
     * @param Text $data
     * @param Text $type
     * @param Int $id
     * @param Text $ext
     */
    protected function saveNotification($user_id, $type2, $data, $type, $id, $ext = null) {
        $notification = array();
        $notification['Notification']['id'] = null;
        $notification['Notification']['user_id'] = $user_id;
        $notification['Notification']['type2'] = $type2;
        $notification['Notification']['data'] = $data;
        $notification['Notification']['type'] = $type;
        $notification['Notification']['typeid'] = $id;
        $notification['Notification']['ext'] = $ext;
        $notification['Notification']['status'] = E_WARNING;

        ClassRegistry::init('Notification')->save($notification);
    }

    private function getSiteSetting() {
        if (!defined('COMPANY_NAME')) {
            $conf = ClassRegistry::init('Config')->find('list', array('fields' => array('key', 'value')));
            foreach ($conf as $key => $value) {
                define($key, $value);
            }
        }
    }

    private function getSiteNotify() {
        $this->loadModel('Notification');

        $tleave = 0;//$this->Notification->find('count', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Leave', 'type2' => E_ERROR, 'status' => E_WARNING), 'recursive' => -1));
        $tleaveo = 0;//$this->Notification->find('count', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Leave', 'type2' => E_WARNING, 'status' => E_WARNING), 'recursive' => -1));
        $leavel = 0;//$this->Notification->find('first', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Leave'), 'fields' => array('created'), 'order' => array('created' => 'DESC'), 'recursive' => -1));
        $this->set(compact('tleave', 'leavel', 'tleaveo'));

        $tonduty = 0;//$this->Notification->find('count', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Onduty', 'type2' => E_ERROR, 'status' => E_WARNING), 'recursive' => -1));
        $tondutyo = 0;//$this->Notification->find('count', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Onduty', 'type2' => E_WARNING, 'status' => E_WARNING), 'recursive' => -1));
        $ondutyl = 0;//$this->Notification->find('first', array('conditions' => array('user_id' => $this->Auth->user('id'), 'type' => 'Onduty'), 'fields' => array('created'), 'order' => array('created' => 'DESC'), 'recursive' => -1));
        $this->set(compact('tonduty', 'ondutyl', 'tondutyo'));
    }

    protected function getmenues() {
        $aCtrlClasses = App::objects('controller');
        $ignore = 'AppController';
        App::import('Controller', $ignore);
        $ignoreActions = get_class_methods($ignore);

        $controllers = array();
        foreach ($aCtrlClasses as $controller) {
            if ($controller != $ignore) {
                App::import('Controller', str_replace('Controller', '', $controller));
                $methods = get_class_methods($controller);
                $controllers[$controller] = array_diff($methods, $ignoreActions);

                foreach ($controllers[$controller] as $key => $value) {
                    unset($controllers[$controller][$key]);
                    $controllers[$controller][$value] = $value;
                }
            }
        }
        return $controllers;
    }

    protected function tojson($arrr, $object) {
        $arrs = array();
        foreach ($arrr as $arr) {
            $arrs[] = $arr[$object];
        }
        return json_encode($arrs);
    }

    protected function tolist($arrr, $object, $field) {
        $arrs = array();
        foreach ($arrr as $arr) {
            $arrs[$arr[$object]['id']] = $arr[$object][$field];
        }
        return $arrs;
    }

    protected function updateStore($value, $sub, $e, $x) {
        $clsP = ClassRegistry::init('Material');
        $product = $clsP->find('first', array('conditions' => array('Material.id' => $value['material_id']), 'recursive' => -1));
        if ($sub) {
            $product['Material']['stock'] = ($product['Material']['stock'] - $value['qty']);
        } else {
            $product['Material']['stock'] = ($product['Material']['stock'] + $value['qty']);
        }
        if ($e == 1) {
            $product['Material']['entry'] = ($product['Material']['entry'] + $value['qty']);
        }
        if ($e == 2) {
            $product['Material']['entry'] = ($product['Material']['entry'] - $value['qty']);
        }
        if ($x == 1) {
            $product['Material']['exit'] = ($product['Material']['exit'] + $value['qty']);
        }
        if ($x == 2) {
            $product['Material']['exit'] = ($product['Material']['exit'] - $value['qty']);
        }
        $clsP->save($product);
    }

    protected function updateStock($value, $sub, $e, $x, $Model) {
        $clsP = ClassRegistry::init($Model);
        $product = $clsP->find('first', array('conditions' => array($Model . '.id' => $value[strtolower($Model) . '_id']), 'recursive' => -1));

        if ($sub) {
            $product[$Model]['stock'] = ($product[$Model]['stock'] - $value['qty']);
        } else {
            $product[$Model]['stock'] = ($product[$Model]['stock'] + $value['qty']);
        }

        if ($e == 1) {
            $product[$Model]['entry'] = ($product[$Model]['entry'] + $value['qty']);
        }
        if ($e == 2) {
            $product[$Model]['entry'] = ($product[$Model]['entry'] - $value['qty']);
        }
        if ($x == 1) {
            $product[$Model]['exit'] = ($product[$Model]['exit'] + $value['qty']);
        }
        if ($x == 2) {
            $product[$Model]['exit'] = ($product[$Model]['exit'] - $value['qty']);
        }
        $clsP->save($product);
    }

    protected function get_Action($typ, $created) {
        return ClassRegistry::init('Action')->find('count', array('conditions' => array('typ' => $typ, 'created' => $created)));
    }

    protected function set_Action($typ, $created) {
        $data = array();
        $data['Action']['typ'] = $typ;
        $data['Action']['created'] = $created;
        ClassRegistry::init('Action')->save($data);
    }

    protected function callToSMSApi($mobile, $sms) {
        $data = [
            'api_key' => 'KEY-6ad9lxmkbwatyw36d7hamypi87e40ptm',
            'api_secret' => '4xNFqWRGZMaYjTUW',
            'request_type' => 'SINGLE_SMS',
            'message_type' => 'TEXT',
            'mobile' => $mobile,
            'message_body' => $sms
        ];

        try {
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($curl, CURLOPT_URL, 'https://portal.adnsms.com/api/v1/secure/send-sms');
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            curl_setopt($curl, CURLOPT_POST, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            $output = curl_exec($curl);

            if ($output === NULL) {
                echo "<pre>curl_error:";
                print_r(curl_error($curl));
                echo "</pre><pre>curl_errno:";
                print_r(curl_errno($curl));
                echo "</pre>";
            } else {
                echo $output;
            }
            curl_close($curl);
        } catch (Exception $e) {
            echo "<pre>";
            print_r($e->getCode());
            echo "</pre><pre>";
            print_r($e->getMessage());
            echo "</pre>";
        }
    }
    
    
    

}

class Num2TextClass {

    private $_original = 0;
    private $_parsed_number_text = '';
    private $_single_nums = array(1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine');
    private $_teen_nums = array(0 => 'Ten', 1 => 'Eleven', 2 => 'Twelve', 3 => 'Thirteen', 4 => 'Fourteen', 5 => 'Fifteen', 6 => 'Sixteen', 7 => 'Seventeen', 8 => 'Eighteen', 9 => 'Nineteen');
    private $_tens_nums = array(2 => 'Twenty', 3 => 'Thirty', 4 => 'Forty', 5 => 'Fifty', 6 => 'Sixty', 7 => 'Seventy', 8 => 'Eighty', 9 => 'Ninety');
    private $_chunks_nums = array(1 => 'Thousand', 2 => 'Million', 3 => 'Billion', 4 => 'Trillion', 5 => 'Quadrillion', 6 => 'Quintrillion', 7 => 'Sextillion', 8 => 'Septillion', 9 => 'Octillion', 10 => 'Nonillion', 11 => 'Decillion');

    public function parse($new_number) {
        $this->_original = trim($new_number);
        if ($this->_original == 0) {
            return 'Zero';
        }

        $num = str_split($this->_original, 1);
        krsort($num);
        $chunks = array_chunk($num, 3);
        krsort($chunks);

        $final_num = array();
        foreach ($chunks as $k => $v) {
            ksort($v);
            $temp = trim($this->_parse_num(implode('', $v)));
            if ($temp != '') {
                $final_num [$k] = $temp;
                if (isset($this->_chunks_nums [$k]) && $this->_chunks_nums [$k] != '') {
                    $final_num [$k] .= ' ' . $this->_chunks_nums [$k];
                }
            }
        }
        $this->_parsed_number_text = implode(', ', $final_num);

        return $this->_parsed_number_text;
    }

    private function _parse_num($num) {
        $temp = array();
        if (isset($num [2])) {
            if (isset($this->_single_nums [$num [2]])) {
                $temp ['h'] = $this->_single_nums [$num [2]] . ' Hundred';
            }
        }

        if (isset($num [1])) {
            if ($num [1] == 1) {
                $temp ['t'] = $this->_teen_nums [$num [0]];
            } else {
                if (isset($this->_tens_nums [$num [1]])) {
                    $temp ['t'] = $this->_tens_nums [$num [1]];
                }
            }
        }

        if (!isset($num [1]) || $num [1] != 1) {
            if (isset($this->_single_nums [$num [0]])) {
                if (isset($temp ['t'])) {
                    $temp ['t'] .= ' ' . $this->_single_nums [$num [0]];
                } else {
                    $temp ['u'] = $this->_single_nums [$num [0]];
                }
            }
        }

        return implode(' and ', $temp);
    }

}