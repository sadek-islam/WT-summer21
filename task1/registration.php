<Html>
<head> 
<h1>Resistration Form</h1>
<br>
<hr size="1" width="100%" color="black">
</head>
<title>
Registration Page
</title>
</head>
<body >


<table>
<tr>
<td><label> Full Name:</label>    </td>   
<td><input type="text" name="Full Name" size="15"/></td> 
</tr>
<tr>
<td><label> E-mail: </label>  </td> 
<td><input type="text" name="email" size="15"/> </td>
</tr>

<tr>
<td><label> Password: </label>  </td>     
<td><input type="text" name="password" size="15"/></td>
</tr>

<tr>
<td><label> Comment: </label> </td>

<td><input type="text" name="comment" size="15"/></td>
</tr>

<tr>
<td>
<label> 
Gender :
</label>
</td>
<td>
<input type="radio" name="male"/> Male 
<input type="radio" name="female"/> Female 
<input type="radio" name="other"/> Other
</td>
<tr/>

<tr>
<td>
<label>
Please chooose a hobby:
</label>
</td>
<td>
<input type="checkbox" name="Singing"/> Singing
<input type="checkbox" name="Dancing"/> Dancing
<input type="checkbox" name="Reading"/> Reading
</td>
</tr>


<tr>
<td>
<label for="avatar">Please choose a file:</label>
</td>
<td>
<input type="file"
       id="file" name="avatar"
       accept="image/png, image/jpeg">
</td>
</tr>
</table>
<br>
<br>
<input type="submit"> <input type="Reset">
