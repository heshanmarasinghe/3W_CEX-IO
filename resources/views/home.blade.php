@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    </div>
                    <div class="panel-body">
                    <center><a style="display: inline;width: 115px;height: 25px;background: #459545;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/last_price">Fetch last price</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a style="display: inline;width: 115px;height: 25px;background: #459545;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/last_price_view">View last prices</a>
                    </center>
                    </div>
                    <div class="panel-body">
                    <center>
                        <a style="display: inline;width: 115px;height: 25px;background: #459545;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/trade_history">Fetch trade history</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a style="display: inline;width: 115px;height: 25px;background: #459545;padding: 10px;text-align: center;border-radius: 5px;color: white;font-weight: bold" href="/trade_history_view">View trade history</a>
                    </center>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
