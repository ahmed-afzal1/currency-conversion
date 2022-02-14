<?php   

namespace App\Repository\Eloquent;

use App\Models\Convertion;
use App\Repository\CurrencyRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;   

class CurrencyRepository extends BaseRepository implements CurrencyRepositoryInterface 
{     
    public function __construct(Convertion $model)
    {
        parent::__construct($model);
    }

    public function getCurrencies(){
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://apilayer.net/api/live?access_key=efe459e8db765f08b29c65ea562c4f9a&source=USD');
        $response = $request->getBody()->getContents();

        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        return $array_response;
    }
}