

<!-- Block search printers module TOP-->

<div id="searchsuppliesbyprinter_block_top" class="col-sm-3 clearfix">
 
	<form id="searchsuppliesbyprinter" method="post" action="{$link->getModuleLink('searchsuppliesbyprinter','manufacturers',[])}" >
            <button type="submit" class="btn btn-primary hover">{l  s='Recherchez vos cartouches par imprimante'  mod='searchsuppliesbyprinter'}</button>
        </form>
 </div>    
<div id="searchsuppliesbyprinter_block_top2" class="col-sm-3 clearfix">
  	<form id="searchsuppliesbyref" method="get" action="{$link->getPageLink('searchsuppliesbyprinter', null, null, null, false, null, true)|escape:'html':'UTF-8'}" >
           <button type="button" class="btn btn-warning hover">{l  s='Recherchez vos cartouches par référence'  mod='searchsuppliesbyprinter'}</button>
        </form>
 </div>     

