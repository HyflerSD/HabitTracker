<?php

namespace App\Http\Controllers;
//require __DIR__ . "../../../vendor/autoload.php";
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use TomorrowIdeas\Plaid\Plaid;
use TomorrowIdeas\Plaid\Resources;
use DateTime;
class TransactionsController extends Controller
{
    public function getTransaction()
    {
        $plaid = new Plaid("6382514ed3d1840013350f93", "89f2fc284aac761f5c6b102ef71273");

        $item = $plaid->transactions->list("access-sandbox-871dc07d-f7e0-43ba-bcbb-8e33687c96f0", "2022-11-27", "2022-11-28");
//        ("access-sandbox-871dc07d-f7e0-43ba-bcbb-8e33687c96f0");
        return $item;
    }
}
