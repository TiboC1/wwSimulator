@extends('layouts.app')

@section('content')
 {{Auth()->user()->character->showPhysicalHealth()}}

@endsection
