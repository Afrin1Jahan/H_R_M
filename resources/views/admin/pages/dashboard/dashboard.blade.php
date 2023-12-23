@extends('admin.master')
@section('content')


<h1>Dashboard</h1>


<div class="row">
<div class="card text-dark bg-warning mb-3" style="max-width: 19rem;">
  <div class="card-header">Total Employee</div>
  
  <div class="card-body">
  <h3 class="mb-2">{{ $employees}}</h3>
    <h5 class="card-title"></h5>
    <p class="card-text"></p>
  </div>
</div>



<div class="card text-dark bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Department</div>
  <div class="card-body">
    <h5 class="card-title">{{$departments}}</h5>
    <p class="card-text"></p>
  </div>
</div>


<div class="card text-dark bg-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">Total User</div>
  <div class="card-body">
    <h5 class="card-title">{{ $users}}</h5>
    <p class="card-text"></p>
  </div>
</div>
<!-- <div class="row">
  <div class="col-md-4 d-flex">
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
      <div class="card-body py-4">
        <div class="d-flex align-items-start">
          <div class="flex-grow-1">
            <h3 class="mb-2">{{ $employees}}</h3>
            <p class="mb-2">Total Employee</p>
            <div class="mb-0">
              <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <span class="text-muted">Since last week</span> -->
            <!-- </div>
          </div>
          
          <div class="d-inline-block ms-3 ">
            <div class="stat">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
              </svg>

              <line x1="12" y1="1" x2="12" y2="23"></line>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="card flex-fill">
      <div class="card-body py-4">
        <div class="d-flex align-items-start">
          <div class="flex-grow-1">
            <h3 class="mb-2">{{ $users}}</h3>
            <p class="mb-2">Total User</p>
            <div class="mb-0">
              <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <span class="text-muted">Since last week</span> -->
            <!-- </div>
          </div>
          <div class="d-inline-block ms-3">
            <div class="stat">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>

                <line x1="12" y1="1" x2="12" y2="23"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="card flex-fill">
      <div class="card-body py-4">
        <div class="d-flex align-items-start">
          <div class="flex-grow-1">
            <h1 class="mb-2">{{$departments}}</h1>
            <p class="mb-2">Department</p>
            <div class="mb-0">
              <!-- <span class="badge badge-soft-success me-2"> +5.35% </span>
                            <!-- <span class="text-muted">Since last week</span> -->
            <!-- </div> -->
          <!-- </div>
          <div class="d-inline-block ms-3">
            <div class="stat">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
</svg>

                <line x1="12" y1="1" x2="12" y2="23"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>   -->




@endsection