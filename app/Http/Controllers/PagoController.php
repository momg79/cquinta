<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Pago;
use Carbon\Carbon;

use App\Mail\DemoMail;
use Auth;
use Mail;


class PagoController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            $this->middleware('auth');
        }
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pago = Pago::latest()->paginate(5);
        
        $deuda = DB::table('pagos')
                ->where('estadoPago', '<=', 1)
                ->sum('montoCobro');
                
        $pagado = DB::table('pagos')
                ->where('estadoPago', '>', 1)
                ->sum('montoCobro');

        $pagos = DB::table('pagos')
            ->select('*')      
            ->where('estadoPago', '<=', 1)
            ->get();

        return view('pagos.index',compact('pagos', 'deuda', 'pagado'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     *$email, $apoderado, $monto
     * @return \Illuminate\Http\Response
     */
    
     public function correo($correo, $sostenedor, $deuda, $periodo, $jugador){

        $data = [
            'nombre' => $sostenedor,
            'deuda' => $deuda,
            'periodo' => $periodo,
            'jugador' => $jugador
        ];

        $email = Auth::user()->email;
        Mail::to($correo)->send(new DemoMail($data));
        return $this->index();
     }
         
}
