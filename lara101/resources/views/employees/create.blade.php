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
                    <form action="/employees" method="post">
                    {{csrf_field()}}
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
                                        <input type="text" name="surname" placeholder="Dela Cruz" required>
                                    </label>
                                </div>
                                <div class="medium-4 columns">
                                    <label>First Name
                                        <input type="text" name="f_name" placeholder="Juan" required>
                                    </label>
                                </div>
                                <div class="medium-4 columns">
                                    <label>Middle Name
                                        <input type="text" name="m_name" placeholder="Pedro" required>
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="medium-4 columns">      
                                    <label>Date of Birth
                                        <input type="text" name="d_birth" class="span2" value="{{ $mytime = Carbon\Carbon::now()->format('m-d-Y') }}" id="dp1" readonly>
                                    </label>
                                </div>
                                <div class="medium-8 columns">
                                    <label>Place of Birth
                                        <input type="text" name="p_birth" placeholder="Place of Birth" required>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <fieldset class="medium-4 columns">
                                    <legend>Gender</legend>
                                    <input type="radio" name="gender" value="male"  id="male" required><label for="male">Male</label>
                                    <input type="radio" name="gender" value="female" id="female" required><label for="female">Famale</label>
                                </fieldset>
                                <div class="medium-4 columns">
                                    <label>Civil Status
                                        <select name="c_status" required>
                                            <option value=""></option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="annulled">Annulled</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="separeted">Separeted</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="medium-4 columns">
                                    <label>Citizenship
                                        <input type="text"  name="citizenship" placeholder="Citizenship" required>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="medium-4 medium-offset-8 columns">
                                    <div class="row">
                                        <div class="medium-7 medium-offset-5 columns">
                                            <button type="submit" class="button info right">Submit</button>
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