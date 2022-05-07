@extends('layouts.app')
@php
$redirect = request()->has('redirect') ? '?redirect=' . request()->input('redirect') : '';
@endphp
@section('content')
    <div>

        <div class="row" style="margin-top:10%; width:100%">
            <div class="col-md-8">

                <div style="margin-top:100px;margin-left:50%; align-content:center">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">
                                    Restaurant name
                                </th>
                                <th scope="col">
                                    Location
                                </th>
                                <th scope="col">
                                    Rate
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($userData as $user)
                                <tr>
                                    <td><a class="btn btn-link"
                                            href="{{ route('restaurant.index', [$user->id, $user->ResName]) }}">
                                            {{ $user->ResName }}
                                        </a>
                                    </td>
                                    </td>
                                    <td>{{ $user->Location }}</td>
                                    <td>{{ $user->Rate }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
            <div class="col">

                <img src=" {{ url('images/taco.gif') }}"
                    class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                    width="500px" alt="">

            </div>
        </div>
        <div class="row" style="width:100%">
            <div class="col-md-8">hi <br> <br> <br> <br> hi</div>
            <div class="col">hi <br> <br> <br> <br> hi</div>
        </div>
    @endsection
