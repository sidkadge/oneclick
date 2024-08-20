<footer class="main-footer">
    <div class="footer-left">
        <a href="templateshub.net">Templateshub</a></a>
    </div>
    <div class="footer-right">
    </div>
</footer>
</div>
</div>
<!-- General JS Scripts -->
<script src="public/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="public/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="public/assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
    $('#add_menu_form').validate({
        rules: {
            menu_name: {
                required: true,
            },
            // url_location: {
            //     required: true,
            // }
        },
        messages: {
            menu_name: {
                required: 'Please enter the menu name.',
            },
            // url_location: {
            //     required: 'Please enter the URL location.',
            // }
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "url_location") {
                error.appendTo("#menu_nameError");
            } else {
                error.insertAfter(element);
            }
        }
    });
    $('#sub_set_menu').validate({
        rules: {
          sub_menu_name: {
                required: true,
            },
            menu_id: {
                required: true,
            },
         
        },
        messages: {
          sub_menu_name: {
                required: 'Please enter the sub menu name.',
            },
            menu_id: {
                required: 'Please select menu name.',
            },

        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "url_location") {
                error.appendTo("#menu_nameError");
            } else {
                error.insertAfter(element);
            }
        }
    });
});
</script>

</body>
</html>