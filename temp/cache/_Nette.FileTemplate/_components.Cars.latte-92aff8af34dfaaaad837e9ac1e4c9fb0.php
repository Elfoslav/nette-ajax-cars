<?php //netteCache[01]000374a:2:{s:4:"time";s:21:"0.18129000 1374425412";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"F:\wamp2\www\NetteAjaxCars\app\components\Cars.latte";i:2;i:1374425410;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: F:\wamp2\www\NetteAjaxCars\app\components\Cars.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'jy8rw4og71')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _cars
//
if (!function_exists($_l->blocks['_cars'][] = '_lbee2eee6974__cars')) { function _lbee2eee6974__cars($_l, $_args) { extract($_args); $_control->validateControl('cars')
?><div id="cars">
    Cars count: <?php echo Nette\Templating\Helpers::escapeHtml(count($cars), ENT_NOQUOTES) ?>

<?php $iterations = 0; foreach ($cars as $car): if ($cars): ?>	<ul>
		<li>
            <h3><a href="<?php echo htmlSpecialChars($_presenter->link("Cars:show", array($car->id))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($car->name, ENT_NOQUOTES) ?></a></h3>
<?php $_ctrl = $_control->getComponent("carActions"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render($car) ?>
        </li>
	</ul>
<?php endif ;$iterations++; endforeach ?>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>
<div id="<?php echo $_control->getSnippetId('cars') ?>"><?php call_user_func(reset($_l->blocks['_cars']), $_l, $template->getParameters()) ?>
</div>