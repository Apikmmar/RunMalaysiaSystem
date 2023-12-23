<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
    console.log('jquery is attack');

    setTimeout(function(){
        $('#success-message').fadeOut('slow');
    }, 3000);
});
</script>