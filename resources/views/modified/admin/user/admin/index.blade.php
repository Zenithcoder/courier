@extends("modified.admin.layouts.main")
@section("user_active") class="active" @endsection
@section("user_admin_active") class="active" @endsection
@section("title") Administrators @endsection

@section("content")
    <div class="page-title">
        <div class="menu-switch"><i class="fa fa-users"></i></div>
        <i class="fa fa-users"></i>
        <span>Administrators</span>
    </div>

    <div class="margin-container">
        <!-- Example -->
        <div class="dashboard-widget">
            <div class="title">
                <i class="fa fa-users"></i> Administrator
                <button class="toggle" title="Close"><i class="fa fa-chevron-down"></i></button>
                <button class="setting" title="Setting"><i class="fa fa-cog"></i></button>
                <button class="refresh" title="Refresh"><i class="fa fa-refresh"></i></button>
            </div>
            <div class="content">
                <div class="data-table">
                    <div class="left">
                        <button class="btn btn-mini btn-info">New Administrator</button>
                    </div>
                    <table>
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <th class="minor">Email</th>
                            <th>Mobile</th>
                            <th class="minor">Status</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($admins as $admin)
                        <tr>
                            <td>{{$admin->name}}</td>
                            <td class="minor"><a href="mailto:{{$admin->email}}">{{$admin->email}}</a></td>
                            <td><i class="fa fa-mobile"></i> {{$admin->phone_number}}</td>

                            <td></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-group btn-block btn-mini" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-group btn-error btn-mini" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="divider"></div>
                {{$admins->links()}}
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- End -->
        <div class="clearfix"></div>

    </div>

@endsection