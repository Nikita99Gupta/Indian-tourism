document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);

// sign up form
const name = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form2')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }

  if (email.value === '' || email.value == null) {
    messages.push('Email is required')
  }

  else if (!email.value.includes("@")) {
    messages.push('Invalid email')
  }

  if (password.value.length <= 6) {
    messages.push('Password must be longer than 6 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
  // else{
  //   location.href = 'index.php';
  //   // $('#name_user').html($('#name_user').html().replace('text','Hi'));
  // }
})

// sign in form
const email1 = document.getElementById('email1')
const password1 = document.getElementById('password1')
const form1 = document.getElementById('form1')
const error1Element = document.getElementById('error1')

form1.addEventListener('submit', (e) => {
  let messages = []

  if (email.value === '' || email.value == null) {
    messages.push('Email is required')
  }

  else if (!email.value.includes("@")) {
    messages.push('Invalid email')
  }

  if (password.value === '' || password.value == null) {
    messages.push('Password is required')
  }

  if (messages.length > 0) {
    e.preventDefault()
    error1Element.innerText = messages.join(', ')
  }
})
