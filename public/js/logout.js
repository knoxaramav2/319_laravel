function logout(){
        $.ajax({
            url: '/api/logout',
            type: 'GET',
            success: function(){
                document.location.href = '/';
            }
        });
    }