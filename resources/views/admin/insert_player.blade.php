@extends('admin.dashboard')
@section('player_page') 
	<form action = "{{ url('/save-player') }}" method = "post">
		{{ csrf_field() }}
		<div class="shade">
			<div class="blackboard">
				<div class="form">
					<h1>Insert New Player</h1>
            		<p>
    	    		    <label>Name</label>
    	    		    <input type="text" name='name'/>
    	    		</p>
    	    		<p>
    	    		    <label>Squad number</label>
    	    		    <input type="text" name='squad_number'/>
    	    		</p>
            		<p>
    	    		    <label>Height</label>
    	    		    <input type="text" name='height'/>
    	    		</p>
            		<p>
    	    		    <label>Date of birth</label>
    	    		    <input type="text" name='birth' id="birth"/>
    	    		</p>
            		<p>
    	    		    <label>Nationality</label>
    	    		    <input type="text" name='nation'/>
    	    		</p>     
            		<p>
    	    		    <label>Position</label>
    	    		    <input type="text" name='position'/>
    	    		</p>
            		<p>
    	    		    <label>Salary</label>
    	    		    <input type="text" name='salary'/>
    	    		</p>
            		<p>
    	    		    <label>Signed</label>
    	    		    <input type="text" name='signed' id="sign"/>
					</p>
					<p>
    	    		    <label>Image</label>
    	    		    <input type="text" name='image' value="public/images/" id="image"/>
    	    		</p>
    	    		<p class="wipeout">
    	    		    <input type = 'submit' name="insert-player" value = "Add player"/>
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
@endsection