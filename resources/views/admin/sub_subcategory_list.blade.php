@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Subcategory List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Subcategory List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-success text-white" href="add-new-subcategory">Add new Subategory</a>
                </div>
            </div>
            </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Sub subcategory</th>
                                                <th>Subcategory</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($subcategory as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->undersubcategory }}</td>
                                                <td>{{ $value->subcategory }}</td>
                                                <td>{{ $value->category }}</td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td><a title="Edit Subcategory" href="edit-subsubcategory/{{ $value->id }}"><i class="fa fa-edit"></i></a></td>
                                            </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('admin/footer')   