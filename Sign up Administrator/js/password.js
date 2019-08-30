<script type="text/javascript">
        $(function () {
            $("#btnSubmit").click(function () {
                var password = $("txtPassword").val();
                var confirmPassword = $("conpassword").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script>