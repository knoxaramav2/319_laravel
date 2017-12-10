// Master.js

import React, {Component} from 'react';
import { Router, Route, Link } from 'react-router';

class Master extends Component {
  render(){
    return (
	
    <div className="container">
	  
	<div id='nav-bar' className='nav-bar'>
	  <div className='nav-item'>
	    <a href="/">Home</a>
	  </div>
	  <div className='nav-item'>
		<a href='/login'>Login/Signup</a>
	  </div>
	  <div className='nav-item'>
		  <a href='/profile'>Profile</a>
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
	</div>
	  
      <div>
        {this.props.children}
      </div>
    </div>
    )
  }
}
export default Master;