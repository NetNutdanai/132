@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <div class="card-header">
        <h3 class="card-title">SE-CAMP Form</h3>
    </div>
    <form>
        <div class="card-body">
            {{-- --Name-- --}}
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="InputName" placeholder="Enter Name">
            </div>
            {{-- --Surname-- --}}
            <div class="form-group">
                <label>Surname</label>
                <input type="text" class="form-control" id="InputSurname" placeholder="Enter Surname">
            </div>
            {{-- --Birthday-- --}}
            <div class="form-group">
                <label>Birthday</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" id="InputBirthday" placeholder="dd-mm-yyyy">
                </div>
            </div>
            {{-- --Age-- --}}
            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" id="InputAge" placeholder="Enter Age" min="0"
                    max="100">
            </div>
            {{-- --Sex-- --}}
            <div class="form-group">
                <label>Sex</label><br />
                <input id="man" type="radio" name="same-radio" />&nbsp
                <label><b class="CO">Male</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="girl" type="radio" name="same-radio" />&nbsp
                <label><b class="CO"> Female</b></label>
            </div>
            {{-- --Picture-- --}}
            <div class="form-group">
                <label for="exampleInputFile">Picture</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="InputFile">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>
            {{-- --Address-- --}}
            <div class="form-group">
                <label>Address</label>
                <textarea class="form-control" rows="3" placeholder="Enter your address"></textarea>
            </div>
            {{-- --Favorite Color-- --}}
            <div class="form-group">
                <label>Favorite Color</label>
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">-</option>
                    <option>Blue</option>
                    <option>Purple</option>
                    <option>Pink</option>
                    <option>Green</option>
                    <option>Yellow</option>
                    <option>Orange</option>
                </select>
            </div>
            {{-- --Favourite Song Type-- --}}
            <div class="form-group">
                <label>Favourite Song Type</label><br />
                <input id="R&B" type="radio" name="same-radio" />&nbsp
                <label><b class="CO">R&B</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="Rock" type="radio" name="same-radio" />&nbsp
                <label><b class="CO"> Rock</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="Pop" type="radio" name="same-radio" />&nbsp
                <label><b class="CO"> Pop</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="Punk" type="radio" name="same-radio" />&nbsp
                <label><b class="CO"> Punk</b></label>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
                <input id="Other" type="radio" name="same-radio" />&nbsp
                <label><b class="CO"> Other</b></label>
            </div>
            {{-- --Phone_Number-- --}}
            <div class="form-group">
                <label>Phone Number</label>

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask='"Mask": "(999) 999-9999"' data-mask>
                </div>
            </div>

            {{-- --Check-- --}}
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Consent to collect personal information</label>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>


@endsection
