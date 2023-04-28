@extends('layouts.app')
@push('pg_btn')
@can('create-roles')
    <a href="{{ route('roles.create') }}" class="btn btn-sm btn-neutral">Create New Role</a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent"><h3 class="mb-0">All Roles</h3></div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Permission</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($roles as $role)
                                    <tr>
                                        <th scope="row">
                                            {{$role->name}}
                                        </th>
                                        <td class="budget">
                                            <div class="mx-w-440 d-flex flex-wrap">

                                                @foreach ($role->getAllPermissions() as $permission)
                                                <span class="badge badge-pil flex m-1 badge-default">{{ $permission->name }}</span>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @if ($role->name !='super-admin')
                                            @can('destroy-roles')
                                            {!! Form::open(['route' => ['roles.destroy', $role],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            @can('update-roles')
                                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit role details" href="{{route('roles.edit',$role)}}">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('destroy-roles')
                                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete role" href="">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            @endcan
                                            @else
                                            <span class="text-muted text-small">-</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$roles->links()}}
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
                        },
                        cancel: function () {
                        }
                    }
                });
            })
        })

    </script>
@endpush
