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
                                @if(auth()->user()->user_type == 'admin')
                                <th class="align-middle" scope="col">First Name</th>
                                <th class="align-middle" scope="col">Last Name</th>
                                <th class="align-middle" scope="col">Email</th>
                                @endif
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
                                    @if(auth()->user()->user_type == 'admin')
                                    <td>{{$appointment->user->firstname}}</td>
                                    <td>{{$appointment->user->lastname}}</td>
                                    <td>{{$appointment->user->email}}</td>
                                    @endif
                                    <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d-m-Y') }}</td>
                                    <td>{{$appointment->appointment_time}}</td>
                                    @if(auth()->user()->user_type == 'admin')
                                        @if(!is_null($appointment->file_path))
                                        <td>
                                            <a href="Javascript:void(0)" type="button"  wire:click="downloadFile('{{ $appointment->file_path }}')"  class="btn btn-xs" style="background-color: blue;"><i class="fa fa-plus"></i>&nbsp;Download Test File</a>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge bg-success">No Test uploaded yet</span>
                                        </td>
                                        @endif;
                                    @else
                                        @if(is_null($appointment->file_path))
                                        <td>
                                            <a href="Javascript:void(0)" type="button"  wire:click = "openModal({{$appointment->id}})" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" class="btn btn-xs" style="background-color: blue;"><i class="fa fa-plus"></i>&nbsp;Upload test file</a>
                                        </td>
                                        @else
                                        <td>
                                            <span class="badge bg-success">medical result uploaded</span>
                                        </td>
                                        @endif  
                                    @endif                       
                                    @if($appointment->active)
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
 <!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Upload Test File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">File (max:2MB)</label>
                <input type="file" wire:model = "file" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('file')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div wire:loading wire:target="saveFile">
                <img src="{{asset('assets/img/loader.gif')}}"/>
            </div>
            <div  wire:loading.remove>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
                <button type="button" wire:click = "saveFile" class="btn btn-primary"><i class="fa fa-check"></i>Submit</button>
            </div>
      </div>
    </div>
  </div>
</div>
   
</div>
