<?php

class simpleAjaxView extends PHPDS_view
{
	public function execute()
	{
		$template = $this->template;

		$template->styleForms();
		$template->validateForms();
		$template->styleButtons();
	}
}

return 'simpleAjaxView';
