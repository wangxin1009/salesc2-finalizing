@extends('layouts.adminLayout')

@section('content')

      
    <div class="container-fluid">
        <div class="card uper">
            <div class="card-header">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                     @endif
              <form method="post" action="{{route('tasks.update', $task->id)}}">
                    <div class="form-group d-flex">
                        @method('PATCH')
                        @csrf
                        <div class="col-md-6 col-sm-3">
                            <label for="name">Customer</label>
                                <select class="form-control" id="admin_task_customer" name="customer" required> 
                                <option value="" disabled selected>Select Customer</option>         
                                    @foreach($customer as $cus)
                                        <option {{$task->customer == $cus ? 'selected' :'' }}>{{$cus}}</option>
                                    @endforeach              
                                </select>
                        </div>
                        <div class="col-md-6 col-sm-3">
                        <label for="quantity">Department</label>
                            <select class="form-control" id="admin_task_division" name="department" value={{$task->department}} required>
                            <option  disabled selected>Select Department</option>                
                                @foreach($department as $dep)
                                    <option {{$task->department == $dep ? 'selected' :'' }}>{{$dep}}</option>
                                @endforeach              
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-md-6 col-sm-3">
                        <label for="quantity">Service</label>
                            <select class="form-control" id="admin_task_service" name="service" required> 
                            <option disabled selected>Select Service</option>              
                                @foreach($service as $ser)
                                    <option {{$task->service == $ser ? 'selected' :'' }}>{{$ser}}</option>
                                @endforeach              
                            </select>
                        </div>
                         <div class="col-md-6 col-sm-3">
                        <label for="quantity">Task</label>
                            <select class="form-control" id="admin_task_task" name="task" required>
                            <option  disabled selected>Select Task</option>                
                                @foreach($tasks as $tas)
                                    <option {{$task->task == $tas ? 'selected' :'' }}>{{$tas}}</option>
                                @endforeach              
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-md-6 col-sm-3">
                        <label for="quantity">Device Type</label>
                        <select class="form-control" id="admin_task_device_type" name="device_type" required>
                        <option  disabled selected>Select Device Type</option>                
                            @foreach($device_type as $dev)
                            <option {{$task->device_type == $dev ? 'selected' :'' }}>{{$dev}}</option>
                            @endforeach              
                        </select>
                        </div>
                        <div class="col-md-6 col-sm-3">
                                <label for="quantity">Assigned Sales Rep</label>
                                <select class="form-control" id="admin_task_assigned_sales_rep" name="assigned_sales_rep" value={{$task->assigned_sales_rep}} required>
                                <option disabled selected>Select Sales Rep</option>
                                    @foreach($assigned_sales_rep as $rep)
                                    <option {{$task->assigned_sales_rep == $rep ? 'selected' :'' }}>{{$rep}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="form-group d-flex">
                    
                        <div class="col-md-6 col-sm-3">
                            <label for="quantity">Start Time</label>
                            <input type="datetime-local" class="form-control" id="admin_task_start_time" name="start_time" value="{{$task->start_time}}"  required/>
                        </div>
                    
                        <div class="col-md-6 col-sm-3">
                            <label for="quantity">End Time</label>
                            <input type="datetime-local" value="" class="form-control" id="admin_task_end_time" name="end_time" value="{{$task->end_time}}" required/>
                        </div>
                        
                    </div>
                    <div class="form-group d-flex">
                        <div class="col-md-6 col-sm-3">
                            <label for="quantity">Status</label>
                            <select name="status" id="admin_task_status" name="status" class="form-control">
                                <option {{$task->status == 'Unassigned' ? 'selected' :'' }} class="text-black">Unassigned</option>
                                <option {{$task->status == 'Inprogress' ? 'selected' :'' }} class="inprogress-blinking">Inprogress</option>
                                <option {{$task->status == 'Complete' ? 'selected' :'' }} class="complete-blinking">Complete</option>
                                <option {{$task->status == 'Canceled' ? 'selected' :'' }} class="canceled-blinking">Canceled</option>
                                <option {{$task->status == 'Incomplete' ? 'selected' :'' }} class="incomplete-blinking">Incomplete</option>
                            </select>
                        </div>
                        
                        <div class="col-md-6 col-sm-3">
                            <label for="quantity">Notes</label>
                            <input type="text" class="form-control" name="notes"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>      
                    </div>
                </form>
        </div>
    </div>
@endsection