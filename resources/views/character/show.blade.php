@extends('layouts.app')

@section('content')
 {{Auth()->user()->character->showHealth()}}

@endsection
