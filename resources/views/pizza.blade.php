@extends('layouts.layout')
        
        @section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
                <div class="m-b-md">
                   <div style="font-size:44px;"><b>PIZZAS</b></div>

                    <div class="info">
                        <p style="font-size:24px;">Pizza List</p>
                        
                      <!--  @for($i=0 ; $i < count($pizza); $i++)
                            <p>{{ $pizza[$i]['type'] }}</p>
                        @endfor -->

                        @foreach($pizza as $pizzas)
                            <div>
                                {{ $loop->index}} - {{ $pizzas['type']}} - {{ $pizzas['base']}} - {{ $pizzas['price']}}
                           @if($loop->first)
                            <span>- first in loop</span>
                           @endif
                            @if($loop->last)
                            <span>- last in loop</span>
                           @endif
                            </div>
                        @endforeach
                    </div>
                </div>

               
            </div>
        </div>
        @endsection