<h1>Add User</h1>
<form action="add" method="POST">
    
     {{-- this token is important in any post form, acts as a security code --}}
    @csrf
    <input type="int" name="DEPTNUM" placeholder="Enter Deptnum"><br><br>
    <input type="text" name="DESCRIP" placeholder="Enter Descrp"><br><br>
    <input type="text" name="INSTNAME" placeholder="Enter instname"><br><br>
    <input type="text" name="DEPTNAME" placeholder="Enter deptname"><br><br>
    <input type="text" name="STATE" placeholder="Enter state"><br><br>
    <input type="text" name="POSTCODE" placeholder="Enter the postcode"><br><br>
   <button type="submit">Add User</button>
</form>