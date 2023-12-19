<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <!-- <div class="sideber"></div>
                    <div class="logo-details">
                        <span class="logo_name">......</span> -->

                    <a class="nav-link" href="{{route('dashboard.name')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>




                    <a class="nav-link" href="{{route('employee.name')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Employee
                    </a>
                    <a class="nav-link" href="{{route('department.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Department
                    </a>

                    <a class="nav-link" href="{{route('des')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Designation
                    </a>

                    <a class="nav-link" href="{{route('payroll.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Payroll
                    </a>

                    <a class="nav-link" href="{{route('salary.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Salary Stracture
                    </a>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Leave Management
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('leave.list')}}"> Leave</a>
                            <a class="dropdown-item" href="{{route('leavetype.list')}}">Leave Type</a>

                        </div>
                    </div>

                    <!-- <a class="nav-link" href="{{route('leave.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Leave
                    </a>

                    <a class="nav-link" href="{{route('leavetype.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Leave Type
                    </a> -->

                    <a class="nav-link" href="{{route('notice.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Notice
                    </a>

                    <a class="nav-link" href="{{route('attendence.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Attendence
                    </a>

                    <!-- <a class="nav-link" href="{{url('/Report')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Report
                    </a> -->

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Report Management
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('user.report')}}">Report for user</a>
                            

                        </div>
                    </div>

                    <a class="nav-link" href="{{route('users.list')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Users
                    </a>







                    <a class="nav-link" href="{{url('/CompanySetup')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Company Setup
                    </a>

                    <a class="nav-link" href="{{url('/HolidayCalander')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Holiday Calander
                    </a>