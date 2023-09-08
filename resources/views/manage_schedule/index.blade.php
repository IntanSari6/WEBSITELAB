@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Kelola Jadwal Lab</h3>
    </div><br>
    <div class="row">
        <div class="col-md-9">
            <div id="app">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Calendar</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="fc-overflow">
                                            <div id="myEvent"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div class="col-md-3">
            <div class="cardt rounded-0 shadow">
                <div class="card-header bg-gradient bg-primary text-light">
                    <h5 class="card-title text-center">Input Data</h5>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="save_schedule.php" method="post" id="schedule-form">
                            <input type="hidden" name="id" value="">
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">NIP</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                    id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Nama</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                    id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Kelas</label>
                                <select class="form-control selectric">
                                    <option>X PPLG</option>
                                    <option>X DKV 1</option>
                                    <option>X DKV 2</option>
                                    <option>XI PPLG 1</option>
                                    <option>XI PPLG 2</option>
                                    <option>XI DKV 1</option>
                                    <option>XI DKV 2</option>
                                    <option>XII RPL</option>
                                    <option>XII MM 1</option>
                                    <option>XII MM 2</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Mata Pelajaran</label>
                                <input type="text" class="form-control form-control-sm rounded-0" name="title"
                                    id="title" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="title" class="control-label">Lab</label>
                                <select class="form-control selectric">
                                    <option>Lab 1</option>
                                    <option>Lab 2</option>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">Mulai</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                    name="end_datetime" id="end_datetime" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="end_datetime" class="control-label">Selesai</label>
                                <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                    name="end_datetime" id="end_datetime" required>
                            </div>
                        </form>

                    </div>

                </div>

                <div class="card-footer">
                    <div class="text-center">
                        <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i
                                class="fa fa-save"></i> Save</button>
                        <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i
                                class="fa fa-reset"></i> Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- </div> --}}
@endsection
