@extends('admin.dashboard')
@section('player_page') 
@foreach ($players as $item => $edit_value) 
    <form action = "{{ url('/update-player/'. $edit_value->id) }}" method = "post">
    	{{ csrf_field() }}
		<div class="shade">
			<div class="blackboard">
				<div class="form">
					<h1>Upadte New Player</h1>
            		<p>
    	    		    <label>Name</label>
            		    <input type="text" name='name' value="{{$edit_value->name}}"/>
    	    		</p>
    	    		<p>
    	    		    <label>Squad number</label>
    	    		    <input type="text" name='squad_number' value="{{$edit_value->squad_number}}"/>
    	    		</p>
            		<p>
    	    		    <label>Height</label>
    	    		    <input type="text" name='height' value="{{$edit_value->height}}"/>
    	    		</p>
            		<p>
    	    		    <label>Date of birth</label>
    	    		    <input type="text" name='birth' value="{{$edit_value->birth}}" id="birth"/>
    	    		</p>
            		<p>
    	    		    <label>Nationality</label>
    	    		    <input type="text" name='nation' value="{{$edit_value->nation}}"/>
    	    		</p>     
            		<p>
    	    		    <label>Position</label>
    	    		    <input type="text" name='position' value="{{$edit_value->position}}"/>
    	    		</p>
            		<p>
    	    		    <label>Salary</label>
    	    		    <input type="text" name='salary' value="{{$edit_value->salary}}"/>
    	    		</p>
            		<p>
    	    		    <label>Signed</label>
    	    		    <input type="text" name='signed' value="{{$edit_value->signed}}" id="sign"/>
					</p>
					<p>
    	    		    <label>Image</label>
    	    		    <input type="text" name='image' value="{{$edit_value->image}}" id="image"/>
    	    		</p>
    	    		<p class="wipeout">
    	    		    <input onclick="return confirm('Are you sure to update this player?')" type = 'submit' name="update-player" value = "Update player"/>
					</p>
					<p>
						<?php
						$message = Session::get('message');
						if($message)
						{
							echo "<span class='text-alert'>". $message. "</span>";
							Session::put('message', null);
						}
						?>
					</p>
				</div>
			</div>
		</div>
    </form>
@endforeach
@endsection