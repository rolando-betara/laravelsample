@extends('employees.create')

@section('editSurname', $empid->surname)
@section('editFname', $empid->first_name)
@section('editMname', $empid->middle_name)
@section('editDbirth', $empid->date_birth)
@section('editPbirth', $empid->place_birth)
@section('editGender', $empid->gender)
@section('editCitizenship', $empid->citizenship)

@section('editRadiobtn')
    <input type="radio" name="gender" value="male"  id="male"       @if($empid->gender === "male") checked @endif required><label for="male">Male</label>
    <input type="radio" name="gender" value="female"  id="female"   @if($empid->gender === "female") checked @endif required><label for="female">Famale</label>
@endsection

@section('editSelection')
    <select name="c_status"  required>
        <option value=""></option>
        <option value="single"      @if($empid->civil_status === "single") selected="selected" @endif>Single</option>
        <option value="married"     @if($empid->civil_status === "married") selected="selected" @endif>Married</option>
        <option value="annulled"    @if($empid->civil_status === "annulled") selected="selected" @endif>Annulled</option>
        <option value="widowed"     @if($empid->civil_status === "widowed") selected="selected" @endif>Widowed</option>
        <option value="separeted"   @if($empid->civil_status === "separeted") selected="selected" @endif>Separeted</option>
    </select>
@endsection
