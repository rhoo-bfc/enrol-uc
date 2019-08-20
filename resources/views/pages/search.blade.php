@extends('layouts.page')
@section('content')

@if (count($errors) > 0)
  <div class="row">
  	 <div class="small-12 large-6 small-centered columns callout alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
  </div>
@endif

<div class="row">
  <div class="small-12 large-6 small-centered columns"> 
      
    <div class="row">
        <div class="columns small-12">
            <h1>Enrollee Search</h1>
        </div>
    </div>
   
   <div class="row">
       
       <div class="columns small-12">
           <label><strong>Name</strong></label>
       </div>
       
       <div class="columns small-12 large-6">
            <label>
             <?php echo Form::text('reg_first_name' ,null,['placeholder'=>'First name'] ); ?>
            </label>    
       </div>
       
       <div class="columns small-12 large-6">
            <label>
             <?php echo Form::text('reg_last_name' ,null,['placeholder'=>'Second name']); ?>
            </label>    
       </div>
       
   </div>
   
   <!--
   <div class="row">
       
       <div class="columns small-12">
           <label><strong>Date of Birth</strong></label>
       </div>
       
       <div class="columns small-12 large-4">
        <label>
             <?php echo Form::number('reg_birth_day',null,[ 'maxlength' => 2, 'min' => 1, 'max' => 31, 'placeholder'=>'Day' ] ); ?>
        </label>
       </div>
       
       <div class="columns small-12 large-4">
        <label>
             <?php 
             
             $months = [null => 'Month',
                        '1'  => 'January',
                        '2'  =>'February',
                        '3'  =>'March',
                        '4'  =>'April',
                        '5'  =>'May',
                        '6'  =>'June',
                        '7'  =>'July',
                        '8'  =>'August',
                        '9'  =>'September',
                        '10' =>'October',
                        '11' =>'November',
                        '12' =>'December'];
             
             echo Form::select('reg_birth_month',$months); ?>
        </label>
       </div>
       
       <div class="columns small-12 large-4">
        <label>
             <?php echo Form::number('reg_birth_year',null,[ 'maxlength' => 4, 'min' => date("Y") - 100, 'max' => date("Y") - 16 , 'placeholder'=>'Year'] ); ?>
        </label>
       </div>
       
   </div>
   -->

   <input type="submit" class="expanded button" value="Search">
  
  </div>
</div>



@stop