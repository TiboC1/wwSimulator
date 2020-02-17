@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Physical Health -->

    <h2>Physical State</h2>
        <p>{{Auth()->user()->character->showPhysicalHealth()}}</p>

    <!-- Mental Health -->

    <h2>Mental State</h2>
        <p>{{Auth()->user()->character->showMentalHealth()}}</p>
</div>
@endsection
