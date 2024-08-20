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
    $('#add_company').validate({
        rules: {
            company_name: {
                required: true,
            },
        },
        messages: {
            company_name: {
                required: 'Please enter the company name.',
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>


</body>
</html>