@extends('layout')

@section('title','Houses')

@section('main')  

  <table class="table">
    <tr>
      <th>Name</th>
      <th>House Words</th>
    </tr>

    @forelse($houses as $house)
      <tr>
        <td>
            {{$house->houseName}}
        </td>
        <td>
            {{$house->words}}
        </td>
      </tr>
      @empty
        <tr>
            <td colspan="4">No houses</td>
        </tr>
    @endforelse

  </table>

@endsection