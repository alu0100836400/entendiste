@extends('layouts.app')

@section('title')
    Asignaturas
@endsection

@section('content')
    Poner aqui las asignaturas

    <?php
        use App\Models\User;

        $user = User::find("alu0100836400");
        echo $user;
    

    ?>
@endsection