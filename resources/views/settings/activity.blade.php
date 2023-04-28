@extends('layouts.app')
@push('pg_btn')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent"><h3 class="mb-0 text-center">نمایش تمام لاگ های کاربر</h3></div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">عنوان </th>
                                    <th scope="col">توضیحات</th>
                                    <th scope="col">گاربری</th>
                                    <th scope="col">زمان اجرا</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($activities as $activity)
                                    <tr>
                                        <th scope="row">
                                            {{$activity->log_name}}
                                        </th>
                                        <td class="budget">
                                            {{$activity->description}}
                                        </td>
                                        <td>
                                            By {{ $activity->causer->name ?? '' }}<br/>
                                        </td>

                                        <td>

                                            {{ $activity->created_at->diffForHumans() }}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$activities->links()}}
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
                    title: 'Are you sure!',
                    content: 'You can not undo this action.!',
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
