
<div name="loginForm">
		<h2>Login</h2>
		<form method='POST' name='Login'>
			<input type='email' name='loginEmail' placeholder='Enter your email'><br>
			<input type='password' name='loginPassword' placeholder='Enter your password'><br>
			<input type='submit' name='loginButton' value='LOGIN'><br>
		</form>
		<br>
</div>

<h2>Register</h2>
<div name='registerForm'>
		<form method='POST' name='Register'>
			<input type = 'email' name = 'regEmail' placeholder = 'Enter your email'><br>
			<input type = 'password' name = 'regPassword' placeholder = 'Enter your password'><br>
			<input type = 'text' name = 'userName' pattern = '^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$' placeholder = 'Enter your name'><br>
			<input type = 'text' name = 'userSurname' placeholder = 'Enter your surname'><br>
			<select name= 'userCity' size=1>
				<option selected value='Kiev'>Kiev</option>
				<option value='Odessa'>Odessa</option>
				<option value='Lviv'>Lviv</option>
				<option value='Donetsk'>Donetsk</option>
				<option value='Luhansk'>Luhansk</option>
				<option value='Ivano-frankovsk'>Ivano-frankovsk</option>
				<option value='Dnepropetrovsk'>Dnepropetrovsk</option>
			</select><br>
			<input type='text' name='userAge' pattern='[0-9]{0,2}' placeholder='Age'><br>
			<input type='text' name='userInfo' placeholder='Some info about you'><br>
			<input type='submit' name='registerUser' value='MOVE'><br>
		</form>
	</div>
