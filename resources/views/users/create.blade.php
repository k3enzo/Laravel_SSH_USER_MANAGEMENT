@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('users.index')}}" class="btn  btn-neutral"> لیست کاربران</a>
@endpush
@section('content')
    @include('includes.form-rtl-styles')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'users.store', 'files' => true]) !!}
                    <h3 class=" text-muted mb-4 text-center">اطلاعات کاربر</h3>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('name', 'نام حقیقی کاربر', ['class' => 'form-control-label']) }}
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('email', 'ایمیل/نام کاربری', ['class' => 'form-control-label']) }}
                                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                                        <p class="notification-under-text">درصورت وارد کردن ایمیل نام کاربری قبل از @ تعیین میشود (مثال : example@gmail.com ) میشود example</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('phone_number', 'شماره موبایل', ['class' => 'form-control-label']) }}
                                        {{ Form::text('phone_number', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('profile_photo', 'Photo', ['class' => 'form-control-label']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> عکس پروفایل
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="profile_photo">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('role', 'انتخاب نقش در سیستم', ['class' => 'form-control-label']) }}
                                        {{ Form::select('role', $roles, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select role...']) }}
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('expiredate', 'مدت زمان فعالیت حساب', ['class' => 'form-control-label']) }}
                                        {{ Form::number('expiredate', null, ['class' => 'form-control']) }}
                                        <p class="notification-under-text">زمان به ماه میباشد ( مثال : 2 ) میشود 2 ماه از تاریخ امروز</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Password information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('password', 'کلمه ی عبور', ['class' => 'form-control-label']) }}
                                        {{ Form::password('password', ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('password_confirmation', 'تکرار کلمه عبور', ['class' => 'form-control-label']) }}
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
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'وضعیت فعال', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['value'=>'ثبت کاربر','class'=> 'mt-5 btn btn-primary']) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
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
