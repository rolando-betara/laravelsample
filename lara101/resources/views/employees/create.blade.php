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
                                    <li><a href="{{ url('/employees') }}">Employees</a></li>
                                    <li><a href="{{ url('/employees/create') }}">New Employee</a></li>
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
                    <form action="/employees/@yield('editId')" method="post">
                    {{csrf_field()}}
                    @section('editMethod')
                     @show
                    <div class="row">
                        <div class="large-3 columns">
                            <div class="thumbnail">
                                <i class="fi-torsos-male-female"></i>
                            </div>
                            <button type="button" class="button">Upload Picture</button> 
                           
                        </div>
                        <div class="large-9 columns">
                            <div class="row">
                                <div class="medium-4 columns">
                                    <label>Surname
                                        <input type="text" name="surname" placeholder="Dela Cruz" value="@yield('editSurname')" required>
                                    </label>
                                </div>
                                <div class="medium-4 columns">
                                    <label>First Name
                                        <input type="text" name="f_name" placeholder="Juan" value="@yield('editFname')" required>
                                    </label>
                                </div>
                                <div class="medium-4 columns">
                                    <label>Middle Name
                                        <input type="text" name="m_name" placeholder="Pedro" value="@yield('editMname')" required>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="medium-4 columns">      
                                    <label>Date of Birth
                                        @if(substr(Route::currentRouteName(),10) === "create")
                                           <input type="text" name="d_birth" class="span2" value="{{$mytime = Carbon\Carbon::now()->format('m-d-Y')}}"  id="dp1" readonly>
                                        @else
                                            <input type="text" name="d_birth" class="span2" value="@yield('editDbirth')"  id="dp1" readonly>
                                        @endif
                                    </label>
                                </div>
                                <div class="medium-8 columns">
                                    <label>Place of Birth
                                        <input type="text" name="p_birth" placeholder="Place of Birth" value="@yield('editPbirth')" required>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <fieldset class="medium-4 columns">
                                    <legend>Gender</legend>
                                   
                                    @if(substr(Route::currentRouteName(),10) === "create")
                                        <input type="radio" name="gender" value="male"  id="male"   required><label for="male">Male</label>
                                        <input type="radio" name="gender" value="female"  id="female" required><label for="female">Famale</label>
                                    @else
                                        @section('editRadiobtn')
                                            @show
                                    @endif
                                    
                                </fieldset>
                                <div class="medium-4 columns">
                                    <label>Civil Status
                                        @if(substr(Route::currentRouteName(),10) === "create")
                                            <select name="c_status"  required>
                                                <option value=""></option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="annulled">Annulled</option>
                                                <option value="widowed">Widowed</option>
                                                <option value="separeted">Separeted</option>
                                            </select>
                                        @else
                                            @section('editSelection')
                                                @show
                                        @endif
                                        
                                    </label>
                                </div>
                                
                                <div class="medium-4 columns">
                                    <label>Citizenship
                                        <input type="text"  name="citizenship" placeholder="Citizenship" value="@yield('editCitizenship')" required>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-4 medium-offset-8 columns">
                                    <div class="row">
                                        <div class="medium-7 medium-offset-5 columns">
                                        
                                        @if(substr(Route::currentRouteName(),10) === "create")
                                            <button type="submit" class="button info right">{{substr(Route::currentRouteName(),10)}}</button>
                                        @else
                                            <button type="submit" class="button info right">{{substr(Route::currentRouteName(),10)}}</button>
                                        @endif
                                        <div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
@endsection