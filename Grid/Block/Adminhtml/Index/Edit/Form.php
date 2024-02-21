<?php

namespace KK\Grid\Block\Adminhtml\Index\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{


    protected $_systemStore;


    protected $_approved;


    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \KK\Grid\Model\Source\Approved $approved,
        array $data = []
    )
    {
        $this->_wysiwygConfig = $wysiwygConfig;
        $this->_approved = $approved;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * @return Form
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _prepareForm()
    {
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(['data' => ['id' => 'edit_form', 'enctype' => 'multipart/form-data', 'action' => $this->getData('action'), 'method' => 'post']]);
        $form->setHtmlIdPrefix('kk_grid_');
        if ($model) {
            $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Review Details'), 'class' => 'fieldset-wide']);
            $fieldset->addField('id', 'hidden', ['name' => 'id']);
        } else {
            $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Review Details'), 'class' => 'fieldset-wide']);
        }
        $fieldset->addField(
            'name',
            'text',
            [
                'name' => 'name',
                'label' => __('Name'),
                'title' => __('Name'),
                'class' => 'required-entry',
                'required' => true,
                //'disabled' => $model ? true : false,
            ]
        );
        $fieldset->addField(
            'gender',
            'text',
            [
                'name' => 'gender',
                'label' => __('Gender'),
                'title' => __('Gender'),
                'class' => 'required-entry',
                'required' => true,
                //'disabled' => $model ? true : false,
            ]
        );

        $fieldset->addField(
        'email',
        'text',
        [
            'name' => 'email',
            'label' => __('Email'),
            'title' => __('Email'),
            'class' => 'required-entry',
            'required' => true,
            //'disabled' => $model ? true : false,
        ]
        );
        $fieldset->addField(
        'status',
        'text',
        [
            'name' => 'status',
            'label' => __('Status Your Guest or Customer'),
            'title' => __('Status Your Guest or Customer'),
            'class' => 'required-entry',
            'required' => true,
          //'disabled' => $model ? true : false,
        ]
        );
        $fieldset->addField(
        'feedback',
        'text',
        [
            'name' => 'feedback',
            'label' => __('Feedback'),
            'title' => __('Feedback'),
            'class' => 'required-entry',
            'required' => true,
            //'disabled' => $model ? true : false,
        ]
        );
        $form->setValues($model ? $model->getData() : '');
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
