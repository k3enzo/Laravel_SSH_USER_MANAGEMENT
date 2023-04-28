@extends('layouts.app')
@push('pg_btn')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent"><h3 class="mb-0">All Activity</h3></div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="row">#</th>
                                    <th scope="col">عنوان</th>
                                    <th scope="col">دستور اجرا شده</th>
                                    <th scope="col">خروجی</th>
                                    <th scope="col">متغیرها</th>
                                    <th scope="col">اجرا توسط</th>
                                    <th scope="col">اجرا با ip</th>
                                    <th scope="col">زمان اجرا</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($SSHLOGS as $activity)
                                    <tr>
                                        <th scope="row">
                                            <button type="button" class="btn btn-info btn-lg getLogActivittySSH"
                                                    data-toggle="modal"
                                                    data-id="{{$activity->id}}" data-target="#myModal">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </th>
                                        <td class="budget">
                                            {{$activity->title}}
                                        </td>
                                        <td>
                                            {{ substr($activity->command,0,30)}} ...
                                        </td>
                                        <td>
                                            {!! substr($activity->output,0,50) !!} ...
                                        </td>
                                        <td>
                                            {{$activity->variables}}
                                        </td>
                                        <td>
                                            By {{ $activity->user()->first()->name ?? '' }}<br/>
                                        </td>
                                        <td>
                                            {{$activity->commandByIp}}
                                        </td>
                                        <td>
                                            {{ $activity->created_at->diffForHumans() }}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        {{$SSHLOGS->links()}}
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





    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" style="max-width: 55%">

            <!-- Modal content-->
            <div class="modal-content RTL">
                <div class="modal-header RTL">
                    <h4 class="modal-title RTL_TEXT">مشاهده جزئیات لاگ</h4>
                    <button type="button" class="close" data-dismiss="modal" style="color: red;margin: 0">&times;
                    </button>

                </div>
                <div class="modal-body RTL">

                    <div class="row col-md-12">
                        <div id="logContent col-md-12">
                            <div id="ShowError" class="alert alert-danger" style="display: none"></div>
                            <div id="ShowContent" class="col-md-12 row" style="display: block">
                                <div class="row">
                                    <div class="col-md-2 text-right"> {{__('عنوان')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="title"> - </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-right"> {{__('کاربر')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="user"> - </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-right"> {{__('شناسه ip')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="ip"> - </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-right"> {{__('تاریخ')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="date"> - </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-right"> {{__('متغیرها')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="variables"> - </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-2 text-right"> {{__('دستور')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="command"> - </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-2 text-right"> {{__('خروجی')}} : </div>
                                    <div class="col-md-10 RTL_TEXT" id="output"> - </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('scripts')

    <script>
        $(document).ready(function () {
            $('.getLogActivittySSH').click(function () {
                var Logid = $(this).data('id');
                $.ajax({
                    method: "get",
                    url: "{{url('/ssh/log')}}/" + Logid,
                    cache: false,
                    success: function (data) {
                        var data = data.data;
                        $('#ShowError').hide();
                        $('#ShowContent').show();
                        $('#title').html(data.title);
                        $('#user').html(data.user.name);
                        $('#ip').html(data.commandByIp);
                        $('#date').html(data.created_at);
                        $('#variables').html(data.variables);
                        $('#command').html(data.command);
                        $('#output').html(data.output);

                    },
                    error: function (data) {
                        $('#ShowError').show().html(data.data.error);
                        $('#ShowContent').hide();
                    }
                });
            });
        });
    </script>


@endpush
