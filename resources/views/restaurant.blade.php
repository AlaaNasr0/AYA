@extends('layouts.app')
@php
if (isset($_POST['submit'])) {
    if (isset($_POST['select'])) {
        $p = $_POST['select'];
        // dd($p);
        print_r($p);
    }
}
@endphp
@section('content')
    <div class="container" style="margin-top: 70px;">
        <div class="jumbotron" style="margin-bottom: 100px">
            <img src=" {{ url(glob("images/$resName.*")[0]) }}" style="margin-left:38%" width="130px" alt="">
        </div>
        <div class="row">
            <div class="col-sm">
                <form action="#" method="post">
                    @foreach ($foods as $menu => $food)
                        <h5>{{ $menu }}</h5>
                        <table class="table table-dark">
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Select
                                </th>
                            </tr>
                            @foreach ($food as $f)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $f->name }}
                                    </td>
                                    <td>
                                        {{ $f->price }}
                                    </td>
                                    <td>
                                        <input type="checkbox" name="select[]" id="ResSelect" value="{{ $f->name }}">
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @endforeach
                    <input type="button" value="submit" name="submit">
                </form>
            </div>
            <div class="col-sm">
                <a class="btn btn-link" href="{{ route('reservation.index') }}">
                    To Reservation
                </a>
            </div>
            <div class="col-sm">
                <a class="btn btn-link" href="{{ route('order.index') }}">
                    To Orders
                </a>
            </div>
        </div>
    @endsection
