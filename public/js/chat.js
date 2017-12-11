
var socket = io('http://192.168.10.10:3000');
            new Vue({
                el: 'body',
                data: {
                    messages: [],
					message: ''
                },
				
				ready: function() {
					socket.on('game-channel', function(message) {
						this.messages.push(message);
					}.bind(this));
				},
                ready: function() {
                    socket.on('game-channel:UserSignedUp', function(data) {
                        this.users.push(data.username);
                    }.bind(this));
                },
				
				methods: {
					send: function(e) {
						socket.emit('game-channel', this.message);
						this.message = '';
						e.preventDefault();
					}
				}
            });