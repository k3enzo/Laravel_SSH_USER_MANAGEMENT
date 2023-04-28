@extends('layouts.app')

@section('content')


    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">{{ __('کل کاربران') }}</h5>
                            <span class="h2 font-weight-bold mb-0">{{count(SSH_Users())}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="ni ni-active-40"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">نمایش تمام کاربران ثبت شده در سرور</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">کاربران آنلاین</h5>
                            <span class="h2 font-weight-bold mb-0">{{count(SSH_OnlineUsers())}}</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="ni ni-chart-pie-35"></i>
                            </div>
                        </div>
                    </div>

                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i></span>
                        <span class="text-nowrap">نمای تعداد کاربران متصل به سرور</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">نسخه ی نرم افزار</h5>
                            <span class="h2 font-weight-bold mb-0">Version 1.0.0</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="ni ni-money-coins"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> v1.0.1</span>
                        <span class="text-nowrap">نسخه ی جدیدی موجود است</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">پردازش سرور</h5>
                            <span class="h2 font-weight-bold mb-0">@if(!empty(env('SSH_HOST'))) {{rand(12,70)}} @else عدم اتصال @endif </span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="ni ni-chart-bar-32"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="text-success mr-2"><i class="fa >@if(!empty(env('SSH_HOST'))) fa-arrow-up @else fa-arrow-down @endif "></i> Fetch Batch</span>
                        <span class="text-nowrap">On Current Time</span>
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- ============= --}}


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col" style="text-align: right">
                            <h3 class="mb-0">لیست کاربران آنلاین</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">تنظیمات مجاز</th>
                            <th scope="col">نام کاربری</th>
                            <th scope="col">نام حقیقی</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">شناسه IP</th>
                            <th scope="col">وضعیت</th>
                            <th scope="col">تاریخ ساخت</th>
                            <th scope="col">وضعیت اتصال</th>


                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1;$User = new \App\User();
                        @endphp
                        @foreach(SSH_OnlineUsers() as $row)
                            <tr>
                                @php
                                    $UserDetail = $User->where('email','like',$row['username'].'%')->first();
                                @endphp

                                @if(!empty($UserDetail->id))
                                    <th scope="row">{{$i++}}</th>
                                    <th>
                                        <a href="{{route('ssh.ban.user',['username'=>$row['username']])}}" class="btn btn-sm btn-danger confirm" data-title="مسدود سازی">
                                            مسدود سازی
                                            <i class="fas fa-ban"></i>
                                        </a>
                                        <a href="{{route('ssh.kill.user',['username'=>$row['username']])}}" class="btn btn-sm btn-warning confirm" data-title="قطع اتصال">
                                            قطع اتصال
                                            <i class="fas fa-remove"></i>
                                        </a>
                                    </th>
                                    <td>{{$row["username"]}}</td>
                                    <td>{{$row['username']}}</td>
                                    <td>{{strpos($UserDetail->email,'@')?$UserDetail->email:'@'.env('SSH_HOST').'.com'}}</td>
                                    <td>{{$row["connected"]}}</td>
                                    <td>{!! ($UserDetail->status == 1)?'<span class="btn btn-sm btn-success">فعال</span>' : '<span class="btn btn-sm btn-danger">غیرفعال</span>' !!}</td>
                                    <td>{{$UserDetail->created_at}}</td>
                                    <td>
                                        <i class="fas fa-arrow-up text-success mr-3"></i>آنلاین
                                    </td>

                                @endif

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @php
            $HardWare = CpuUsage();
        @endphp
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-center">گراف سخت افزار</h3>

                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush TableBifFont">
                        <thead class="thead-light">
                        <tr style="background-color: #0c9cb7;font-size: 17px;color: black;">
                            <th scope="col">Time</th>
                            <th scope="col">CPu</th>
                            <th scope="col">Usr</th>
                            <th scope="col">Nice</th>
                            <th scope="col">Sys</th>
                            <th scope="col">Iowait</th>
                            <th scope="col">Irq</th>
                            <th scope="col">Soft</th>
                            <th scope="col">Steal</th>
                            <th scope="col">Gnice</th>
                            <th scope="col">Idle</th>
                            <th scope="col">Graph</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($HardWare as $row)
                            <tr>
                                <td style="font-size: 18px">{{$row[0]}}</td>
                                <td style="font-size: 18px">{{$row[1]}}</td>
                                <td style="font-size: 18px">{{$row[2]}}</td>
                                <td style="font-size: 18px">{{$row[3]}}</td>
                                <td style="font-size: 18px">{{$row[4]}}</td>
                                <td style="font-size: 18px">{{$row[5]}}</td>
                                <td style="font-size: 18px">{{$row[6]}}</td>
                                <td style="font-size: 18px">{{$row[7]}}</td>
                                <td style="font-size: 18px">{{$row[9]}}</td>
                                <td style="font-size: 18px">{{$row[10]}}</td>
                                <td style="font-size: 18px">{{$row[11]}}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">{{$row[2]*100}}%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar
@if($row[2]*100 <= 15) bg-gradient-success
@elseif($row[2]*100 > 15 and $row[2]*100 <= 25) bg-gradient-blue
@elseif($row[2]*100 > 25 and $row[2]*100 < 60) bg-gradient-warning
@else bg-gradient-danger
@endif " role="progressbar" aria-valuenow="{{$row[2]*100}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$row[2]*100}}%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
