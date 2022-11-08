<html>
  <head>
    <style>
      span+a {
        display: inline-block;
        margin-left: 1em;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <form>
      <label for='username'>Username:</label>
      <input type='text' id='username' name='username'>
      <label for='email'>Email:</label>
      <input type='text' id='email' name='email'>
      <label for='age'>Age:</label>
      <input type='number' id='age'  name='age'>
      <label for='designation'>Position:</label>
      <input type='text' id='designation' name='designation'>
      <input type="submit" value="Update User" />
    </form>
   
    <script type="text/javascript">
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id')
   
        var apiUrl = 'http://cc.local/'
        var form = document.querySelector('form')

        var username = document.getElementById('username')
        var email = document.getElementById('email')
        var age = document.getElementById('age')
        var designation = document.getElementById('designation')

      
        form.addEventListener("submit", update)
        
        
        // function update(event) {
        //     var id = event.target.getAttribute("data-id")
        //     fetch(apiUrl + "/" + id + ".json", {
        //     method: 'PATCH',
        //     body: JSON.stringify({
        //         text: event.target.innerText
        //     })
        //     }).then(function(response) {
        //         response.json().then(function(user) {
        //             console.log(user)
        //         })
        //     })
        // }

        function update(event) {
            event.preventDefault()
            fetch(apiUrl+"api/update.php", {
            method: 'PATCH',
            body: JSON.stringify({
                id: id,
                name: username.value, 
                email:  email.value,
                age:  age.value,
                designation:  designation.value
            })
            }).then(function(response) {
                alert("user updated.");
            })
        }

        fetch(apiUrl+'api/single_read.php/?id='+id).then(function(response) {
        response.json().then(function(user) {
            document.getElementById('username').value = user.name
            document.getElementById('email').value = user.email
            document.getElementById('age').value = user.age
            document.getElementById('designation').value = user.designation
        })
      })
       
      
    </script>
  </body>
</html>