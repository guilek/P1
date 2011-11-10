/*
* 2007-2011 PrestaShop 
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
*  @copyright  2007-2011 PrestaShop SA
*  @version  Release: $Revision: 8160 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

function updateAddress(phone)
{
	$.ajax({
		type: 'GET',
		url:  baseDir+'modules/reverso/reverso_check.php?phone=' + $('#reverso_form').val(),
		async: true,
		cache: false,
		type: 'text',
		success: function(data)
		{
			if (data == 0)
			{
				alert(unknown_number);
				return false;
			}
			else if (data == 11)
			{
				return false;
			}
			var fields = data.split(',');
			$(fields).each(function(){
				var field  = this.split(':');
				if (orderProcess == 'order-opc')
					$('form#opc_account_form  input[name=\''+ field[0] +'\']').val(field[1]);
				else
					$('form#account-creation_form  input[name=\''+ field[0] +'\']').val(field[1]);
			});
		}
	});
	return false;
}

$(document).ready(function(){
	$('#reverso_form').typeWatch({
		callback:function(){ updateAddress();}, 
		wait:800, 
		highlight:false, 
		enterkey:false
	});
});
