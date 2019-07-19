@extends('layouts.admin')
@section('title','Dashbord')
@push('css')
<style type="text/css">
	.h1{
		background:#3c8dbc;
		height: 75px;
		color: white;
		padding: 15px;
		border-radius: 5px
	}

</style>
@endpush
@section('content')
<h2 class="text-center h1">
 Thank
</h2>
  @if(Auth::user()->category==1 && Auth::user()->st_type==0)
      <a href="{{route('admin.student1')}}" class="btn btn-info"> day</a>
      <a href="{{route('admin.student2')}}" class="btn btn-info"> evening</a>
  @elseif(Auth::user()->category==2 && Auth::user()->st_type==0)
      <a href="{{route('admin.student1')}}" class="btn btn-info"> day</a>
      <a href="{{route('admin.student2')}}" class="btn btn-info"> evening</a>
  @elseif (Auth::user()->st_type==1 && Auth::user()->category==3)
 <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">1st Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject/1')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
             <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">2nd Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject/2')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
           <h3> 20</h3>

              <p style="font-size: 28px">3rd Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/3')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">4th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject/4')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">5th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/5')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3> 20</h3>

              <p style="font-size: 28px">6th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/6')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">7th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/7')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">8th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/8')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3> 20</h3>

              <p style="font-size: 28px">9th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/9')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">10th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/10')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">11th Semester</p>
            </div>
            <div class="icon">
               <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject/11')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">12th Semester</p>
            </div>
            <div class="icon">
               <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject/12')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
  @elseif (Auth::user()->st_type==2 && Auth::user()->category==3)
<h2 class="text-center h1"> All Semister content</h2>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">1st Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject2/1')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
             <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">2nd Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject2/2')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
           <h3> 20</h3>

              <p style="font-size: 28px">3rd Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/3')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">4th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
            <a href="{{url('dashbord/subject2/4')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">5th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/5')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <h3> 20</h3>

              <p style="font-size: 28px">6th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/6')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
             <h3> 20</h3>

              <p style="font-size: 28px">7th Semester</p>
            </div>
            <div class="icon">
             <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/7')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">8th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/8')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
               <h3> 20</h3>

              <p style="font-size: 28px">9th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/9')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3> 20</h3>

              <p style="font-size: 28px">10th Semester</p>
            </div>
            <div class="icon">
              <i class="ion-ios-book"></i>
            </div>
             <a href="{{url('dashbord/subject2/10')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>


  @else
  <p>Who are you STudent or Teacher</p>
  @endif

@endsection