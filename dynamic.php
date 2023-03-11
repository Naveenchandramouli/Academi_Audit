<html>
<div class="card card-outline rounded-0 card-primary">
    <div class="card-header">
        <h3 class="card-title">List of Courses</h3>
        <div class="card-tools">
            <a href="javascript:void(0)" id="create_new" class="btn btn-flat btn-sm btn-primary"><span
                    class="fas fa-plus"></span> Create New</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <table class="table table-hover table-striped table-bordered" id="list">
                <colgroup>
                    <col width="5%">
                    <col width="15%">
                    <col width="20%">
                    <col width="35%">
                    <col width="10%">
                    <col width="15%">
                </colgroup>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date Created</th>
                        <th>Course</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td></td>
                        <td></td>
                        <td>
                            <p class="m-0 truncate-1"></p>
                        </td>
                        <td class="text-center">

                        </td>
                        <td align="center">
                            <button type="button"
                                class="btn btn-flat p-1 btn-default btn-sm dropdown-toggle dropdown-icon"
                                data-toggle="dropdown">
                                Action
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item view_data" href="javascript:void(0)" data-id=""><span
                                        class="fa fa-eye text-dark"></span> View</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item edit_data" href="javascript:void(0)" data-id=""><span
                                        class="fa fa-edit text-primary"></span> Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item delete_data" href="javascript:void(0)" data-id=""><span
                                        class="fa fa-trash text-danger"></span> Delete</a>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

</html>