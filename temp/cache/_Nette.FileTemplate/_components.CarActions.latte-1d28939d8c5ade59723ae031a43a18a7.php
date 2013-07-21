<?php //netteCache[01]000380a:2:{s:4:"time";s:21:"0.54591100 1374428037";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:58:"F:\wamp2\www\NetteAjaxCars\app\components\CarActions.latte";i:2;i:1374428007;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"dc83a21 released on 2013-07-11";}}}?><?php

// source file: F:\wamp2\www\NetteAjaxCars\app\components\CarActions.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'bk56va6vfn')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block _actions
//
if (!function_exists($_l->blocks['_actions'][] = '_lb9471b20e2c__actions')) { function _lb9471b20e2c__actions($_l, $_args) { extract($_args); $_control->validateControl('actions')
?>    With AJAX: 
<?php if ($car->liked): ?>
        <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("unlike!", array($car->id))) ?>
">Unlike</a>
<?php else: ?>
        <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("like!", array($car->id))) ?>
">Like</a>
<?php endif ?>
    , <a class="ajax" href="<?php echo htmlSpecialChars($_control->link("delete!", array($car->id))) ?>
">Delete</a>
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
?>
<div>
    No AJAX:
<?php if ($car->liked): ?>
        <a class="no-ajax" href="<?php echo htmlSpecialChars($_control->link("unlike!", array($car->id))) ?>
">Unlike</a>
<?php else: ?>
        <a class="no-ajax" href="<?php echo htmlSpecialChars($_control->link("like!", array($car->id))) ?>
">Like</a>
<?php endif ?>
    , <a class="no-ajax" href="<?php echo htmlSpecialChars($_control->link("delete!", array($car->id))) ?>
">Delete</a>
</div>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); } ?>
<div id="<?php echo $_control->getSnippetId('actions') ?>"><?php call_user_func(reset($_l->blocks['_actions']), $_l, $template->getParameters()) ?>
</div>