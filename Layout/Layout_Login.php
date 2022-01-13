<form class="form" action="../Libery/Cek_Input_login.php">
	<div class="Form_Element">
		<p id="label_Header"> Silahkan Login </p> 
	</div>
	<div class="Form_Element">
		<table id="Username_Password_Layout">
			<tr>
				<td id="lblUsername_Layout">
					<label class="label"> Username: </label>
				</td>
				<td id="txtUsername_Layout">
					<input type="text" name="username" id="txtUsername">
				</td>
			</tr>
			<tr>
				<td id="lblPassword_Layout">
					<label class="label"> Password: </label>
				</td>
				<td id="txtPassword_Layout">
					<input type="password" name="password" id="txtPassword">
				</td>
			</tr>
		</table>
	</div>
	<table id="Buttons_Layout">
		<tr>
			<td id="btn_Login_Layout">
				<button type="submit" id="btn_Login" name="btn_Login"><p class="btn_Text"> Login </p></button>
			</td>
			<td id="btn_LoginAdmin_Layout">
				<button type="submit" id="btn_LoginAdmin" name="btn_LoginAdmin"><p class="btn_Text"> Login Admin </p></button>
			</td>
		</tr>
	</table>
	<div id="btn_SignUp_Layout">
		<button type="submit" id="btn_SignUp" name="btn_SignUp"><p class="btn_Text"> Sign Up </p></button>
	</div>
</form>	
