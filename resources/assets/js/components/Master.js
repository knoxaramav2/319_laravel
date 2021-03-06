// Master.js

import React, {Component} from 'react';
import { Router, Route, Link } from 'react-router';

class Master extends Component {
  render(){
    return (
	
    <div className="container">
	  
	
		<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"></link>
		<link href="{{ URL::asset('css/site.css') }}" rel="stylesheet"></link>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	  
	<div id='nav-bar' className='nav-bar'>
	  <div className='nav-item'>
	    <a href="/">Home</a>
	  </div>
	  <div className='nav-item'>
        <a href='/login'>Login/Signup</a>
	  </div>
	
	  <div className='nav-item'>
		<a href='/help'>Help</a>
	  </div>
	  <div className='nav-item'>
		<a href="/add-item">Create Item</a>
	  </div>
	  <div className='nav-item'>
		<a href="/display-item">Display Item</a>
	  </div>
	  <div className='nav-item'>
		<a href="/chat">Chat 1</a>
	  </div>
	  <div className='nav-item'>
		<a href="/writemessage">Chat 2</a>
	  </div>
	  <div className='nav-item'>
		<a href="/test">Chat 3</a>
	  </div>
	</div>
	  
      <div>
        {this.props.children}
      </div>
    
	
	
	  <script type="text/javascript" src="{{ asset('js/logout.js') }}"></script>
	
</div>


	
	
	
    )
  }
}
export default Master;