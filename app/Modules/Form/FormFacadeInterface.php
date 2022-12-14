<?php

namespace App\Modules\Form;

interface FormFacadeInterface
{
    /**
     * @param $data
     * @return void
     * @throws \Exception
     */
    public function storeForm($data): void;

    /**
     * @param $data
     * @return void
     */
    public function storeQuestionnaire($data): void;

    /**
     * @param $form
     * @return void
     */
    public function publishForm($form): void;
}
