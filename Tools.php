<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */


class Tools extends ToolsCore
{

     /**
     * @author RB
     * @param type $idshop ,$idlang
     * @return type
     */
    
    public static function getFaqsDetails($idshop , $idlang){
            $sql = '
                SELECT lg.`id_gomakoil_faq` , lg.`question` , lg.`answer`
                FROM `'._DB_PREFIX_.'gomakoil_faq_lang`  lg
                LEFT JOIN  `'._DB_PREFIX_.'gomakoil_faq_shop` sh ON (lg.`id_gomakoil_faq` = sh.`id_gomakoil_faq`) 
                WHERE  sh.`id_shop` = "'.pSQL($idshop).'"  AND lg.`id_lang` = "'.pSQL($idlang).'" AND sh.`active`= 1' ;
            
         $row = Db::getInstance()->ExecuteS($sql);
        return $row ;
    }
}



