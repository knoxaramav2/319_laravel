import React from "react";
import {Link} from "react-router";
import {connect} from 'react-redux';
import Messages from "./Messages";
import MessageList from "./MessageList";
import {bindActionCreators} from 'redux';  
import * as messageActions from './MessageActions';  

class Chat extends React.Component{
    constructor(props) {
        super(props);
        this.state = {message: ''};
        this.handleSubmit = this.handleSubmit.bind(this);
        this.handleMessageChange = this.handleMessageChange.bind(this);
    }

    handleSubmit(event) {
        this.props.postMessage(this.state.message);
        this.setState({message: ""});
        event.preventDefault();
    }

    handleMessageChange(event){
        this.setState({message: event.target.value});
    }

    render(){
        return(
            <div className="panel panel-primary">
                <div className="panel-heading">
                        <span className="glyphicon glyphicon-comment"></span> Chat
                        <div className="btn-group pull-right">
                            
                        </div>
                </div>
                <div className="panel-footer">
                        <div className="input-group">
                            <input id="btn-input" type="text" className="form-control input-sm" onChange={this.handleMessageChange} value={this.state.message} placeholder="Type your message here..." />
                            <span className="input-group-btn">
                                <button onClick={this.handleSubmit} className="btn btn-warning btn-sm" id="btn-chat">
                                    Send</button>
                            </span>
                        </div>
                </div>
            </div>
        )
    }
}

Chat.propTypes = {
    messages: React.PropTypes.array
}

function mapStateToProps(state, ownProps){
    return {
        messages: state.messages
    };
}


function mapDispatchToProps(dispatch) {  
  return ({
      postMessage: (message)=> dispatch(MessageActions.postMessage(message))
  });
}
export default (Chat); 