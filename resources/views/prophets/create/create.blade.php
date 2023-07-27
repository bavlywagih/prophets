@extends('template.template')
@section('content')
<div class="col-md-8 w-75  p-5 m-auto profile-card-div-media">
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class=" text-center p-3 w-75 m-auto border-bottom">
                    <h6 class="mb-0"> {{ trans('Prophets/create.create') }}  </h6>
                </div>
                
            </div>
            <form action="{{ route('Prophets_create_post') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.name_arabic') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                            <input type="text" name="name_arabic" value="" class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="" aria-label="name_arabic" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.meaning_name_arabic') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                              <textarea class="form-control text-start-setting-ltr input-end-setting-rtl" name="meaning_name_arabic" id="exampleFormControlTextarea1" rows="3" aria-label="meaning_name_arabic" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.story_arabic') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                            <textarea class="form-control text-start-setting-ltr input-end-setting-rtl" name="story_arabic" id="exampleFormControlTextarea1" rows="3" aria-label="story_arabic" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.name_english') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                            <input type="text" name="name_english" value="" class="form-control text-start-setting-ltr input-end-setting-rtl" placeholder="" aria-label="name_english" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.meaning_name_english') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                            <textarea class="form-control text-start-setting-ltr input-end-setting-rtl" name="meaning_name_english" id="exampleFormControlTextarea1" rows="3" aria-label="meaning_name_english" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="d-flex flex-row-reverse justify-content-around div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.story_english') }} </h6>
                        </div>
                        <div class=" text-secondary   w-75 text-end">
                            <textarea class="form-control text-start-setting-ltr input-end-setting-rtl" name="story_english" id="exampleFormControlTextarea1" rows="3" aria-label="story_english" aria-describedby="basic-addon1"></textarea>
                        </div>
                    </div>
                </div>


                <div class="card-body">
                    <div class="d-flex flex-row-reverse div-setting-ltr">
                        <div class="w-25 text-end text-start-setting-ltr">
                            <h6 class="mb-0"> {{ trans('Prophets/create.image') }} </h6>
                        </div>
                        <div class="mb-3 w-75">
                          <input class="form-control" type="file" name="image" id="formFileMultiple" multiple>
                        </div>
                    </div>
                </div>

                    
                <div class="text-center">
                    <button type="submit" class="btn btn-success w-50">Success</button>
                </div>
                    
            </div>
        </div>
    </form>
</div>

@endsection