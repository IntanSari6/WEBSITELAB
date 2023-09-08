@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>LAB 2</h3>
    </div>
    <br>

    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Inventaris Lab 2</h4>
                <div class="card-body">
                    <div class="dropdown d-inline mr-2">
                      <button class="btn btn-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/lab_1">Lab 1</a>
                        <a class="dropdown-item" href="/lab_2">Lab 2</a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>#</th>
                            <th>Nama Barang</th>
                            <th>Kode Barang</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Komputer</td>
                            <td>001</td>
                            <td>
                                <div class="badge badge-success">Sedang Diperbaiki</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hasan Basri</td>
                            <td>2017-01-09</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kusnadi</td>
                            <td>2017-01-11</td>
                            <td>
                                <div class="badge badge-danger">Not Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Rizal Fakhri</td>
                            <td>2017-01-11</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Isnap Kiswandi</td>
                            <td>2017-01-17</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                    class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
