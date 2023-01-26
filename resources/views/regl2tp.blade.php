@extends('layouts.main')
<h1>Create Your L2TP Account </h1>

    <form action="{{ route('regl2tp') }}" method="post">
        {{ csrf_field() }}
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputusername" class="col-form-label">Username</label>
            </div>
            <div class="col-auto">
              <input type="text" id="inputusername" class="form-control" name="name" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
              </span>
            </div>
          </div>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
              <input type="password" id="inputPassword6" class="form-control" name="password" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <span id="passwordHelpInline" class="form-text">
               
              </span>
            </div>
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1"></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    