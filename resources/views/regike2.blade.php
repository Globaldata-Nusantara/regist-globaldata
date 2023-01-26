@extends('layouts.main');

<h1>Reg IKE2 Certificate</h1>

<form action="{{ route('regike2') }}" method="post">
    {{ csrf_field() }}
    <div class="row g-3 align-items-center">
        <div class="col-auto">
          <label for="inputusername" class="col-form-label">Input Your Name</label>
        </div>
        <div class="col-auto">
          <input type="text" id="inputusername" class="form-control" name="name" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto">
          <span id="passwordHelpInline" class="form-text">
          </span>
        </div>
      </div>
      <div class="form-check">
        <input class="form-check" type="radio" name="dayvalid" value="60" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          60
        </label>
      </div>
      <div class="form-check">
        <input class="form-check" type="radio" name="dayvalid" value="90" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          90
        </label>
      </div>
      <div class="form-check">
        <input class="form-check" type="radio" name="dayvalid" value="365" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          365
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  