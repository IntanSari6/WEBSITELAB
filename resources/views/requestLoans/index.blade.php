@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Riwayat Peminjaman</h3>
    </div>
    <br>
    <div class="col-12 col-md-6 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Riwayat Peminjaman Lab</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Mata Pelajaran</th>
                            <th>Lab</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>0101</td>
                            <td>Inul</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>1</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>0102</td>
                            <td>Daratista</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>2</td>
                            <td>
                                <div class="badge badge-success">Active</div>
                            </td>
                            <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>0103</td>
                            <td>Inul Daratista</td>
                            <td>12 RPL</td>
                            <td>PWPB</td>
                            <td>1</td>
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
    <div class="text-center buttons pt-3 pb-2 mt-9">
        <a href="/request" class="btn btn-icon btn-primary">Next</a>
    </div>
@endsection
