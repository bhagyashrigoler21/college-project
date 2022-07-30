
<html>
<head>
	<title>php employee Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

                        <h2>php employee Form</h2>

                        <form action="inserts.php" method="POST">

                             name:
                            <input type="text" name="name"><br><br>
                            
                            <br> username:
                            <input type="text" name="username"><br>
                            <br>
                            
                            <b> Gender: </b> 
                
        					<input type="radio"  name = "gender"   value  = "yes"> <label for = "gender"> Male  </label> <br> <br>
        					<input type = "radio"  name = "gender"   value = "no"> <label for = "gender">  Female  </label> <br> <br> 
       			 
                <b>  E-mail:</b>   
                <input type = "text" name = "email"> <br><br>
                <b> Phone Number: </b>   
                <input type = "text" name = "text4" > <br> <br>
                   
                <tr>  
               <td> <b> country: </b> </td>  
               <td>  
                  <select name = "country[]">  
                     <option value = "india">india</option>  
                     <option value = "usa"> usa </option>  
                     <option value = "uk"> uk </option>    
                     <option value = "spain">spain </option>  
                     <option value = "turkey">turkey </option>
                     <option value = "austria">austria </option>
                  </select>  
               </td>  
            </tr>  
             <br><br>
                <input type="hidden" name="form_submitted" value="1" />

                <input type="submit" value="SignUp">

                        </form>
                        
	
</body>

</html>

