var app = new Vue({
  el: '#container',
  data: {
    state: '__signingin'
  },
  methods: {
    goToRegistration () {
      this.state = '__registration'
    },
    goToLogin () {
      this.state = '__signingin'
    }
  }

});

function goBack() {
    window.history.back();
};

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

