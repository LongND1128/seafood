<?php

class Actions extends \Magento\Backend\App\Action
{

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|\Magento\Framework\App\ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        // TODO: Implement execute() method.
        $_preparedActions = ['index', 'grid', 'new', 'edit', 'save', 'duplicate', 'delete', 'config', 'massStatus'];
        $_action = $this->getRequest()->getActionName();
        if (in_array($_action, $_preparedActions)) {
            $method = '_'.$_action.'Action';
            $this->$method();
        }
    }
}
