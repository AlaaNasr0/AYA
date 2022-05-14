@extends('layouts.app')

<br>
<br><br><br>

<div class="container">
    <div>
        <h2 align="center" style="color:white">Click on a table to reserve it</h2>
    </div>
    <div class="row mb-1">

        @foreach ($tables as $table)
            <div class="col-md-4">
                @if ($table->isFree)
                    <a href="http://www.instagram.com" style="text-decoration: none">
                        {{-- <ul class="list-group" style="margin-top:7%">
                            <li class="list-group-item" align="center">
                                <b>Table Number {{ $loop->iteration }}</b>
                            </li>
                            <li class="list-group-item">
                                @if ($table->isOut)
                                    The table is outside
                                @else
                                    The table is inside
                                @endif
                            </li>
                            <li class="list-group-item">
                                The capacity of the table is {{ $table->capacity }}
                            </li>
                            <li class="list-group-item">
                                @if ($table->isFree)
                                    The table is empty
                                @else
                                    The table is not empty
                                @endif
                            </li>
                        </ul> --}}
                        <div class="flip-card" style="margin-top:7%">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <ul class="list-group">
                                        <li class="list-group-item" align="center">
                                            <b>Table Number {{ $loop->iteration }}</b>
                                        </li>
                                        <li class="list-group-item">
                                            @if ($table->isOut)
                                                The table is outside
                                            @else
                                                The table is inside
                                            @endif
                                        </li>
                                        <li class="list-group-item">
                                            The capacity of the table is {{ $table->capacity }}
                                        </li>
                                        <li class="list-group-item">
                                            @if ($table->isFree)
                                                The table is empty
                                            @else
                                                The table is not empty
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <div class="flip-card-back">
                                    <h1>Reserve Table {{ $loop->iteration }}</h1>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a role="link" aria-disabled="true">
                        <ul class="list-group" style="margin-top:7%">
                            <li class="list-group-item">
                                <b>Table Number {{ $loop->iteration }}</b>
                            </li>
                            <li class="list-group-item">
                                Table is not available
                            </li>
                        </ul>
                    </a>
                @endif

            </div>
        @endforeach
    </div>
</div>
