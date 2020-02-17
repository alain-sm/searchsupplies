<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;

class searchsuppliesbyprinter extends Module
{
    public function __construct()
    {
        $this->name = 'searchsuppliesbyprinter';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
		$this->author = 'Shopmat';
		$this->need_instance = 0;

        $this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Search supplies by printer');
        $this->description = $this->l('Supplies search engine');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => '1.6.99.99');
    }

	public function install()
	{
		/*$success = (parent::install() &&
			$this->registerHook('header') && $this->registerHook('leftColumn') 
                        && $this->registerHook('displayTop') && $this->registerHook('displayMobileTopSiteMap')*/
            $success = (parent::install() &&
		$this->registerHook('displayTop') && $this->registerHook('displayMobileTopSiteMap')
		);

		return $success;
	}

	public function uninstall()
	{
		if (!parent::uninstall() 
		)
			return false;

		return true;
	}

	/*public function hookLeftColumn($params)
	{
        
        $sql = 'SELECT nom FROM test_sm.sm_manufacturers';
        $results = Db::getInstance()->ExecuteS($sql);
        
        if ($results !== false) 
        {   
            $this->smarty->assign(array('manufacturers' => $results));
               
        }
        $this->smarty->assign('test','123456');
        $this->_clearCache('searchsuppliesbyprinter.tpl');
	return $this->display(__FILE__, 'searchsuppliesbyprinter.tpl'); 
                
	}
  
	public function hookHeader($params)
	{
		return $this->hookLeftColumn($params);
	}*/
        public function hookDisplayTop($params)
	{
		return $this->display(__FILE__, 'searchsuppliesbyprinter-button.tpl');
	}
        public function HookDisplayMobileTopSiteMap($params)
	{
		return $this->hookDisplayTop($params);
	}

  
}
