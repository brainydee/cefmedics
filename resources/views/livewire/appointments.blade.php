<div>
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Appointments</h2>
            </div>
        </div>
        <div class="card-body bg-white">
            <div class="table-responsive">
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle" scope="col">S/N</th>
                                <th class="align-middle" scope="col">Type</th>
                                <th class="align-middle" scope="col">Date</th>
                                <th class="align-middle" scope="col">Time</th>
                                <th class="align-middle" scope="col">Action</th>
                                <th class="align-middle" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $n=0;
                            @endphp
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{++$n}}</td>
                                    <td>{{$appointment->appointment_type}}</td>
                                    <td>{{$appointment->appointment_date}}</td>
                                    <td>{{$appointment->appointment_time}}</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary"><i class = "fa fa-upload"></i>&nbsp;upload test</button>
                                    </td>
                                    @if($appointment->active == 1)
                                      <td><span class="badge bg-primary">successful</span</td>
                                    @else
                                      <td><span class="badge bg-danger">failed</span</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- table-responsive end// -->
            {{ $appointments->links() }}
        </div>
    </section>
   
</div>
