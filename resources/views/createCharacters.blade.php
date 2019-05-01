@extends('layout')

@section('title', 'Add a Character')

@section('main')
  <div class="row">
    <div class="col">
      <form action="/" method="post">
        @csrf

        <!-- Character name input -->
        <div class="form-group">
          <label for="name" id="name">Character</label>
          <input type="text" name="name" class="form-control" value="{{old('name')}}">
          <small class="text-danger">{{$errors->first('name')}}</small>
        </div>

        <!-- Dropdown for genders -->
        <div class="form-group row">
          <label for="gender" class="col-sm-2 col-form-label text-sm-right" id="gender">Gender</label>
          <div class="col-sm-9">
            <select name="gender" id="gender" class="form-control">

                <!-- gender dropdown options --> 
                <option>
                    male
                </option>

                <option>
                    female
                </option>

            </select>
            <small class="text-danger">{{$errors->first('gender')}}</small>
          </div>
        </div>

        <!-- Dropdown for houses -->
        <div class="form-group row">
          <label for="house" class="col-sm-2 col-form-label text-sm-right" id="house">House</label>
          <div class="col-sm-9">
            <select name="house" id="house" class="form-control">
                <option value=""> -- All -- </option>

                <!-- houses dropdown options -->
                @foreach($houses as $house)
                    <option value="{{$house->houseId}}" {{$house->houseId==old('house') ? "selected" : ""}}>
                        {{$house->houseName}}
                    </option>
                @endforeach
            </select>
            <small class="text-danger">{{$errors->first('house')}}</small>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection