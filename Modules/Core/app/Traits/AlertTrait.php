<?php

namespace Modules\Core\app\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait AlertTrait
{
    use LivewireAlert;

    public function topRightAlert($title = '' ,$type = 'error' ,$text = ''): null
    {
        $this->alert($type ,$title ,[
            'position'         => 'top-end',
            'timer'            => 10000,
            'toast'            => true,
            'timerProgressBar' => true,
            'text'             => $text,
            'showCancelButton' => true,
            'cancelButtonText' => ' ',
            'customClass' => [
                'cancelButton' => 'alert-cancel-button ki-outline ki-cross',
            ]
        ]);
        return null;
    }


    public function topRightFlush($title = '' ,$type = 'error' ,$text = ''): void
    {
        $this->flash($type ,$title , [
            'position'         => 'top-end',
            'timer'            => '20000',
            'toast'            => true,
            'timerProgressBar' => true,
            'text'             => $text,
        ]);
    }


    public function confirm(
        $question = '',
        $event = '',
        $okText = 'core::global.Yes',
        $noText = 'core::global.No',
        $confirmColor = '#f8285a',
    ): void
    {
        $this->alert('question' ,__($question), [
            'showConfirmButton'  => true,
            'confirmButtonText'  => __($okText),
            'cancelButtonText'   => __($noText),
            'onConfirmed'        => $event,
            'timerProgressBar'   => true,
            'timer'              => '20000',
            'showCancelButton'   => true,
            'icon'               => 'error',
            'toast'              => false,
            'position'           => 'center',
            'confirmButtonColor' => $confirmColor,
            'iconColor'          => $confirmColor,
        ]);
    }


    public function getModelTitle($model = null): ?string
    {
        return $model ? __($model) : __($this->modelNameOnAlert);
    }


    public function notFoundAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Not found' ,['model' => $this->getModelTitle($model)])
        );
        return null;
    }


    public function notFoundAnyAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Not found any' ,['model' => $this->getModelTitle($model)])
        );
        return null;
    }


    public function creationFailedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Creation failed' ,['model' => $this->getModelTitle($model)])
        );
        return null;
    }


    public function updateFailedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Update failed' ,['model' => $this->getModelTitle($model)])
        );
        return null;
    }


    public function deleteFailedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Delete failed' ,['model' => $this->getModelTitle($model)])
        );
        return null;
    }


    public function successfullyCreatedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Successfully created' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function successfullyUpdatedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Successfully updated' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function successfullyDeletedAlert($model = null): null
    {
        $this->topRightAlert(
            __('core::global.Successfully deleted' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function createdSuccessfullyFlushAlert($model = null): null
    {
        $this->topRightFlush(
            __('core::global.Successfully created' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function updatedSuccessfullyFlushAlert($model = null): null
    {
        $this->topRightFlush(
            __('core::global.Successfully updated' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function deletedSuccessfullyFlushAlert($model = null): null
    {
        $this->topRightFlush(
            __('core::global.Selected items deleted' ,['model' => $this->getModelTitle($model)]),
            'success'
        );
        return null;
    }


    public function occurredErrorAlert(): null
    {
        $this->topRightAlert(
            __('core::global.Occurred error')
        );
        return null;
    }


    public function confirmSingleDelete($model = null ,$event = 'single-delete-confirm'): null
    {
        $this->confirm(
            __('core::global.Are you want to delete?' ,['model' => $this->getModelTitle($model)]),
            $event
        );
        return null;
    }


    public function confirmMultipleDelete($count ,$model = null): null
    {
        $this->confirm(
            __('core::global.Are you want to delete selected items?' ,[
                'model'  => $this->getModelTitle($model),
                'counts' => $count,
            ]),
            'multiple-delete-confirm'
        );
        return null;
    }


}
