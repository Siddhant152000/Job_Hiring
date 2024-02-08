function validateForm() {
    let Name = document.getElementById('Name').value;
    let Email = document.getElementById('Email').value;
    // let position = document.getElementById('position').value;
    let Resume = document.getElementById('Resume').value
    let Gender = document.getElementById('Gender').value
    let Mobile = document.getElementById('Mobile').value


    if(Mobile.length == 10){
      return true;
    }
    else{
      alert(" Enter Valid Number")
      return false;
    }

    // if (!Name || !Email ||!Resume ||!Gender||!Mobile) {
    //   console.log('Please fill out all fields.');
    //   return false;
    // }
    // console.log('Application submitted successfully!');
    // return true;
  }



