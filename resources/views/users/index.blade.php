@extends('layouts.app')
@push('pg_btn')
@can('create-user')
    <a href="{{ route('users.create') }}" class="btn btn-neutral">{{__("ساخت کاربر جدید")}}  <i class="fas fa-plus"></i></a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">نمایش تمام کاربران</h3>
                        </div>
                        <div class="col-lg-4">
                    {!! Form::open(['route' => 'users.index', 'method'=>'get']) !!}
                        <div class="form-group mb-0">
                        {{ Form::text('search', request()->query('search'), ['class' => 'form-control form-control-sm', 'placeholder'=>'Search users']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{__('نام حقیقی')}}</th>
                                    <th scope="col">{{__('نام کاربری/ایمیل')}}</th>
                                    <th scope="col">{{__('آخرین IP')}}</th>
                                        <th scope="col">{{__('وضعیت')}}</th>
                                    <th scope="col">{{__('تاریخ ثبت')}}</th>

                                    <th scope="col" class="text-center">{{__('اقدام')}}</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($users as $user)
                                    @php
                                        $username = explode('@',$user->email)[0];
                                    @endphp
                                    <tr>
                                        <th scope="row">
                                            {{$user->name}}
                                        </th>
                                        <td class="budget">
                                            {{$user->email}}
                                        </td>
                                        <td>
                                            {{$user->ip}}
                                        </td>
                                        <td>
                                            @if($user->status)
                                                <span class="badge badge-pill badge-lg badge-success">{{__('فعال')}}</span>
                                            @else
                                                <span class="badge badge-pill badge-lg badge-danger">{{__('مسدود')}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{$user->email_verified_at}}
                                        </td>

                                        <td class="text-center">
                                            @can('destroy-user')
                                            {!! Form::open(['route' => ['users.destroy', $user],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            @can('view-user')
                                            <a class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="View and edit user details" href="{{route('users.show', $user)}}">
                                               جزئیات
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('update-user')
                                            <a class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Edit user details" href="{{route('users.edit',$user)}}">
                                                ویرایش
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('destroy-user')
                                                <button type="submit" class="btn delete btn-danger" data-toggle="tooltip" data-placement="top" title="Delete user" href="">
                                                    حذف
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            {!! Form::close() !!}
                                            @endcan
                                                @if($user->status == 1)
                                                <a href="{{route('ssh.ban.user',['username'=>$username])}}" class="btn btn-warning confirm" data-title="مسدود سازی">
                                                    مسدود سازی
                                                    <i class="fas fa-ban"></i>
                                                </a>
                                                @else
                                                    <a href="{{route('ssh.unban.user',['username'=>$username])}}" class="btn btn-success confirm" data-title="رفع مسدودی">
                                                       رفع مسدودی
                                                        <i class="fas fa-ban"></i>
                                                    </a>
                                                @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$users->links()}}
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        jQuery(document).ready(function(){
            $('.delete').on('click', function(e){
                e.preventDefault();
                let that = jQuery(this);
                jQuery.confirm({
                    icon: 'fas fa-wind-warning',
                    closeIcon: true,
                    title: 'آیا برای حذف اطمینان دارید؟',
                    content: 'این عمل قابل بازگشت نمیباشد',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        confirm: function () {
                            that.parent('form').submit();
                            //$.alert('Confirmed!');
                        },
                        cancel: function () {
                            //$.alert('Canceled!');
                        }
                    }
                });
            })
        })

    </script>
@endpush
