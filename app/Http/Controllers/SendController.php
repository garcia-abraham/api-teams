<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    public function mandar(){
        // create connector instance
$connector = new \Sebbmyr\Teams\TeamsConnector("https://outlook.office.com/webhook/8cfce3eb-e2af-4197-85ff-f2f516127f60@843d9746-0674-48bf-a402-a45cd06f541a/IncomingWebhook/53c34ee69ec44db7b9896bb5a14f1f81/c293dac9-63a5-40ce-92b3-c0f3f81c38d7");
// create card
$card  = new \Sebbmyr\Teams\Cards\SimpleCard(['title' => 'POR FIN ', 'text' => 'GINO SOS PUTO']);
// send card via connector
$connector->send($card);
    }
}
