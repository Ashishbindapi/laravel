<div class="form-group">
    <label for="">{{$lable}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$value}}">
    <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span>
</div>
