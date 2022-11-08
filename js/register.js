function signup() {
  Name = document.getElementById('Name')
  Email = document.getElementById('Email')
  Password = document.getElementById('Password')
  Phone = document.getElementById('Phone')
  Gender = document.getElementById('Gender')
  Language = document.getElementById('Language')
  State = document.getElementById('State')
  City = document.getElementById('City')
  Postal = document.getElementById('Postal')
  About = document.getElementById('About')
  let details = {
      Name: Name,
      Email:Email,
      
      Password: Password,
      Phone: Phone,
      Gender:Gender,
      gender: gender,
      Language:Language,
      State: State,
      City: City,
      Postal:Postal,
      About:About
  }
  let detail = JSON.stringify(details)
  let xhttp = new XMLHttpRequest()
  xhttp.open("POST", "register.php", true)
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
  xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
          console.log(xhttp.response)
      }
  }
  
  xhttp.send("detail=" + detail)

}