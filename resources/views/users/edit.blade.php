@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('users.index')}}" class="btn btn-sm btn-neutral">All Users</a>
@endpush
@section('content')

    @include('includes.form-rtl-styles')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    @can('update-user')
                    {!! Form::open(['route' => ['users.update', $user], 'method'=>'put', 'files' => true]) !!}
                    @endcan
                    <h3 class=" text-muted mb-4 text-center" >ویرایش اطلاعات کاربر</h3>

                        <hr>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('name', __('نام حقیقی'), ['class' => 'form-control-label']) }}
                                        {{ Form::text('name', $user->name, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('email', __('ایمیل/نام کاربری'), ['class' => 'form-control-label']) }}
                                        <input type="text" value="{{$user->email}}" disabled="disabled" class="form-control">
                                        <input type="hidden" name="email" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('phone_number', __('شماره موبایل'), ['class' => 'form-control-label']) }}
                                        {{ Form::text('phone_number', $user->phone_number, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    {{ Form::label('profile_photo', __('تصویر کاربر'), ['class' => 'form-control-label d-block']) }}
                                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                          <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                            <i class="fa fa-picture-o"></i> Choose Photo
                                                          </a>
                                                        </span>
                                                        <input id="thumbnail" class="form-control d-none" type="text" name="profile_photo">
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            @if ($user->profile_photo)
                                                <a href="{{ asset($user->profile_photo) }}" target="_blank">
                                                    <img alt="Image placeholder"
                                                    class="avatar avatar-xl  rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{ $user->name }} Logo"
                                                    src="{{ asset($user->profile_photo) }}">
                                                </a>
                                            @endif
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ Form::label('role', __('نوع دسترسی کاربر'), ['class' => 'form-control-label']) }}
                                            {{ Form::select('role', $roles, $user->roles, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select role...']) }}
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            {{ Form::label('expiredate', __('تعیین زمان انقضاء حساب'), ['class' => 'form-control-label']) }}
                                            @if(!empty($SSHUser->expiredate))
                                               <div class="text-red">

                                                   <span dir="rtl">({{$SSHUser->expiredate}})</span>
                                                   تاریخ انقضاء در
                                               </div>
                                                @endif
                                            {{ Form::text('expiredate', null, ['class' => 'form-control']) }}
                                            <p class="notification-under-text">زمان به ماه میباشد ( مثال : 2 ) میشود 2 ماه از تاریخ امروز</p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">{{__('تغییر کلمه عبور')}}</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('password', __('کلمه عبور'), ['class' => 'form-control-label']) }}
                                        {{ Form::password('password', ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('password_confirmation', __('تکرار کلمه عبور'), ['class' => 'form-control-label']) }}
                                        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        {!! Form::hidden('status', 0) !!}
                                        <input type="checkbox" name="status" value="1" {{ $user->status ? 'checked' : ''}} class="custom-control-input" id="status">
                                        {{ Form::label('status', __('وضعیت حساب'), ['class' => 'custom-control-label']) }}
                                    </div>
                                </div>
                                @can('update-user')
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['class'=> 'mt-5 btn btn-primary']) }}
                                </div>
                                @endcan
                            </div>
                        </div>
                    @can('update-user')
                    {!! Form::close() !!}
                    @endcan
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#uploadFile').filemanager('file');
        })
    </script>
@endpush
