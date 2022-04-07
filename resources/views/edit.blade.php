<h1> Update Member</h1>

{{-- this is the form responsible for editing data on a database  --}}
<form action="/edit" method="POST">
    @csrf

    {{-- defining  hidden field so as to pass the primary key of the data--}}
    <input type="hidden" name="DEPTNUM" value="{{ $data['DEPTNUM'] }}">

    {{-- so on every entry i have passed what should comeback to be edited --}}
    <input type="text" name="DESCRIP" value="{{ $data['DESCRIP'] }}"><br><br>
    <input type="text" name="INSTNAME" value="{{ $data['INSTNAME'] }}"><br><br>
    <input type="text" name="DEPTNAME" value="{{ $data['DEPTNAME'] }}"><br><br>
    <input type="text" name="STATE" value="{{ $data['STATE'] }}"><br><br>
    <input type="text" name="POSTCODE" value="{{ $data['POSTCODE'] }}"><br><br>
   <button type="submit">update</button>
</form>
</form>