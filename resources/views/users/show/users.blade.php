@extends('template.template')
@section('content')



{{-- @foreach ($users as $user)
{{ $user->name }}
    
@endforeach --}}
{{-- 
    <div class="p-3 border w-50 m-auto text-center my-3 rounded ">
        <a href="" class="btn btn-success ">{{ trans('Prophets/Prophets.add') }}</a>
    </div> --}}




    <div class="card w-75 m-auto mt-4 pt-4 ">
        <table class="table table-user m-auto " style="width: 90%;">
            <div>
                <h2 class="text-center">جدول اسماء المستخدمين</h2>
            </div>

            <div class="p-3 border w-50 m-auto text-center my-3 rounded ">
                <a href="" class="btn btn-success ">{{ trans('Prophets/Prophets.add') }}</a>
            </div>

            <thead>
                <tr class="table-dark ">
                    <th scope="col">الاسم</th>
                    <th scope="col"> بعض العمليات</th>
                </tr>

            </thead>

            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <th scope="row"><a href="{{ route('Profile', $user->id  ) }}">{{$user->name}} </a></th>
                        <td >
                            <button type="button" class="btn btn-success"><a href="" class="text-decoration-none text-white" >تعديل</a></button>
                            <button type="button" class="btn btn-danger"><a  href=""  class="text-decoration-none text-white" >حذف</a></button>
                        </td>
                    </tr>
                @empty
                    <td class="">User Not Found.</td>
                @endforelse
            </tbody>
        </table>

    </div>


<div></div>


@endsection