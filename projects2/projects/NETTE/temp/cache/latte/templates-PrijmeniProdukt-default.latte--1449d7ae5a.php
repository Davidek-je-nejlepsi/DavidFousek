<?php
// source: C:\wamp\www\DavidFousek\projects2\projects\NETTE\app\presenters/templates/PrijmeniProdukt/default.latte

use Latte\Runtime as LR;

class Template1449d7ae5a extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<h1>Hovno</h1>
<?php
		/* line 3 */ $_tmp = $this->global->uiControl->getComponent("prijmeniProdukt");
		if ($_tmp instanceof Nette\Application\UI\IRenderable) $_tmp->redrawControl(null, false);
		$_tmp->render();
		
	}

}
