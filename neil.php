<body>

<div class="container1">

    
    <form id="userinfo" method="POST" action="http://10.10.139.82:8000/api/patrons">
        <h2 class="text-center">Registration Form</h2>
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control"  name="last_name" placeholder="Last Name" required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control"  name="birthday" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control mt-2" name="city" placeholder="City" required>
        </div>
        <div class="mb-3">
            <label for="province" class="form-label">province</label>
            <input type="text" class="form-control mt-2" name="province" placeholder="province" required>
        </div>
        <div class="mb-3">
            <label for="zip" class="form-label">Zip Code</label>
            <input type="number" class="form-control mt-2" name="zip" placeholder="zip" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number: </label>
            <input type="number" class="form-control" placeholder="Main Phone" name="phone_number">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" name="email" placeholder="email">
        </div>
        <div class="mb-3">
            <label for="card_number" class="form-label">Card Number</label>
            <input type="number" class="form-control" name="card_number" required>
        </div>
        <div class="mb-3">
            <label for="college" class="form-label">College</label>
            <select class="form-select" name="college" required>
                <option selected>Select College</option>
                <option>CEIT</option>
                <option>CEIT</option>
                <option>CEIT</option>
                <option>CEIT</option>
                <option>CEIT</option>

            </select>
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <select class="form-select" id="course" name="course"required>
                <option selected>Select Course</option>
                <option>BSIT</option>
                <option>BSIT</option>
                <option>BSIT</option>
                <option>BSIT</option>
                <option>BSIT</option>
                <option>BSIT</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="registration_date" class="form-label">Registration Date</label>
            <input type="date" class="form-control" id="registration_date" name="registration_date" required>
        </div>
        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiration Date</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
        </div>
        <button  type="submit" value="submit" style="border-radius: 10px;">Submit</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    const form = document.querySelector("#userinfo");

async function sendData() {
  // Associate the FormData object with the form element
  const formData = new FormData(form);

  try {
    const response = await fetch("http://10.10.139.82:8000/api/patrons", {
      method: "POST",
      // Set the FormData instance as the request body
      body: formData,
    });
    console.log(await response.json());
  } catch (e) {
    console.error(e);
  }
}

// Take over form submission
form.addEventListener("submit", (event) => {
  event.preventDefault();
  sendData();
});

</script>
</body>
</html>










