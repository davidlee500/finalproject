@extends('layout')

@section('title','Characters')

@section('main')  
    <a href="/characters/new" class="btn-link"> Add Character </a>
  <table class="table">
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>House</th>
    </tr>

    @forelse($characters as $character)
      <tr>
        <td>
            {{$character->name}}
        </td>
        <td>
            {{$character->gender}}
        </td>
        <td>
            {{$character->houseName}}
        </td>
      </tr>
      @empty
        <tr>
            <td colspan="4">No characters</td>
        </tr>
    @endforelse

  </table>

@endsection