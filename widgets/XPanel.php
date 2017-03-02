<?php
namespace andahrm\setting\widgets;


use yiister\gentelella\widgets\Panel;
use rmrevin\yii\fontawesome\component\Icon;

class XPanel extends Panel
{
    public $customTools = [];
    /**
     * Init tool buttons
     */
    protected function initTools()
    {
        if ($this->expandable === true || $this->collapsable === true) {
            $this->tools[] = [
                'encode' => false,
                'label' => new Icon('chevron-' . ($this->expandable === true ? 'down' : 'up')),
                'linkOptions' => ['class' => 'collapse-link'],
                'url' => null,
            ];
        }
        if (empty($this->headerMenu) === false) {
            $this->tools[] = [
                'encode' => false,
                'items' => $this->headerMenu,
                'label' => new Icon('wrench'),
            ];
        }
        if ($this->removable === true) {
            $this->tools[] = [
                'encode' => false,
                'label' => new Icon('close'),
                'linkOptions' => ['class' => 'close-link'],
                'url' => null,
            ];
        }
        if (!empty($this->customTools)) {
            foreach ($this->customTools as $tool) {
                $this->tools[] = $tool;
            }
        }
    }
}