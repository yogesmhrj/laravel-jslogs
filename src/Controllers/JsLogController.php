<?php
/**
 * Created by Yogesh on 26/01/2024
 */


namespace Yogesmhrj\LaravelJslogs\Controllers;

use Illuminate\Support\Facades\Log;

class JsLogController
{

    /**
     * Handles the request to store the logs
     *
     * @return void
     */
    public function storeLog(){

        $inputData = request()->all();

        Log::channel('js')->debug(json_encode($inputData));

    }

}
