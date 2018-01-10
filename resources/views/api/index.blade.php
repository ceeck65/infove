@extends('layouts.app')
@section('content')
    <br>
    <ul class="list-group margin-top">
        <li class="list-group-item border border-primary text-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> <img src="assets/img/cantv.png" alt="" width="100"> API CANTV</li>
        <div class="collapse" id="collapseExample">
        <li class="list-group-item">
            <strong>Metodo</strong>: GET
        </li>
        <li class="list-group-item"><strong>URL</strong>: <a href="{{ url('api/v1/cantv') }}" target="_blank">api/v1/cantv</a></li>
        <li class="list-group-item"><strong>Parametros</strong>: <br>
            code_number (integer) <br>
            number_phone (integer)
        </li>
        <li class="list-group-item"><strong>Ejemplo</strong>: <a
                    href="{{ url('/api/v1/cantv?code_number=251&number_phone=2332792') }}" target="_blank">{{ url('/api/v1/cantv?code_number=251&number_phone=2332792') }}</a>
        </li>
        <li class="list-group-item"><strong>Response</strong>: <br>
            <code>
                {
                "data": {
                "current_balance": "3.643,87",
                "last_billing": "12\/2017",
                "cutoff_date": "18\/01\/2018",
                "due_date": "03\/01\/2018",
                "due_balance": "3.643,87",
                "last_payment": "1.063,31"
                },
                "code": 200
                }
            </code>
        </li>
        </div>
    </ul>
    <br>
    <ul class="list-group">
        <li class="list-group-item border border-primary text-primary" data-toggle="collapse" href="#collapseCne" role="button" aria-expanded="false" aria-controls="collapseExample"><img src="assets/img/cne.png" alt="" width="100"> API CNE</li>
        <div class="collapse" id="collapseCne">
            <li class="list-group-item">
                <strong>Metodo</strong>: GET
            </li>
            <li class="list-group-item"><strong>URL</strong>: <a href="{{ url('api/v1/cne') }}" target="_blank">api/v1/cne</a></li>
            <li class="list-group-item"><strong>Parametros</strong>: <br>
                code_number (integer) <br>
                number_phone (integer)
            </li>
            <li class="list-group-item"><strong>Ejemplo</strong>: <a
                        href="{{ url('/api/v1/cantv?code_number=251&number_phone=2332792') }}" target="_blank">{{ url('/api/v1/cantv?code_number=251&number_phone=2332792') }}</a>
            </li>
            <li class="list-group-item"><strong>Response</strong>: <br>
                <code>
                    {
                    "data": {
                    "current_balance": "3.643,87",
                    "last_billing": "12\/2017",
                    "cutoff_date": "18\/01\/2018",
                    "due_date": "03\/01\/2018",
                    "due_balance": "3.643,87",
                    "last_payment": "1.063,31"
                    },
                    "code": 200
                    }
                </code>
            </li>
        </div>
    </ul> <br>
@endsection