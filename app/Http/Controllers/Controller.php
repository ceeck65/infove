<?php

namespace App\Http\Controllers;

use App\Collections\Collections;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Ixudra\Curl\Facades\Curl;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * @var Request
     */
    private $request;

    /**
     * Controller constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param Collections $collections
     * @return mixed
     */
    public function debtCantv(Collections $collections)
    {
        try{
            $code_number = $this->request->input('code_number');
            $number_phone = $this->request->input('number_phone');
            $data = Curl::to('http://www.cantv.com.ve/seccion.asp?pid=1&sid=450')
                ->withData( array( 'sarea' => $code_number, 'stelefono' => $number_phone ) )
                ->post();
            $response = $collections->cantvFormat($data);
            $code = 200;
        }catch (Exception $ex){
            \Log::error('Debit cantv', ['exception' => $ex, 'request' => $this->request->all()]);
            $response = [
                'status' => 'FAILED',
                'title' => _('¡Error!'),
                'message' => _('error get data')
            ];
            $code = 500;
        }
        return response()->json(['data' => $response, 'code' => $code], $code);

    }
}
