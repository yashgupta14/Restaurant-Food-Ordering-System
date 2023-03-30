function validateForm() {
        let x = document.forms["myForm"]["name"].value;
        let y = document.forms["myForm"]["email"].value;
        let z = document.forms["myForm"]["age"].value;
        if (x == "") {
            alert("Name Not Filled !");
            return false;
        }
        if (y == "") {
            alert("Email Not Filled !");
            return false
        }
        if (z == "") {
            alert("Age Not Filled !");
            return false;
          }
      }