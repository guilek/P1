<?php /*%%SmartyHeaderCode:8528326964eba8e42d89c28-49929467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc83f4d0f49ec1a652b0c8c051a8ecdd83a3b879' => 
    array (
      0 => '/home/www/site2/prestashop/modules/blockcategories/blockcategories.tpl',
      1 => 1306507748,
      2 => 'file',
    ),
    '6f396656e50232f191159325f77dea0fc5d983ba' => 
    array (
      0 => '/home/www/site2/prestashop/modules/blockcategories/category-tree-branch.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8528326964eba8e42d89c28-49929467',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Cat&eacute;gories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://site2.ip-formation.local/prestashop/category.php?id_category=2"  title="Il est temps, pour le meilleur lecteur de musique, de remonter sur scène pour un rappel. Avec le nouvel iPod, le monde est votre scène.">iPods</a>
	</li>
												
<li >
	<a href="http://site2.ip-formation.local/prestashop/category.php?id_category=3"  title="Tous les accessoires à la mode pour votre iPod">Accessoires</a>
	</li>
												
<li class="last">
	<a href="http://site2.ip-formation.local/prestashop/category.php?id_category=4"  title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la mémoire à profusion et d&#039;autres nouveautés. Le tout, dans à peine 2,59 cm qui vous libèrent de toute entrave. Les nouveaux portables Mac réunissent les performances, la puissance et la connectivité d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>
							</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php } ?>