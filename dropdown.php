<script>
    $(document).ready(function() {
        $('#homeNavItem').on('click', function(event) {
            event.preventDefault();
            $('#carouselArea').show();  
            $('#bookArea').hide();      
            $('#userArea').hide();      
            $('.dropdown-menu').hide(); 
        });

        $('#userNavItem').on('click', function(event) {
            event.preventDefault();
            $('#carouselArea').hide();  
            $('#bookArea').hide();      
            $('#userArea').html(
                '<h3 class="add-user-heading" onclick="location.href=\'adduser.php\';">ADD USER</h3><div id="userList"></div>'
            );
            $('#userList').load('listuser.php');  
            $('#userArea').show();  
            $('.dropdown-menu').hide(); 
        });

        $('#bookNavItem').on('click', function(event) {
            event.preventDefault();
            $('#carouselArea').hide();  
            $('#userArea').hide();      
            $('#bookArea').html(
                '<h3 class="add-user-heading" onclick="location.href=\'addbook.php\';">ADD BOOK</h3><div id="bookList"></div>'
            );
            $('#bookList').load('listbook.php');  
            $('#bookArea').show();  
            $('.dropdown-menu').hide(); 
        });

        $('#navbarDropdown').on('click', function(event) {
            event.preventDefault(); 
            $(this).next('.dropdown-menu').toggle(); 
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('.dropdown').length) {
                $('.dropdown-menu').hide(); 
            }
        });

        $('#homeNavItem').trigger('click');
    });
</script>