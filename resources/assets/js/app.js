
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

//require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// app.js

require('./bootstrap');
import React from 'react';
import { render } from 'react-dom';
import { Router, Route, browserHistory } from 'react-router';

import Master from './components/Master';
import CreateItem from './components/CreateItem';
import DisplayItem from './components/DisplayItem';
import EditItem from './components/EditItem';
import Chat from './components/Chat';


import ReactDOM from "react-dom";
import Messages from "./components/Messages";
import { Provider } from 'react-redux'; 
import configureStore from "./components/configureStore";
import {postMessage, pollMessages, loadMessages} from "./components/MessageActions";


global.jQuery = require('jquery');
require('bootstrap');

const store = configureStore();
const $react = document.getElementById("react");

//store.dispatch(loadMessages());
// var startPoll = function() {
//     setTimeout(() => store.dispatch(pollMessages), 1500);
// }
// startPoll();
var poll = function () {
    store.dispatch(pollMessages());
};
setInterval(poll, 1000);

ReactDOM.render(
        <Router history={browserHistory}>
		  <Route path="/" component={Master} >
			<Route path="/add-item" component={CreateItem} />
			<Route path="/display-item" component={DisplayItem} />
			<Route path="/edit/:id" component={EditItem} />
			<Route path="/home" />
			<Route path="/profile" />
			<Route path="/help" />
			<Route path="/login" />
			<Route path="/chat" component={Chat}/>
			<Route path="/messages" component={Messages}/>
			<Route path="/writemessage"  />
			<Route path="/test" />
			<Route path="/socket" />
			<Route path="/games"  />
		  </Route>
        </Router>
    , $react);
	
 