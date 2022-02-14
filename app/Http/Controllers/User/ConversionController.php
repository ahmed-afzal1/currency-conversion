<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Convertion;
use App\Repository\CurrencyRepositoryInterface;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ConversionController extends Controller
{
    private $repository;
    public function __construct(CurrencyRepositoryInterface $currRepository)
    {
        $this->middleware('auth');
        $this->repository = $currRepository;
    }

    public function index(){
        $data['currencies'] = $this->repository->getCurrencies();

        return view('conversion.index',$data);
    }

    public function store(Request $request){
        $request->validate([
            'from'=> 'required',
            'to'=> 'required',
            'amount'=> 'required|numeric|min:1',
        ]);


        $baseCurrencyAmount = $request->amount/$request->from;
        $convertedAmount = $request->to*$baseCurrencyAmount;

        $input = $request->all();
        $input['user_id'] = auth()->id();
        $input['converted_amount'] = $convertedAmount;
 
        $this->repository->store($input);

        $msg = 'Converted Amount is : '. round($convertedAmount,2) . ' '.$request->to_currency;
        return redirect()->back()->with('success',$msg);
    }
}
