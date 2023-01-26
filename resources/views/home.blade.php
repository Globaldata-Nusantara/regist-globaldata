@extends('layouts.main')
<h1>Chose Your VPN Type</h1>
<div class="btn-group">
    <a href="{{ route('regl2tp') }}" class="btn btn-primary">L2TP</a>
    <a href="{{ route('regike2') }}" class="btn btn-primary">IKE2 <br>Recomended</a>
  </div>