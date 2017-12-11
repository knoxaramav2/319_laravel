function logout(){
        $.ajax({
            url: '/logout',
            type: 'GET',
            success: function(){
                document.location.href = '/';
            }
        });
    }