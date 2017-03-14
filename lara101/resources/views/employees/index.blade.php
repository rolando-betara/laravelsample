@extends('layout.app')

@section('title', 'IS | New Employee')

@section('content')
    <div id="page">
        <div class="top-bar-container marginBottom10px" data-sticky-container>
            <div class="sticky" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
                <div class="top-bar menu-bg-color">
                    <div class="row">
                        <div class="large-8 large-offset-2 columns">
                            <div class="top-bar-left">
                                <ul class="dropdown menu menu-f-color" data-dropdown-menu>
                                    <li><a href="{{ url('/') }}">Search</a></li>
                                    {{-- <li class="has-submenu">
                                        <a href="#"></a>
                                        <ul class="submenu menu vertical" data-submenu>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-8 large-offset-2 columns">
                <div class="callout">
                <h1>Employees List</h1>
                    <ul class="accordion" data-accordion data-allow-all-closed="true">
                        @foreach($employees as $employee)
                            <li class="accordion-item " data-accordion-item>
                                <a href="#" class="accordion-title">{{$employee ->surname}} {{$employee ->first_name}} {{$employee ->middle_name}}</a>
                                <div class="accordion-content" data-tab-content>
                                    <div class="row">
                                        <div class="medium-2 columns">
                                            <img src="/img/user.png" class="thumbnail imgSize">
                                             
                                        </div>
                                        <div class="medium-10 columns">
                                            <div class="row">
                                                <div class="medium-10 columns">
                                                    <ul class="inline-list no-bullet">
                                                        <li>
                                                            <span class="label info">Gender:</span>
                                                            <span class="round alert label">{{$employee->gender}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label info">Birth Date:</span>
                                                            <span class="round alert label">{{$employee->date_birth}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label info">Place of Birth:</span>
                                                            <span class="round alert label"> {{$employee->place_birth}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label info">Civil Status:</span>
                                                            <span class="round alert label">{{$employee->civil_status}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="label info">Citizenship:</span>
                                                            <span class="round alert label">{{$employee->citizenship}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="medium-2 columns">
                                                    <div class="clearfix">
                                                        <form action="{{'/employees/'.$employee->id}}" class="float-right" method="post">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button  type="submit" class="button alert small"><i class="fi-x"></i></button>
                                                        </form>
                                                        <a href="{{'/employees/'.$employee->id.'/edit'}}" class="button warning small float-right"><i class="fi-pencil" style="color:#fff"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>  
    </div>
@endsection